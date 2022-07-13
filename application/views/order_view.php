

<!DOCTYPE html>
<html lang="en">
<head>
	<title>ORDERKUY</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/contactv5/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/contactv5/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/contactv5/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/contactv5/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/contactv5/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/contactv5/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/contactv5/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/contactv5/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/contactv5/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/contactv5/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/contactv5/css/main.css">
<!--===============================================================================================-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	
	<style type="text/css">
		p {
			color: white;
		}

		.hide{display:none}

		.wrap-contact100-form-radio {
		  width: 100%;
		  padding: 0px;
		}

		.rs1-wrap-input100 {
		  width: calc((100% - 50px) / 2);
		}

		.price {
		  width: calc((100% - 50px) / 4);
		  float: right; 
		}

		.wrap-contact100 {
			padding: 50px 50px 20px 50px;
		}

		.label-input100 {
			font-size: 15px;
		}
	</style>

</head>
<body>


	<div class="container-contact100" style="background: none; padding-top: 100px">
		<div class="wrap-contact100" >
			<form class="contact100-form validate-form" method="post" action="<?php echo base_url();?>index.php/main/add_order" name="add_order">
				
				<?php
	            if(!empty($notif)){
	                echo '<div class="alert alert-danger">';
	                echo $notif;
	                echo '</div>';
	              }
	            ?>
				<span class="contact100-form-title">
					Order Form
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Table Number">
					<span class="label-input100">TABLE NO *</span>
					<input class="input100" type="number" name="no_table" placeholder="Enter Your Name" min="1" value="" autofocus="" required="">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name" required="">
				</div>
				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100" style="width: 100%">
		        <?php
		        	$this->load->view('foods_order_view');
		        ?>
		    	</div>
		    	<div class="wrap-input100 input100-select bg1 rs1-wrap-input100" style="width: 100%">
		    	<?php
		    		$this->load->view('drinks_order_view');
		    	?>
		    	</div>
				<div class="container-contact100-form-btn">
					<input type="submit" name="submit" class="contact100-form-btn" value="ORDER">
				</div>
			</form>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/contactv5/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/contactv5/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/contactv5/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/contactv5/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/contactv5/vendor/select2/select2.min.js"></script>
	<script>
	  $(".js-select2").each(function(){
	    $(this).select2({
	      minimumResultsForSearch: 20,
	      dropdownParent: $(this).next('.dropDownSelect2')
	    });

	    $(".js-select2").each(function(){
	      $(this).on('select2:close', function (e){
	        if($(this).val() == "Please chooses") {
	          $('.js-show-service').slideUp();
	        }
	        else {
	          $('.js-show-service').slideUp();
	          $('.js-show-service').slideDown();
	        }
	      });
	    });
	  })
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/contactv5/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/contactv5/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/contactv5/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/contactv5/vendor/noui/nouislider.min.js"></script>
	
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	</script>
</body>
</html>
