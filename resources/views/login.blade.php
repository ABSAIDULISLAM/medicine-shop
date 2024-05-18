
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Software Solution</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{asset('backend/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('backend/assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{asset('backend/assets/bower_components/Ionicons/css/ionicons.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('backend/assets/dist/css/AdminLTE.min.css')}}">

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/favicon.ico')}}">

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            @includeIf('errors.error')
            <div class="login-box-body mx-3">
                <div class="text-center" style="margin-bottom: 30px">
                    <img src="{{asset('backend/assets/logo.jpg')}}" style="height: 170px;width: 200px"/>
                </div>
                <form method="post" action="{{route('login.store')}}">
                    @csrf
                    <div class="form-group has-feedback">
                        <input type="text" name="user_name" value="sharif" class="form-control" required placeholder="Username" autocomplete="off">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" value="password" class="form-control" required placeholder="Password" autocomplete="off">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row" style="padding: 25px 0 15px 20px">
                        <div class="col-xs-8 ">
                            <div class="checkbox icheck ml-4">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <div class="text-center">
                    <a href="{{route('password.request')}}"><h5>Forget Password</h5></a>
                </div>
            </div>
            <!-- /.login-box-body -->
        </div>

        <script src="{{asset('backend/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    </body>
</html>
