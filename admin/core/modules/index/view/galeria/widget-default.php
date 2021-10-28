
<?php
$id = $_GET['id'];
$fotos = MediaData::getDataFotos('idGuia',$id);       
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
                        <h4 class="page-title">Guias</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Guias</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="m-r-10">
                              
                            </div>
                            <a href="#" data-toggle="modal" data-target="#responsive-modal"  class="btn btn-success"><i class="fa fa-image"></i> Agregar Foto</a>
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
          
                <div class="row el-element-overlay">
                    <?php 
                    	if(count($fotos)>0){
                         foreach($fotos as $foto){
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo $foto->archivo?>" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo $foto->archivo?>"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link eliminarFoto" id="<?php echo $foto->id?>" foto ="<?php echo substr($foto->archivo,27)?>" idGuia ="<?php echo $id?>"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0"><?php echo substr($foto->archivo,27)?></h4> <span class="text-muted"> Foto Guia</span>
                                </div>
                            </div>
                        </div>
                    </div>
               <?php 
                         }
                        }else{
                            ?>  
                            <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="../admin/storage/articulos/1.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../admin/storage/articulos/1.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link " href=""><i class="icon-link "></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0">Sin Fotos</h4> <span class="text-muted"> No existen archivos para esta guía</span>
                                </div>
                            </div>
                        </div>
                    </div>
                              <?php    
                        }
               ?>
                </div>
               
             
            </div>
            </div>

            	 <!-- sample modal content -->
								 <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Agregar Foto a la guia</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
										
												
											<div class="row">
											<div id="content" class="col-md-12" >
                                        <div class="form-group">                                                     
                                        <input type="text" class="form-control required"  id="ruta1" name="ruta1" style ="display:none">
                                        </div>
                                            <form method="post" action="#" enctype="multipart/form-data">
                                                <div class="card text-center">
                                                <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
								<input type="text" id="idGuia" style="display:none" value="<?php echo $id;?>">
                                   <img src="../admin/storage/articulos/1.jpg"  class="rounded-circle" id="imagen1" width="150" alt="imagen" />
                                   
                                </div>                              
                            </div>
                                                    <div class="card-body ">                                                       			
                                                        <div class="form-group">
                                                            <label for="image">Nueva imagen</label>
                                                            <input type="file" accept="image/png, .jpeg, .jpg" class="form-control-file btn btn-primary" name="image1" id="image1"><br>
															
                                                        </div>
                                                        <input type="button" class="btn btn-primary uploadFoto" style ="display:" id="uploadFoto" value="Subir">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
											</div>	                                                   
                                                 
                                               
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>                                              
                                            </div>
										
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
               