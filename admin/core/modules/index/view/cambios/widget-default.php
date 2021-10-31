<!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Tazas de cambio</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tazas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-body">                              
                        <h4 class="card-title">  <a href="#"   class="btn waves-effect waves-light btn-rounded btn-primary"  alt="default" data-toggle="modal" data-target="#responsive-modal"  >Agregar Moneda</a></h4>
                                <div class="table-responsive">
                                    <table id="lang_opt" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>                                              
                                                <th>Pais</th> 
                                                <th>Abreviatura</th>                                                                                 
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php                                     
                                        $secciones = SeccionData::getAll('1');                             
					                        foreach($secciones as $seccion){
					                    ?>
                                         <tr>
                                            <td><?php echo $seccion->titulo;?></td>
                                            <td><?php echo $seccion->titulo;?></td>                                           
                                            <td style="width:60px;" class ="text-center">       
                                            <a href="index.php?view=seccionesTemas&id=<?php echo $seccion->id;?>&seccionTab=<?php echo $seccion->titulo;?>" class="btn btn-info"><i class="fa fa-edit"></i></a>                                   
                                            <a href="index.php?view=seccion&id=<?php echo $seccion->id;?>&seccionTab=<?php echo $seccion->titulo;?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-danger btnEliminarSeccion" idSeccion ="<?php echo $seccion->id; ?>"><i class="fa fa-trash"></i></a>
                                        </td>

                                            </tr>	
                                           <?php } 
                                           
                                           ?>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
           
                        </div>
                    </div>
                </div>
                
            </div>

             <!-- sample modal content -->
             <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Agregar Tasa</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method ="POST" id="c1" class="">                      
                                                    <div class="form-group">
                                                        <label>Pais</label>
                                                        <input type="text" class="form-control" id="titulo" name ="titulo">                               
                                                    </div>     
                                                    <div class="form-group">
                                                        <label>Taza</label>
                                                        <input type="text" class="form-control" id="titulo" name ="titulo">                               
                                                    </div>                              
                                                </form>        
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary registrarTab">Registrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
               