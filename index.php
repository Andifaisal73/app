<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>SEKOLAH TINGGI TEKNOLOGI DUTA BANGSA</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./home/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./home/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./home/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="home/assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="./home/assets/css/pages/auth-light.css" rel="stylesheet" />
    <link rel="icon" href="assets/img/logo_sttdb.png" type="image/x-icon">
</head>

<body style="background-image: url('home/assets/img/sttdb.jpg'); background-size: cover; background-position: center; height: 100vh;">
    <!-- Konten halamanmu -->

    <div class="content">
    <div class="brand ">
    <img src="home/assets/img/logo_sttdb.png"alt="Logo" width="200" height="200">
    <p><h5 style="color: white; font-weight: bold;">SEKOLAH TINGGI TEKNOLOGI DUTA BANGSA</h5></p>
        </div>
        <form id="login-form" method="post" action="proses_login.php">
            <h2 class="login-title">PERPUSTAKAAN STTDB Silahkan Log In</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                    <input class="form-control" type="text" name="username" placeholder="Username" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <a href="forgot_password.php">Forgot password?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Login</button>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="./home/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./home/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./home/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="./home/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="home/assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    username: {
                        required: true,
                        username: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>