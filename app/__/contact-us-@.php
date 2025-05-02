
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include '_/xui/std/html/meta-01-v.php' ?>
  <title>Contact Us - Black Oak Quarries</title>
    <!-- Bootstrap -->
    <link href="<?=o()->asset_url?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?=o()->asset_url?>/css/style.css" rel="stylesheet">
    <link href="<?=o()->asset_url?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?=o()->asset_url?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?=o()->asset_url?>/css/jasny-bootstrap.css" rel="stylesheet">    
	  <link rel="stylesheet" type="text/css" href="<?=o()->asset_url?>/css/slick.css">
  	<link rel="stylesheet" type="text/css" href="<?=o()->asset_url?>/css/slick-theme.css">
    <link href="<?=o()->asset_url?>/css/font-awesome.css" rel="stylesheet">
      <style>
		.testimonials h3{
			margin-top:15px;
		}
		li{
			background-image:none;
		}
              .sub_container{    min-height: 350px;}		
	</style>    
  </head>
  <body>
  <?php include '_/xui/std/page-01/header-v.php' ?>
     <div class="sub_heading">
        	<h4><span>Contact Us</span></h4>
        </div><!-- sub_heading -->

      <div class="sub_container" style="text-align: center;">
    		<div class="container">
               <div class="row">
                    <div class="col-md-4">
                    	<div class="contact_address">
                           <h4>General Contacts</h4>
                           <p style="text-align:justify">Admin: 0417 629 312<br />
Email: admin@blackoakquarries.com.au</p>
<p style="text-align:justify">Brenton French: &nbsp;0418 843 208<br />
</p>

<p style="text-align:justify">&nbsp;</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                    	<a href="<?=o()->site_url?>/contact-quote/" class="btn btn-info btt" style="margin-bottom: 30px;">Get A Quote ?</a>
                    </div>

                    <div class="col-md-4">
                    	<div class="contact_address">
                           <h4>Contact Info</h4>
                           <p class="map_f">Iron Knob SA 5601</p>
                           <p class="call_f">0417 629 312</p>
                           <p class="mail_f">admin@blackoakquarries.com.au</p>
                        </div>
                    </div>
               </div>
    		</div>
    	</div><!-- sub_container -->
        
        <div class="sub_container">
    		<div class="container-fluid">
               <div class="row">
                    <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.9972172162193!2d137.1515978151811!3d-32.73926458098348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6aa35fc85075d409%3A0x3f5c958b39ac621e!2sBlack+Oak+Quarries!5e0!3m2!1sen!2sin!4v1519450526362" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                    </div>
               </div>
    		</div>
    	</div><!-- sub_container -->
        <?php include '_/xui/std/page-01/footer-v.php' ?> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=o()->asset_url?>/js/bootstrap.min.js"></script>
    <!-- FlexSlider -->
	  <script src="<?=o()->asset_url?>/js/slick.js" type="text/javascript" charset="utf-8"></script>
    
      <script type="text/javascript">
       $('.slider-for').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  dots: true,
		  fade: true,
		  asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
			vertical: true,
		  slidesToShow:3,
		  slidesToScroll: 1,
		  asNavFor: '.slider-for',
		  dots: false,
		  arrows: true,
		  centerMode: true,
		  focusOnSelect: true
		});
      </script>

  </body>
</html>