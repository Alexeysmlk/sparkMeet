<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Goeveni - Event Sharing Social Network Html Template</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">

    <!-- Stylesheets -->
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datepicker.min.css" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/feather-icons/feather.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">
<!-- Header Start -->
<header>
    <nav class="navbar navbar-expand-lg custom-navbar bg-dark1 justify-content-sm-start">
        <div class="container">
            <button class="navbar-toggler align-self-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="custom-toggler-icon">
							<i class="feather-menu"></i>
						</span>
            </button>
            <a class="order-lg-0 ml-lg-0 ml-3 me-auto" href="index.html"><img src="images/logo-2.svg" alt=""></a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <div class="offcanvas-logo" id="offcanvasNavbarLabel">
                        <img src="images/logo.svg" alt="">
                    </div>
                    <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <div class="offcanvas-search navbar-search position-relative d-block d-lg-none d-xl-block">
                        <div class="input-group">
                            <input type="text" class="form-control shadow-none border-0" placeholder="Search events by categories..." aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn" type="button">
                                    <i class="feather-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="add-event-btn btn-hover d-block d-lg-none">Add New Event</a>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">
										<span class="nav-icon d-lg-none me-3">
											<i class="feather-home"></i>
										</span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="explore.html">
										<span class="nav-icon  d-lg-none me-3">
											<i class="feather-target"></i>
										</span>
                                Explore
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="discussions.html">
										<span class="nav-icon d-lg-none me-3">
											<i class="feather-message-circle"></i>
										</span>
                                Discussion
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link custom-d-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<span class="nav-icon d-lg-none me-3">
											<i class="feather-list"></i>
										</span>
                                Pages<i class="fas fa-caret-down ms-2 d-none d-lg-inline-block"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="link-item" href="login.html">Login</a>
                                <a class="link-item" href="register.html">Register</a>
                                <a class="link-item" href="error_404.html">Error 404</a>
                                <a class="link-item" href="categories.html">Categories</a>
                                <a class="link-item" href="event_detail_view.html">Event Detail View</a>
                                <a class="link-item" href="user_profile.html">User Profile</a>
                                <a class="link-item" href="find_friends.html">Find Friends</a>
                                <a class="link-item" href="messages.html">Messages</a>
                                <a class="link-item" href="friend_requests.html">Friend Requests</a>
                                <a class="link-item" href="notifications.html">Notifications</a>
                                <a class="link-item" href="credit.html">Credit</a>
                                <a class="link-item" href="checkout.html">Checkout</a>
                                <a class="link-item" href="confirmed_order.html">Confirmed Order</a>
                                <a class="link-item" href="about.html">About</a>
                                <a class="link-item" href="blog_detail_view.html">Blog Detail View</a>
                                <a class="link-item" href="contact_us.html">Contact</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="our_blog.html">
										<span class="nav-icon d-lg-none me-3">
											<i class="feather-rss"></i>
										</span>
                                Blog
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="add_new_event.html" class="add-event d-none d-lg-block"><i class="feather-plus"></i></a>
            <ul class="group-icons">
                <li class="dropdown d-lg-inline-block d-none d-xl-none nav-icon iq-show">
                    <a href="#" class="icon-set" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="feather-search"></i>
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-end p-2 search-box">
                        <div class="position-relative">
                            <input class="form-control dsearch-box" placeholder="Search events by categories...">
                            <i class="feather-search search-icon"></i>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="feather-user-plus"></i>
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-end p-0">
                        <div class="item-header">
                            <h6>Friend Requests</h6>
                            <div class="heading-btns">
                                <a href="friend_requests.html">Setting</a>
                                <a href="find_friends.html">Find Friends</a>
                            </div>
                        </div>
                        <div class="item-body">
                            <div class="media">
                                <div class="item-img">
                                    <img src="images/find-peoples/user-2.jpg" alt="">
                                    <span class="chat-status offline"></span>
                                </div>
                                <div class="media-body">
                                    <a href="user_profile.html" class="item-title">Lily Zaman</a>
                                    <p>4 in mutual friends</p>
                                </div>
                                <div class="btn-area">
                                    <a href="#" class="item-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept"><i class="feather-user-plus"></i></a>
                                    <a href="#" class="item-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Decline"><i class="feather-user-minus"></i></a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <img src="images/find-peoples/user-3.jpg" alt="">
                                    <span class="chat-status online"></span>
                                </div>
                                <div class="media-body">
                                    <a href="user_profile.html" class="item-title">Johnson Dua</a>
                                    <p>6 in mutual friends</p>
                                </div>
                                <div class="btn-area">
                                    <a href="#" class="item-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept"><i class="feather-user-plus"></i></a>
                                    <a href="#" class="item-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Decline"><i class="feather-user-minus"></i></a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <img src="images/find-peoples/user-4.jpg" alt="">
                                    <span class="chat-status offline"></span>
                                </div>
                                <div class="media-body">
                                    <a href="user_profile.html" class="item-title">Rock William</a>
                                    <p>No mutual friends</p>
                                </div>
                                <div class="btn-area">
                                    <a href="#" class="item-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept"><i class="feather-user-plus"></i></a>
                                    <a href="#" class="item-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Decline"><i class="feather-user-minus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-footer">
                            <a href="friend_requests.html" class="view-all">View All Friend Request</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="feather-message-square"></i>
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-end p-0">
                        <div class="item-header">
                            <h6>Message</h6>
                            <div class="heading-btns">
                                <a href="messages.html">Setting</a>
                            </div>
                        </div>
                        <div class="item-body">
                            <a href="messages.html" class="media">
                                <div class="item-img">
                                    <img src="images/find-peoples/user-2.jpg" alt="">
                                    <span class="chat-status offline"></span>
                                </div>
                                <div class="media-body">
                                    <h6 class="item-title mb-1">Lily Zaman</h6>
                                    <div class="item-time">1 mins ago</div>
                                    <p>Hey How are you Lily Zaman</p>
                                </div>
                            </a>
                            <a href="messages.html" class="media">
                                <div class="item-img">
                                    <img src="images/find-peoples/user-3.jpg" alt="">
                                    <span class="chat-status online"></span>
                                </div>
                                <div class="media-body">
                                    <h6 class="item-title mb-1">Johnson Dua</h6>
                                    <div class="item-time">6 mins ago</div>
                                    <p>Interesting Event! I will join this</p>
                                </div>
                            </a>
                            <a href="messages.html" class="media">
                                <div class="item-img">
                                    <img src="images/find-peoples/user-4.jpg" alt="">
                                    <span class="chat-status offline"></span>
                                </div>
                                <div class="media-body">
                                    <h6 class="item-title mb-1">Rock William</h6>
                                    <div class="item-time">11 mins ago</div>
                                    <p>Hey Sir! What about you and where are you now</p>
                                </div>
                            </a>
                        </div>
                        <div class="item-footer">
                            <a href="messages.html" class="view-all">View All Messages</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-bs-toggle="dropdown">
                        <i class="feather-bell"></i>
                        <span class="notify-count">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-end p-0">
                        <div class="item-header">
                            <h6>Notifications</h6>
                            <div class="heading-btns">
                                <a href="#">Setting</a>
                            </div>
                        </div>
                        <div class="item-body">
                            <a href="#" class="media">
                                <div class="item-img">
                                    <img src="images/find-peoples/user-2.jpg" alt="">
                                    <span class="chat-status offline"></span>
                                </div>
                                <div class="media-body">
                                    <h6 class="item-title mb-1">Lily Zaman</h6>
                                    <div class="item-time">2 mins ago</div>
                                    <p>Following you.</p>
                                </div>
                            </a>
                            <a href="#" class="media">
                                <div class="item-img">
                                    <img src="images/find-peoples/user-3.jpg" alt="">
                                    <span class="chat-status online"></span>
                                </div>
                                <div class="media-body">
                                    <h6 class="item-title mb-1">Johnson Dua</h6>
                                    <div class="item-time">5 mins ago</div>
                                    <p>your order is accepted.</p>
                                </div>
                            </a>
                            <a href="#" class="media">
                                <div class="item-img">
                                    <img src="images/find-peoples/user-4.jpg" alt="">
                                    <span class="chat-status offline"></span>
                                </div>
                                <div class="media-body">
                                    <h6 class="item-title mb-1">Rock William</h6>
                                    <div class="item-time">10 mins ago</div>
                                    <p>your bill slip sent on your email.</p>
                                </div>
                            </a>
                        </div>
                        <div class="item-footer">
                            <a href="notifications.html" class="view-all">View All Notifications</a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="account dropdown">
                <a href="#" class="account-link dropdown-toggle-no-caret" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="user-dp"><img src="images/dp.jpg" alt=""></div>
                    <i class="feather-chevron-down ms-2"></i>
                </a>
                <div class="dropdown-menu dropdown-account dropdown-menu-end" aria-labelledby="dropdownMenuClickableInside">
                    <a class="link-item" href="my_profile.html"><i class="feather-user me-3"></i>Profile</a>
                    <a class="link-item" href="saved.html"><i class="feather-heart me-3"></i>Save items</a>
                    <a class="link-item" href="messages.html"><i class="feather-message-square me-3"></i>Messages</a>
                    <a class="link-item" href="credit.html"><i class="feather-credit-card me-3"></i>Credit <span class="right-cm">$100</span></a>
                    <a class="link-item" href="invite.html"><i class="feather-send me-3"></i>Invite</a>
                    <a class="link-item" href="setting.html"><i class="feather-settings me-3"></i>Setting</a>
                    <a class="link-item" href="login.html"><i class="feather-log-out me-3"></i>Logout</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Header End -->
<!-- Title Bar Start -->
<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Error 404</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End -->
<!-- Body Start -->
<main class="discussion-mp">
    <div class="main-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-12 col-md-12">
                    <div class="errror-404">
                        <img src="images/error.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Body End -->
<!-- Footer Start -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="footer-left">
                    <ul>
                        <li><a href="privacy_policy.html">Privacy</a></li>
                        <li><a href="term_conditions.html">Term and Conditions</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact_us.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="footer-right">
                    <ul class="copyright-text">
                        <li><a href="index.html"><img src="images/logo-2.svg" alt=""></a></li>
                        <li><div class="ftr-1"><i class="far fa-copyright"></i> 2022 Goeveni by <a href="https://themeforest.net/user/gambolthemes">Gambolthemes</a>. All Rights Reserved.</div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<!-- Scripts js -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="vendor/OwlCarousel/owl.carousel.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="js/i18n/datepicker.en.js"></script>
<script src="js/custom.js"></script>

</body>

</html>
