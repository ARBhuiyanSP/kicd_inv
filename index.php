<?php session_start(); 
include 'connection/connect.php';
include 'includes/login_process.php';
?>
<style>
body {
 background-image: url("bg.jpg");
}
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/fav.png">
        <title>Inventory</title>
        <!-- Custom fonts for this template-->
        <link href="css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>
    <body class="bg-primary">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header" style="text-align: center;">
                    <img src="images/logo-wide.png" />
                </div>
                <div class="card-body">
                    <form id="login_form" name="login_form" method="post">
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email address" autocomplete="off">
                            <?php if (isset($_SESSION['error_message']['email_empty']) && !empty($_SESSION['error_message']['email_empty'])) { ?>
                                <div class="alert alert-warning">
                                    <strong>Warning!</strong> <?php echo $_SESSION['error_message']['email_empty']; ?>
                                </div>
                                <?php
                                unset($_SESSION['error_message']['email_empty']);
                            }
                            ?>
                            <?php if (isset($_SESSION['error_message']['email_valid']) && !empty($_SESSION['error_message']['email_valid'])) { ?>
                                <div class="alert alert-warning">
                                    <strong>Warning!</strong> <?php echo $_SESSION['error_message']['email_valid']; ?>
                                </div>
                                <?php
                                unset($_SESSION['error_message']['email_valid']);
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                            <?php if (isset($_SESSION['error_message']['password_empty']) && !empty($_SESSION['error_message']['password_empty'])) { ?>
                                <div class="alert alert-warning">
                                    <strong>Warning!</strong> <?php echo $_SESSION['error_message']['password_empty']; ?>
                                </div>
                                <?php
                                unset($_SESSION['error_message']['password_empty']);
                            }
                            ?>
                        </div>
                        <input type="submit" name="login_submit" value="Login" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
