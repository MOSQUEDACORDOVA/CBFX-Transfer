<?php 
 $seccionTab =$_GET['seccionTab'];
?>
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
                        <h4 class="page-title"><?php echo $seccionTab; ?></h4>
                        <h4 class="page-title" id="idSeccion" style="display:none"><?php echo $id=$_GET['id']; ?></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mis entradas</li>
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
                        <h4 class="card-title">  <a href="#"   class="btn waves-effect waves-light btn-rounded btn-primary"  alt="default" data-toggle="modal" data-target="#responsive-modal"  >Agregar Tema</a></h4>
                                <div class="table-responsive">
                                    <table id="lang_opt" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>                                              
                                                <th>Tema</th>                                                                                                                               
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php                                     
                                        $secciones = SeccionData::getAllSecciones($id);                             
					                        foreach($secciones as $seccion){
					                    ?>
                                         <tr>
                                            <td><?php echo $seccion->titulo;?></td>                                                                            
                                            <td style="width:60px;" class ="text-center">
                                            <a href="#"   class="btn waves-effect waves-light btn-rounded btn-primary"  alt="default" data-toggle="modal" data-target="#responsive-modal"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn waves-effect waves-light btn-rounded btn btn-danger btnEliminarTema" seccionTab="<?php echo $seccionTab; ?>" idSeccionTab ="<?php echo $id; ?>" idTema ="<?php echo $seccion->id; ?>"><i class="fa fa-trash"></i></a>
                                            
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
                 <!-- sample modal content -->
             <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Agregar Tema</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method ="POST" id="c1" class="">                      
                                                    <div class="form-group">
                                                        <label>Sección</label>
                                                        <input type="hidden" class="form-control" id="idSeccionTab" name ="idSeccionTab" value="<?php echo $id ?>">              
                                                        <input type="hidden" class="form-control" id="seccionTab" name ="seccionTab" value="<?php echo $seccionTab ?>"> 
                                                        <input type="text" class="form-control" id="tema" name ="tema">                               
                                                    </div>                              
                                                </form>        
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary registrarTema">Registrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
               