<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo base_url();?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IES</title>

    <!-- Bootstrap Core CSS -->
    <link href="archivosAdmin/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="archivosAdmin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="archivosAdmin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="archivosAdmin/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
         <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Alumno</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
                <li class="dropdown">
                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $registro->nombre?> <b class="caret"></b></a>
                     
                    <ul class="dropdown-menu">
                       
                        <li class=""></li>
                        <li>
                            <a href="<?php echo site_url('principal/logout');?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="<?php echo site_url('principal/alumnoDateInst');?> "><i class="fa fa-fw fa-dashboard"></i> Datos Institucionales</a>
                    </li>
                     <li class="active">
                        <a href="<?php echo site_url('principal/alumnoDatePers');?> "><i class="fa fa-fw fa-dashboard"></i> Datos Personales</a>
                    </li>
                    <li >
                        <a href="<?php echo site_url('principal/calificaciones');?> "><i class="fa fa-fw fa-bar-chart-o"></i> Calificaciones</a>
                    </li>               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        

    </div>
    <!-- /#wrapper -->
   <?php $this->load->view($contenidoAlumno);?>

           

    <!-- jQuery Version 1.11.0 -->
    <script src="archivosAdmin/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="archivosAdmin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="archivosAdmin/js/plugins/morris/raphael.min.js"></script>
    <script src="archivosAdmin/js/plugins/morris/morris.min.js"></script>
    <script src="archivosAdmin/js/plugins/morris/morris-data.js"></script>


</body>

</html>
