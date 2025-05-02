
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include '_/xui/std/html/meta-01-v.php' ?>
    <title>Black Oak Quarries</title>
    <?php include '_/xui/std/html/plugins-01-v.php' ?>
    <link rel="stylesheet" href="<?=o()->asset_url?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />	
    <style>
		.testimonials h3{
			margin-top:15px;
		}
		
		.contact_us_home{
			margin:35px 0;
		}
		
	</style>
    
  </head>
  <body>
  <?php include '_/xui/std/page-01/header-v.php' ?>   	
        <div class="sub_heading">
        	<h4><span>Crusher Sand</span></h4>
        </div>
        <div class="sub_container policy_container">
    		<div class="container">            	
                <ol class="breadcrumb">				
                  <li><a href="<?=o()->site_url?>/">Home</a></li>
                  <li><a href="<?=o()->site_url?>/productrange/">Product Range</a></li>				 
                  <li><a href="<?=o()->site_url?>/productrange/crusher-sand">Crusher Sand</a></li>				   
                  <li class="active">Crusher Sand </li>				   
                </ol>                
              <div class="row">
               <div class="col-md-5">
               		<ul class="gallery clearfix">
					                        <li><a href="<?=o()->asset_url?>/stylecrete_images/Crusher_Sand1733807211150.jpg" rel="prettyPhoto[gallery1]"><img src="<?=o()->asset_url?>/stylecrete_images/Crusher_Sand1733807211150.jpg"/><span class="over"></span></a></li>
					                    </ul>
               </div>
            
               <div class="col-md-7 view_text">
               		<h5>Crusher Sand</h5>
                    
                     <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#product_highlights" aria-controls="product_highlights" role="tab" data-toggle="tab">Product Highlights</a></li>
                        <li role="presentation"><a href="#second" aria-controls="second" role="tab" data-toggle="tab">Product Description</a></li>
                      </ul>
                    
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="product_highlights">
                        	
							<p><ul>
	<li>Base for pavers&nbsp;</li>
</ul>
 </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="second">
							<p><ul>
	<li>Base for pavers&nbsp;</li>
</ul>
 </p>
                        	
                        </div>
                      </div>  
               </div> 			    
              </div>
        	</div>
            
            
            <div class="contact_us_home">
                <div class="container">
                    <h3><span>Contact Us</span></h3>
                    <h4>Click Here</h4>
                    
                    <form id="stylecrete">
                    <input type="hidden" id="id" name="id" value="25">
                        <div class="col-md-4"><input type="text" placeholder="Name" name="name" id="name"/></div>
                        <div class="col-md-4"><input type="text" placeholder="Email Id" name="email_id" id="email_id"/></div>
                        <div class="col-md-4"><input type="text" placeholder="Phone No." name="phone" id="phone" maxlength="12" onKeyPress="return isNumberKey(event)"/></div>
                        <div class="col-md-12"><textarea rows="5" placeholder="Message" name="message" id="message"></textarea></div>
                        <div class="col-md-12"><button type="button" class="btn btn-default" OnClick="return valid();">Submit</button><br></br><span id="error"></span>    </div>
                    </form>                    
                    <span class="top_tt"> X </span>
                </div>
            </div><!-- contact_us_home -->
    	</div><!-- sub_container -->
        <?php include '_/xui/std/page-01/footer-v.php' ?> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?=o()->asset_url?>/js/bootstrap.min.js"></script>
    <script src="<?=o()->asset_url?>/js/owl.carousel.js"></script>
    <script src="<?=o()->asset_url?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    
    <script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("area[rel^='prettyPhoto']").prettyPhoto();
		
		$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({});
		
	});
	</script>
    <script>
    $(document).ready(function() {

      $(".single_box").owlCarousel({
        navigation: true,
		singleItem : true,
		pagination : false,
        navigationText: [
        "<i class='glyphicon glyphicon-chevron-left'></i>",
        "<i class='glyphicon glyphicon-chevron-right'></i>"
        ],

      });
	  
	  $(".single_box_testi").owlCarousel({
        navigation: false,
		singleItem : true,
		pagination : true,
		autoPlay : true,
        navigationText: [
        "<i class='icon-chevron-left icon-white'></i>",
        "<i class='icon-chevron-right icon-white'></i>"
        ],

      });
	  
	  
	  $(".association").owlCarousel({
        navigation: false,
		pagination : true,
        navigationText: [
        "<i class='icon-chevron-left icon-white'></i>",
        "<i class='icon-chevron-right icon-white'></i>"
        ],

      });

    });
    </script>
<script type="text/javascript">  
function isNumberKey(evt)   
      	
{      
      
var charCode = (evt.which) ? evt.which : event.keyCode         		
if (charCode > 31 && (charCode < 48 || charCode > 57))      
      		
return false; 
return true;   
      	
}
	function valid()
	{
		var name=document.getElementById("name").value;
		var email_id=document.getElementById("email_id").value;
		var phone=document.getElementById("phone").value;
		var message=document.getElementById("message").value;
		var emailReg =/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var error_check=true;

		if(name== "")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Enter Your Name</div>");
				$("#name").focus();
			}
			 error_check=false;
		}
		
		if(email_id=="")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Enter Your Email-Id</div>");
				$("#email_id").focus();
			}
			 error_check=false;
		}
		
		if(!emailReg.test(email_id))
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Enter Valid Email-Id</div>");
				$("#email_id").focus();
			}

			 error_check=false;
		}

		if(phone=="")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Enter Your Phone Number</div>");
				$("#phone").focus();
			}
			 error_check=false;
		}
		
		if(phone.length<10)
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Enter 10 digit Phone number</div>");
				$("#phone").focus();
			}
			 error_check=false;
		}
	
		if(message=="")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Enter Message</div>");
				$("#message").focus();
			}
		 	error_check=false;
		}
		
		if(error_check)
		{
		$("#error").html("<div style='margin-bottom:0px;' class='alert alert-warning alert-dismissable'><button class='close close-yellow' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Please Wait Processing...!</div>");
		var frmdata = $("#stylecrete").serialize();
				$.ajax({
					 url:"<?=o()->site_url?>/stylecrete/addstylecreteenquiry",
                                       
					  type:"POST",
					  data:frmdata,
//alert(data);	
					  success:function(data)
					  	{
							$('#stylecrete').each(function()
							{
							 this.reset();
							});
							
							if(1)
							{
								$("#error").html("<div style='margin-bottom:0px;' class='alert alert-success alert-dismissable'><button class='close close-green' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Thank You...! We'll Get Back to You</div>");	
							}
							else
							{
								$("#error").html("<div style='margin-bottom:0px;'  class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Sorry..! Your contact details can't be sent due to technical error</div>");
							}
						 }
					});
		
			return false;
		}
		else
		{
			return false;
		}
	}
   </script>
  </body>
</html>