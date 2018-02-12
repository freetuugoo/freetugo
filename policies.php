<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>fritugo - get unlimited, create your own dream itinerary for your future trip</title>
    
    <?php
        include "includes/common.php";
    ?>
    <style>
    .margin-auto{
        display: block;
        margin: 0 auto;
    }
    </style>
</head>
<body>
    <div id="page-wrapper">
                <header id="header" class="navbar-static-top">
            <?php
                include_once('db.php');
                include_once('classes/login_class.php');
                if (Login::isLoggedIn()) {
                    include "includes/menu-loggedin.php";
                } else {
                    include "includes/menu2.php";
                }
            ?>
            
            <?php
                include "includes/menu_mobile.php";
            ?>
            <?php
                include "includes/signup.php";
            ?>
            <?php
                include "includes/login.php";
            ?>
        </header>

        <div class="page-title-container">
            <div class="container">
                <ul class="breadcrumbs pull-right">
                    <li class="active">Fritugo Policies</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main" style="padding-top:20px;">
                    <div class="tab-container style1 travelo-policies">
                        <ul class="tabs full-width">
                            <li><a data-toggle="tab" href="#terms-services">Terms of services</a></li>
                            <li><a data-toggle="tab" href="#privacy-policy">Privacy policy</a></li>
                            <li><a data-toggle="tab" href="#guest-refund-policy">Guest Refund Policy</a></li>
                            <li><a data-toggle="tab" href="#copyright-policy">Copyright Policy</a></li>
                            <li><a data-toggle="tab" href="#acceptable-usage-policy">Acceptable Usage policy</a></li>
                            <li class="active"><a data-toggle="tab" href="#pricing">Pricing</a></li>
                            <li><a data-toggle="tab" href="#cancellations">Cancellations</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="terms-services" class="tab-pane fade in">
                                <!--<div class="alert alert-notice">
                                    Notice Message. Your Message Comes Here
                                    <span class="close"></span>
                                </div>-->
                                <div class="policy">
                                    <h2>Definition</h2>
                                    <p>
                                        We, PT Fritu Global Indonesia. (“fritugo”) are a revolutionary service, which helps users on the Internet find suitable travels, including air tickets, hotels and other accommodation options, and travel-related services (insurance policies, transfers, guided tours) provided by our partners (the partner details can be found in Our Partners section)
When users (website visitors) find an offering, which is suitable to them, FRITUGO connects them to the relevant partners (Booking.com for booking and purchase of air tickets and hotels ), so that they (website visitors) be able to execute a booking and/or purchasing directly from the partners.
FRITUGO also allows users to transmit any and all data required in order to complete the booking and/or purchase of the selected travel offering by sending the data to the partners via a secure Internet link rather than sending the users to web pages of the relevant partners. 
                                    </p>
                                </div>
                                <hr>
                                <div class="policy">
                                    <h2>Terms and conditions</h2>
                                    <p>
                                        These Terms and Conditions, which may be revised from time to time, shall apply to any and all Services provided online, via electronic mail, by telephone or any mobile device.  By visiting, viewing or using our website and/or making a Booking and/or purchase, you acknowledge that you have read, understood and agreed to the below terms and conditions (including the Privacy Policy).
You will be deemed to have accepted any revisions, if You continue using this Website or the Applications after such revisions are published.
These terms and conditions constitute a legal agreement between you and FRITUGO Company CORP. (“the Agreement” or “this Agreement”).
Please carefully read and understand the Agreement before use of this Website or the Applications.  By downloading, accessing, or using this Website or the Applications in any manner whatsoever, You acknowledge that You have read and understood these Terms and Conditions and agree to comply with them.
If You disagree to comply with these Terms and Conditions or any revisions thereto, please stop using this Website and the Applications immediately.
                                    </p></div>
                                <div class="policy">
                                    <h2>Booking and/or Purchasing via FRITUGO service</h2>
                                    <p>
                                        Booking and/or Purchasing service allows you to book and pay for travel offerings of third-party travel companies, which are our partners (“Our Partners”) selected by you on www.fritugo.com website, and is provided, managed and controlled by the relevant Booking Partner, rather than FRITUGO Company.  Your use of the Booking Services, and collection, processing and storage of any personal data (including payment details) provided by you within the framework of this service, shall be governed by the Terms of Service and Privacy Policy of the relevant Booking Partners, information about which will be provided to you via the booking services.  You acknowledge and agree to that in the event if You have any problem with your transaction or booking (purchase) executed by such transaction, you will have to solve this problem with the Booking and/or Purchasing Partner and that Your exclusive legal remedy, including any refund, shall apply to the Booking Partner rather than FRITUGO Company.
                                    </p>
                                </div>
                                <hr>
                                <div class="policy">
                                    <h2>Use of the Website and the Applications</h2>
                                    <p>
                                        FRITUGO Company manages and controls this Website and the Applications and provides them to you at its own exclusive discretion.
In consideration of your consent to comply with these Terms and Conditions provision of the Services, FRITUGO will grant you non-transferable non-exclusive license to download, access and use this Website and/or the Applications (including the unique online product of FRITUGO Company which allows searching for travel offerings, including accommodation prices (hotels, apartments, hostels and other accommodation options), flights, guided tours, transfers, insurance policies and other travel products) exclusively for personal non-commercial purposes.
FRITUGO Company shall be entitled to withdraw or modify this Website or the Applications at own discretion at any time, including, without limitation, suspension of access to this Website or the Applications, adding advertisements to this Website or the Applications and limitation of the number of travel offerings for hotels, flights, guided tours, transfers or other travel Services, which may be found via this Website.
In consideration of the permit to use this Website and/or the Applications, you agree to comply with these Terms and Conditions.  Any other use of this Website and the Applications, which is not stipulated by these Terms and Conditions, is prohibited.
                                    </p>
                                </div>
                                <hr>
                                <div class="policy">
                                    <h2>Disclaimers</h2>
                                    <div class="uppercase">
                                        <p>Sed odio nisl, aliquam vel porttitor sed, placerat id metus. Integer vehicula est arcu, dictum iaculis mi condimentum vitae. Nam ipsum nisl, congue sed magna sollicitudin, iaculis interdum metus. Donec ultricies at leo sit amet vulputate. Morbi nec auctor tortor, ut porttitor justo. Vestibulum placerat quam sapien, sit amet vulputate sem gravida et. Nunc consectetur purus in velit accumsan bibendum. Aenean id posuere leo, eu laoreet lacus. Quisque cursus odio sed luctus bibendum. Morbi eget viverra odio. Donec blandit congue hendrerit. Curabitur ac quam eros. Donec tempor, nibh eget dignissim pulvinar, <u class="skin-color">diam tellus malesuada risus</u>, eu interdum eros nisl eget metus. </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="policy">
                                    <h2>Limitation of Liability</h2>
                                    <p>Sed odio nisl, aliquam vel porttitor sed, placerat id metus. Integer vehicula est arcu, dictum iaculis mi condimentum vitae. Nam ipsum nisl, congue sed magna sollicitudin, iaculis interdum metus. Donec ultricies at leo sit amet vulputate. </p>
                                    <ul class="circle skin-color bullet-yellow box">
                                        <li>Blandit a varius sit amet dictum in libero</li>
                                        <li>Nteger ultricies tempor ornare Integer vehicula est arcu</li>
                                        <li>Vitae tortor quis lorem feugiat</li>
                                        <li>Sed turpis ipsum is only free textsuspendisse potenti blandit a varius sit amet, dictum in libero.</li>
                                    </ul>
                                    <p>Sed odio nisl, aliquam vel porttitor sed, placerat id metus. <span class="uppercase">Integer vehicula est arcu, dictum iaculis mi condimentum vitae. Nam ipsum nisl, congue sed magna sollicitudin, iaculis interdum metus. Donec ultricies at leo sit amet vulputate.</span> Sed odio nisl, aliquam vel porttitor sed, placerat id metus. Integer vehicula est arcu, dictum iaculis mi condimentum vitae. Nam ipsum nisl, congue sed magna sollicitudin, iaculis interdum metus. Donec ultricies at leo sit amet vulputate. </p>
                                </div>

                            </div>
                            <div id="privacy-policy" class="tab-pane fade">
                                
                            </div>
                            <div id="guest-refund-policy" class="tab-pane fade">
                                
                            </div>
                            <div id="copyright-policy" class="tab-pane fade">
                                
                            </div>
                            <div id="acceptable-usage-policy" class="tab-pane fade">
                                
                            </div>
                            <div id="pricing" class="tab-pane fade in active">
                                <div class="policy">
                                    <h2>Pricing</h2>
                                    <p>Sed odio nisl, aliquam vel porttitor sed, placerat id metus. Integer vehicula est arcu, dictum iaculis mi condimentum vitae. Nam ipsum nisl, congue sed magna sollicitudin, iaculis interdum metus. Donec ultricies at leo sit amet vulputate. </p>
                                        <br><br><br>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-2">
                                                <img src="images/brocoin.png" style="display:block; margin:auto; margin-bottom:-23px; width:50px; padding:5px;"><br>
                                                <span style="display:block;text-align:center">< IDR 3,000,000</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2" style="border-right: 1px solid #d8d8d8">
                                                <img src="images/brocoin.png" style="width:50px; padding:5px; margin-left:23px;">
                                                <img src="images/brocoin.png" style="width:50px; padding:5px"><br>
                                                <span style="display:block;text-align:center">IDR 3,000,000 - IDR 6,000,000</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2">
                                                <img src="images/silvercoin.png" style="display:block; margin:auto; margin-bottom:-23px; width:50px; padding:5px;"><br>
                                                <span style="display:block;text-align:center">IDR 6,000,001 - IDR 12,000,000</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2" style="border-right: 1px solid #d8d8d8">
                                                <img src="images/silvercoin.png" style="width:50px; padding:5px; margin-left:23px;">
                                                <img src="images/silvercoin.png" style="width:50px; padding:5px"><br>
                                                <span style="display:block;text-align:center">IDR 12,000,001 - IDR 24,000,000</span> 
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2">
                                                <img src="images/goldcoin.png" style="display:block; margin:auto; margin-bottom:-23px; width:50px; padding:5px;"><br>
                                                <span style="display:block;text-align:center">IDR 24,000,001 - IDR 50,000,000</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2">
                                                <img src="images/goldcoin.png" style="width:50px; padding:5px; margin-left:23px;">
                                                <img src="images/goldcoin.png" style="width:50px; padding:5px"><br>
                                                <span style="display:block;text-align:center">> IDR 50,000,000</span>
                                            </div>
                                        </div>
                                        <br><br><br>
                                    <p>Sed odio nisl, aliquam vel porttitor sed, placerat id metus. <span class="uppercase">Integer vehicula est arcu, dictum iaculis mi condimentum vitae. Nam ipsum nisl, congue sed magna sollicitudin, iaculis interdum metus. Donec ultricies at leo sit amet vulputate.</span> Sed odio nisl, aliquam vel porttitor sed, placerat id metus. Integer vehicula est arcu, dictum iaculis mi condimentum vitae. Nam ipsum nisl, congue sed magna sollicitudin, iaculis interdum metus. Donec ultricies at leo sit amet vulputate. </p>
                                </div>
                            </div>
                            <div id="cancellations" class="tab-pane fade">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include "includes/footer.php";
        ?>
</body>
</html>

