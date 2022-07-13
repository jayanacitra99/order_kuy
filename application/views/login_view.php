<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ORDERKUY</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/sb-admin-2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/sb-admin-2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/sb-admin-2/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/sb-admin-2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php
    if (!empty($notif)) {
        echo '<div class="alert alert-danger">'.$notif.'</div>';
    }
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">LOGIN</h3>
                    </div>
                    <div class="panel-body">
                    <!--<?php
                        /*if(!empty($notif)){
                            echo '<div class="alert alert-danger">'.$notif.'</div>';
                        }*/
                    ?>-->
                        <form action="<?php echo base_url();?>index.php/main/do_login" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <div class="form-group">
                                <input type="submit" class="btn btn-md btn-success btn-block" value="LOGIN" name="submit">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/sb-admin-2/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/sb-admin-2/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/sb-admin-2/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/sb-admin-2/dist/js/sb-admin-2.js"></script>

</body>

</html>
