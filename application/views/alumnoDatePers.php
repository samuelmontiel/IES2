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
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Datos Personales</a>
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
                                      <img src="<?php echo $registro->img_perfil?>" class="avatar img-circle" alt="avatar" height="100px" width="100px">
                                  
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
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title-ies">Situacion del Alumno</h3>
                                    </div>
                                    <div class="panel-body text-left">
                                        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Nombre completo</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->nombre?> <?php echo $registro->apellido_m?> <?php echo $registro->apellido_p?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>CURP</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->curp?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Fecha de Nac</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->fecha_nac?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Sexo</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->sexo?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Correo</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->email?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Calle</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->calle?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Numero</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->numero_ext?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Colonia</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->colonia?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Municipio</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->municipio?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Estado</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->estado?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Pais</label>
                                                            <input class="form-control" placeholder="<?php echo $registro->pais?>">
                                                        </div>
                                                    </div>
                                                </div>
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
