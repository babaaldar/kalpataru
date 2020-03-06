<!DOCTYPE html>
<html>
<head>
    <?php

    include "include/connection.php";
    include "include/html_head.php";

    ?>
</head>
<body class="hold-transition login-page" style="background-image:url('include/dist/img/bgimg.jpeg'); ">
<div class="login-box offset-sm-8">
    <div class="login-logo">
        <!--        <a href="#"><b>Admin</b>LTE</a>-->
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in </p>

            <form action="./verifyuser.php" method="post">
                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="User name" id="uname" name="uname">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">

                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!---->
            <!--            <div class="social-auth-links text-center mb-3">-->
            <!--                <p>- OR -</p>-->
            <!--                <a href="#" class="btn btn-block btn-primary">-->
            <!--                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook-->
            <!--                </a>-->
            <!--                <a href="#" class="btn btn-block btn-danger">-->
            <!--                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+-->
            <!--                </a>-->
            <!--            </div>-->

            <!--            <p class="mb-1">-->
            <!--                <a href="forgot-password.html">I forgot my password</a>-->
            <!--            </p>-->
            <!--            <p class="mb-0">-->
            <!--                <a href="register.html" class="text-center">Register a new membership</a>-->
            <!--            </p>-->
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


</body>
</html>
