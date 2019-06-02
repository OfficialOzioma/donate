<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Donate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset ('linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{ asset ('nice-select/css/nice-select.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/responsive.css') }}">
</head>
<body>
    
<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html">
                        <!-- <img src="img/logo.png" alt=""> -->
                        <div class="brand_name">
                            <h1>Donate</h1>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active">
                                {{-- <i class="fa fa-home icon" style="color: #FFF;"></i> --}}
                                <a class="nav-link" href="{{asset('/')}}">Home</a>
                            </li> 
                            <li class="nav-item">
                                {{-- <i class="fa fa-home icon" style="color: #FFF;"></i> --}}
                                <a class="nav-link" href="{{asset('/about')}}">About</a>
                            </li> 
                            
                            </li> 
                            <li class="nav-item">
                                {{-- <i class="fa fa-contact icon" style="color: #FFF;"></i> --}}
                                <a class="nav-link" href="{{asset('/contact')}}">Contact</a>
                            </li>
                            <li class="nav-item">
                                {{-- <i class="fa fa-contact icon" style="color: #FFF;"></i> --}}
                                <a class="nav-link" href="{{asset('/event')}}">Events</a>
                            </li> <li class="nav-item">
                                {{-- <i class="fa fa-contact icon" style="color: #FFF;"></i> --}}
                                <a class="nav-link" href="{{asset('/blog')}}">Blog</a>
                            </li>
                            <li class="nav-item">
                                {{-- <i class="fa fa-user-plus icon" style="color: #FFF;"></i> --}}
                                <a class="nav-link" href="{{asset('/register')}}">sign-up</a>
                            </li>
                            <li class="nav-item">
                                {{-- <i class="fa fa-sign-in icon" style="color: #FFF;"></i> --}}
                            <a class="nav-link" href="{{asset ('login')}}">sign-in</a>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================ End Header Menu Area =================-->