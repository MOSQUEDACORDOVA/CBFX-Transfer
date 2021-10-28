<?php 
$id = $_GET['id'];
 $enlace = SeccionData::getByIdEnlace($id);
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
                        <h4 class="page-title">Enlace</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Editar Enlace</li>
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
               
                <div class="col-6">
                <form action="#" method ="POST" id="c1" class="">
                        <div class="card">
                            <div class="card-body">                            
                                <label>Nombre Botón</label>
                                <input type="text" class="form-control" id="caption" name ="caption" value =" <?php echo $enlace->caption ?>"> <br>
                                <input type="hidden" class="form-control" id="id" name ="id" value =" <?php echo $enlace->id ?>"> <br>
                                <label>Direccion | Enlace | Link</label>
                                <input type="text" class="form-control" id="enlace" name ="enlace" value =" <?php echo $enlace->enlace ?>">    
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary editarEnlace">Editar</button>
                            </div>
                        </div> 
                </form>        
                </div>
                
                    
            </div>
               