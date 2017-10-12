<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Shibaji Debnath">
    <meta name="keyword" content="Register">
    <link rel="shortcut icon" href="http://www.medust.com/wp-content/themes/bs-medust/images/favicons/favicon.png">

    <title>Register Page</title>

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-block p-4">
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                        <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }} mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Input Name" value="{{ old('name') }}" required autofocus>
                        </div>
                        <div class="input-group">
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
                            <span class="input-group-addon">@</span>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        </div>
                        <div class="input-group">
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="input-group{{ $errors->has('mobile') ? ' has-error' : '' }} mb-3">
                            <span class="input-group-addon">
                              <i class="fa fa-phone"></i>
                            </span>
                            <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Mobile" value="{{ old('mobile') }}" required>
                        </div>
                        <div class="input-group">
                          @if ($errors->has('mobile'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('mobile') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }} mb-3">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="input-group">
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Repeat password" name="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-block btn-success">Create Account</button>
                      </form>
                    </div>

                    <div class="card-footer p-4">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-block btn-facebook" type="button">
                                    <span>facebook</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-block btn-twitter" type="button">
                                    <span>twitter</span>
                                </button>
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
