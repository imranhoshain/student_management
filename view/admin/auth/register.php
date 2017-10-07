<?php
session_start();
include_once '../../../vendor/autoload.php';
$auth = new App\admin\auth\Auth;
$auth->set($_POST)->store();
?>
    <!DOCTYPE html>
    <html lang="en" data-textdirection="ltr">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Register Page - Robust Free Bootstrap Admin Template</title>
        <base href="http://localhost/imran/oop_project/student_management/">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="assets/admin/app-assets/css/bootstrap.css">
        <!-- font icons-->
        <link rel="stylesheet" type="text/css" href="assets/admin/app-assets/fonts/icomoon.css">
        <!-- Font-Awesome icons-->
        <link rel="stylesheet" type="text/css" href="assets/admin/app-assets/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="assets/admin/app-assets/vendors/css/extensions/pace.css">
        <!-- END VENDOR CSS-->
        <!-- BEGIN ROBUST CSS-->
        <link rel="stylesheet" type="text/css" href="assets/admin/app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="assets/admin/app-assets/css/app.css">
        <link rel="stylesheet" type="text/css" href="assets/admin/app-assets/css/colors.css">
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="assets/admin/app-assets/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="assets/admin/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
        <link rel="stylesheet" type="text/css" href="assets/admin/app-assets/css/core/colors/palette-gradient.css">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/style.css">

        <!-- My Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/admin/css/style.css">
        <!-- END Custom CSS-->
    </head>

    <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="flexbox-container">
                        <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                                <div class="card-header no-border">
                                    <div class="card-title text-xs-center">
                                        <div class="p-1"><img alt="branding logo" src="assets/admin/app-assets/images/logo/robust-logo-dark.png"></div>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Create Account</span></h6>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form class="form-horizontal form-simple" action="" method="post" novalidate>
                                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                                <input type="text" name="user" class="form-control form-control-lg input-lg" id="user-name" placeholder="User Name">
                                                <div class="form-control-position">
                                                    <i class="icon-head"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                                <input type="email" name="email" class="form-control form-control-lg input-lg" id="user-email" placeholder="Your Email Address" required>
                                                <div class="form-control-position">
                                                    <i class="icon-mail6"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" name="password" class="form-control form-control-lg input-lg" id="user-password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="icon-key3"></i>
                                                </div>
                                            </fieldset>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Register</button>
                                        </form>
                                    </div>
                                    <p class="text-xs-center">Already have an account ? <a href="view/admin/auth/login.php" class="card-link">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <?php
include_once '../include/footer.php';
?>