<?php
$id = $_GET['id'];
$guia = AgendaData::getData($id);
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
                        <h4 class="page-title">Guías</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Guías</li>
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
                <div class="col-12">
                        <div class="card">
                            <div class="card-body wizard-content">
                                <h4 class="card-title">Edita tu Guía</h4>
                                <h6 class="card-subtitle">Proporciona aquí los datos de la Guía</h6>
                                <form action="#" class="validation-wizard-edit wizard-circle m-t-40">
                                    <!-- Step 1 -->
                                    <h6>Ubicación</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text"  style="display:none" id ="id" name ="id" value ="<?php echo $id ?>">
                                                    <label for="wfirstName2"> Pais : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="pais" name="pais">
                                                        <option value="<?php echo $guia->o1 ?>"><?php echo $guia->pais ?></option>
                                                        <?php 
                                                        $paises = PaisData::getAll();
                                                        if(count($paises)>0):?>
                                                        <?php foreach($paises as $pais):?>
                                                        <option value="<?php echo $pais->codigo; ?>"><?php echo $pais->pais; ?></option>
                                                        <?php endforeach; ?>
                                                        <?php endif; ?>   
                                                    </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="wfirstName2"> Capital : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="capital" name="capital">
                                                        <option value="<?php echo $guia->capital ?>"><?php echo $guia->o2 ?></option>
                                                      
                                                    </select>
                                                    </div>
                                               
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2"> Moneda : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="moneda" name="moneda">
                                                    <option value="<?php echo $guia->moneda ?>"><?php echo $guia->o3 ?></option>
                                                        <?php 
                                                        $monedas = MonedaData::getAll();
                                                        if(count($monedas)>0):?>
                                                        <?php foreach($monedas as $moneda):?>
                                                        <option value="<?php echo $moneda->CurrencyISO; ?>"><?php echo $moneda->CurrencyName; ?></option>
                                                        <?php endforeach; ?>
                                                        <?php endif; ?>   
                                                    </select>
                                                </div>
                                            </div>
                                           			
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="wlocation2"> Idioma : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="idioma" name="idioma">
                                                    <option value ="<?php echo $guia->idioma ?>"><?php echo $guia->idioma ?></option>
														<option value = "Inglés">Inglés</option>
														<option value = "Chino mandarín">Chino mandarín</option>
														<option value = "Hindi">Hindi</option>	
														<option value = "Español">Español</option>														
														<option value = "Francés">Francés</option>
														<option value = "Árabe estándar">Árabe estándar</option>	
														<option value = "Bengalí">Bengalí</option>	
														<option value = "Ruso">Ruso</option>	
														<option value = "Portugués">Portugués</option>	
														<option value = "Indonesio">Indonesio</option>	
														<option value = "Urdu">Urdu</option>	
														<option value = "Alemán estándar">Alemán estándar</option>	
														<option value = "Japonés">Japonés</option>	
														<option value = "Swahili">Swahili</option>	
														<option value = "Marathi">Marathi</option>	
														<option value = "Telugu">Telugu</option>	
														<option value = "Panyabi occidental">Panyabi occidental</option>	
														<option value = "Chino Wu">Chino Wu</option>	
														<option value = "Tamil">Tamil</option>	
														<option value = "Turco">Turco</option>
														<option value = "Otro">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Tipo de clima : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="clima" name="clima">
                                                    <option value ="<?php echo $guia->clima ?>"><?php echo $guia->clima ?></option>
                                                        <option value="Templado">Templado</option>
                                                        <option value="Tropical">Tropical</option>
                                                        <option value="Desertico">Desertico</option>
                                                    </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="wfirstName2"> Estatus : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="estatus" name="estatus">
                                                        <option value="">Seleccione Estatus</option>
                                                        <option value="1">Activo</option>
                                                        <option value="0">Inactivo</option>
                                                       
                                                    </select>
                                                    </div>
                                               
                                            </div>
                                        </div>
                                    
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>¿Como llegar?</h6>
                                    <section>
                                 
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="wlocation2"> Indicaciones | Direcciones | Vuelos  : <span class="danger">*</span> </label>
                                            <textarea name="llegar" id="llegar" rows="10" class="form-control required"><?php echo $guia->llegar ?></textarea>
                                        </div>   
                                        </div>         
                                    </div>

                                    </section>
                                  
                                  <!-- Step 3 -->
                                  <h6>Hospedaje</h6>
                                  <section>
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="wlocation2"> Hoteles | Cabañas | Lugares : <span class="danger">*</span> </label>
                                            <textarea name="hospedaje" id="hospedaje" rows="10" class="form-control required"><?php echo $guia->hospedaje ?></textarea>
                                        </div>   
                                        </div>          
                                    
                                    </div>  
                                      </section>
                                  
                                        <!-- Step 5 -->
                                  <h6>Actividades</h6>
                                  <section>
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="wlocation2"> Deporte | Musica | Arte : <span class="danger">*</span> </label>
                                            <textarea name="actividad" id="actividad" rows="10" class="form-control required"><?php echo $guia->llegar ?></textarea>
                                        </div>   
                                        </div>          
                                    
                                    </div> 
                                       <!-- Step 5 -->
                                       </section>
                                  <h6>Presupuesto</h6>
                                  <section>
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="wlocation2"> Formas de pago | Dinero | Precios : <span class="danger">*</span> </label>
                                            <textarea name="presupuesto" id="presupuesto" rows="10" class="form-control required"><?php echo $guia->presupuesto ?></textarea>
                                        </div>   
                                        </div>          
                                    
                                    </div> 
                                      </section>
                                       <!-- Step 6  -->
                                  <h6>Transporte</h6>
                                  <section>
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="wlocation2"> Trenes | Rutas | Vías  : <span class="danger">*</span> </label>
                                            <textarea name="transporte" id="transporte" rows="10" class="form-control required"><?php echo $guia->transporte ?></textarea>
                                        </div>   
                                        </div>          
                                    
                                    </div> 
                                      </section>
                                           <!-- Step 7  -->
                                  <h6>Comida</h6>
                                  <section>
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="wlocation2"> Gastronomía | Restaurantes | Marisquerias  : <span class="danger">*</span> </label>
                                            <textarea name="comida" id="comida" rows="10" class="form-control required"><?php echo $guia->comida ?></textarea>
                                        </div>   
                                        </div>          
                                    
                                    </div>
                                     </section>
                                    <!-- paso 8 -->
                                    <h6>Consejos</h6>
                                    <section>
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="wlocation2"> Tips | Migración | Ideas  : <span class="danger">*</span> </label>
                                            <textarea name="consejo" id="consejo" rows="10" class="form-control required"><?php echo $guia->consejo ?></textarea>
                                        </div>   
                                        </div>        
                                    
                                    </div> 
                                     </section>
                                  
                                </form>
                            </div>
                        </div>
                       
                    </div>
                
            </div>
                