<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 7/18/2017
 * Time: 10:45 AM
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>create account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/sheet1.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/sheet2.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/demosheet.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/login-sheet.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/css/bootstrap.css">
</head>
<body class="body" style="background-color: #F6DDCC">
<div class="container">
    <div class="col-lg-6 col-sm-6 col-xs-6" style="margin: auto">
        <div class="jumbotron paragraph" style="margin-top: 20px" >

            <p class="please-create">Enter your details to create account</p>
            <p>Once you have created an account you can now be able to use TemboSMS messaging platform</p>

        <form action="<?php echo base_url()?>index.php/Auth/register" method="post">
        <div class="form-group">
            <p class="paragraph">Already have an account? <a href="<?php echo base_url();?>index.php/Auth/login_user" class="paragraph-link">Login</a></p>

            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success"> <?php echo $_SESSION['success'] ?> </div>
                <?php
            }
            ?>

            <?php echo validation_errors('<div class = "alert alert-danger">','</div>'); ?>

            <label for="organization">Organization name:</label>
            <input type="text" class="form-control paragraph" id="email" placeholder="Enter your organization name" name="organization_name">
        </div>

            <div class="form-group">
                <label for="name">Your name:</label>
                <input type="text" class="form-control paragraph" id="name" placeholder="Enter your name" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control paragraph" id="email" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control paragraph" id="pwd" placeholder="Enter password" name="password">
            </div>

            <div class="form-group">
                <label for="pwd">Re-enter Password:</label>
                <input type="password" class="form-control paragraph" id="pwd2" placeholder="Confirm password" name="password2">
            </div>

            <p> By clicking REGISTER button you agree TemboSMS's <a href="<?php echo base_url();?>my_views/php_pages/login.php">Terms of services</a>  </p>

        <button type="submit" class="btn btn-lg btn-success paragraph" name="register">REGISTER</button>
        </form>
    </div>
    </div>
</div>
</body>
</html>
