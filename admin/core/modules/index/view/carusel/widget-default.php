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
                        <div class="card-body">
                                <h4 class="card-title">  <a href="index.php?view=agenda"   class="btn waves-effect waves-light btn-rounded btn-primary"  >Agregar Guia</a></h4>
                              
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>País</th>
                                                <th>Ciudad</th>
                                                <th>Moneda</th>                                               
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php                                     
                                        $agendas = AgendaData::getAll('1');                             
					                        foreach($agendas as $agenda){
					                    ?>
                                         <tr>
                                            <td><?php echo $agenda->id;?></td>
                                            <td>                                      
                                                <i class="flag-icon flag-icon-<?php echo strtolower($agenda->pais);?> m-r-15" title="<?php echo strtolower($agenda->pais);?>" id="<?php echo strtolower($agenda->pais);?>"></i>
                                                <?php                                     
                                                     $pais = PaisData::getById($agenda->pais);                           
                                                     $ciudad = CiudadData::getById($agenda->capital); 
                                                     $moneda = MonedaData::getById($agenda->moneda);  
					                                ?>
                                                <span class="text-info"><?php echo $pais->pais ?></span>
                                          
                                            </td>
                                            <td><?php echo $ciudad->ciudad;?></td>   
                                            <td><?php echo $moneda->CurrencyName;?></td>                                     
                                           
                                            <td style="width:60px;">                                          
                                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="#"  class="btn btn-danger btn-xs btnEliminarCliente" idGuia ="<?php echo $agenda->id; ?>" ><i class="fa fa-trash"></i></a>
                                            </td>

                                            </tr><!-- modal -->

                                           <?php } 
                                           
                                           ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>País</th>
                                                <th>Ciudad</th>
                                                <th>Moneda</th>                                               
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
               