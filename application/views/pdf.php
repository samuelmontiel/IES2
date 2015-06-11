<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
	<div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default">                  
                                    <div class="panel-heading">
                                        <h3 class="panel-title-ies">Mis Calificaciones Actuales</h3>
                                        <h3><?php echo $registro->nombre?> <?php echo $registro->apellido_m?> <?php echo $registro->apellido_p?> </h3>
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
    <script src="archivosAdmin/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="archivosAdmin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="archivosAdmin/js/plugins/morris/raphael.min.js"></script>
    <script src="archivosAdmin/js/plugins/morris/morris.min.js"></script>
    <script src="archivosAdmin/js/plugins/morris/morris-data.js"></script>

</body>
</html>