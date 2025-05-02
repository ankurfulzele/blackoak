
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include '_/xui/std/html/meta-01-v.php' ?>
    <title>Product Range - Black Oak Quarries</title>
  <?php include '_/xui/std/html/plugins-01-v.php' ?>
    <style>
		.testimonials h3{
			margin-top:15px;
		}
	</style>    
  </head>
  <body>
  <?php include '_/xui/std/page-01/header-v.php' ?>
  <div class="sub_heading">
                	<h4><span>20-10 MM concrete</span></h4>
        </div><!-- sub_heading -->
                
        <div class="sub_container policy_container">
    		<div class="container mini_container">
            					<p>- Used for concrete products&nbsp;</p>				                
           <div class="row">
				                  	<div class="col-md-4 col-sm-4 col-xs-6">
                    	<a class="box_con" href="<?=o()->site_url?>/productrange/view/20-10-mm-concrete/">
                        	<img src="<?=o()->asset_url?>/stylecrete_images/stylecrete1733806610.jpg" class="img-responsive"/>
                            <h5>20-10 MM concrete</h5>
                        </a>
                    </div>                     
                </div>        
        	</div>
    	</div>
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