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
                        <h4 class="page-title">Canadá</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Secciones</li>
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
                        <h4 class="card-title">  <a href="#"   class="btn waves-effect waves-light btn-rounded btn-primary"  alt="default" data-toggle="modal" data-target="#responsive-modal"  >Agregar Enlace</a></h4>
                                <div class="table-responsive">
                                    <table id="lang_opt" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>                                              
                                                <th>Enlace</th> 
                                                <th>Direccion Web</th>                                                                                             
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php                                     
                                        $enlaces = SeccionData::getAllEnlaces('1');                             
					                        foreach($enlaces as $enlace){
					                    ?>
                                         <tr>
                                            <td><?php echo $enlace->caption;?></td>
                                            <td><?php echo $enlace->enlace;?></td>                                           
                                            <td style="width:60px;" class ="text-center">       
                                            <a href="index.php?view=enlaceUpdate&id=<?php echo $enlace->id;?>" class="btn btn-info"><i class="fa fa-edit"></i></a>                                   
                                            <a href="#" class="btn btn-danger btnEliminarBoton" idBoton ="<?php echo $enlace->id; ?>"><i class="fa fa-trash"></i></a>
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
                                                <h4 class="modal-title">Agregar Enlace</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method ="POST" id="c1" class="">                      
                                                    <div class="form-group">
                                                        <label>Nombre Botón</label>
                                                        <input type="text" class="form-control" id="caption" name ="caption">                               
                                                    </div>  
                                                    <div class="form-group">
                                                        <label>Enlace</label>
                                                        <input type="text" class="form-control" id="enlace" name ="enlace">                               
                                                    </div>                                    
                                                </form>        
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary registrarEnlace">Registrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
               