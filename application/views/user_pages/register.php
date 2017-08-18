<?php
/**
 * Created by PhpStorm.
 * User: Saidi Dahabu
 * Date: 7/18/2017
 * Time: 10:45 AM
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>create account</title>

    <!-- including the stylesheets and script files -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/sheet1.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/sheet2.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/demosheet.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/login-sheet.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/css/bootstrap.css">

    <style>
        .tembo-head {
            font-size: 18px;
            color: #E14A25;
            font-weight: bold;
            font-family: "Lato", "proxima-nova", "Helvetica Neue", Arial, sans-serif;
        }

        .jumbotron {
            background-color: rgb(224, 255, 255);
            border: 1px solid rgb(200, 200, 200);
        }
    </style>
</head>
<body class="body" style="background-color: rgb(188, 143, 143)">
<div class="container">
    <div class="col-lg-6 col-sm-6 col-xs-6" style="margin: auto">
        <div class="jumbotron paragraph" style="margin-top: 20px">

            <p class="tembo-head">TEMBOTEL MOBILE MESSAGING PLATFORM</p>

            <p style="color: dodgerblue">Enter your details to create account</p>
            <p>Once you have created an account you can now be able to use TemboSMS messaging platform</p>

            <form action="<?php echo base_url() ?>index.php/Auth/register" method="post">
                <div class="form-group">
                    <p class="paragraph">Already have an account? <a
                                href="<?php echo base_url(); ?>index.php/Auth/login_user"
                                class="paragraph-link">Login</a></p>

                    <!--Setting the user sessions if the user was succesfull registered -->
                    <?php if (isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success"> <?php echo $_SESSION['success'] ?> </div>
                        <?php
                    }
                    ?>

                    <?php echo validation_errors('<div class = "alert alert-danger">', '</div>'); ?>

                    <!-- Displaying the error message if the user exist-->
                    <?php
                    $error_msg = $this->session->flashdata('error_msg');
                    if ($error_msg) {
                        ?>
                        <div class="alert-danger"><?php echo $error_msg;
                            ?></div>
                        <?php
                    }
                    ?><br>

                    <label for="organization">Organization name:</label>
                    <input type="text" class="form-control paragraph" id="email"
                           placeholder="Enter your organization name" name="organization_name">
                </div>

                <div class="form-group">
                    <label for="name">Your name:</label>
                    <input type="text" class="form-control paragraph" id="name" placeholder="Enter your name"
                           name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control paragraph" id="email" placeholder="Enter email"
                           name="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control paragraph" id="pwd" placeholder="Enter password"
                           name="password">
                </div>

                <div class="form-group">
                    <label for="pwd">Re-enter Password:</label>
                    <input type="password" class="form-control paragraph" id="pwd2" placeholder="Confirm password"
                           name="password2">
                </div>

                <p> By clicking REGISTER button you agree TemboSMS's <a
                            href="<?php echo base_url(); ?>my_views/php_pages/login.php">Terms of services</a></p>

                <button type="submit" class="btn btn-lg btn-success paragraph" name="register" style="border-radius: 0">
                    REGISTER
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
