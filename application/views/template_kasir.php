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

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/sb-admin-2/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/sb-admin-2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url();?>assets/farras/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/farras/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/farras/fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
    <style type="text/css">
        .table > tbody > tr > .thick-line {
            border-top: 2px solid;
        }
        .table > thead > tr > .thicks-line {
            border-top: 2px solid;
        }

        .table > tbody > tr > .no-line {
            border-top: none;
        }
     </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">OREDERKUY</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url();?>index.php/main/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

      <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url();?>index.php/main/kasir"><i class="fa fa-dashboard fa-fw"></i> KASIR</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/main/history"><i class="fa fa-dashboard fa-fw"></i> HISTORY</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php
                $this->load->view($main_view);
            ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/sb-admin-2/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/sb-admin-2/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/sb-admin-2/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>assets/sb-admin-2/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/sb-admin-2/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/sb-admin-2/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/sb-admin-2/dist/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url();?>assets/farras/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/farras/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/farras/vendor/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
