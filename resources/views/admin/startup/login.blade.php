<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            @include('admin.flash-message')
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{route('admin.check.login')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                    <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                                </div>
                                <input type="submit" class="btn btn-primary btn-block btn-flat" value="Sign In">
                                <!-- <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button> -->
                                
                                
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin/js/main.js')}}"></script>


</body>

</html>
