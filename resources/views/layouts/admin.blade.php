
{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: sadaf.siddiqui--}}
 {{--* Date: 2/26/2018--}}
 {{--* Time: 9:56 AM--}}
 {{--*/--}}


        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', 'Laravel') }}</title>
@yield('template_linked_css')


    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{--<!-- MetisMenu CSS -->--}}
    {{--<link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">--}}


    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('css/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

   ?
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}

    {{-- Styles --}}
    {{--@if(config('laravelusers.enableBootstrapCssCdn'))--}}
        {{--<link rel="stylesheet" type="text/css" href="{{ config('laravelusers.bootstrapCssCdn') }}">--}}
    {{--@endif--}}
    {{--@if(config('laravelusers.enableAppCss'))--}}
        {{--<link rel="stylesheet" type="text/css" href="{{ asset(config('laravelusers.appCssPublicFile')) }}">--}}
    {{--@endif--}}





    {{-- Scripts --}}
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>

</head>

<body>

<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center">
                <img src="{{ asset('img/default.jpg')}}" alt="person" class="img-fluid rounded-circle">
                {{--@if(Auth::user()->avatar == "default.jpg")--}}
                    {{--<img data-name="{{ Auth::user()->name }}" class="profile img-fluid rounded-circle"/>--}}
                {{--@else--}}
                    {{--<img src="images/profile/{{ Auth::user()->avatar }}" alt="person" class="img-fluid rounded-circle">--}}
                {{--@endif--}}
                <h2 class="h5">{{ Auth::user()->name }}</h2><span>{{ Auth::user()->roles[0]["name"]}}</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="{{route('home')}}" class="brand-small text-center"> >></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Main</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                
                <li><a href="{{route('home')}}"> <i class="icon-home"></i>Home                             </a></li>
                <li><a href="{{route('students.index')}}"> <i class="fa fa-address-card-o"></i>Students                             </a></li>
                <li><a href="{{route('parents.index')}}"> <i class="fa fa-user-circle"></i>Parents                             </a></li>
                
                <li><a href="{{route('teachers.index')}}"> <i class="fa fa-user-secret"></i>Teachers                           </a></li>
                {{--<li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>--}}
                    {{--<ul id="exampledropdownDropdown" class="collapse list-unstyled ">--}}
                        {{--<li><a href="#">Page</a></li>--}}
                        {{--<li><a href="#">Page</a></li>--}}
                        {{--<li><a href="#">Page</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li><a href="{{route('courses.index')}}"> <i class="icon-interface-windows"></i>Courses                             </a></li>
                <li><a href="{{route('attendance.index')}}"> <i class="icon-interface-windows"></i>Attendance                             </a></li>
                <li> <a href="#"> <i class="icon-mail"></i>Complains
                        <div class="badge badge-warning">6 New</div></a></li>
            </ul>
        </div>
        <div class="admin-menu">
            <h5 class="sidenav-heading">Administrations</h5>
            <ul id="side-admin-menu" class="side-menu list-unstyled">
                <li> <a href="{{url("/users")}}"> <i class="icon-user"> </i>Users</a></li>
                <li> <a href="#"> <i class="icon-line-chart"> </i>User Log
                        <div class="badge badge-info">Recent Activities</div></a></li>
                <li> <a href=""> <i class="icon-padnote"> </i>News Letters</a></li>
                <li> <a href=""> <i class="fa fa-globe"> </i>General Settings</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="page">
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="{{route('home')}}" class="navbar-brand">
                            <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">X2</strong><span>SMS </span></div></a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Notifications dropdown-->
                        <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                            <div class="notification-time"><small>10 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                            </ul>
                        </li>
                        {{--<!-- Messages dropdown-->--}}
                        {{--<li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>--}}
                            {{--<ul aria-labelledby="notifications" class="dropdown-menu">--}}
                                {{--<li><a rel="nofollow" href="#" class="dropdown-item d-flex">--}}
                                        {{--<div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>--}}
                                        {{--<div class="msg-body">--}}
                                            {{--<h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>--}}
                                        {{--</div></a></li>--}}
                                {{--<li><a rel="nofollow" href="#" class="dropdown-item d-flex">--}}
                                        {{--<div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>--}}
                                        {{--<div class="msg-body">--}}
                                            {{--<h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>--}}
                                        {{--</div></a></li>--}}
                                {{--<li><a rel="nofollow" href="#" class="dropdown-item d-flex">--}}
                                        {{--<div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>--}}
                                        {{--<div class="msg-body">--}}
                                            {{--<h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>--}}
                                        {{--</div></a></li>--}}
                                {{--<li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <!-- Languages dropdown    -->
                        {{--<li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>--}}
                            {{--<ul aria-labelledby="languages" class="dropdown-menu">--}}
                                {{--<li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a></li>--}}
                                {{--<li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2"><span>French                                                         </span></a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <!-- Log out-->
                        <li class="nav-item">
                            <a href="{{ url('myprofile') }}"  class="nav-link logout">
                                <span class="d-none d-sm-inline-block"> My Account </span>
                                <i class="fa fa-user"></i>
                            </a>



                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link logout">
                                <span class="d-none d-sm-inline-block"> {{ __('Logout') }}</span>
                                <i class="fa fa-sign-out"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active"> @yield('breadcrumb')</li>
            </ul>
        </div>
    </div>
    <section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            @yield('content')
        </div>
    </section>
    <footer class="main-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <p>X2sms &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                    {{--<p>Design by <a href="https://businessjot.coms" class="external">Businessjot.com</a></p>--}}
                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
                </div>
            </div>
        </div>
    </footer>
</div>




<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/popper.js/umd/popper.min.js') }}"> </script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
{{--<script src="{{ asset('js/charts-home.js') }}"></script>--}}
<!-- Main File-->
<script src="{{ asset('js/front.js') }}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('js/initial.min.js') }}"></script>
@yield('script')
$('.profile').initial({textColor:"#fff"});
</body>

</html>


