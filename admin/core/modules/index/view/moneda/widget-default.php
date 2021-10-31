<?php 
 $moneda =$_GET['moneda'];
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
                        <h4 class="page-title"><?php echo $moneda; ?></h4>
                        <h4 class="page-title" id="idSeccion" style="display:none"><?php echo $id=$_GET['id']; ?></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Monedas</li>
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
                                <h4>Pais</h4>
                                <select class="form-control" id = "materiasData" name = "materiasData">
										<option value ="0">Seleccione</option>									
							    </select><br>
                                <h4>Abreviatura</h4>
                                <select class="form-control" id = "materiasData" name = "materiasData">
										<option value ="0">Seleccione</option>									
							    </select>

                              

                              
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary editarc1">Editar</button>
                            </div>
                        </div> 
                </form>        
                </div>
                
                    
            </div>
               