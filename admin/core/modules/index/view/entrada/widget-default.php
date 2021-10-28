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
                            <div class="card-body wizard-content">
                                <h4 class="card-title">Registra tu Entrada de blog</h4>
                                <h6 class="card-subtitle">Proporciona aqui los datos de la Entrada</h6>
                                <form action="#" class="validation-wizard-blog wizard-circle m-t-40">
                                    <!-- Step 1 -->
                                    <h6>Identificacion</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Categoria de la entrada : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="idTipo" name="idTipo">
                                                        <option value="">Seleccione</option>
                                                        <?php 
                                                        $categorias = CategoriaData::getAll('1');
                                                        if(count($categorias)>0):?>
                                                        <?php foreach($categorias as $categoria):?>
                                                        <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->categoria; ?></option>
                                                        <?php endforeach; ?>
                                                        <?php endif; ?>   
                                                    </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="wfirstName2"> Fecha : <span class="danger">*</span> </label>
                                                    <input type="date" class="form-control required"  id ="fecha" name ="fecha">
                                                    </div>
                                               
                                            </div>
                                        </div>
                                    
                                     

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Destacado : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="destacado" name="destacado">
                                                        <option value="">Seleccione </option>                                                      
                                                        <option value="1">Activo</option>
                                                        <option value="0">Inactivo</option>
                                                    </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="wfirstName2"> Slider : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="slider" name="slider">
                                                        <option value="">Seleccione</option>
                                                        <option value="1">Activo</option>
                                                        <option value="0">Inactivo</option>
                                                       
                                                    </select>
                                                    </div>
                                               
                                            </div>
                                        </div>
                                    
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Contenido</h6>
                                    <section>
                                 
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="wlocation2"> Título  : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control required" id="titulo" name ="titulo">
                                        </div>   
                                        </div>    
                                        <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="wlocation2"> Texto | Explicaciones | Parrafos  : <span class="danger">*</span> </label>
                                            <div id="editor" name="entrada" class="c1">
               
                                            </div>
   
                                           
                                        </div>   
                                        </div>           
                                    </div>   

                                    </section>
                                  
                                  <!-- Step 3 -->
                                  <h6>Imagen Portada</h6>
                                  <section>


                      
<div class="row">
    <div id="content" class="col-md-6" >
    <div class="form-group">                                                        
    <input type="text" class="form-control required"  id="ruta1" name="ruta1" style ="display:none">
    </div>
        <form method="post" action="#" enctype="multipart/form-data">
            <div class="card text-center">
            <div class="el-card-item">
<div class="el-card-avatar el-overlay-1">
<a class="image-popup-vertical-fit" href="assets/images/users/1.jpg" id="1"> <img src="../admin/storage/articulos/1.jpg"  class="rounded-circle" id="imagen1" width="150" alt="articulo1" /> </a>

</div>                              
</div>
                <div class="card-body ">                                                       			
                    <div class="form-group">
                        <label for="image">Imagen Portada</label>
                        <input type="file" class="form-control-file btn btn-primary" name="image1" id="image1"><br>
                
                    </div>
                    <input type="button" class="btn btn-primary upload1" style ="display:" id="upload1" value="Subir">
                </div>
            </div>
        </form>
    </div>
    <div id="content" class="col-md-6">
    <div class="form-group">                                                        
    <input type="text" class="form-control"  id="ruta2" name="ruta2" style ="display:none">
    </div>
        <form method="post" action="#" enctype="multipart/form-data">
            <div class="card text-center">
            <div class="el-card-item">
<div class="el-card-avatar el-overlay-1">
<a class="image-popup-vertical-fit" href="assets/images/users/1.jpg" id="2"> <img src="../admin/storage/articulos/1.jpg"  class="rounded-circle" id="imagen2" width="150" alt="articulo1" /> </a>

</div>                              
</div>
                <div class="card-body">                                                    			
                    <div class="form-group">
                        <label for="image">Imagen Contenido</label>
                        <input type="file" class="form-control-file btn btn-primary" name="image2" id="image2"><br>
                     
                    </div>
                    <input type="button" class="btn btn-primary upload2" style ="display:" id="upload2" value="Subir">
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row text-center">
    <div id="content" class="col-md-6">
    <div class="form-group">                                                        
    <input type="text" class="form-control"  id="ruta3" name="ruta3" style ="display:none">
    </div>
        <form method="post" action="#" enctype="multipart/form-data">
            <div class="card text-center">
            <div class="el-card-item">
<div class="el-card-avatar el-overlay-1">
<a class="image-popup-vertical-fit" href="assets/images/users/1.jpg" id="3"> <img src="../admin/storage/articulos/1.jpg"  class="rounded-circle" id="imagen3" width="150" alt="articulo1" /> </a>

</div>                              
</div>
                <div class="card-body">                                                      			
                    <div class="form-group">
                        <label for="image">Imagen Contenido</label>
                        <input type="file" class="form-control-file btn btn-primary" name="image3" id="image3"><br>
                      
                    </div>
                    <input type="button" class="btn btn-primary upload3"  style ="display:" id="upload3" value="Subir">
                </div>
            </div>
        </form>
    </div>
    <div id="content" class="col-md-6">
    <div class="form-group">                                                        
    <input type="text" class="form-control"  id="ruta4" name="ruta4" style ="display:none">
    </div>
        <form method="post" action="#" enctype="multipart/form-data">
            <div class="card text-center">
            <div class="el-card-item">
<div class="el-card-avatar el-overlay-1">
<a class="image-popup-vertical-fit" href="assets/images/users/1.jpg" id="4"> <img src="../admin/storage/articulos/1.jpg"  class="rounded-circle" id="imagen4" width="150" alt="articulo1" /> </a>                                   
</div>                              
</div>
                <div class="card-body">                                                      	
                    <div class="form-group">
                        <label for="image">Imagen Contenido</label>
                        <input type="file" class="form-control-file btn btn-primary" name="image4" id="image4"><br>
                     
                    </div>
                    <input type="button" class="btn btn-primary upload4" style ="display:" id="upload4" value="Subir">
                </div>
            </div>
        </form>
    </div>
</div>
    
</section>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
               