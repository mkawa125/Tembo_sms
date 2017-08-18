<?php
/**
 * Created by PhpStorm.
 * User: Saidi Dahabu
 * Date: 25/07/2017
 * Time: 11:53
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
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/font-awesome/css/font-awesome.min.css">

    <!-- JS code -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
    </script>
    <!--JS below-->

    <style>
        .fa {
            color: #282b2f;
            font-size: 20px;
            margin-right: 15px;
        }

        .fa2 {
            font-size: small;
        }

        .contact_search {
            border-radius: 4px;
            border: 1px solid rgb(200, 200, 200);
            width: 150px;
            height: 35px;
            padding: 5px;
            margin: 20px 1px 10px 30px;
            font-size: small;
        }

        .icon_search {
            border-radius: 4px;
            border: 1px solid rgb(200, 200, 200);
            width: 40px;
            height: 35px;
            padding: 5px;
        }

        .fa-search {
            color: dodgerblue;
        }

        .listing {
            border-bottom: 2px solid rgb(200, 200, 200);
        }

        .default {
            background-color: white;
            border: solid 2px rgb(200, 200, 200);
            border-radius: 4px;
            font-size: small;
        }

        .default:hover {
            color: dodgerblue;
            background: rgb(200, 200, 200);
            cursor: pointer;
        }

        .drop_down {
            position: relative;
            display: inline-block;
        }

        .drop_down_content {
            display: none;
            position: absolute;
            right: -20px;
            background-color: #f9f9f9;
            min-width: 160px;
            z-index: 1;
            border: 2px solid rgb(200, 200, 200);
            border-radius: 8px;
            margin-top: 2px;
            font-size: small;

        }

        .drop_down_content a {
            color: black;
            padding: 5px 10px;
            text-decoration: none;
            display: block;
            cursor: pointer;
        }

        .drop_down_content a:hover {
            background-color: #5bc0de;
        }

        .drop_down:hover .drop_down_content {
            display: block;
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
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/dashboard">
                        <button type="button" class="navigation_button"><i class="fa fa-home" aria-hidden="true"></i>Dashboard
                        </button>
                    </a></li>
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/messages">
                        <button type="button" class="navigation_button nav_selected"><i class="fa fa-envelope"
                                                                                        aria-hidden="true"></i>Messages
                        </button>
                    </a></li>
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/contacts">
                        <button type="button" class="navigation_button"><i class="fa fa-address-book"
                                                                           aria-hidden="true"></i>Contact
                        </button>
                    </a></li>
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/services">
                        <button type="button" class="navigation_button"><i class="fa fa-server" aria-hidden="true"></i>Services
                        </button>
                    </a></li>
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/phone">
                        <button type="button" class="navigation_button"><i class="fa fa-mobile" aria-hidden="true"
                                                                           style="font-size: 30px"></i>Phones
                        </button>
                    </a></li>
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/accounts">
                        <button type="button" class="navigation_button "><i class="fa fa-credit-card"
                                                                            aria-hidden="true"></i>Account
                        </button>
                    </a></li>
                <br>
                <br>


                <li><a href="<?php echo base_url() ?>index.php/Account_controller/personal_settings">
                        <button type="button" class="navigation_button"><i class="fa fa-user-circle"
                                                                           aria-hidden="true"></i><?php echo $_SESSION['email'] ?>
                        </button>
                    </a></li>
                <li><a href="<?php echo base_url() ?>index.php/Redirect_controller/user_projects">
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
            <div class="row" style="border-bottom: solid 1px rgb(200,200,200);">

                <div class="col-sm-7" style="background-color: white">
                    <h5 style="margin: 10px auto 1px 3px">Messages</h5>
                </div>

                <div class=" col-sm-5" style="background-color: white">

                    <!-- button trigger model -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"
                            style="margin-left: 140px">New Message
                    </button>
                    <!-- modal start -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="sms-modal"><b>Message</b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="from"><b>From:</b></label>
                                            <div class="select">
                                                <label for="select">
                                                    <select style="padding: 8px">
                                                        <option><0717495198></option>
                                                        <option><+255 717125698></option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="des"><b>To</b>:</label>
                                            <input type="text" class="form-control" id="des"
                                                   placeholder="phone numbers or groups">
                                        </div>
                                        <div class="form-group">
                                            <label for="mess"><b>Message</b>:</label>
                                            <textarea rows="4" class="form-control" id="mess"
                                                      placeholder="Type your message"></textarea>
                                        </div>
                                        <button type="button" class="btn default" style="border: 1px solid dodgerblue">
                                            schedule
                                        </button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Clear</button>
                                    <button type="button" class="btn btn-primary">SEND SMS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal end -->

                    <div class="drop_down">
                        <button type="button" class="btn btn-default default" style="margin: 8px 3px 8px 3px">Call
                        </button>
                        <div class="drop_down_content">
                            <a href="#" class="listing">Person-to-person call</a>
                            <a href="#" class="listing">Text-to-speech call</a>
                            <a href="#" class="listing">Recorded audio call</a>
                            <a href="#" class="listing">New IVR call flow</a>
                        </div>
                    </div>


                    <div class="drop_down">
                        <button type="button" class="btn btn-default default" style="margin: 8px 3px 8px 3px">More
                        </button>
                        <div class="drop_down_content">
                            <a href="#" class="listing">New campaign</a>
                            <a href="#" class="listing">Import messages to send</a>
                            <a href="#" class="listing">Import schedule</a>
                            <a href="#" class="listing">Export messages</a>
                            <a href="#" class="listing">Manage labels</a>
                            <a href="#" class="listing">View statistics</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="">
                <div class="col-sm-3 message_border">
                    <input type="text" name="search" placeholder="Search" class="contact_search">
                    <button type="submit" name="search" class="icon_search"><i class="fa fa-search"
                                                                               aria-hidden="true"></i></button>

                    <div class="box_message">
                        <a href="<?php echo base_url() ?>index.php/messages/conversations">
                            <button type="button" class="sms_button"><i class="fa fa-exchange fa2"
                                                                        aria-hidden="true"></i>Conversation
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/messages/broadcast">
                            <button type="button" class="sms_button"><i class="fa fa-rss fa2" aria-hidden="true"></i>Broadcast
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/messages/scheduled">
                            <button type="button" class="sms_button"><i class="fa fa-clock-o fa2"
                                                                        aria-hidden="true"></i>Scheduled
                            </button>
                            <a href="<?php echo base_url() ?>index.php/messages/all_messages">
                                <button type="button" class="sms_button "><i class="fa fa-align-justify fa2"
                                                                             aria-hidden="true"></i>All messages
                                </button>
                            </a>
                            <a href="<?php echo base_url() ?>index.php/messages/incoming_sms">
                                <button type="button" class="sms_button"><i class="fa fa-arrow-right fa2"
                                                                            aria-hidden="true"></i>Incoming
                                </button>
                            </a>
                            <a href="<?php echo base_url() ?>index.php/messages/outgoing_sms">
                                <button type="button" class="sms_button selected"><i class="fa fa-arrow-left fa2"
                                                                                     aria-hidden="true"></i>Outgoing
                                </button>
                            </a>
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
