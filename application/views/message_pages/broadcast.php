<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 25/07/2017
 * Time: 11:52
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
                <button type="button" class="navigation_button ">Dashboard</button>
                <button type="button" class="navigation_button nav_selected">Messages</button>
                <button type="button" class="navigation_button">Contact</button>
                <button type="button" class="navigation_button">Services</button>
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
                <button type="button" class="navigation_button">Logout</button>
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
                        <button type="button" class="sms_button ">Conversation</button>
                        <button type="button" class="sms_button selected">Broadcast</button>
                        <button type="button" class="sms_button">Scheduled</button>
                        <button type="button" class="sms_button">All messages</button>
                        <button type="button" class="sms_button">Incoming</button>
                        <button type="button" class="sms_button">Outgoing</button>
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
