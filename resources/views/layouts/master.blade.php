<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/home_assets/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/home_assets/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Web việc làm</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link href="{{ asset('/home_assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home_assets/assets/css/material-kit.css?v=1.2.1') }}" rel="stylesheet" />

    <link href="{{ asset('/home_assets/assets/assets-for-demo/vertical-nav.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home_assets/assets/assets-for-demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="index-page">
    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll=" "
        id="sectionsNav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="presentation.html">Material Kit PRO</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">
                            <i class="material-icons">apps</i> Components
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">view_day</i> Sections
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="sections.html#headers">
                                    <i class="material-icons">dns</i> Headers
                                </a>
                            </li>

                            <li>
                                <a href="sections.html#pricing">
                                    <i class="material-icons">monetization_on</i> Pricing
                                </a>
                            </li>
                            <li>
                                <a href="sections.html#testimonials">
                                    <i class="material-icons">chat</i> Testimonials
                                </a>
                            </li>
                            <li>
                                <a href="sections.html#contactus">
                                    <i class="material-icons">call</i> Contacts
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">view_carousel</i> Languages
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href=" {{ route('locale', ['vi']) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24" height="24" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#DA251D"
                                            d="M32 5H4a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h28a4 4 0 0 0 4-4V9a4 4 0 0 0-4-4z" />
                                        <path fill="#FF0"
                                            d="M19.753 16.037L18 10.642l-1.753 5.395h-5.672l4.589 3.333l-1.753 5.395L18 21.431l4.589 3.334l-1.753-5.395l4.589-3.333z" />
                                    </svg>
                                    Việt Nam
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('locale', ['en']) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 -4 28 28" fill="none" style="padding-top: 2px">
                                        <g clip-path="url(#clip0_503_3486)">
                                            <rect width="28" height="20" rx="2" fill="white" />
                                            <mask id="mask0_503_3486" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                x="0" y="0" width="28" height="20">
                                                <rect width="28" height="20" rx="2" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_503_3486)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M28 0H0V1.33333H28V0ZM28 2.66667H0V4H28V2.66667ZM0 5.33333H28V6.66667H0V5.33333ZM28 8H0V9.33333H28V8ZM0 10.6667H28V12H0V10.6667ZM28 13.3333H0V14.6667H28V13.3333ZM0 16H28V17.3333H0V16ZM28 18.6667H0V20H28V18.6667Z"
                                                    fill="#D02F44" />
                                                <rect width="12" height="9.33333" fill="#46467F" />
                                                <g filter="url(#filter0_d_503_3486)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M2.66665 1.99999C2.66665 2.36818 2.36817 2.66666 1.99998 2.66666C1.63179 2.66666 1.33331 2.36818 1.33331 1.99999C1.33331 1.63181 1.63179 1.33333 1.99998 1.33333C2.36817 1.33333 2.66665 1.63181 2.66665 1.99999ZM5.33331 1.99999C5.33331 2.36818 5.03484 2.66666 4.66665 2.66666C4.29846 2.66666 3.99998 2.36818 3.99998 1.99999C3.99998 1.63181 4.29846 1.33333 4.66665 1.33333C5.03484 1.33333 5.33331 1.63181 5.33331 1.99999ZM7.33331 2.66666C7.7015 2.66666 7.99998 2.36818 7.99998 1.99999C7.99998 1.63181 7.7015 1.33333 7.33331 1.33333C6.96512 1.33333 6.66665 1.63181 6.66665 1.99999C6.66665 2.36818 6.96512 2.66666 7.33331 2.66666ZM10.6666 1.99999C10.6666 2.36818 10.3682 2.66666 9.99998 2.66666C9.63179 2.66666 9.33331 2.36818 9.33331 1.99999C9.33331 1.63181 9.63179 1.33333 9.99998 1.33333C10.3682 1.33333 10.6666 1.63181 10.6666 1.99999ZM3.33331 3.99999C3.7015 3.99999 3.99998 3.70152 3.99998 3.33333C3.99998 2.96514 3.7015 2.66666 3.33331 2.66666C2.96512 2.66666 2.66665 2.96514 2.66665 3.33333C2.66665 3.70152 2.96512 3.99999 3.33331 3.99999ZM6.66665 3.33333C6.66665 3.70152 6.36817 3.99999 5.99998 3.99999C5.63179 3.99999 5.33331 3.70152 5.33331 3.33333C5.33331 2.96514 5.63179 2.66666 5.99998 2.66666C6.36817 2.66666 6.66665 2.96514 6.66665 3.33333ZM8.66665 3.99999C9.03484 3.99999 9.33331 3.70152 9.33331 3.33333C9.33331 2.96514 9.03484 2.66666 8.66665 2.66666C8.29846 2.66666 7.99998 2.96514 7.99998 3.33333C7.99998 3.70152 8.29846 3.99999 8.66665 3.99999ZM10.6666 4.66666C10.6666 5.03485 10.3682 5.33333 9.99998 5.33333C9.63179 5.33333 9.33331 5.03485 9.33331 4.66666C9.33331 4.29847 9.63179 3.99999 9.99998 3.99999C10.3682 3.99999 10.6666 4.29847 10.6666 4.66666ZM7.33331 5.33333C7.7015 5.33333 7.99998 5.03485 7.99998 4.66666C7.99998 4.29847 7.7015 3.99999 7.33331 3.99999C6.96512 3.99999 6.66665 4.29847 6.66665 4.66666C6.66665 5.03485 6.96512 5.33333 7.33331 5.33333ZM5.33331 4.66666C5.33331 5.03485 5.03484 5.33333 4.66665 5.33333C4.29846 5.33333 3.99998 5.03485 3.99998 4.66666C3.99998 4.29847 4.29846 3.99999 4.66665 3.99999C5.03484 3.99999 5.33331 4.29847 5.33331 4.66666ZM1.99998 5.33333C2.36817 5.33333 2.66665 5.03485 2.66665 4.66666C2.66665 4.29847 2.36817 3.99999 1.99998 3.99999C1.63179 3.99999 1.33331 4.29847 1.33331 4.66666C1.33331 5.03485 1.63179 5.33333 1.99998 5.33333ZM3.99998 5.99999C3.99998 6.36819 3.7015 6.66666 3.33331 6.66666C2.96512 6.66666 2.66665 6.36819 2.66665 5.99999C2.66665 5.6318 2.96512 5.33333 3.33331 5.33333C3.7015 5.33333 3.99998 5.6318 3.99998 5.99999ZM5.99998 6.66666C6.36817 6.66666 6.66665 6.36819 6.66665 5.99999C6.66665 5.6318 6.36817 5.33333 5.99998 5.33333C5.63179 5.33333 5.33331 5.6318 5.33331 5.99999C5.33331 6.36819 5.63179 6.66666 5.99998 6.66666ZM9.33331 5.99999C9.33331 6.36819 9.03484 6.66666 8.66665 6.66666C8.29846 6.66666 7.99998 6.36819 7.99998 5.99999C7.99998 5.6318 8.29846 5.33333 8.66665 5.33333C9.03484 5.33333 9.33331 5.6318 9.33331 5.99999ZM9.99998 8C10.3682 8 10.6666 7.70152 10.6666 7.33333C10.6666 6.96514 10.3682 6.66666 9.99998 6.66666C9.63179 6.66666 9.33331 6.96514 9.33331 7.33333C9.33331 7.70152 9.63179 8 9.99998 8ZM7.99998 7.33333C7.99998 7.70152 7.7015 8 7.33331 8C6.96512 8 6.66665 7.70152 6.66665 7.33333C6.66665 6.96514 6.96512 6.66666 7.33331 6.66666C7.7015 6.66666 7.99998 6.96514 7.99998 7.33333ZM4.66665 8C5.03484 8 5.33331 7.70152 5.33331 7.33333C5.33331 6.96514 5.03484 6.66666 4.66665 6.66666C4.29846 6.66666 3.99998 6.96514 3.99998 7.33333C3.99998 7.70152 4.29846 8 4.66665 8ZM2.66665 7.33333C2.66665 7.70152 2.36817 8 1.99998 8C1.63179 8 1.33331 7.70152 1.33331 7.33333C1.33331 6.96514 1.63179 6.66666 1.99998 6.66666C2.36817 6.66666 2.66665 6.96514 2.66665 7.33333Z"
                                                        fill="url(#paint0_linear_503_3486)" />
                                                </g>
                                            </g>
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_503_3486" x="1.33331" y="1.33333" width="9.33331"
                                                height="7.66667" filterUnits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                    result="hardAlpha" />
                                                <feOffset dy="1" />
                                                <feColorMatrix type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix"
                                                    result="effect1_dropShadow_503_3486" />
                                                <feBlend mode="normal" in="SourceGraphic"
                                                    in2="effect1_dropShadow_503_3486" result="shape" />
                                            </filter>
                                            <linearGradient id="paint0_linear_503_3486" x1="1.33331" y1="1.33333"
                                                x2="1.33331" y2="7.99999" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="white" />
                                                <stop offset="1" stop-color="#F0F0F0" />
                                            </linearGradient>
                                            <clipPath id="clip0_503_3486">
                                                <rect width="28" height="20" rx="2" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg> English
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="button-container">
                        <a href="http://www.creative-tim.com/buy/material-kit-pro?ref=presentation" target="_blank"
                            class="btn btn-rose btn-round">
                            <i class="material-icons">shopping_cart</i> Buy Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header header-filter clear-filter" data-parallax="true"
        style="background-image: url('{{ asset('/home_assets/assets/img/bg0.jpg') }}') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1>Material Kit
                            <div class="pro-badge">
                                Pro
                            </div>
                        </h1>

                        <h3 class="title">All Components</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">


        @yield('content')






        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by Creative Tim for a
                    better web.
                </div>
            </div>
        </footer>
    </div>





</body>



</html>

<script src="{{ asset('/home_assets/assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/home_assets/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/home_assets/assets/js/material.min.js') }}"></script>

<script src="{{ asset('/home_assets/assets/js/moment.min.js') }}"></script>
<script src="{{ asset('/home_assets/assets/js/nouislider.min.js') }}"></script>
<script src="{{ asset('/home_assets/assets/js/bootstrap-datetimepicker.js') }}"></script>
<script src="{{ asset('/home_assets/assets/js/bootstrap-selectpicker.js') }}"></script>
<script src="{{ asset('/home_assets/assets/js/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('/home_assets/assets/js/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('/home_assets/assets/js/material-kit.js?v=1.2.1') }}"></script>
<script src="{{ asset('/home_assets/assets/assets-for-demo/modernizr.js') }}"></script>
<script src="{{ asset('/home_assets/assets/assets-for-demo/vertical-nav.js') }}"></script>
@stack('js')
