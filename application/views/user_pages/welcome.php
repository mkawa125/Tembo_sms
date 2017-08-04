<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 24/07/2017
 * Time: 17:54
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>code ngumu kumamaakeeee</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/sheet1.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/sheet2.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/my_css/demosheet.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/css/bootstrap.css">

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 incoming_navbar">
            <div class="row logo_div" style="background-color: red">
                <img src="http://localhost/Tembo_sms/images/logo.png" width="100%" style="margin-top: 0px">
                    </div>

                    <ul style="list-style: none">
                        <li><a href="#"><button type="button" class="navigation_button nav_selected">Dashboard</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button">Messages</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button">Contact</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button">Services</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button">Phones</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button">Account</button></a></li>
                        <br>
                        <br>
                        <br>
                        <li><a href="#"><button type="button" class="navigation_button">dahabusaidi@gmail.com</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button">Company profile</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button">Upgrade plans</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button">Documentation</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button">Contact support</button></a></li>
                        <li><a href="<?php echo base_url()?>index.php/Auth/logout"><button type="button" class="navigation_button">Logout</button></a></li>
                    </ul>

        </div>


            <div class="col-sm-10">
                <h4 class="top_navigation">TemboSMS</h4>
                    <div class="row">
                        <div class="col-sm-3 small_column">
                            <h4 class="navigation">Setup progress</h4>
                            <p><a href="#">Configure how you send and receive messages  </a></p>
                            <p><a href="#">Test sending and receiving messages  </a></p>
                            <p><a href="#">Set up your messages services or campaigns  </a></p>
                            <p>If you have any question,</p>
                            <a href="#">contact support</a>
                        </div>

            <div class="col-sm-3 small_column">
                    <h4 class="navigation">Messages</h4>
                    <p><a href="#">received today</a></p>
                    <p><a href="#">Sent today</a></p>
                    <br>
                    <ul class="listing">
                        <li><a href="#">New message</a></li>
                        <li><a href="#">New campaign</a></li>
                        <li><a href="#">Export messages</a></li>
                    </ul>

            </div>
                <div class="col-sm-3 small_column">
                    <h4 class="navigation">Contact</h4>
                        <div class="half_black">
                            <p><a href="#">Active today</a></p>
                            <p><a href="#">New contacts</a></p>
                         </div>

                    <ul class="listing">
                        <li><a href="#">Add new contacts</a></li>
                        <li><a href="#">Import contacts</a></li>
                        <li><a href="#">Export contacts</a></li>
                    </ul>
                </div>

                <div class="col-sm-3 small_column">
                    <h4 class="navigation">Services</h4>
                    <div class="black"><p>Status automated or not automated</p></div>
                    <p class="services"><a href="#">Add automated services</a></p>
                </div>

                <div class="col-sm-3 small_column">
                    <h4 class="navigation">Phones</h4>
                </div>

                <div class="col-sm-3 small_column">
                    <h4 class="navigation">Account</h4>
                        <p class="black">Test plans status</p>
                         <ul class="listing">

                        <li><a href="#">Billing</a></li>
                        <li><a href="#">User account</a></li>
                        <li><a href="#">Developer API</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
