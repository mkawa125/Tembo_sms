<?php
/**
 * Created by PhpStorm.
 * User: Saidi Dahabu
 * Date: 04/08/2017
 * Time: 16:25
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tembo_sms personal</title>

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

        .edit {
            margin: 2px;
            padding: 2px;
            height: 27px;
            font-size: 14px;
        }

        .form-control {
            border: 1px solid rgb(200, 200, 200);
            border-radius: 0;
        }

        .six {
            margin-top: 20px;
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
                        <button type="button" class="navigation_button nav_selected"><i class="fa fa-user-circle"
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
                            <button type="submit" class="button-account button-account-selected"><i class="fa fa-user"
                                                                                                    aria-hidden="true"></i>Personal
                                settings
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/security">
                            <button type="button" class="button-account"><i class="fa fa-lock" aria-hidden="true"></i>Account
                                security
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/developer_API">
                            <button type="button" class="button-account"><i class="fa fa-code" aria-hidden="true"></i>Developer
                                API
                            </button>
                        </a>
                        <a href="<?php echo base_url() ?>index.php/Account_controller/organizations">
                            <button type="button" class="button-account "><i class="fa fa-globe" aria-hidden="true"></i>Organizations
                            </button>
                        </a>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="row" style="border-bottom: 1px solid rgb(200,200,200">

                        <div class="col-sm-8">
                            <h5 style="padding-top: 20px">Personal settings</h5>
                        </div>
                    </div>

                    <h6 style="font-size: 14px" class="six">Email Address:</h6>
                    <p><?php echo $_SESSION['email'] ?>: <a href="#">change email</a></p>

                    <div class="form-group">
                        <h6 style="font-size: 14px">Name:</h6>
                        <label for="number" class="col-xs-1 ">
                            <input class="form-control edit" id="ex2" type="text"
                                   value="<?php echo $_SESSION['name'] ?>">
                        </label>

                    </div>

                    <div class="form-group">
                        <h6 style="font-size: 14px">Phone Number:</h6>
                        <label for="number" class="col-xs-1">
                            <input class="form-control edit" id="ex2" type="text" value="">
                        </label>

                    </div>

                    <div class="form-group">
                        <h6 style="font-size: 14px">Country:</h6>
                        <label for="select" class="col-xs-2 edit">
                            <select>
                                <option value="4">Afghanistan</option>
                                <option value="248">Åland Islands</option>
                                <option value="8">Albania</option>
                                <option value="12">Algeria</option>
                                <option value="16">American Samoa</option>
                                <option value="20">Andorra</option>
                                <option value="24">Angola</option>
                                <option value="660">Anguilla</option>
                                <option value="10">Antarctica</option>
                                <option value="28">Antigua and Barbuda</option>
                                <option value="32">Argentina</option>
                                <option value="51">Armenia</option>
                                <option value="533">Aruba</option>
                                <option value="36">Australia</option>
                                <option value="40">Austria</option>
                                <option value="31">Azerbaijan</option>
                                <option value="44">Bahamas</option>
                                <option value="48">Bahrain</option>
                                <option value="50">Bangladesh</option>
                                <option value="52">Barbados</option>
                                <option value="112">Belarus</option>
                                <option value="56">Belgium</option>
                                <option value="84">Belize</option>
                                <option value="204">Benin</option>
                                <option value="60">Bermuda</option>
                                <option value="64">Bhutan</option>
                                <option value="68">Bolivia, Plurinational State of</option>
                                <option value="535">Bonaire, Sint Eustatius and Saba</option>
                                <option value="70">Bosnia and Herzegovina</option>
                                <option value="72">Botswana</option>
                                <option value="74">Bouvet Island</option>
                                <option value="76">Brazil</option>
                                <option value="86">British Indian Ocean Territory</option>
                                <option value="96">Brunei Darussalam</option>
                                <option value="100">Bulgaria</option>
                                <option value="854">Burkina Faso</option>
                                <option value="108">Burundi</option>
                                <option value="116">Cambodia</option>
                                <option value="120">Cameroon</option>
                                <option value="124">Canada</option>
                                <option value="132">Cape Verde</option>
                                <option value="136">Cayman Islands</option>
                                <option value="140">Central African Republic</option>
                                <option value="148">Chad</option>
                                <option value="152">Chile</option>
                                <option value="156">China</option>
                                <option value="162">Christmas Island</option>
                                <option value="166">Cocos (Keeling) Islands</option>
                                <option value="170">Colombia</option>
                                <option value="174">Comoros</option>
                                <option value="178">Congo</option>
                                <option value="180">Congo, the Democratic Republic of the</option>
                                <option value="184">Cook Islands</option>
                                <option value="188">Costa Rica</option>
                                <option value="384">Côte d'Ivoire</option>
                                <option value="191">Croatia</option>
                                <option value="192">Cuba</option>
                                <option value="531">Curaçao</option>
                                <option value="196">Cyprus</option>
                                <option value="203">Czech Republic</option>
                                <option value="208">Denmark</option>
                                <option value="262">Djibouti</option>
                                <option value="212">Dominica</option>
                                <option value="214">Dominican Republic</option>
                                <option value="218">Ecuador</option>
                                <option value="818">Egypt</option>
                                <option value="222">El Salvador</option>
                                <option value="226">Equatorial Guinea</option>
                                <option value="232">Eritrea</option>
                                <option value="233">Estonia</option>
                                <option value="231">Ethiopia</option>
                                <option value="238">Falkland Islands (Malvinas)</option>
                                <option value="234">Faroe Islands</option>
                                <option value="242">Fiji</option>
                                <option value="246">Finland</option>
                                <option value="250">France</option>
                                <option value="254">French Guiana</option>
                                <option value="258">French Polynesia</option>
                                <option value="260">French Southern Territories</option>
                                <option value="266">Gabon</option>
                                <option value="270">Gambia</option>
                                <option value="268">Georgia</option>
                                <option value="276">Germany</option>
                                <option value="288">Ghana</option>
                                <option value="292">Gibraltar</option>
                                <option value="300">Greece</option>
                                <option value="304">Greenland</option>
                                <option value="308">Grenada</option>
                                <option value="312">Guadeloupe</option>
                                <option value="316">Guam</option>
                                <option value="320">Guatemala</option>
                                <option value="831">Guernsey</option>
                                <option value="324">Guinea</option>
                                <option value="624">Guinea-Bissau</option>
                                <option value="328">Guyana</option>
                                <option value="332">Haiti</option>
                                <option value="334">Heard Island and McDonald Islands</option>
                                <option value="336">Holy See (Vatican City State)</option>
                                <option value="340">Honduras</option>
                                <option value="344">Hong Kong</option>
                                <option value="348">Hungary</option>
                                <option value="352">Iceland</option>
                                <option value="356">India</option>
                                <option value="360">Indonesia</option>
                                <option value="364">Iran, Islamic Republic of</option>
                                <option value="368">Iraq</option>
                                <option value="372">Ireland</option>
                                <option value="833">Isle of Man</option>
                                <option value="376">Israel</option>
                                <option value="380">Italy</option>
                                <option value="388">Jamaica</option>
                                <option value="392">Japan</option>
                                <option value="832">Jersey</option>
                                <option value="400">Jordan</option>
                                <option value="398">Kazakhstan</option>
                                <option value="404">Kenya</option>
                                <option value="296">Kiribati</option>
                                <option value="408">Korea, Democratic People's Republic of</option>
                                <option value="410">Korea, Republic of</option>
                                <option value="414">Kuwait</option>
                                <option value="417">Kyrgyzstan</option>
                                <option value="418">Lao People's Democratic Republic</option>
                                <option value="428">Latvia</option>
                                <option value="422">Lebanon</option>
                                <option value="426">Lesotho</option>
                                <option value="430">Liberia</option>
                                <option value="434">Libya</option>
                                <option value="438">Liechtenstein</option>
                                <option value="440">Lithuania</option>
                                <option value="442">Luxembourg</option>
                                <option value="446">Macao</option>
                                <option value="807">Macedonia, the former Yugoslav Republic of</option>
                                <option value="450">Madagascar</option>
                                <option value="454">Malawi</option>
                                <option value="458">Malaysia</option>
                                <option value="462">Maldives</option>
                                <option value="466">Mali</option>
                                <option value="470">Malta</option>
                                <option value="584">Marshall Islands</option>
                                <option value="474">Martinique</option>
                                <option value="478">Mauritania</option>
                                <option value="480">Mauritius</option>
                                <option value="175">Mayotte</option>
                                <option value="484">Mexico</option>
                                <option value="583">Micronesia, Federated States of</option>
                                <option value="498">Moldova, Republic of</option>
                                <option value="492">Monaco</option>
                                <option value="496">Mongolia</option>
                                <option value="499">Montenegro</option>
                                <option value="500">Montserrat</option>
                                <option value="504">Morocco</option>
                                <option value="508">Mozambique</option>
                                <option value="104">Myanmar</option>
                                <option value="516">Namibia</option>
                                <option value="520">Nauru</option>
                                <option value="524">Nepal</option>
                                <option value="528">Netherlands</option>
                                <option value="540">New Caledonia</option>
                                <option value="554">New Zealand</option>
                                <option value="558">Nicaragua</option>
                                <option value="562">Niger</option>
                                <option value="566">Nigeria</option>
                                <option value="570">Niue</option>
                                <option value="574">Norfolk Island</option>
                                <option value="580">Northern Mariana Islands</option>
                                <option value="578">Norway</option>
                                <option value="512">Oman</option>
                                <option value="586">Pakistan</option>
                                <option value="585">Palau</option>
                                <option value="275">Palestinian Territory, Occupied</option>
                                <option value="591">Panama</option>
                                <option value="598">Papua New Guinea</option>
                                <option value="600">Paraguay</option>
                                <option value="604">Peru</option>
                                <option value="608">Philippines</option>
                                <option value="612">Pitcairn</option>
                                <option value="616">Poland</option>
                                <option value="620">Portugal</option>
                                <option value="630">Puerto Rico</option>
                                <option value="634">Qatar</option>
                                <option value="638">Réunion</option>
                                <option value="642">Romania</option>
                                <option value="643">Russian Federation</option>
                                <option value="646">Rwanda</option>
                                <option value="652">Saint Barthélemy</option>
                                <option value="654">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="659">Saint Kitts and Nevis</option>
                                <option value="662">Saint Lucia</option>
                                <option value="663">Saint Martin (French part)</option>
                                <option value="666">Saint Pierre and Miquelon</option>
                                <option value="670">Saint Vincent and the Grenadines</option>
                                <option value="882">Samoa</option>
                                <option value="674">San Marino</option>
                                <option value="678">Sao Tome and Principe</option>
                                <option value="682">Saudi Arabia</option>
                                <option value="686">Senegal</option>
                                <option value="688">Serbia</option>
                                <option value="690">Seychelles</option>
                                <option value="694">Sierra Leone</option>
                                <option value="702">Singapore</option>
                                <option value="534">Sint Maarten (Dutch part)</option>
                                <option value="703">Slovakia</option>
                                <option value="705">Slovenia</option>
                                <option value="90">Solomon Islands</option>
                                <option value="706">Somalia</option>
                                <option value="710">South Africa</option>
                                <option value="239">South Georgia and the South Sandwich Islands</option>
                                <option value="728">South Sudan</option>
                                <option value="724">Spain</option>
                                <option value="144">Sri Lanka</option>
                                <option value="729">Sudan</option>
                                <option value="740">Suriname</option>
                                <option value="744">Svalbard and Jan Mayen</option>
                                <option value="748">Swaziland</option>
                                <option value="752">Sweden</option>
                                <option value="756">Switzerland</option>
                                <option value="760">Syrian Arab Republic</option>
                                <option value="158">Taiwan, Province of China</option>
                                <option value="762">Tajikistan</option>
                                <option value="834">Tanzania, United Republic of</option>
                                <option value="764">Thailand</option>
                                <option value="626">Timor-Leste</option>
                                <option value="768">Togo</option>
                                <option value="772">Tokelau</option>
                                <option value="776">Tonga</option>
                                <option value="780">Trinidad and Tobago</option>
                                <option value="788">Tunisia</option>
                                <option value="792">Turkey</option>
                                <option value="795">Turkmenistan</option>
                                <option value="796">Turks and Caicos Islands</option>
                                <option value="798">Tuvalu</option>
                                <option value="800">Uganda</option>
                                <option value="804">Ukraine</option>
                                <option value="784">United Arab Emirates</option>
                                <option value="826">United Kingdom</option>
                                <option value="840">United States</option>
                                <option value="581">United States Minor Outlying Islands</option>
                                <option value="858">Uruguay</option>
                                <option value="860">Uzbekistan</option>
                                <option value="548">Vanuatu</option>
                                <option value="862">Venezuela, Bolivarian Republic of</option>
                                <option value="704">Viet Nam</option>
                                <option value="92">Virgin Islands, British</option>
                                <option value="850">Virgin Islands, U.S.</option>
                                <option value="876">Wallis and Futuna</option>
                                <option value="732">Western Sahara</option>
                                <option value="887">Yemen</option>
                                <option value="894">Zambia</option>
                                <option value="716">Zimbabwe</option>
                            </select>
                        </label>

                    </div>

                    <div class="form-group">
                        <h6 style="font-size: 14px">Time Zone:</h6>
                        <label for="time_zone" class="edit">
                            <select>
                                <option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">
                                    (GMT-12:00) International Date Line West
                                </option>
                                <option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">
                                    (GMT-11:00) Midway Island, Samoa
                                </option>
                                <option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">
                                    (GMT-10:00) Hawaii
                                </option>
                                <option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">
                                    (GMT-09:00) Alaska
                                </option>
                                <option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">
                                    (GMT-08:00) Pacific Time (US & Canada)
                                </option>
                                <option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">
                                    (GMT-08:00) Tijuana, Baja California
                                </option>
                                <option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">
                                    (GMT-07:00) Arizona
                                </option>
                                <option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">
                                    (GMT-07:00) Chihuahua, La Paz, Mazatlan
                                </option>
                                <option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">
                                    (GMT-07:00) Mountain Time (US & Canada)
                                </option>
                                <option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">
                                    (GMT-06:00) Central America
                                </option>
                                <option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">
                                    (GMT-06:00) Central Time (US & Canada)
                                </option>
                                <option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">
                                    (GMT-06:00) Guadalajara, Mexico City, Monterrey
                                </option>
                                <option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">
                                    (GMT-06:00) Saskatchewan
                                </option>
                                <option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">
                                    (GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                </option>
                                <option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">
                                    (GMT-05:00) Eastern Time (US & Canada)
                                </option>
                                <option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">
                                    (GMT-05:00) Indiana (East)
                                </option>
                                <option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">
                                    (GMT-04:00) Atlantic Time (Canada)
                                </option>
                                <option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">
                                    (GMT-04:00) Caracas, La Paz
                                </option>
                                <option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">
                                    (GMT-04:00) Manaus
                                </option>
                                <option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">
                                    (GMT-04:00) Santiago
                                </option>
                                <option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">
                                    (GMT-03:30) Newfoundland
                                </option>
                                <option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">
                                    (GMT-03:00) Brasilia
                                </option>
                                <option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">
                                    (GMT-03:00) Buenos Aires, Georgetown
                                </option>
                                <option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">
                                    (GMT-03:00) Greenland
                                </option>
                                <option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">
                                    (GMT-03:00) Montevideo
                                </option>
                                <option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">
                                    (GMT-02:00) Mid-Atlantic
                                </option>
                                <option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">
                                    (GMT-01:00) Cape Verde Is.
                                </option>
                                <option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">
                                    (GMT-01:00) Azores
                                </option>
                                <option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">
                                    (GMT+00:00) Casablanca, Monrovia, Reykjavik
                                </option>
                                <option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">
                                    (GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London
                                </option>
                                <option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                    (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna
                                </option>
                                <option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                    (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague
                                </option>
                                <option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                    (GMT+01:00) Brussels, Copenhagen, Madrid, Paris
                                </option>
                                <option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                    (GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb
                                </option>
                                <option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                    (GMT+01:00) West Central Africa
                                </option>
                                <option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                    (GMT+02:00) Amman
                                </option>
                                <option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                    (GMT+02:00) Athens, Bucharest, Istanbul
                                </option>
                                <option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                    (GMT+02:00) Beirut
                                </option>
                                <option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                    (GMT+02:00) Cairo
                                </option>
                                <option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">
                                    (GMT+02:00) Harare, Pretoria
                                </option>
                                <option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                    (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius
                                </option>
                                <option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                    (GMT+02:00) Jerusalem
                                </option>
                                <option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                    (GMT+02:00) Minsk
                                </option>
                                <option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                    (GMT+02:00) Windhoek
                                </option>
                                <option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">
                                    (GMT+03:00) Kuwait, Riyadh, Baghdad
                                </option>
                                <option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">
                                    (GMT+03:00) Moscow, St. Petersburg, Volgograd
                                </option>
                                <option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">
                                    (GMT+03:00) Nairobi
                                </option>
                                <option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">
                                    (GMT+03:00) Tbilisi
                                </option>
                                <option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">
                                    (GMT+03:30) Tehran
                                </option>
                                <option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">
                                    (GMT+04:00) Abu Dhabi, Muscat
                                </option>
                                <option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">
                                    (GMT+04:00) Baku
                                </option>
                                <option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">
                                    (GMT+04:00) Yerevan
                                </option>
                                <option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">
                                    (GMT+04:30) Kabul
                                </option>
                                <option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">
                                    (GMT+05:00) Yekaterinburg
                                </option>
                                <option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">
                                    (GMT+05:00) Islamabad, Karachi, Tashkent
                                </option>
                                <option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">
                                    (GMT+05:30) Sri Jayawardenapura
                                </option>
                                <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">
                                    (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi
                                </option>
                                <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">
                                    (GMT+05:45) Kathmandu
                                </option>
                                <option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">
                                    (GMT+06:00) Almaty, Novosibirsk
                                </option>
                                <option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">
                                    (GMT+06:00) Astana, Dhaka
                                </option>
                                <option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">
                                    (GMT+06:30) Yangon (Rangoon)
                                </option>
                                <option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">
                                    (GMT+07:00) Bangkok, Hanoi, Jakarta
                                </option>
                                <option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">
                                    (GMT+07:00) Krasnoyarsk
                                </option>
                                <option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                    (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi
                                </option>
                                <option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                    (GMT+08:00) Kuala Lumpur, Singapore
                                </option>
                                <option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                    (GMT+08:00) Irkutsk, Ulaan Bataar
                                </option>
                                <option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                    (GMT+08:00) Perth
                                </option>
                                <option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                    (GMT+08:00) Taipei
                                </option>
                                <option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">
                                    (GMT+09:00) Osaka, Sapporo, Tokyo
                                </option>
                                <option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">
                                    (GMT+09:00) Seoul
                                </option>
                                <option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">
                                    (GMT+09:00) Yakutsk
                                </option>
                                <option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">
                                    (GMT+09:30) Adelaide
                                </option>
                                <option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">
                                    (GMT+09:30) Darwin
                                </option>
                                <option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">
                                    (GMT+10:00) Brisbane
                                </option>
                                <option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">
                                    (GMT+10:00) Canberra, Melbourne, Sydney
                                </option>
                                <option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">
                                    (GMT+10:00) Hobart
                                </option>
                                <option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">
                                    (GMT+10:00) Guam, Port Moresby
                                </option>
                                <option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">
                                    (GMT+10:00) Vladivostok
                                </option>
                                <option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">
                                    (GMT+11:00) Magadan, Solomon Is., New Caledonia
                                </option>
                                <option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">
                                    (GMT+12:00) Auckland, Wellington
                                </option>
                                <option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">
                                    (GMT+12:00) Fiji, Kamchatka, Marshall Is.
                                </option>
                                <option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">
                                    (GMT+13:00) Nuku'alofa
                                </option>
                            </select>

                        </label>
                    </div>

                    <div class="form-group">
                        <h6 style="font-size: 14px">Default Language:</h6>
                        <label for="language" class="edit">
                            <select data-placeholder="Choose a Language...">
                                <option value="Afrikanns">Afrikanns</option>
                                <option value="Albanian">Albanian</option>
                                <option value="Arabic">Arabic</option>
                                <option value="Armenian">Armenian</option>
                                <option value="Basque">Basque</option>
                                <option value="Bengali">Bengali</option>
                                <option value="Bulgarian">Bulgarian</option>
                                <option value="Catalan">Catalan</option>
                                <option value="Cambodian">Cambodian</option>
                                <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                <option value="Croation">Croation</option>
                                <option value="Czech">Czech</option>
                                <option value="Danish">Danish</option>
                                <option value="Dutch">Dutch</option>
                                <option value="English">English</option>
                                <option value="Estonian">Estonian</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finnish">Finnish</option>
                                <option value="French">French</option>
                                <option value="Georgian">Georgian</option>
                                <option value="German">German</option>
                                <option value="Greek">Greek</option>
                                <option value="Gujarati">Gujarati</option>
                                <option value="Hebrew">Hebrew</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Hungarian">Hungarian</option>
                                <option value="Icelandic">Icelandic</option>
                                <option value="Indonesian">Indonesian</option>
                                <option value="Irish">Irish</option>
                                <option value="Italian">Italian</option>
                                <option value="Japanese">Japanese</option>
                                <option value="Javanese">Javanese</option>
                                <option value="Korean">Korean</option>
                                <option value="Latin">Latin</option>
                                <option value="Latvian">Latvian</option>
                                <option value="Lithuanian">Lithuanian</option>
                                <option value="Macedonian">Macedonian</option>
                                <option value="Malay">Malay</option>
                                <option value="Malayalam">Malayalam</option>
                                <option value="Maltese">Maltese</option>
                                <option value="Maori">Maori</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Mongolian">Mongolian</option>
                                <option value="Nepali">Nepali</option>
                                <option value="Norwegian">Norwegian</option>
                                <option value="Persian">Persian</option>
                                <option value="Polish">Polish</option>
                                <option value="Portuguese">Portuguese</option>
                                <option value="Punjabi">Punjabi</option>
                                <option value="Quechua">Quechua</option>
                                <option value="Romanian">Romanian</option>
                                <option value="Russian">Russian</option>
                                <option value="Samoan">Samoan</option>
                                <option value="Serbian">Serbian</option>
                                <option value="Slovak">Slovak</option>
                                <option value="Slovenian">Slovenian</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Swahili">Swahili</option>
                                <option value="Swedish ">Swedish</option>
                                <option value="Tamil">Tamil</option>
                                <option value="Tatar">Tatar</option>
                                <option value="Telugu">Telugu</option>
                                <option value="Thai">Thai</option>
                                <option value="Tibetan">Tibetan</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Turkish">Turkish</option>
                                <option value="Ukranian">Ukranian</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Uzbek">Uzbek</option>
                                <option value="Vietnamese">Vietnamese</option>
                                <option value="Welsh">Welsh</option>
                                <option value="Xhosa">Xhosa</option>
                            </select>
                        </label>

                    </div>

                    <div class="form-group">
                        <h6 style="font-size: 14px">Date Format:</h6>
                        <div class="row">
                            <label for="date_format" class="edit" style="margin-left: 15px">
                                <select>
                                    <option>d.m.yyyy</option>
                                    <option>m/d/yyyy</option>
                                    <option>mm/dd/yyyy</option>
                                    <option>dd.mm.yyyy</option>
                                    <option>yyyy-mm-dd</option>
                                </select>
                            </label>

                            <label for="date_format" class="edit">
                                <select>
                                    <option>h:mm AM/PM</option>
                                    <option>hh:mm</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <button class="btn btn-primary" style="border-radius: 0">Save changes</button>
            </div>

        </div>
    </div>
</div>
</body>
</html>