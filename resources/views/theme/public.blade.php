<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>Mi Hanal Otoch | Hanal Otoch</title>
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
<body id="falcon">
        <div class="col-md-6 col-md-offset-3" style="box-sizing: border-box;">
            <div class="wrapper">
                <div class="header header-filter" style="background-image: url('assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
                    <section id="content">    
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <section class="boxs" style="background-color: transparent">
                                    <div class="profile-header">
                                        <div class="profile_info " >
                                            <div class="profile-image">
                                                <img src="assets/images/thekitchen.jpeg" alt="" style="border-radius: 50%; width: 120px;">
                                            </div>
                                            <h4 class="mb-0"><strong>The Kitchen</strong></h4>
                                            <span class="text-muted">Comida casera</span>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <section id="content">
                    @yield('content')
        </section>
        <!-- CONTENT -->
        
    
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
    <script src="{{url('assets/js/vendor/form-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

    <!--  Custom JavaScripts -->
    <script src="{{url('assets/bundles/mainscripts.bundle.js')}}"></script>

    <!--  Page Specific Scripts  -->
    <script >
        $(document).ready(function () {
            $('#b_rootwizard').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;
                    var $percent = ($current / $total) * 100;
                    $('#b_rootwizard').find('.bar').css({ width: $percent + '%' });
                }
            });
        });

        $(window).load(function () {
            $('#rootwizard').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;

                    // If it's the last tab then hide the last button and show the finish instead
                    if ($current >= $total) {
                        $('#rootwizard').find('.pager .next').hide();
                        $('#rootwizard').find('.pager .finish').show();
                        $('#rootwizard').find('.pager .finish').removeClass('disabled');
                    } else {
                        $('#rootwizard').find('.pager .next').show();
                        $('#rootwizard').find('.pager .finish').hide();
                    }
                },
                onNext: function (tab, navigation, index) {
                    var form = $('form[name="step' + index + '"]');
                    form.parsley().validate();
                    if (!form.parsley().isValid()) {
                        return false;
                    }

                },

                onTabClick: function (tab, navigation, index) {
                    var form = $('form[name="step' + (index + 1) + '"]');
                    form.parsley().validate();
                    if (!form.parsley().isValid()) {
                        return false;
                    }
                }
            });
        });
    </script>
    <!--/ Page Specific Scripts -->
</body>
</html>