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
                                <h4 class="card-title">  <a href="index.php?view=entrada"   class="btn waves-effect waves-light btn-rounded btn-primary"  >Agregar Entrada</a></h4>
                              
                                <div class="table-responsive">
                                    <table id="lang_opt" class="table table-striped table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Código</th>
                                                <th>Título</th>          
                                                <th>Fecha</th>                                                                                                                     
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php                                     
                                        $entradas = EntradaData::getAll('1');                             
					                        foreach($entradas as $entrada){
					                    ?>
                                         <tr>
                                            <td><?php echo $entrada->id;?></td>
                                            <td><?php echo $entrada->codigo;?></td>
                                            <td><?php echo $entrada->titulo;?></td>                                                        
                                            <td><?php echo $entrada->fecha;?></td>     
                                            <td style="width:60px;">                                          
                                            <a href="index.php?view=entradaUpdate&id=<?php echo $entrada->id;?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="index.php?view=comentarios&id=<?php echo $entrada->id;?>" class="btn btn-success btn-xs"><i class="fas fa-comments"></i></a>
                                            <a href="#"  class="btn btn-danger btn-xs btnEliminarEntrada" idEntrada ="<?php echo $entrada->id; ?>" ><i class="fa fa-trash"></i></a>
                                            
                                           
                                            </td>

                                            </tr><!-- modal -->

                                           <?php } 
                                           
                                           ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Código</th>
                                                <th>Título</th>          
                                                <th>Fecha</th>                                                                                                                     
                                                <th>Opciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
           
                        </div>
                    </div>
                </div>
                
            </div>
               