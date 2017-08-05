<?php
/**
 * Created by PhpStorm.
 * User: Saidi Dahabu
 * Date: 04/08/2017
 * Time: 16:53
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tembo_sms security</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/demosheet.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/account.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/font-awesome/css/font-awesome.min.css">


    <style>
        .fa {
            color: #282b2f;
            font-size: 20px;
            margin-right: 15px;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 incoming_navbar">
            <div class="row logo_div" style="background-color: red">
                <img src="http://localhost/Tembo_sms/images/logo.png" width="100%" style="margin-top: 0">
            </div>

            <ul style="list-style: none">
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/dashboard">
                        <button type="button" class="navigation_button"><i class="fa fa-home" aria-hidden="true"></i>Dashboard
                        </button>
                    </a></li>
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/messages">
                        <button type="button" class="navigation_button"><i class="fa fa-envelope"
                                                                           aria-hidden="true"></i>Messages
                        </button>
                    </a></li>
                <li><a href="#">
                        <button type="button" class="navigation_button"><i class="fa fa-address-book"
                                                                           aria-hidden="true"></i>Contact
                        </button>
                    </a></li>
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/services">
                        <button type="button" class="navigation_button"><i class="fa fa-server" aria-hidden="true"></i>Services
                        </button>
                    </a></li>
                <li><a href="#">
                        <button type="button" class="navigation_button"><i class="fa fa-mobile" aria-hidden="true"
                                                                           style="font-size: 30px"></i>Phones
                        </button>
                    </a></li>
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/accounts">
                        <button type="button" class="navigation_button nav_selected"><i class="fa fa-credit-card"
                                                                                        aria-hidden="true"></i>Account
                        </button>
                    </a></li>
                <br>
                <br>


                <li><a href="#">
                        <button type="button" class="navigation_button"><i class="fa fa-user-circle"
                                                                           aria-hidden="true"></i><?php echo $_SESSION['email'] ?>
                        </button>
                    </a></li>
                <li><a href="#">
                        <button type="button" class="navigation_button"><i class="fa fa-folder"
                                                                           aria-hidden="true"></i><?php echo $_SESSION['organization_name'] ?>
                        </button>
                    </a></li>
                <li><a href="#">
                        <button type="button" class="navigation_button"><i class="fa fa-arrow-circle-o-up"
                                                                           aria-hidden="true"></i>Upgrade plans
                        </button>
                    </a></li>
                <li><a href="#">
                        <button type="button" class="navigation_button"><i class="fa fa-question-circle"
                                                                           aria-hidden="true"></i>Documentation
                        </button>
                    </a></li>
                <li><a href="#">
                        <button type="button" class="navigation_button"><i class="fa fa-phone-square"
                                                                           aria-hidden="true"></i>Contact support
                        </button>
                    </a></li>
                <li><a href="<?php echo base_url() ?>index.php/Auth/logout">
                        <button type="button" class="navigation_button"><i class="fa fa-power-off"
                                                                           aria-hidden="true"></i>Logout
                        </button>
                    </a></li>
            </ul>

        </div>

        <div class="col-sm-10">
            <div class="row" style="">
                <div class="col-sm-3 message_border">
                    <div class="box_message-acc">
                        <p class="head-acc"><?php echo $_SESSION['organization_name'] ?></p>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/billing">
                            <button type="submit" class="button-account "><i class="fa fa-credit-card"
                                                                             aria-hidden="true"></i>Billing
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/project">
                            <button type="button" class="button-account"><i class="fa fa-folder-o"
                                                                            aria-hidden="true"></i>Project
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/accounts">
                            <button type="button" class="button-account"><i class="fa fa-users" aria-hidden="true"></i>User
                                Accounts
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/org_settings">
                            <button type="button" class="button-account selected"><i class="fa fa-cog"
                                                                                     aria-hidden="true"></i>Organization
                                setting
                            </button>
                        </a>
                    </div>

                    <div class="box_message-acc">
                        <p class="head-acc"><?php echo $_SESSION['name'] ?></p>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/personal_settings">
                            <button type="submit" class="button-account"><i class="fa fa-user" aria-hidden="true"></i>Personal
                                settings
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/security">
                            <button type="button" class="button-account button-account-selected"><i class="fa fa-lock"
                                                                                                    aria-hidden="true"></i>Account
                                security
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/developer_API">
                            <button type="button" class="button-account"><i class="fa fa-code" aria-hidden="true"></i>Developer
                                API
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/organizations">
                            <button type="button" class="button-account"><i class="fa fa-globe" aria-hidden="true"></i>Organizations
                            </button>
                        </a>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="row" style="border-bottom: 1px solid rgb(200,200,200">

                        <div class="col-sm-8">
                            <h4>Billing</h4>
                        </div>

                        <div class="col-sm-4">
                            <a href="#">
                                <button class="btn-default1">Change plans</button>
                            </a>
                            <a href="#">
                                <button class="btn-default1">Add funds</button>
                            </a>
                        </div>
                    </div>


                    <h6 class="acc-head" style="border-bottom: 1px solid rgb(200,200,200">Service planning:</h6>
                    <h6 class="acc-head" style="border-bottom: 1px solid rgb(200,200,200">Remaining Credit:</h6>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
