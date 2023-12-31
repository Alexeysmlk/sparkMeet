<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Event;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Services\WeatherService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(WeatherService $weatherService)
    {

        $events = Event::with('city')
            ->orderBy('date', 'asc')
            ->orderBy('time', 'asc')
            ->paginate(6);
        $categories = Category::all();
        $profile = Auth::user()->profile;
        $weather = $weatherService->getCurrentWeather($profile->city->name);
        $weatherIcons = [
            1000 => 'fas fa-sun',
            1003 => 'fas fa-cloud-sun',
            1006 => 'fas fa-cloud',
            1009 => 'fas fa-cloud',
            1030 => 'fas fa-smog',
            1063 => 'fas fa-cloud-showers-heavy',
            1066 => 'fas fa-snowflake',
            1069 => 'fas fa-cloud-meatball',
            1072 => 'fas fa-cloud-rain',
            1087 => 'fas fa-bolt',
            1114 => 'fas fa-snowflake',
            1117 => 'fas fa-snowflake',
            1135 => 'fas fa-smog',
            1147 => 'fas fa-smog',
            1150 => 'fas fa-cloud-rain',
            1153 => 'fas fa-cloud-rain',
            1168 => 'fas fa-cloud-rain',
            1171 => 'fas fa-cloud-rain',
            1180 => 'fas fa-cloud-showers-heavy',
            1183 => 'fas fa-cloud-showers-heavy',
            1186 => 'fas fa-cloud-showers-heavy',
            1189 => 'fas fa-cloud-showers-heavy',
            1192 => 'fas fa-cloud-showers-heavy',
            1195 => 'fas fa-cloud-showers-heavy',
            1198 => 'fas fa-cloud-rain',
            1201 => 'fas fa-cloud-rain',
            1204 => 'fas fa-cloud-meatball',
            1207 => 'fas fa-cloud-meatball',
            1210 => 'fas fa-snowflake',
            1213 => 'fas fa-snowflake',
            1216 => 'fas fa-snowflake',
            1219 => 'fas fa-snowflake',
            1222 => 'fas fa-snowflake',
            1225 => 'fas fa-snowflake',
            1237 => 'fas fa-icicles',
            1240 => 'fa-solid fa-cloud-sun-rain',
            1243 =>'fa-solid fa-cloud-showers',
            1246 =>'fa-solid fa-thunderstorm',
            1249 =>'fa-solid fa-cloud-sleet',
            1252 =>'fa-solid fa-cloud-hail-mixed',
            1255 =>'fa-solid fa-cloud-snow',
            1258 =>'fa-solid fa-snow-blowing',
            1261 =>'fa-solid fa-thunderstorm',
            1264 =>'fa-solid fa-thunderstorm',
            1273 =>'fa-solid fa-thunderstorm',
            1276 =>'fa-solid fa-thunderstorm',
            1279 =>'fa-solid fa-thunderstorm-snow',
            1282 =>'fa-solid fa-thunderstorm'
        ];

        return view('client.event.index', compact(['events', 'categories', 'profile', 'weather', 'weatherIcons']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $cities = City::all();
        $tags = Tag::all();
        return view('client.event.create', compact(['categories', 'cities', 'tags']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $pathPhoto = Storage::disk('public')->putFile('images/events', $photo);
        }

        $date = $request->input('date');
        $time = $request->input('time');
        $formattedDate = Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
        $formattedTime = Carbon::createFromFormat('H:i', $time)->format('H:i:s');

        $event = Event::query()->create([
            'title' => $request->input('title'),
            'photo_url' => $pathPhoto ?? null,
            'user_id' => Auth::id(),
            'category_id' => $request->input('category'),
            'description' => $request->input('description'),
            'city_id' => $request->input('city'),
            'date' => $formattedDate,
            'time' => $formattedTime,
        ]);

        $event->tags()->sync($request->tags);

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $user = $event->user;
        $profile = $user->profile;
        $currentUser = Auth::user();
        return view('client.event.show', compact(['event', 'user', 'profile', 'currentUser']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $categories = Category::all();
        $cities = City::all();
        $tags = Tag::all();
        return view('client.event.edit', compact(['event', 'categories', 'cities', 'tags']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $pathPhoto = Storage::disk('public')->putFile('images/events', $photo);
        }

        $date = $request->input('date');
        $time = $request->input('time');
        $formattedDate = Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
        $formattedTime = Carbon::createFromFormat('H:i', $time)->format('H:i:s');

        $event->update([
            'title' => $request->input('title'),
            'photo_url' => $pathPhoto ?? null,
            'category_id' => $request->input('category'),
            'description' => $request->input('description'),
            'city_id' => $request->input('city'),
            'date' => $formattedDate,
            'time' => $formattedTime,
        ]);

        if ($request->has('tags')) {
            $event->tags()->sync($request->tags);
        }

        return redirect()->route('user.profile.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(Event $event)
    {
        //
    }

    public
    function like(Request $request, Event $event)
    {
        $user = Auth::user();

        if ($user->likedEvents->contains($event)) {
            $user->likedEvents()->detach($event);
        } else {
            $user->likedEvents()->attach($event);
        }

        return back();
    }
}
