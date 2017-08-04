<?php
/**
 * Created by PhpStorm.
 * User: Saidi Dahabu
 * Date: 25/07/2017
 * Time: 11:54
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
                <li><a href="<?php echo base_url()?>index.php/Redirect_controller/services"><button type="button" class="navigation_button"><i class="fa fa-server" aria-hidden="true"></i>Services</button></a></li>
                <li><a href="#"><button type="button" class="navigation_button"><i class="fa fa-mobile" aria-hidden="true" style="font-size: 30px"></i>Phones</button></a></li>
                <li><a href="<?php echo base_url()?>index.php/Redirect_controller/accounts"><button type="button" class="navigation_button nav_selected"><i class="fa fa-credit-card" aria-hidden="true"></i>Account</button></a></li>
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
            <div class="row" style="border-bottom: solid 1px rgb(200,200,200);">

                <div class="col-sm-7" style="background-color: white">
                    <p>Messages</p>
                </div>

                <div class=" col-sm-5" style="background-color: white">
                    <div>
                        <button type="button" class="btn btn-success ">New Message</button>
                        <button type="button" class="btn btn-default dropdown-toggle">Call <span class="caret"></span></button>
                        <button type="button" class="btn btn-default dropdown-toggle">More<span class="caret"></span> </button>
                    </div>
                </div>
            </div>

            <div class="row" style="">
                <div class="col-sm-3 message_border">
                    <input type="text" name="search" placeholder="Search" class="search">
                    <button type="button" class="btn btn-info search_button">
                        <span class="glyphicon glyphicon-search"></span><p class="search_in">Search</p>
                    </button>

                    <div class="box_message">
                        <button type="button" class="sms_button" href="messages.php">Conversation</button>
                        <button type="button" class="sms_button" href="broadcast.php">Broadcast</button>
                        <button type="button" class="sms_button" href="scheduled.php">Scheduled</button>
                        <button type="button" class="sms_button" href="all_messages.php">All messages</button>
                        <button type="button" class="sms_button" href="ingoing_sms.php">Incoming</button>
                        <button type="button" class="sms_button selected" href="outgoing_sms.php">Outgoing</button>
                    </div>
                    <input type="checkbox" name="box" style="margin: 10px">Filters
                </div>


                <div class="col-sm-9">
                    <br>
                    <br>
                    <p>The status of the messages goes here from the database</p>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
