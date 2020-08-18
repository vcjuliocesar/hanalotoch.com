<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>Panel de administración | Hanal Otoch</title>
<link rel="icon" type="image/ico" href="{{url('/assets/images/favicon.ico')}}" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="{{url('/assets/js/vendor/bootstrap/bootstrap.min.css')}}">    
<link rel="stylesheet" href="{{url('/assets/css/vendor/animsition.min.css')}}">
<link rel="stylesheet" href="{{url('/assets/js/vendor/morris/morris.css')}}">    
<!-- project main css files -->
<link rel="stylesheet" href="{{url('/assets/css/main.css')}}">
</head>
<body id="falcon" class="main_Wrapper">
    <div id="wrap" class="animsition">
        <!-- HEADER Content -->
        <div id="header">
            <header class="clearfix">
                <!-- Branding -->
                <div class="branding">
                    <a class="brand" href="index.html">
                        <span>Hanal Otoch</span>
                    </a>
                    <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- Branding end -->
                <ul class="nav-left pull-left list-unstyled list-inline">
                    <li class="leftmenu-collapse">
                        <a role="button" tabindex="0" class="collapse-leftmenu">
                            <i class="fa fa-outdent"></i>
                        </a>
                    </li>
                    
                    <li class="dropdown leftmenu-collapse">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-plus mr-5"></i>Nuevo...
                        </a>
                        <div class="dropdown-menu pull-left panel panel-default" role="menu">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-briefcase"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">Nuevo platillo</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-area-chart"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">Nuevo menú</span>
                                        </div>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Right-side navigation -->
                <ul class="nav-right pull-right list-inline">
                    <li class="dropdown nav-profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/images/profile-photo.jpg" alt="" class="0 size-30x30"> </a>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <div class="user-info">
                                    <div class="user-name">Alexander</div>
                                    <div class="user-position online">Available</div>
                                </div>
                            </li>
                            <li>
                                <a href="profile.html" role="button" tabindex="0">
                                    <span class="label label-success pull-right">80%</span>
                                    <i class="fa fa-user"></i>Profile</a>
                            </li>
                            <li>
                                <a role="button" tabindex="0">
                                    <span class="label label-info pull-right">new</span>
                                    <i class="fa fa-check"></i>Tasks</a>
                            </li>
                            <li>
                                <a role="button" tabindex="0">
                                    <i class="fa fa-cog"></i>Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="locked.html" role="button" tabindex="0">
                                    <i class="fa fa-lock"></i>Lock</a>
                            </li>
                            <li>
                                <a href="login.html" role="button" tabindex="0">
                                    <i class="fa fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Right-side navigation end -->
            </header>
        </div>
        <!--/ HEADER Content  -->
        <div id="controls">
            <aside id="leftmenu">
                <div id="leftmenu-wrap">
                    <div class="panel-group slim-scroll" role="tablist">
                        <div class="panel panel-default">
                            <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body">
                                    <!--  NAVIGATION Content -->
                                    <ul id="navigation">
                                        <!-- <li class="active open">
                                            <a href="index.html">
                                                <i class="fa fa-dashboard"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li> -->
                                        <li>
                                            <a href="{{url('platillos')}}">
                                                <i class="fa fa-coffee"></i>
                                                <span>Platillos</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('menus')}}">
                                                <i class="fa fa-th-list"></i>
                                                <span>Menús</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('configuracion')}}">
                                                <i class="fa fa-puzzle-piece"></i>
                                                <span>Mi Hanal Otoch</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--/ NAVIGATION Content -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </aside>
            <aside id="rightmenu">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">Chat</a>
                        </li>
                        <li role="presentation">
                            <a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">Todo</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    
                </div>
            </aside>
        </div>
        <!-- CONTENT -->
        <section id="content">
            @yield('content')
        </section>
    </div>
    <!-- Vendor JavaScripts -->
    <script src="{{url('/assets/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{url('/assets/bundles/vendorscripts.bundle.js')}}"></script>

    <!--/ vendor javascripts -->
    <script src="{{url('/assets/bundles/flotscripts.bundle.js')}}"></script>    
    <script src="{{url('/assets/bundles/d3cripts.bundle.js')}}"></script>
    <script src="{{url('/assets/bundles/sparkline.bundle.js')}}"></script>
    <script src="{{url('/assets/bundles/raphael.bundle.js')}}"></script>
    <script src="{{url('/assets/bundles/morris.bundle.js')}}"></script>
    <script src="{{url('/assets/bundles/loadercripts.bundle.js')}}"></script>
    <script src="{{url('/assets/js/vendor/filestyle/bootstrap-filestyle.min.js')}}"></script>

    <!-- page Js -->
    <script src="{{url('/assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{url('/assets/js/page/index.js')}}"></script>   

    <!--  Custom JavaScripts -->
    <script src="{{url('assets/bundles/mainscripts.bundle.js')}}"></script>

    <script >
        $(window).load(function(){
            $('#ex1').slider({
                formatter: function(value) {
                    return 'Current value: ' + value;
                }
            });
            $("#ex1").on("slide", function(slideEvt) {
                $("#ex1SliderVal").text(slideEvt.value);
            });

            $("#ex2, #ex3, #ex4, #ex5").slider();
          
            //*load wysiwyg editor
        });
    </script>   
</body>
</html>