<?php
/**
 * Created by PhpStorm.
 * User: Saidi Dahabu
 * Date: 25/07/2017
 * Time: 15:16
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tembotel: Messages(0)</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/sheet1.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/sheet2.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/demosheet.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/services_sheet.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/font-awesome/css/font-awesome.min.css">

    <style>
        .fa{
            color: 	#282b2f;
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
                <img src="http://localhost/Tembo_sms/images/logo.png" width="100%" style="margin-top: 0px">
            </div>
            <ul style="list-style: none">
                <li><a href="<?php echo base_url()?>index.php/Redirect_controller/dashboard"><button type="button" class="navigation_button"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</button></a></li>
                <li><a href="<?php echo base_url()?>index.php/Redirect_controller/messages"><button type="button" class="navigation_button"><i class="fa fa-envelope" aria-hidden="true"></i>Messages</button></a></li>
                <li><a href="#"><button type="button" class="navigation_button"><i class="fa fa-address-book" aria-hidden="true"></i>Contact</button></a></li>
                <li><a href="<?php echo base_url()?>index.php/Redirect_controller/services"><button type="button" class="navigation_button nav_selected"><i class="fa fa-server" aria-hidden="true"></i>Services</button></a></li>
                <li><a href="#"><button type="button" class="navigation_button"><i class="fa fa-mobile" aria-hidden="true" style="font-size: 30px"></i>Phones</button></a></li>
                <li><a href="<?php echo base_url()?>index.php/Redirect_controller/accounts"><button type="button" class="navigation_button "><i class="fa fa-credit-card" aria-hidden="true"></i>Account</button></a></li>
                <br>
                <br>


                <li><a href="#"><button type="button" class="navigation_button"><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $_SESSION['email']?></button></a></li>
                <li><a href="#"><button type="button" class="navigation_button"><i class="fa fa-folder" aria-hidden="true"></i><?php echo $_SESSION['organization_name']?></button></a></li>
                <li><a href="#"><button type="button" class="navigation_button"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>Upgrade plans</button></a></li>
                <li><a href="#"><button type="button" class="navigation_button"><i class="fa fa-question-circle" aria-hidden="true"></i>Documentation</button></a></li>
                <li><a href="#"><button type="button" class="navigation_button"><i class="fa fa-phone-square" aria-hidden="true"></i>Contact support</button></a></li>
                <li><a href="<?php echo base_url()?>index.php/Auth/logout"><button type="button" class="navigation_button"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</button></a></li>
            </ul>

        </div>

        <div class="col-sm-10">
            <div class="row service-row" style="border-bottom: solid 1px rgb(200,200,200);">
                <div class="service_heading">
                    <h4 class="service-row">Add automated services</h4>
                </div>
            </div>

            <div class="service_content">
                <a href="#" ><button type="button" class="btn btn-success" href="#">Text</button></a>
                <a href="#"><button type="button" class="btn btn-warning" href="#">Voice</button></a>
                    <ul class="list-group">

                        <li class="list-group-item">
                            <a href="#"><div class="service-link">Subscription</div>
                                <div class="nyeusi">Let people subscribe or unsubscribe by sending an SMS keyword. <span class="badge"></span></div></a></li>


                        <li class="list-group-item">
                            <a href="#"> <div class="service-link"> Auto-Reply</div>
                                <div class="nyeusi">Send an automatic SMS reply to incoming text messages or phone calls.<span class="badge"></span></div></a></li>


                        <li class="list-group-item">
                            <a href="#"> <div class="service-link">Poll</div>
                                <div class="nyeusi">Ask one or more questions and collect responses via SMS. <span class="badge"></span></div></a></li>


                        <li class="list-group-item">
                            <a href="#"> <div class="service-link">Webhook API</div>
                                 <div class="nyeusi"> Notify your server via the Webhook API when an incoming message is received.<span class="badge"></span></div></a></li>


                        <li class="list-group-item">
                            <a href="#"> <div class="service-link">Custom Actions</div>
                                <div class="nyeusi">Define actions to run automatically, and visually create logic flows.<span class="badge"></span></div></a></li>


                        <li class="list-group-item">
                            <a href="#"> <div class="service-link">Cloud Script API</div>
                                <div class="nyeusi">Write a script to automatically handle incoming messages.<span class="badge"></span></div></a></li>
                    </ul>

            </div>
        </div>
    </div>
</div>
</body>
</html>