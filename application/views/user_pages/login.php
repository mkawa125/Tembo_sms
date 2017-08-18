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
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/font-awesome/css/font-awesome.min.css">

    <style>
        .tembo-head {
            font-size: 18px;
            color: #E14A25;
            font-weight: bold;
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            text-align: center;
        }

        .btn-primary {
            border-radius: 0;
        }

        .btn-success {
            border-radius: 0;
        }

    </style>

</head>
<body class="body">
<div class="box-large">
    <p class="tembo-head">TEMBOTEL MOBILE MESSAGING PLATFORM</p>
    <div class="box" style="background-color: rgb(224, 255, 255)">
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

                <?php echo validation_errors('<div class = "alert alert-danger">', '</div>'); ?>

                <?php
                $error_msg = $this->session->flashdata('error_msg');
                if ($error_msg) {
                    ?>
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
                <button type="submit" class="btn btn-primary paragraph" style="margin-right: 10px" name="login">LOGIN
                </button>
                <a href="<?php echo base_url() ?>index.php/Auth/register">
                    <button type="button" class="btn btn-success paragraph" name="register">CREATE ACCOUNT</button>
                </a>
            </div>

            <div style="margin-top: 20px">
                <a href="register.php" class="paragraph-link">forgot password? </a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

