<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/linearicons/style.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('backend/img/favicon.png') }}">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="{{ asset('backend/img/logo-dark.png') }}" alt=""></div>
                                <p class="lead">Login to your account</p>
                            </div>
                            
                            <form class="form-auth-small" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">CPF NO</label>
                                    <input type="text" class="form-control" id="CPF_NO" :value="old('CPF_NO')" name="CPF_NO" placeholder="CPF NO" required autofocus />
                                </div>

                               <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="password"
                                    type="password"
                                    name="password"
                                    placeholder="Password" 
                                    required autocomplete="current-password" />
                                </div>

                                <div class="form-group clearfix"> 
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox" id="remember_me" name="remember">
                                        <span>Remember me</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text"><i class="fa fa-lock"></i> 
                                        
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </span>
                                </div>

                   
                            </form>

                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">ONGC - India</h1>
                            <p>SCADA Environment</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>

