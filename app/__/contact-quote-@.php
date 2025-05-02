
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '_/xui/std/html/meta-01-v.php' ?>
	<title>Black Oak Quarries</title>
    <?php include '_/xui/std/html/plugins-01-v.php' ?>
    <style>
		.testimonials h3{
			margin-top:15px;
		}
		.form-control{
			margin-bottom:50px;
		}
	</style>
    
  </head>
  <body>    
  <?php include '_/xui/std/page-01/header-v.php' ?>
        </nav>        
		<div class="sub_heading">
        	<h4><span>GET A QUOTE</span></h4>
        </div><!-- sub_heading -->
        <div class="sub_container">
    		<div class="container">                
               	<h2 class="middle">Just answer a few simple questions so we can help quote your job </h2>
              <form class="quote_form" id="quote">
                  <div class="form-group">
                    <label>What is your name?</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <label>What is your Loction?</label>
                    <input type="text" class="form-control" id="location" name="location">
                  </div>
                  <div class="form-group">
                    <label>What is your email address?</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group">
                    <label>What is the best number to contact you on?</label>
                    <input type="text" class="form-control" id="contact" name="contact" maxlength="12" OnKeyPress="return number(event)">
                  </div>
                  <div class="form-group">
                    <label>What type of product?</label>
                    <select class="form-control" id="concrete" name="concrete">
                       <option  value="concrete">-- Select --</option>

                                           <option>
                          Crusher Sand  
                        </option>
                                             <option>
                          PM2-20  
                        </option>
                                             <option>
                          PM2-30  
                        </option>
                                             <option>
                          10-7 MM concrete  
                        </option>
                                             <option>
                          20-10 MM concrete  
                        </option>
                                             <option>
                          Rail Ballast  
                        </option>
                                             <option>
                          Rock Armour  
                        </option>
                                           </select>
                  </div>

                  <div class="form-group">
                    <label>How many tonnes?</label>
                    <input type="text" class="form-control" id="tonnes" name="tonnes">
                  </div>
                  
                  <div class="form-group">
                    <label>Pick up or Delivered?</label>
                    <select class="form-control" id="select" name="select">
                        <option value="select">-- Select --</option>
                    	<option>Pick up</option>
                        <option>Delivered</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Comment</label>
                    <input type="text" class="form-control" id="comment" name="comment">                    
                  </div>                  
                  <button type="button" class="btn btn-info btn-block" Onclick="return validate();">Submit</button>
              <br><br><span id="error" style="width:10px;"></span>
                </form>
    		</div>
    	</div><!-- sub_container --> 
        <?php include '_/xui/std/page-01/footer-v.php' ?> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="<?=o()->asset_url?>/js/bootstrap.min.js"></script>
    <script src="<?=o()->asset_url?>/assets/js/owl.carousel.js"></script>
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
   function number(evt)
   {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
      return true;
   }
	function validate()
	{
				var name=document.getElementById("name").value;
                var location=document.getElementById("location").value;
                var email=document.getElementById("email").value;
                var contact=document.getElementById("contact").value;
				var concrete=document.getElementById("concrete").value;
				var tonnes=document.getElementById("tonnes").value;
                var select=document.getElementById("select").value;
                var emailReg =/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var error_check=true;
		if(name== "")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button> Enter Your Name.</div>");
				$("#name").focus();
			}
			 error_check=false;
		}

                if(location== "")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button> Enter Your location.</div>");
				$("#location").focus();
			}
			 error_check=false;
		}

                if(email=="")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Enter Email Id.</div>");
				$("#email").focus();
			}
			 error_check=false;
		}

                if(!emailReg.test(email))
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Enter Valid Email-Id</div>");
				$("#email").focus();
			}

			 error_check=false;
		}
 
                if(contact=="")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Enter Contact No.</div>");
				$("#contact").focus();
			}
			 error_check=false;
		}
		
		if(concrete=="concrete")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Select Product Type.</div>");
				$("#concrete").focus();
			}
			 error_check=false;
		}
		
	
		if(tonnes=="")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Enter tonnes.</div>");
				$("#tonnes").focus();
			}
		 	error_check=false;
		}
		

               if(select=="select")
		{
			if(error_check)
			{
				$("#error").html("<div style='margin-bottom:0px;' class='alert alert-danger alert-dismissable'><button class='close close-red' aria-hidden='true' data-dismiss='alert' type='button'>X</button> Select Pick up or Delivered.</div>");
				$("#select").focus();
			}
			 error_check=false;
		}
			if(error_check)
		{
		$("#error").html("<div style='margin-bottom:0px;' class='alert alert-warning alert-dismissable'><button class='close close-yellow' aria-hidden='true' data-dismiss='alert' type='button'>X</button>Please Wait Processing...!</div>");
		var frmdata = $("#quote").serialize();
				$.ajax({
					 url:"<?=o()->site_url?>/contact_us/addquote",
                                       
					  type:"POST",
					  data:frmdata,	
					  success:function(data)
					  	{
							$('#quote').each(function()
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