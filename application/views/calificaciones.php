<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    


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
                                                <a href="" class="fa fa-print fa-2x"></a>
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
                                                            <th>CLAVE</th>
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
                                                            <td><?php echo $materia->calificacion?></td>
                                                            <td><?php echo $materia->calificacion?></td>
                                                            <td><?php echo $materia->calificacion?></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>96</td>
                                                            
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
