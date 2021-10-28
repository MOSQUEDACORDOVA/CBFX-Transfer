<?php 
$id = $_GET['id'];
 $entrada = EntradaData::getById($id);
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
                        <h4 class="page-title">Blog</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Editar Entrada</li>
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
                <form action="#" method ="POST" id="c1" class="">
                        <div class="card">
                            <div class="card-body">
                                <h4>Titulo</h4>
                                <input type="text" class ="form-control" id="titulo" value="<?php echo $entrada->titulo ?>">
                                <input type="hidden" class ="form-control" id="id" value="<?php echo $entrada->id ?>">
                                <hr>
                                <h4>Contenido</h4>
                              
                                <!-- Create the editor container -->
                                <div id="editor2" class="c2" style="height: 300px;">
                                <?php echo $entrada->entradaBlog ?>
                                </div>
                          
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary editarc2">Editar</button>
                            </div>
                        </div> 
                </form>        
                </div>
                
                    
            </div>
               