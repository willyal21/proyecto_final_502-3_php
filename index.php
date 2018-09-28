<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Transportes Inverse | Ingreso</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="libs/ionicons/css/ionicons.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
<!--     <a href="../../index2.html"><b>Transportes</b>Inverse</a> -->
    <a><b>VEN</b> Ticas <b>PV</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa los datos para iniciar sesion</p>

<!--     <form action="pages/ventas/catalogo.php" method="post"> -->
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" id="nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recuerdame
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="login()">Ingresar</button>
        </div>
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="login()"><b>Soy usuario invitado</b></button>
        </div>
        <!-- /.col -->
      </div>
<!--     </form> -->

<!--     <div class="social-auth-links text-center"> -->
<!--       <p>- OR -</p> -->
<!--       <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using -->
<!--         Facebook</a> -->
<!--       <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using -->
<!--         Google+</a> -->
<!--     </div> -->
    <!-- /.social-auth-links -->

    <br><p align="center"><a href="#">Olvid&#233; mi contrase&ntilde;a</a></p>
<!--     <br> -->
<!--     <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.js"></script>
<!-- General -->
<!-- <script src="dist/js/general.js"></script> -->
<!-- Login -->
<script src="dist/js/general.js"></script>
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
