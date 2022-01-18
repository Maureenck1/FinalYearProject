<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('interface\bower_components\bootstrap/dist\css\bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('interface\bower_components\font-awesome\css\font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('interface\bower_components\Ionicons\css\ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('interface\dist\css\AdminLTE.min.css')}}">

    <link rel="stylesheet" href="{{asset('interface\dist\css\skins\skin-green.min.css')}}">
  

  
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition login-page" >
  <div class="login-box">
    <div class="login-logo" style="text-align:center;">
      {{-- <a href="../../index2.html"><b>Admin</b>LTE</a> --}}
      
      <img src="{{asset('images/index.png')}}" class="user-image img-circle img-reponsive" width="100px" height="100px" alt="User Image">
      <h3 style="font-family:'Times New Roman', Times, serif;">User Access Management System.</h3>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Log in to start your session</p>
      {{-- <P style="margin-top:0%;color:red;text-align:center;"> <b>Use Active Directory Credentials.</b></p> --}}
      <form action= "login" method="post">
            @csrf
        <div class="form-group has-feedback">
                
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                        @foreach($errors->all() as $error)
                          <p style="color:red;" > <b>{{$error}}</b> </p>
                        @endforeach
                        {{-- @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first()}}</strong>
                            </span>
                        @enderror                           --}}
        </div>
        <div class="form-group has-feedback">

                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                    
        </div>
        <div class="row">
          <div class="col-xs-8">
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
  
  <!-- jQuery 3 -->
  <script src="{{asset('interface/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('interface/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- iCheck -->
  <script src="{{asset('interface/plugins/iCheck/icheck.min.js')}}"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
  
  
  </body></html>