@include('back.head')
<body class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Piknik</b>YUK</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="{{ route('login') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        @if ($errors->has('username'))
        <span class="help-block">
          <strong>{{ $errors->first('username') }}</strong>
        </span>
        @endif
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
        <div class="row">
          <div class="col-xs-8">    
            <div class="checkbox icheck">
              <label>
                <input type="checkbox">Remember Me
              </label>
            </div>                        
          </div><!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div><!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
        <a href="{{url('redirect/google')}}" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
      </div><!-- /.social-auth-links -->

      <a href="#">I forgot my password</a><br>
      <a href="register.html" class="text-center">Register a new membership</a>

    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- jQuery 2.1.4 -->
  <script src="{{url('AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="{{url('AdminLTE/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="{{url('AdminLTE/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
    });
  </script>
</body>
</html>