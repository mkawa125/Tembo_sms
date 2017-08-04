<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
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
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/css/bootstrap-reboot.css">

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 incoming_navbar">
            <div class="row logo_div" style="background-color: red">
                <img src="http://localhost/Tembo_sms/images/logo.png" width="100%" style="margin-top: 0px">
            </div>

            <ul>
                    <li><button type="button" class="navigation_button ">Dashboard</button>
                    <button type="button" class="navigation_button">Messages</button>
                    <button type="button" class="navigation_button">Contact</button>
                    <button type="button" class="navigation_button nav_selected">Services</button>
                    <button type="button" class="navigation_button">Phones</button>
                    <button type="button" class="navigation_button">Account</button>
                    <br>
                    <br>
                    <br>
                    <button type="button" class="navigation_button">dahabusaidi@gmail.com</button>
                    <button type="button" class="navigation_button">Company profile</button>
                    <button type="button" class="navigation_button">Upgrade plans</button>
                    <button type="button" class="navigation_button">Documentation</button>
                    <button type="button" class="navigation_button">Contact support</button>
                    <a href="<?php echo base_url()?>index.php/Auth/logout" <button type="button" class="navigation_button">Logout</button></a></li>
            </ul>

        </div>

        <div class="col-sm-10">
            <div class="row service-row" style="border-bottom: solid 1px rgb(200,200,200);">
                <div class="service_heading">
                    <h4 class="service-row">Add automated services</h4>
                </div>
            </div>

            <div class="service_content">
                <a href="messages.php" ><button type="button" class="btn btn-success" href="messages.php">Text</button></a>
                <a href="messages.php"><button type="button" class="btn btn-warning" href="messages.php">Voice</button></a>
                    <ul class="list-group">

                        <li class="list-group-item">
                            <a href="messages.php"><div class="service-link">Subscription</div>
                                <div class="nyeusi">Let people subscribe or unsubscribe by sending an SMS keyword. <span class="badge">12</span></div></a></li>


                        <li class="list-group-item">
                            <a href="messages.php"> <div class="service-link"> Auto-Reply</div>
                                <div class="nyeusi">Send an automatic SMS reply to incoming text messages or phone calls.<span class="badge">5</span></div></a></li>


                        <li class="list-group-item">
                            <a href="messages.php"> <div class="service-link">Poll</div>
                                <div class="nyeusi">Ask one or more questions and collect responses via SMS. <span class="badge">3</span></div></a></li>


                        <li class="list-group-item">
                            <a href="messages.php"> <div class="service-link">Webhook API</div>
                                 <div class="nyeusi"> Notify your server via the Webhook API when an incoming message is received.<span class="badge">12</span></div></a></li>


                        <li class="list-group-item">
                            <a href="messages.php"> <div class="service-link">Custom Actions</div>
                                <div class="nyeusi">Define actions to run automatically, and visually create logic flows.<span class="badge">5</span></div></a></li>


                        <li class="list-group-item">
                            <a href="messages.php"> <div class="service-link">Cloud Script API</div>
                                <div class="nyeusi">Write a script to automatically handle incoming messages.<span class="badge">3</span></div></a></li>
                    </ul>

            </div>
        </div>
    </div>
</div>
</body>
</html>