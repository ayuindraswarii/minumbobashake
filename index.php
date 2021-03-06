<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container" style="padding-top: 90px;">

        <form class="form-signin" action="cek_login.php" method="POST">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <p class="element-name" style="font-size: 20px;">LOGIN</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:20px !important;">
                    <input type="text" class="form-text" name="username" required>
                    <span class="bar"></span>
                    <label style="font-size: 17px;">Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:20px !important;">
                    <input type="password" class="form-text" name="password" required>
                    <span class="bar"></span>
                    <label style="font-size: 17px;">Password</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:20px !important;color: #000">
                    <label style="font-size: 17px;">Posisi</label>
                    <select class="form_login" name="level">
                      <option value="employee">Employee</option>
                      <option value="admin">Admin</option>
                    </select>
                  </div>
                  <input type="submit" class="btn col-md-12" value="Sign In"/>
              </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>