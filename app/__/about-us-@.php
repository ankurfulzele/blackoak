<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '_/xui/std/html/meta-01-v.php' ?>
    <title>About Us - Black Oak Quarries</title>
    <?php include '_/xui/std/html/plugins-01-v.php' ?>
    <style>
        .testimonials h3 {
            margin-top: 15px;
        }
    </style>

</head>
<body>
    <?php include '_/xui/std/page-01/header-v.php' ?>
    <div class="sub_heading bg_about">
        <h4><span>About Us</span></h4>
    </div><!-- sub_heading -->
    <div class="sub_container">

        <div class="our_values">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?=o()->asset_url?>/values_images/values1521627056.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-6">
                        <h3><span>Who We Are</span></h3>
                        <p>Black Oak Quarries is a South Australia family owned company located 5 km East of Iron knob, 55 km from Whyalla and 60km from Port Augusta. It was formed on the 8th of November 2016.&nbsp;</p>
                        <p>Black Oak Quarries operates under extractive mining lease EML 6463. The area of lease is 48.43 hectares of land.&nbsp; Black Oak Quarries produces a range of Australian DPTI standard approved material such as PM1, PM2 and PM 3.</p>
                        <p>Black Oak Quarries shall implement a program of continual improvement of its business operations and will aim to meet and maintain a standard of performance in quality, Work Health and Safety &amp; Environment (QWHSE) in accordance with AS/NZS ISO 9001:2016, AS/NZS4801:2001, AS/NZS ISO14001:2016 and legislative requirements by cooperation from all tiers of management and operational personnel, to ensure that customer requirements are fulfilled from a service and duty of care perspective.</p>
                        <p>Our mission is to provide a safe and content working environment for both employees and customers while encouraging personal and professional growth to obtain high quality material, organisation and a passion for producing high quality material for all customers great and small.&nbsp;</p>
                    </div>
                </div>
            </div>
        </div><!-- our_values -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3><span>Our Values</span></h3>
                    <p>Black Oak Quarries values are based on safety, teamwork, fairness and leadership. Each value makes up the foundations at Black Oak Quarries</p>
                    <p><span style="font-size:14px"><strong>Safety</strong></span></p>
                    <p>Safety is vital as it promotes our employees and customers with a safe work environment. We aim to meet and improve Quality, Work Health and Safety and Environmental performances.</p>
                    <p><span style="font-size:14px"><strong>Teamwork</strong></span></p>
                    <p>Our aim is for our employees to work as a team and use their skills to develop solutions to overcome challenges together.</p>
                    <p><span style="font-size:14px"><strong>Fairness</strong></span></p>
                    <p>We believe every individual should be treated with respect and fairness.</p>
                    <p><span style="font-size:14px"><strong>Leadership</strong></span></p>
                    <p>As a team we encourage leadership from each individual encouraging&nbsp; honesty, independence and guidance.</p>
                </div>
                <div class="col-md-6">
                    <img src="<?=o()->asset_url?>/values_images/whoweare1521627136.jpg" class="img-responsive" />
                </div>
            </div>
        </div>
        <br /><br />
    </div><!-- sub_container -->
    <?php include '_/xui/std/page-01/footer-v.php' ?> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="<?=o()->asset_url?>/js/bootstrap.min.js"></script>
    <script src="<?=o()->asset_url?>/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {

            $(".single_box").owlCarousel({
                navigation: true,
                singleItem: true,
                pagination: false,
                navigationText: [
                    "<i class='glyphicon glyphicon-chevron-left'></i>",
                    "<i class='glyphicon glyphicon-chevron-right'></i>"
                ],

            });

            $(".single_box_testi").owlCarousel({
                navigation: false,
                singleItem: true,
                pagination: true,
                autoPlay: true,
                navigationText: [
                    "<i class='icon-chevron-left icon-white'></i>",
                    "<i class='icon-chevron-right icon-white'></i>"
                ],

            });


            $(".association").owlCarousel({
                navigation: false,
                pagination: true,
                navigationText: [
                    "<i class='icon-chevron-left icon-white'></i>",
                    "<i class='icon-chevron-right icon-white'></i>"
                ],

            });
        });
    </script>
</body>
</html>