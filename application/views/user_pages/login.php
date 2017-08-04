<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TemboSMS sign in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/login-sheet.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/css/bootstrap.css">

</head>
<body class="body">
<div class="box-large">
    <p class="login-head"><img src="http://localhost/Tembo_sms/images/logo.png" width="90" style="margin: 0px 5px">TEMBO_SMS MESSAGING PLATFORM</p>
    <div class="box">
        <div>
            <p class="please">Enter your details to login</p>
        </div>
        <form action="<?php echo base_url(); ?>index.php/Auth/login_user" method="POST">
            <div class="form-group">

                <?php if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success"> <?php echo $_SESSION['success'] ?> </div>
                    <?php
                }
                ?>

                <?php echo validation_errors('<div class = "alert alert-danger">','</div>'); ?>

                <?php
                $error_msg=$this->session->flashdata('error_msg');
                if($error_msg){?>
                <div class="alert-danger"><?php echo $error_msg;
                ?></div>
                <?php
                }
                ?><br>

                <label for="email" class="paragraph">Email address:</label>
                <input type="email" class="form-control" placeholder="email address" name="email">
            </div>

            <div class="form-group">
                <label for="password" class="paragraph">Enter your password:</label>
                <input type="password" class="form-control" placeholder="password" name="password">
            </div>

            <div class="checkbox">
                <label class="paragraph">
                    <input type="checkbox" class="box_check">Remember me
                </label>
            </div>

            <div>
                <button type="submit" class="btn btn-primary paragraph" style="margin-right: 10px" name="login">LOGIN</button>
                <a href="<?php echo base_url()?>index.php/Auth/register" <button type="submit" class="btn btn-success paragraph" name="register">CREATE ACCOUNT</button></a>
            </div>

            <div style="margin-top: 20px">
                <a href="register.php" class="paragraph-link">forgot password? </a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

