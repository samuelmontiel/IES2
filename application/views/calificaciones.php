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

       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Mis Calificaciones Actuales
                            <!-- <small>Subheading</small> -->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Calificaciones</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Mis Calificacciones
                            </li>
                        </ol>
                        
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                         <div class="col-md-2">
                                             <h4 "text-muted">Periodo:<h5>MAY-AGOS-15</h4></h5>
                                         </div>
                                        <div class="col-md-2">
                                            <h4 "text-muted">Cuatrimestre:<h5>4</h4></h5>
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="text-right">
                                                <a href="<?php echo site_url('principal/calif');?>?id=<?php echo $registro->idalumno?>" target="_blank"  class="fa fa-print fa-2x"></a>
                                               
                                               

                                            </h4>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                         </div>
                         
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">                  
                                    <div class="panel-heading">
                                        <h3 class="panel-title-ies">Mis Calificaciones Actuales</h3>
                                    </div>
                                    <div class="panel-body">
                                         <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th >CLAVE</th>
                                                            <th>MATERIA</th>
                                                            <th>U1</th>
                                                            <th>U2</th>
                                                            <th>U3</th>
                                                            <th>U4</th>
                                                            <th>U5</th>
                                                            <th>U6</th>
                                                            <th>U7</th>
                                                            <th>U8</th>
                                                            <th>PROMEDIO</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($materias as $materia) {?>
                                                                                                                  
                                                            <tr>
                                                            <td><?php echo $materia->clave?></td>
                                                            <td><?php echo $materia->nombre?></td>

                                                        
                                                            <td>100</td>
                                                            <td>90</td>
                                                            <td>80</td>
                                                            <td>70</td>
                                                            <td>95</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            
                                                        </tr>
                                                        <?php } ?>
                                                       
                                                        
                                                                                                              
                                                    </tbody>
                                                </table>
                                          </div>
                                         </div>
                                    </div>
                                </div>
                            </div> 
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
  
</body>

</html>
