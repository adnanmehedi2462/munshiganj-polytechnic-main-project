<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{URL::to('login/images/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{('/loginadmin')}}" method="post"> {{csrf_field()}} <span class="login100-form-title p-b-26"> <img src="{{URL::to('login/govtlogo.png')}}"> Welcome To MUPI Admin Panel </span>
                    <h4 style="background-color: red;color: #fff;"> <?php $massage=Session::get('massage'); if($massage){ echo $massage; Session::put('massage',null); } ?> </h4> <span class="login100-form-title p-b-48"> </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c"> <input class="input100" type="text" name="admin_email"> <span class="focus-input100" data-placeholder="Email"></span> </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password"> <span class="btn-show-pass"> <i class="zmdi zmdi-eye"></i> </span> <input class="input100" type="password" name="admin_password"> <span class="focus-input100" data-placeholder="Password"></span> </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div> <button class="login100-form-btn"> Login </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('login/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('login/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('login/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('login/js/main.js')}}"></script>
</body>

</html>
