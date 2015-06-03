<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <base href="<?php echo base_url();?>">
</head>

<body>

    <div id="wrapper">
    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Generales
                            <!-- <small>Subheading</small> -->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Datos Institucionales</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Generales
                            </li>
                        </ol>
                        <ol class="breadcrumb">
                            <div class="row">
      <!-- left column -->     
                              <div class="col-md-6">
                                    <div class="text-left">
                                      <img src="<?php echo $registro->img_perfil?>" class="avatar img-circle" alt="avatar" width="100px" height="100px">
                                  
                                    </div>
                              </div>
                              <div class="col-md-6">
                               
                                    <div class="text-right">
                               
                                    <h4><?php echo $registro->nombre?> <?php echo $registro->apellido_m?> <?php echo $registro->apellido_p?> </h4>
                                    <h4><?php echo $registro->no_ctrl?></h4>
                                    </div>
                              
                            
                              </div>
                               
                            </div>
                        </ol>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                         <div class="col-md-3">
                                             <h4 "text-muted-ies">Cuatrimestre:<h4>4</h4></h4>
                                         </div>
                                        <div class="col-md-3">
                                            <h4 "text-muted">Promedio:<h4>95</h4></h4>
                                        </div>
                                        <div class="col-md-3">
                                            <h4 "text-muted">Avance :<h4>36%</h4></h4>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-success">
                                                <h4 class="text-right">Vigente</h4>
                                                
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title-ies">Situacion del Alumno</h3>
                                    </div>
                                    <div class="panel-body">
                                         <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Licenciatura en</th>
                                                            <th>Plan</th>
                                                            <th>Estado</th>
                                                            <th>Correo Institucional</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $licenciatura->nombre?></td>
                                                            <td>2014</td>
                                                            <td>Vigente</td>
                                                            <td><?php echo $registro->email?></td>
                                                        </tr>
                                                                                                              
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

