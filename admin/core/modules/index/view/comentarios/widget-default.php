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
                        <h4 class="page-title">Blog</h4>
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
                                <h4 class="card-title"> Comentarios</h4>
                              <label for="" id="idEntrada"> <?php echo $_GET['id'] ?></label>
                                <div class="table-responsive">
                                    <table id="lang_opt" class="table table-striped table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Comentario</th>          
                                                <th>Fecha</th>                                                                                                                     
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   
                                        $id=$_GET['id'];                                  
                                        $entradas = EntradaData::getComentarios($id);                             
					                        foreach($entradas as $entrada){
					                    ?>
                                         <tr>
                                            <td><?php echo $entrada->id;?></td>
                                            <td><?php echo $entrada->o1;?></td>
                                            <td><?php echo $entrada->o2;?></td>                                                       
                                            <td><?php echo $entrada->fecha;?></td>               
                                            <td style="width:60px;">                                      
                                            <a href="#"  class="btn btn-danger btn-xs btnEliminarComentario" idEntrada ="<?php echo $entrada->id; ?>" ><i class="fa fa-trash"></i></a>   
                                            </td>

                                            </tr><!-- modal -->

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
               