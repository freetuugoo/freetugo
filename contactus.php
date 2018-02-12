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
</head>
<body>
    <div id="page-wrapper">
                <header id="header" class="navbar-static-top">
            <?php
                include "includes/menublank.php";
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
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
        <div class="travelo-google-map full-box"></div>
        <section id="content" class="white-bg">
            <div class="container">
                <div id="main" style="padding-top:20px;">
                    <div class="col-md-9 no-float no-padding center-block">
                        <div class="intro text-center block">
                            <h2>Send us a Message</h2>
                            <p>Etiam gravida ac mi ut posuere. Nunc laoreet nulla a porttitor volutpat. Praesent in rutrum justo, in fermentum nulla. Ut vel nulla tincidunt, lobortis tortor eu, venenatis ligula. Vivamus laoreet leo nulla, nec venenatis erat laoreet et. Integer tincidunt nulla at leo dignissim, ut iaculis libero mattis.</p>
                        </div>
                        <form class="contact-form" action="contact-us-handler.php" method="post" onsubmit="return false;">
                            <div class="alert small-box" style="display: none; border-radius:8px;"></div>
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label>Your Name</label>
                                    <input type="text" name="name" class="input-text full-width" style="border-radius:30px;">
                                </div>
                                <div class="col-xs-6">
                                    <label>Your Email</label>
                                    <input type="text" name="email" class="input-text full-width" style="border-radius:30px;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="input-text full-width" style="border-radius:30px;">
                                </div>
                                <div class="col-xs-6">
                                    <label>Website</label>
                                    <input type="text" name="website" class="input-text full-width" style="border-radius:30px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="message" rows="6" class="input-text full-width" placeholder="write message here" style="border-radius:8px;"></textarea>
                            </div>
                            <button type="submit" class="btn-large full-width" style="border-radius:30px;">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="global-map-area section contact-details parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="icon-box style10 phone">
                                <i class="soap-icon-phone"></i>
                                <small>We are on 24/7</small>
                                <h4 class="box-title">1-800-123-HELLO</h4>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icon-box style10 email">
                                <i class="soap-icon-message"></i>
                                <small>Send us email on</small>
                                <h4 class="box-title">info@fritugo.com</h4>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icon-box style10 address">
                                <i class="soap-icon-address"></i>
                                <small>Meet us now</small>
                                <h4 class="box-title">One PM Building - Level 5, Boulevard Gading Serpong, Tangerang, Indonesia</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="main" style="padding-top:20px;">
                    <div class="col-md-9 no-float no-padding center-block">
                        <div class="intro text-center block"><br><br><br><br><br><br><br><br>
                            <h2>Send us a Message</h2>
                            <p>Etiam gravida ac mi ut posuere. Nunc laoreet nulla a porttitor volutpat. Praesent in rutrum justo, in fermentum nulla. Ut vel nulla tincidunt, lobortis tortor eu, venenatis ligula. Vivamus laoreet leo nulla, nec venenatis erat laoreet et. Integer tincidunt nulla at leo dignissim, ut iaculis libero mattis.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php
            include "includes/footer.php";
        ?>
        <script type="text/javascript" src="js/contact.js"></script>

    <script type="text/javascript">
        tjq(".travelo-google-map").gmap3({
            map: {
                options: {
                    center: [48.85661, 2.35222],
                    zoom: 5
                }
            },
            marker:{
                values: [
                    {latLng:[48.85661, 2.35222], data:"Paris"}

                ],
                options: {
                    draggable: false
                },
            }
        });
    </script>
</body>
</html>

