<?php
/**
 * Created by PhpStorm.
 * User: Saidi Dahabu
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
    <link rel="stylesheet" type="text/css" href="http://localhost/Tembo_sms/font-awesome/css/font-awesome.min.css">


    <style>
        .badge-primary{
            border-radius: 4px;
            color: white;
            padding: 5px 20px 5px 20px ;
            font-size: 20px;
            margin: 100px 5px auto;
            width: 80px;
            text-align: center;
        }
        .badge-warning{
            border-radius: 4px;
            color: white;
            padding: 5px 20px 5px 20px ;
            font-size: 20px;
            margin: 100px 5px auto;
            width: 80px;
            text-align: center;
        }
        .badge-default{
            border-radius: 4px;
            border: 2px solid rgb(200, 200, 200);
            color: black;
            padding: 5px 20px 5px 20px ;
            font-size: 20px;
            margin: 100px 5px auto;
            width: 80px;
            text-align: center;
            background-color: white;
        }
        .badge-success{
            border-radius: 4px;
            color: white;
            padding: 5px 20px 5px 20px ;
            font-size: 20px;
            margin: 100px 5px auto;
            width: 80px;
            text-align: center;
        }
        .fa{
            color: 	#282b2f;
            font-size: 20px;
            margin-right: 15px;
        }
        .fa select{
            color: 	#228B22;
        }
    </style>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 incoming_navbar">
            <div class="row logo_div" style="background-color: #333">
                <img src="http://localhost/Tembo_sms/images/logo.png" width="100%" style="margin-top: 0px">
                    </div>

                    <ul style="list-style: none">
                        <li><a href="<?php echo base_url()?>index.php/Redirect_controller/dashboard"><button type="button" class="navigation_button nav_selected"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</button></a></li>
                        <li><a href="<?php echo base_url()?>index.php/Redirect_controller/messages"><button type="button" class="navigation_button"><i class="fa fa-envelope" aria-hidden="true"></i>Messages</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button"><i class="fa fa-address-book" aria-hidden="true"></i>Contact</button></a></li>
                        <li><a href="<?php echo base_url()?>index.php/Redirect_controller/services"><button type="button" class="navigation_button"><i class="fa fa-server" aria-hidden="true"></i>Services</button></a></li>
                        <li><a href="#"><button type="button" class="navigation_button"><i class="fa fa-mobile" aria-hidden="true" style="font-size: 30px"></i>Phones</button></a></li>
                        <li><a href="<?php echo base_url()?>index.php/Redirect_controller/accounts"><button type="button" class="navigation_button"><i class="fa fa-credit-card" aria-hiden="true"></i>Account</button></a></li>
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


            <div class="col-sm-10" style="padding: 15px">
                <div class="row" style="border-bottom: 1px solid rgb(200,200,200">
                    <div class="col-sm-8"><h4 style="padding: 15px"><?php echo $_SESSION['organization_name']?></h4></div>
                    <div class="col-sm-4">
                        <a href="#"> <button type="submit" class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i>Edit setting</button> </a>
                        <a href="#"> <button type="submit" class="btn btn-default">more</button></a>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-sm-3 small_column">
                            <h4 class="navigation">Setup progress</h4>
                            <p><span class="badge-warning">✔</span> <a href="#">Configure how you send and receive messages</a></p>
                            <p><span class="badge-default">5</span> <a href="#">Test sending and receiving messages</a></p>
                            <p><span class="badge-default">8</span><a href="#">Set up your messages services or campaigns</a></p>
                            <p>If you have any question,</p>
                            <a href="#">contact support</a>
                        </div>

            <div class="col-sm-3 small_column">
                    <h4 class="navigation">Messages</h4>
                    <p><span class="badge-primary">0</span><a href="#"> Received today</a></p>
                    <p style="margin-top: 10px"><span class="badge-warning">1</span><a href="#"> Sent today</a></p>
                    <br>
                    <ul class="listing">
                        <li><a href="#"> New message</a></li>
                        <li><a href="#">New campaign</a></li>
                        <li><a href="#">Export messages</a></li>
                    </ul>

            </div>
                <div class="col-sm-3 small_column">
                    <h4 class="navigation">Contact</h4>
                        <div class="half_black">
                            <p><span class="badge-success">5</span> <a href="#">Active today</a></p>
                            <p><span class="badge-default">5</span> <a href="#">New contacts</a></p>
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
