<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unkora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="d-flex flex-column">
<div class="bg-000 nav-header">
    <div class="container-fluid">
        <div class="">
            <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                <div class="text-uppercase text-white brandon-medium d-inline-flex align-items-center weather-text">
                    <img src="img/weather.png" class="img-fluid mr-2">
                    <span class="d-inline-block mt-1">
                                28° &  Sunny in <a href="javascript:void(0);" class="text-white selected">Chennai <i class="fas fa-chevron-down font-14"></i></a>
								<ul class="cities">
<li class="city" ><a href="javascript:void(0);">SYDNEY</a>
</li>
<li class="city"><a href="javascript:void(0);">MELBOURNE</a>
</li>
<li class="city"><a href="javascript:void(0);">BRISBANE</a>
</li>
<li class="city"><a href="javascript:void(0);">AUCKLAND</a>
</li>
<li class="city"><a href="javascript:void(0);">WELLINGTON</a>
</li>

</ul>
                            </span>
                </div>
                <div class="ml-auto d-md-flex align-items-center">
                    <div class="searchbox">
                        <div class="drop-down form-control searchbox-select">
                            <div class="selected">
                                <a href="javascript:void(0);"><span>Store</span></a>
                            </div>
                            <div class="options">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0);">Service<span class="value">1</span></a></li>
                                    <li><a href="javascript:void(0);">Real Estate<span class="value">2</span></a></li>
                                    <li><a href="javascript:void(0);">Events<span class="value">3</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="text" placeholder="Search" class="form-control searchbox-input">
                        <button class="btn search-btn">
                            <img src="img/search.png" class="">
                        </button>
                    </div>
                    <div class="text-right">
                        <button class="btn login-btn" data-toggle="modal" data-target="#loginModal">
                            Login
                        </button>
                        <button class="btn signup-btn" data-toggle="modal" data-target="#signupModal">
                            Signup
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg p-0 pb-0">
                <a class="navbar-brand p-0" href="index.html">
                    Unkora
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon d-flex align-items-center justify-content-center">
                                <span class="c-hamburger c-hamburger--htx"><span>Toggle menu</span></span>
                            </span>
                </button>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid navbar-shadow" id="myHeader">
    <div class="">
        <div class="collapse navbar-collapse d-lg-block" id="navbarToggle">
            <ul class="navbar-nav flex-lg-row py-1">
                <li><span class="fixed-logo">U</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                        <img src="img/store.png" class="img-fluid mr-2"> Store
                    </a>
                    <div class="navbaritem-dropdown">
                        <div class="navbaritem-maincategory">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="javascript:void(0);">
                                        Beauty
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Clothing, Luggage & Handbags
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Computers
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Electronics
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Floral & Gift Baskets
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Food, Household & Pet
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Furniture & Mattresses
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Gift Cards & Tickets
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Gourmet Foods
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Health & Personal Care
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Home Improvement
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Home & Kitchen
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Jewelry, Watches & Sunglasses
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbaritem-subcategory">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <div class="navbaritem-heading">
                                        <div class="navbaritem-subbackarrow d-md-none">
                                            <i class="fas fa-arrow-left"></i>
                                        </div>
                                        Clothing, Luggage & Handbags
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Clothing for Women
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Clothing for Men
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Clothing for Girls
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Clothing for Boys
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Handbags & Wallets
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Luggage
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Fan Gear
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Kirkland Signature
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbaritem-detailcategory">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <div class="navbaritem-heading">
                                        <div class="navbaritem-detailbackarrow d-md-none">
                                            <i class="fas fa-arrow-left"></i>
                                        </div>
                                        Luggage
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Luggage
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Luggage Sets
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Carry-Ons
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Checked Luggage
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Duffel Bags & Backpacks
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Umbrellas
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Garment Bags
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                        <img src="img/service.png" class="img-fluid mr-2"> Service
                    </a>
                    <div class="navbaritem-dropdown">
                        <div class="navbaritem-maincategory">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="javascript:void(0);">
                                        AC services
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Pesticides
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Plumbing
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbaritem-subcategory">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <div class="navbaritem-heading">
                                        <div class="navbaritem-subbackarrow d-md-none">
                                            <i class="fas fa-arrow-left"></i>
                                        </div>
                                        AC filter repair
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Clothing for Women
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Clothing for Men
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Clothing for Girls
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Clothing for Boys
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Handbags & Wallets
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Luggage
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Fan Gear
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Kirkland Signature
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbaritem-detailcategory">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <div class="navbaritem-heading">
                                        <div class="navbaritem-detailbackarrow d-md-none">
                                            <i class="fas fa-arrow-left"></i>
                                        </div>
                                        Luggage
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Luggage
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Luggage Sets
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Carry-Ons
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Checked Luggage
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Duffel Bags & Backpacks
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Umbrellas
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Garment Bags
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                        <img src="img/real-estate.png" class="img-fluid mr-2"> Real Estate
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                        <img src="img/event.png" class="img-fluid mr-2"> Events
                    </a>

                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-content flex-fill">
    <div class="container-fluid px-0 position-relative banner-fluid overflow-hidden">
        <div class=" banner-container">
            <div class="banner-caption mb-3 googlesans-medium">
                <div class="text-center">
                    <img src="img/home-icon.png" class="img-fluid mb-3">
                </div>
                READY-TO-MOVE-IN
                Home with
                <span>
                            Free Furniture
                        </span>
            </div>
            <div class="banner-circle">
                <img src="img/banner.jpg" class="img-fluid">
            </div>
        </div>
        <div class="text-center">
            <img src="img/banner-image.jpg" class="img-fluid">
        </div>
    </div>
    <div class="container-fluid section-fluid overflow-hidden">
        <div class="">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-3">
                <div class="section-name brandon-bold color-000 text-uppercase">
                    Stores
                </div>
                <a href="stores-list.html" class="btn viewmore-btn wow animate__animated animate__fadeIn">
                    View more
                </a>
            </div>
            <ul class="section-tags list-unstyled">
                <li class="list-inline-item">
                    Stores
                </li>
                <li class="list-inline-item">
                    Shopping
                </li>
                <li class="list-inline-item">
                    Grocery Stores
                </li>
            </ul>
            <div class="row mx-n2 pb-3 custom-borderbottom">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/store-1.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Great India Cloth Stores
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Hi tech city, Hyderabad
                            </div>
                        </div>
                        <a class="stretched-link" href="store-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/store-2.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Malabar Gold and Diamonds
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Babukhan Mall Annexe Layout, Telangana
                            </div>
                        </div>
                        <a class="stretched-link" href="store-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/store-3.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Vishal Mega Mart
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Sai Bhavani Mira Kamshetty,Kukatpally, Telangana
                            </div>
                        </div>
                        <a class="stretched-link" href="store-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/store-1.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Great India Cloth Stores
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Hi tech city, Hyderabad
                            </div>
                        </div>
                        <a class="stretched-link" href="store-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/store-2.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Malabar Gold and Diamonds
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Babukhan Mall Annexe Layout, Telangana
                            </div>
                        </div>
                        <a class="stretched-link" href="store-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/store-3.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Vishal Mega Mart
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Sai Bhavani Mira Kamshetty,Kukatpally, Telangana
                            </div>
                        </div>
                        <a class="stretched-link" href="store-single.html"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid section-fluid overflow-hidden">
        <div class="">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-3">
                <div class="section-name brandon-bold color-000 text-uppercase">
                    Services
                </div>
                <a href="services-list.html" class="btn viewmore-btn wow animate__animated animate__fadeIn">
                    View more
                </a>
            </div>
            <ul class="section-tags list-unstyled">
                <li class="list-inline-item">
                    Services
                </li>
                <li class="list-inline-item">
                    Shopping
                </li>
                <li class="list-inline-item">
                    Home service
                </li>
            </ul>
            <div class="row mx-n2 pb-3 custom-borderbottom">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/service-1.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Phoenix A/C Service
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Shaikpet, Hyderabad, Telangana
                            </div>
                        </div>
                        <a class="stretched-link" href="services-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/service-2.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                workfixes Plumbing Services
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                SR Nagar, Srinivasa Nagar, Hyderabad
                            </div>
                        </div>
                        <a class="stretched-link" href="services-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/service-3.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Call2Fix Home Services
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Sai Bhavani Mira Kamshetty,Kukatpally, Telangana
                            </div>
                        </div>
                        <a class="stretched-link" href="services-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/service-1.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Phoenix A/C Service
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Shaikpet, Hyderabad, Telangana
                            </div>
                        </div>
                        <a class="stretched-link" href="services-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/service-2.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                workfixes Plumbing Services
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                SR Nagar, Srinivasa Nagar, Hyderabad
                            </div>
                        </div>
                        <a class="stretched-link" href="services-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/service-3.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Call2Fix Home Services
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Sai Bhavani Mira Kamshetty,Kukatpally, Telangana
                            </div>
                        </div>
                        <a class="stretched-link" href="services-single.html"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid section-fluid overflow-hidden">
        <div class="">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-3">
                <div class="section-name brandon-bold color-000 text-uppercase">
                    Real Estate
                </div>
                <a href="realestate-list.html" class="btn viewmore-btn wow animate__animated animate__fadeIn">
                    View more
                </a>
            </div>
            <ul class="section-tags list-unstyled">
                <li class="list-inline-item">
                    Real Estate
                </li>
                <li class="list-inline-item">
                    Shopping
                </li>
                <li class="list-inline-item">
                    Home service
                </li>
            </ul>
            <div class="row mx-n2 pb-3 custom-borderbottom">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/real-estate-1.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Agrim Sky Tower
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Kokapet, Hyderabad, Hyderabad
                            </div>
                        </div>
                        <a class="stretched-link" href="realestate-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/real-estate-2.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                CMG Halcyon Homes
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Osman Nagar, Hyderabad, Hyderabad
                            </div>
                        </div>
                        <a class="stretched-link" href="realestate-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/real-estate-1.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Agrim Sky Tower
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Kokapet, Hyderabad, Hyderabad
                            </div>
                        </div>
                        <a class="stretched-link" href="realestate-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/real-estate-2.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                CMG Halcyon Homes
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Osman Nagar, Hyderabad, Hyderabad
                            </div>
                        </div>
                        <a class="stretched-link" href="realestate-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/real-estate-1.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Agrim Sky Tower
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Kokapet, Hyderabad, Hyderabad
                            </div>
                        </div>
                        <a class="stretched-link" href="realestate-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/real-estate-2.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                CMG Halcyon Homes
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <div class="service-location brandon-bold">
                                Osman Nagar, Hyderabad, Hyderabad
                            </div>
                        </div>
                        <a class="stretched-link" href="realestate-single.html"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid section-fluid overflow-hidden">
        <div class="">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-3">
                <div class="section-name brandon-bold color-000 text-uppercase">
                    Events
                </div>
                <a href="events-list.html" class="btn viewmore-btn wow animate__animated animate__fadeIn">
                    View more
                </a>
            </div>
            <ul class="section-tags list-unstyled">
                <li class="list-inline-item">
                    Events
                </li>
                <li class="list-inline-item">
                    Hyderabad
                </li>
                <li class="list-inline-item">
                    Events in Hyderabad
                </li>
            </ul>
            <div class="row mx-n2 pb-3 custom-borderbottom">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/event-1.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Laughs Over Latte
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <ul class="event-details list-unstyled mb-0">
                                <li class="event-location">
                                    T.John College - Campus Ground: Bengaluru
                                </li>
                                <li class="event-date">
                                    25 March 2020 - 27 March 2020
                                </li>
                                <li class="event-time">
                                    7:00 PM - 12:30 PM
                                </li>
                            </ul>
                        </div>
                        <a class="stretched-link" href="events-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/event-2.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Theatre live
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <ul class="event-details list-unstyled mb-0">
                                <li class="event-location">
                                    T.John College - Campus Ground: Bengaluru
                                </li>
                                <li class="event-date">
                                    25 March 2020 - 27 March 2020
                                </li>
                                <li class="event-time">
                                    7:00 PM - 12:30 PM
                                </li>
                            </ul>
                        </div>
                        <a class="stretched-link" href="events-single.html"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-2 mb-4 wow animate__animated animate__fadeInUp">
                    <div class="service-box">
                        <button class="btn bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                        <div class="service-img">
                            <img src="img/event-3.png" class="img-fluid">
                        </div>
                        <div class="service-details">
                            <div class="service-name">
                                Laughs Over Latte
                            </div>
                            <div class="color-333 service-caption">
                                Secure. Convenient. Reliable
                            </div>
                            <ul class="event-details list-unstyled mb-0">
                                <li class="event-location">
                                    T.John College - Campus Ground: Bengaluru
                                </li>
                                <li class="event-date">
                                    25 March 2020 - 27 March 2020
                                </li>
                                <li class="event-time">
                                    7:00 PM - 12:30 PM
                                </li>
                            </ul>
                        </div>
                        <a class="stretched-link" href="events-single.html"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="bg-000">
    <div class="container-fluid footer-fluid py-5 overflow-hidden">
        <div class="">
            <div class="row">
                <div class="col-12 col-md-2 px-2 mb-4 mb-xl-0 wow animate__animated animate__fadeInUp">
                    <div>
                        <div class="footer-section">
                            <div class="footer-heading">
                                About
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="aboutus.html">
                                        About us
                                    </a>
                                </li>
                                <li>
                                    <a href="terms-conditions.html">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">
                                        Privacy policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2  px-2 pl-lg-3 mb-4 mb-xl-0 wow animate__animated animate__fadeInUp">
                    <div>
                        <div class="footer-section">
                            <div class="footer-heading">
                                Social
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <div>
                                        <a href="javascript:void(0);" class="social-link">
                                            <div class="d-inline-flex align-items-center justify-content-center">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="javascript:void(0);" class="social-link">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="javascript:void(0);" class="social-link">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2  px-2 mb-4 mb-xl-0 wow animate__animated animate__fadeInUp">
                    <div>
                        <div class="footer-section">
                            <div class="footer-heading">
                                Contact
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="aboutus.html" class="text-lowercase">
                                                <span class="d-inline-block">
                                                    <img src="img/mail.png" class="img-fluid">
                                                </span>
                                        support@unkora.com
                                    </a>
                                </li>
                                <li>
                                    <a href="tel: +91 8789958795" class="text-number">
                                                <span class="d-inline-block">
                                                    <img src="img/phone.png" class="img-fluid">
                                                </span>
                                        +91 8789958795
                                    </a>
                                </li>
                                <li>
                                    <a href="feedback.html">
                                                <span class="d-inline-block">
                                                    <img src="img/feedback.png" class="img-fluid">
                                                </span>
                                        Feedback
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2 px-2 mb-4 mb-xl-0 wow animate__animated animate__fadeInUp">
                    <div>
                        <div class="footer-section ml-0 ml-md-5">
                            <div class="footer-heading">
                                Join
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="joinus.html">
                                        Join us
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        FAQ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 px-2 mb-4 mb-xl-0 wow animate__animated animate__fadeInUp">
                    <div>
                        <div class="footer-section">
                            <div class="footer-heading">
                                Newsletter
                            </div>
                            <div class="newsletter-box">
                                <input type="email" placeholder="Your Email" class="form-control brandon-medium h-100" id="userSubscribeEmail">
                                <button class="btn newsletter-subscribebtn bg-lightyellow brandon-medium" id="userSubscribebtn">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright-fluid py-3">
        <div class="container">
            Copyright@2020 Unkora
        </div>
    </div>
</div>
<div class="scroll-top">
    <div class="d-flex align-items-center justify-content-center w-100 h-100">
        <img src="img/arrow-up.svg" class="img-fluid">
    </div>
</div>
<div class="feedback-section" id="wTdOl5MnWz"><span></span></div>
<!-- login modal -->
<div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="img/modal-close.png" class="img-fluid">
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-name color-333 mb-4">
                    Welcome Back,<br/>
                    Please Login to your account
                </div>
                <button class="btn loginwith-fb text-white rounded-0">
                    <i class="fab fa-facebook-f mr-1"></i> Login with Facebook
                </button>
                <button class="btn loginwith-google text-white rounded-0">
                    <i class="fab fa-google mr-1"></i> Login with Google
                </button>
                <div class="text-center text-uppercase color-000 mb-3">
                    - Or -
                </div>
                <div>
                    <div class="position-relative mb-3">
                        <input type="email" class="form-control modal-formcontrol color-333" id="loginUseremail">
                        <label class="color-999">
                            Email
                        </label>
                    </div>
                    <div class="position-relative mb-3">
                        <input type="password" class="form-control modal-formcontrol color-333" id="loginUserpassword">
                        <button class="btn eye-btn">
                            <img src="img/eye.png" class="img-fluid">
                        </button>
                        <label class="color-999">
                            Password
                        </label>
                    </div>
                    <div class="text-right mb-3">
                        <a data-toggle="modal" href="#forgotPasswordModal" id="forgotPasswordModalbtn"
                           class="color-666">
                            Forgot Password?
                        </a>
                    </div>
                    <button class="btn modalsubmit-btn bgcolor-primary w-100" id="loginModalsubmit">
                        Submit
                    </button>
                    <div class="text-center modal-caption text-uppercase color-333 mt-4">
                        Don’t have an account? <a href="#signupModal" data-toggle="modal" class="modal-captionlink"
                                                  id="signupModalbtn">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- signup modal -->
<div class="modal fade" id="signupModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="img/modal-close.png" class="img-fluid">
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-name color-333 mb-4">
                    Create your account
                </div>
                <div>
                    <div class="position-relative mb-3">
                        <input type="text" class="form-control modal-formcontrol color-333" id="signupUsername">
                        <label class="color-999">
                            Name
                        </label>
                    </div>
                    <div class="position-relative mb-3">
                        <input type="email" class="form-control modal-formcontrol color-333" id="signupUseremail">
                        <label class="color-999">
                            Email
                        </label>
                    </div>
                    <div class="position-relative mb-3">
                        <input type="password" class="form-control modal-formcontrol color-333" id="signupUserpassword">
                        <button class="btn eye-btn">
                            <img src="img/eye.png" class="img-fluid">
                        </button>
                        <label class="color-999">
                            Password
                        </label>
                    </div>
                    <div class="position-relative mb-3">
                        <input type="password" class="form-control modal-formcontrol color-333" id="signupUserconfirm">
                        <button class="btn eye-btn">
                            <img src="img/eye.png" class="img-fluid">
                        </button>
                        <label class="color-999">
                            Confirm Password
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <select class="form-control modal-formcontrol color-333" id="signupUsercity">
                            <option hidden selected value="">
                            </option>
                            <option value="Hyd">
                                Hyderabad
                            </option>
                        </select>
                        <label class="color-999">
                            City
                        </label>
                    </div>
                    <button class="btn modalsubmit-btn bgcolor-primary w-100 mt-4" id="signupModalsubmit">
                        Register
                    </button>
                    <div class="text-center modal-caption text-uppercase color-333 mt-3">
                        Already have an account? <a href="#loginModal" data-toggle="modal" class="modal-captionlink"
                                                    id="loginModalbtn">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- forgot password modal -->
<div class="modal fade" id="forgotPasswordModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="img/modal-close.png" class="img-fluid">
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-name color-333 mb-4">
                    Forgot Password
                </div>
                <div class="modalforgot-caption color-666 mb-3">
                    Enter your email address associated with your account.
                </div>
                <div>
                    <div class="position-relative mb-4">
                        <input type="email" class="form-control modal-formcontrol color-333" id="forgotUseremail">
                        <label class="color-999">
                            Email
                        </label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button class="btn modalsubmit-btn bgcolor-primary w-50 mr-2 mr-lg-3" id="forgotModalSubmit">
                            Send reset link
                        </button>
                        <button class="btn modalcancel-btn text-white w-50 ml-2 ml-lg-3" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- settings modal -->
<div class="modal fade" id="settingsModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="img/modal-close.png" class="img-fluid">
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-name color-333 mb-4">
                    Settings
                </div>
                <div>
                    <div class="position-relative mb-4">
                        <input type="text" class="form-control modal-formcontrol color-333" id="settingsUsername">
                        <label class="color-999">
                            Name
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <input type="email" class="form-control modal-formcontrol color-333" id="settingsUseremail">
                        <label class="color-999">
                            Email
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <input type="password" class="form-control modal-formcontrol color-333" id="settingsUserpassword">
                        <button class="btn eye-btn">
                            <img src="img/eye.png" class="img-fluid">
                        </button>
                        <label class="color-999">
                            Password
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <input type="password" class="form-control modal-formcontrol color-333" id="settingsUserconfirm">
                        <button class="btn eye-btn">
                            <img src="img/eye.png" class="img-fluid">
                        </button>
                        <label class="color-999">
                            Confirm Password
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <select class="form-control modal-formcontrol color-333" id="settingsUsercity">
                            <option hidden selected value="">
                            </option>
                            <option value="Hyd">
                                Hyderabad
                            </option>
                        </select>
                        <label class="color-999">
                            City
                        </label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button class="btn modalsubmit-btn bgcolor-primary w-100" id="settingsModalSubmit">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- refer modal -->
<div class="modal fade" id="referModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="img/modal-close.png" class="img-fluid">
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-name color-333 mb-4">
                    Refer a Merchant
                </div>
                <div class="modalforgot-caption color-333 mb-3">
                    We strive to provide you the best of products & services. Help us by adding to our list of offerings by referring a merchant you know is good.
                </div>
                <div>
                    <div class="position-relative mb-4">
                        <input type="text" class="form-control modal-formcontrol color-333" id="referServicename">
                        <label class="color-999">
                            Service Name
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <textarea class="form-control modal-formcontrol color-333" id="referServicedescription"></textarea>
                        <label class="color-999">
                            Description
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <select class="form-control modal-formcontrol color-333" id="referServicecity">
                            <option hidden selected value="">
                            </option>
                            <option value="Hyd">
                                Hyderabad
                            </option>
                        </select>
                        <label class="color-999">
                            City
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <select class="form-control modal-formcontrol color-333" id="referServicelocation">
                            <option hidden selected value="">
                            </option>
                            <option value="Ameerpet">
                                Ameerpet
                            </option>
                        </select>
                        <label class="color-999">
                            Location
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <input type="text" class="form-control modal-formcontrol color-333" id="referPersonename">
                        <label class="color-999">
                            Contact Person
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <input type="number" class="form-control modal-formcontrol color-333" id="referPersonnumber">
                        <label class="color-999">
                            Phone Number
                        </label>
                    </div>
                    <div class="position-relative mb-4">
                        <input type="text" class="form-control modal-formcontrol color-333" id="referWeblink">
                        <label class="color-999">
                            Weblink
                        </label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button class="btn modalsubmit-btn bgcolor-primary w-100" id="referModalSubmit">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.min.js"></script>
<script src="js/fontawesome.min.js"></script>
<script src="js/fontawesome-all.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/global.js"></script>
<script>
    $(document).ready(function () {
        $('body').addClass('homepage');

    });
</script>
<script>
    $(window).scroll(function() {    // this will work when your window scrolled.
        var height = $(window).scrollTop();  //getting the scrolling height of window
        if(height  > 450) {
            $("#myHeader").css({"position": "fixed" , "background" : "#000" , "z-index" : "999" });
            $(".nav-link").css({"color": "#fff"});
            $(".fixed-logo").css({"display": "block", "color" : "#caaf7b" , "border" : "solid 2px #caaf7b"});


        } else{
            $("#myHeader").css({"position": "relative" , "background" : "#fff"  });
            $(".nav-link").css({"color": "#000"});
            $(".fixed-logo").css({"display": "none"});
        }
    });

</script>
</body>
</html>