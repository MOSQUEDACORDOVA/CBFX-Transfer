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
                <div class="col-12">
                        <div class="card">
                            <div class="card-body wizard-content">
                                <h4 class="card-title">Registra tu Guia</h4>
                                <h6 class="card-subtitle">Proporciona aqui los datos de la Guia</h6>
                                <form action="#" class="validation-wizard wizard-circle m-t-40">
                                    <!-- Step 1 -->
                                    <h6>Ubicación</h6>
                                    <section>
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Continente : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="continente" name="continente">
                                                        <option value="">Seleccione Continente</option>   
                                                        <option value = "AF">Africa</option>
                                                        <option value = "AS">Asia</option>	
                                                        <option value = "EU">Europa</option>
														<option value = "NA">Norte America</option>
														<option value = "OC">Oceania</option>																										
														<option value = "SA">Sur america</option>												
                                                    </select>
                                                   
                                                    </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Pais : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="pais" name="pais">
                                                        <option value="">Seleccione Pais</option>
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
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                    <label for="wfirstName2"> Capital : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="capital" name="capital">
                                                        <option value="">Seleccione capital</option>
                                                      
                                                    </select>
                                                    </div>
                                               
                                            </div>
                                        </div>
                                        <div class="row">  
<div class="col-md-6">
        <div class="form-group">
            <label for="wlocation2"> Latitud : <span class="danger">*</span> </label>
            <input type="number" class="form-control required" id="latitud" name="latitud"> 
           
        </div>
    </div>
    
    <div class="col-md-6">
    <div class="form-group">
            <label for="wlocation2"> Longitud : <span class="danger">*</span> </label>
            <input type="number" class="form-control required" id="longitud" name="longitud"> 
        </div>   
        </div>          
</div>     
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2"> Moneda : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="moneda" name="moneda">
                                                    <option value="">Seleccione Moneda</option>
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
                                                    <option value ="">Selecciona Idioma</option>
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
                                                        <option value="">Seleccione Clima</option>
                                                        <option value="Desertico">Desertico</option>
                                                        <option value="Estacional">Estacional</option>
                                                        <option value="Templado">Templado</option>
                                                        <option value="Tropical">Tropical</option>                                                    
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
                                            <textarea name="llegar" id="llegar" rows="10" class="form-control required"></textarea>
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
                                            <textarea name="hospedaje" id="hospedaje" rows="10" class="form-control required"></textarea>
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
                                            <textarea name="actividad" id="actividad" rows="10" class="form-control required"></textarea>
                                        </div>   
                                        </div>          
                                    
                                    </div> 
                                       <!-- Step 5 -->
                                       </section>
                                  
                                       <!-- Step 5 -->
                                  <h6>Presupuesto</h6>
                                  <section>
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="wlocation2"> Formas de pago | Dinero | Precios : <span class="danger">*</span> </label>
                                            <textarea name="presupuesto" id="presupuesto" rows="10" class="form-control required"></textarea>
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
                                            <textarea name="transporte" id="transporte" rows="10" class="form-control required"></textarea>
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
                                            <textarea name="comida" id="comida" rows="10" class="form-control required"></textarea>
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
                                            <textarea name="consejo" id="consejo" rows="10" class="form-control required"></textarea>
                                        </div>   
                                        </div>        
                                    
                                    </div> 
                                     </section>
                                  
                                </form>
                            </div>
                        </div>
                       
                    </div>
                
            </div>
                