<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Shibaji Debnath">
    <meta name="keyword" content="login">
    <link rel="shortcut icon" href="http://www.medust.com/wp-content/themes/bs-medust/images/favicons/favicon.png">

    <title>Login Page</title>

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-block">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Input Email / Moble" required autofocus>
                            </div>
                            <div class="input-group">
                              @if ($errors->has('email'))
                                  <span class="help-block alert alert-danger text-center">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }} mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="input-group">
                              @if ($errors->has('password'))
                                  <span class="help-block alert alert-danger text-center">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <div class="input-group mb-4">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                  </label>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-4">Login</button>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('password.request') }}" class="btn btn-link px-0">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-inverse card-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-block text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="./register" class="btn btn-primary active mt-3">Register Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('js/libs/tether.min.js') }}"></script>
    <script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>



</body>

</html>
