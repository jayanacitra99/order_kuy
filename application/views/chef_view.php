<!DOCTYPE html>
<html lang="en">
<head>
  <title>Oh Kitchen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    #halaman { width:1000px; margin:0 auto; }
    .header { height:250px; padding:10px;background-color:#E0F2F1; margin-bottom: 20px; }
    #kiri { height:180px; padding:10px;}
    .kanan { height:160px; padding:10px;}
    #tengah { height:50px; padding:10px; margin: 18px;}
    .button {
	   background-color: #00897B;
	   border-radius: 5px 5px 5px 5px;
	   border: none;
	   color: #B2DFDB;
	   text-align: center;
	   text-decoration: none;
	   display: inline-block;
	   font-size: 16px;
	   cursor: pointer;
	   max-width:100%;
	   width:100%;
  } 
</style>
</head>
<body>
<div id="halaman">
<?php $i = 1;?>
<?php foreach($dapur as $pur):?>
	<div id="header<?php echo $i;?>" class="well header">
    <div class="container-fluid">
	    <div class="col-lg-12">
	    <br>
	      <div class="row" id="panel">
	  
	        <div class="col-sm-7">
	          <div class="well" id="kiri">
	            <p><?php echo $pur->NAME;?></p>  
	          </div>
	        </div>
	        <div class="col-sm-3">
	          <div class="well" id="tengah">
	            <p><?php echo $pur->NO_TABLE;?></p> 
	          </div>
                <div class="well" id="tengah">
	            <p><?php echo $pur->CUSTOMER_NAME;?></p> 
	          </div>
	        </div>
	        <div class="col-sm-2">
	            <button class="button kanan" id="<?php echo $i;?>" style="height:155px; margin right: 50px;"><b>DONE</b></button>
	        </div>
	    
	      </div>
	    </div>
	  </div>
	</div>
	<script>
		$('#<?php echo $i;?>').click(function() {
		    document.getElementById("header<?php echo $i;?>").style.display = "none";
		})			
	</script>
	<?php $i++;?>
	<?php endforeach;?>
</div>

</body>
</html>
