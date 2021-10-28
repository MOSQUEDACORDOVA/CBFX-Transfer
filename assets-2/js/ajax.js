
$(document).ready(function() {

	if ($('#blogSlider').length) {
		$('#blogSlider').ready(function() {
		$("#blogSlider").empty();
		  cargarEntradas()
		  console.log('slider de entradas');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }

	  if ($('#tabs').length) {
		$('#tabs').ready(function() {
		//$("#canadaDatos").empty();
		canadaTabs()
		  console.log('tabs');
			  return false;	   
		});
	  } else {
		//alert('no existo')
	  } 

	  if ($('#entradas').length) {
		$('#entradas').ready(function() {
		$("#entradas").empty();
		  cargarEntradas2()
		  console.log('entradas');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }

	  if ($('#home').length) {
		$('#home').ready(function() {
		//$("#canadaDatos").empty();
		canadaDatosHome()
		  console.log('home');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  } 

	  if ($('#profile').length) {
		$('#profile').ready(function() {
		//$("#canadaDatos").empty();
		canadaDatosprofile()
		  console.log('profile');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }

	  if ($('#messages').length) {
		$('#messages').ready(function() {
		//$("#canadaDatos").empty();
		canadaDatosmessages()
		  console.log('messages');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }

	  if ($('#settings').length) {
		$('#settings').ready(function() {
		//$("#canadaDatos").empty();
		canadaDatossettings()
		  console.log('settings');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }
	  if ($('#comentarios').length) {
		$('#comentarios').ready(function() {
		//$("#canadaDatos").empty();
		comentariosDatos();
		  console.log('comentarios');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }
	  if ($('#mensajeNati').length) {
		$('#mensajeNati').ready(function() {
		//$("#canadaDatos").empty();
		mensajeNati();
		  console.log('mensajeNati');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }

	  
	  if ($('#enlaces').length) {
		$('#enlaces').ready(function() {
		//$("#canadaDatos").empty();
		enlaces();
		  console.log('enlaces');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }

	  if ($('#idGuia').length) {
		$('#idGuia').ready(function() {
		//$("#canadaDatos").empty();
		guiaDatos();
		  console.log('idGuia');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }

	  if ($('#galeriaBlog').length) {
		$('#galeriaBlog').ready(function() {
		//$("#canadaDatos").empty();
		galeriaBlog();
		  console.log('galeria');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }
	  
	  if ($('#galeria').length) {
		$('#galeria').ready(function() {
		//$("#canadaDatos").empty();
		guiaFotos();
		  console.log('galeria');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }

	  if ($('#galeriaEntrada').length) {
		$('#galeriaEntrada').ready(function() {
		//$("#canadaDatos").empty();
		entradaFotos();
		  console.log('galeria entradas');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }

	  if ($('#idEntrada').length) {
		$('#idEntrada').ready(function() {
		//$("#canadaDatos").empty();
		blogDatos();
		 console.log('idEntrada');
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }
   
 //inicializarjQueryValidation();
 $(".publicar").on('click', function() {
	//console.log(publicando);
	var tipo =5;  
	var id = $("#idEntrada").text().trim();  
	var nombre = $("#nombre").val().trim(); 
	var comentario = $("#comentario").val().trim(); 
	if((nombre=="") || (comentario=="")){
		$('#alerta').html('No puedes publicar un comentario en blanco');
	}else{
	  $.ajax({
		url: 'admin/core/modules/index/view/index/index.php?action=entrada', 
		  type: 'post',
		  data:{tipo:tipo,nombre:nombre,id:id,comentario:comentario},        
		  success: function(response) {
			if(response == 1){                
		//	  console.log(response);
			  $("#preload").show();
			  $('#comentarios').empty();
			  comentariosDatos();
			  $("#preload").hide();
			  $("#nombre").val("");
			  $("#comentario").val("");
				//window.location = "index.php?view=entrada&e="+id         
			  } else {
				//console.log(response);	
				$('#alerta').html('Hubo un error al publicar tu comentario');
			   
			   }
		  }
	  });
	}

  return false;
  });


     
 //inicializarjQueryValidation();
 $(".buscar").on('click', function() {
	
	$("#preloader").show();
	var entrada = $('#buscarEntrada').val();	
	$(".entrada").empty();
	$.ajax({		
	  	url: 'admin/core/modules/index/view/index/index.php?action=buscar', 
		method:"POST",
		dataType: "json",		
		data:{entrada:entrada},		
		success:function(data){
	//	console.log(data);
			$('.entrada').fadeIn(2000).html(data.html);
			$("#preloader").hide();
			
		}
	});

  return false;
  });

   //inicializarjQueryValidation();
 $(".buscar2").on('click', function() {
	
	$("#preloader").show();
	var entrada = $('#buscarEntrada').val();	
	$(".entradas").empty();
	$.ajax({		
	  	url: 'admin/core/modules/index/view/index/index.php?action=buscar', 
		method:"POST",
		dataType: "json",		
		data:{entrada:entrada},		
		success:function(data){
	//	console.log(data);
			$('.entradas').fadeIn(2000).html(data.html);
			$("#preloader").hide();
			
		}
	});

  return false;
  });

  



	
});   
function blogDatos(){
	var idEntrada = $("#idEntrada").text().trim();
	//console.log(idGuia);   
	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=entrada&tipo=4&c=EntradaData&t='+idEntrada, 
  }).done(function(categorias) { 
	 // console.log(categorias);
	var i = 0;
	var tope =categorias.length;
	for (var i = 0; i < tope; i++) { 
		//titulo
//entrada
//fecha
var hoy = new Date();
		var hoyAno =   hoy.getFullYear();
		var hoyMes =  hoy.getMonth() + 1;
		var hoyDia =  hoy.getDate();
		let ano = categorias[i].fecha.substr(0, 4);
		let mes = categorias[i].fecha.substr(5, 2);
		let dia = categorias[i].fecha.substr(8, 2);
		var fecha = dia+'/'+mes+'/'+ano;
		var fechaHoy = hoyDia+'/'+hoyMes+'/'+hoyAno;
		//console.log('Dias : '+dia);
		//console.log('Mes : '+mes);
		//console.log('Año : '+ano);
		//console.log('Dias Hoy : '+hoyDia);
		//console.log('Mes Hoy : '+hoyMes);
		//console.log('Año Hoy : '+hoyAno);
		//console.log('Fecha : '+fecha);
		//console.log('Fecha Hoy : '+fechaHoy);
		var dias = restarFechas(fecha,fechaHoy);
		var respuesta ='';
		if(dias == 0){
			respuesta = 'Hoy';
		}else{
			respuesta = 'hace '+dias+' dias';
		}
		//console.log(categorias[i].entradaBlog);
		
	$('#tituloEntrada').html(categorias[i].titulo);
	$('#tiempo').html(respuesta);
	$('#texoBlog').html(categorias[i].entradaBlog);	
	
	}  
  
  });
  
  }

  function comentariosDatos(){
	var idEntrada = $("#idEntrada").text().trim();
		//console.log(idEntrada); 
  
	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=entrada&tipo=6&c=EntradaData&t='+idEntrada, 
  }).done(function(categorias) { 
	  //console.log(categorias);
	var i = 0;
	var tope =categorias.length;
	for (var i = 0; i < tope; i++) { 
	
		contenedor='<div class="col-12 p-0">';
		contenedor+='<div ="row">';
		contenedor+='<div class="col-12 p-0">';
		contenedor+= '<span class="pre-title m-0">'+categorias[i].o1+' Comenta: </span>';
		contenedor+='</div>';
		contenedor+='<div class="col-12 align-self-center">';
		contenedor+=categorias[i].o2;
		contenedor+='</div>';
		contenedor+='</div>';
		contenedor+='</div>';
		contenedor+='<hr>';     
		contenedor+='<br>';   

		$('#comentarios').append(contenedor);	 
	}  
  
  });

  }

function guiaDatos(){
	var idGuia = $("#idGuia").text().trim();
	//console.log(idGuia);   
	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=agenda&tipo=3&c=AgendaData&t='+idGuia, 
  }).done(function(categorias) { 
	  ///console.log(categorias);
	var i = 0;
	var tope =categorias.length;
	for (var i = 0; i < tope; i++) { 
		
	 $('#pais').html(categorias[i].o1);
	 $('#capital').html(categorias[i].o2);
	 $('#moneda').html(categorias[i].o3);
	 $('#idioma').html(categorias[i].idioma);
	 $('#clima').html(categorias[i].clima);
	 $('#como-llegar').html(categorias[i].llegar);
	 $('#hospedaje').html(categorias[i].hospedaje);
	 $('#actividades').html(categorias[i].actividad);
	 $('#presupuesto').html(categorias[i].presupuesto);
	 $('#transporte').html(categorias[i].transporte);
	 $('#comida').html(categorias[i].comida);
	 $('#consejos').html(categorias[i].consejo);	
	
	}  
  
  });
  
  }

  function galeriaBlog(){	
	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=media&tipo=1&c=MediaData&t=0', 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	for (var i = 0; i < tope; i++) {
	
	var contenido = '<a class="col-6 pl-0 item" href="'+categorias[i].archivo+'" target="_blank">';
	contenido+='<img src="'+categorias[i].archivo+'" alt="Project" class="w-100">';
	contenido+='</a>';	
	$('#galeriaBlog').append(contenido);
	 /// $('#galeria').append('<a class="col-12 col-md-6 col-lg-3 item" href="'+categorias[i].archivo+'" target="_blanck"><img src="'+categorias[i].archivo+'" alt="Project" class="w-100"></a>');
	}  
  
  });  
  }

  // enlaces canada
  function enlaces(){	

	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=canada&c=SeccionData&tipo=7', 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	//console.log(tope);
	for (var i = 0; i < tope; i++) { 
		var contenido ="";
		contenido+='<div class="col-3">';
		contenido+='<a href="'+categorias[i].enlace+'" target="_blank"><button class="btn btn-canada">'+categorias[i].caption+'</button></a>';
		contenido+='</div>';
		var cotenedor = "#enlaces";
	  $(cotenedor).append(contenido);
	}  
  
  });  
  }
// enlaces canada
  function canadaTabs(){	

	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=canada&c=SeccionData&tipo=5', 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	//console.log(tope);
	for (var i = 0; i < tope; i++) { 
		var contenido ="";
		contenido+='  <li role="presentation"><a href="#t'+categorias[i].id+'" aria-controls="home" role="tab" data-toggle="tab"><span class="featured">  <b>'+categorias[i].titulo+'</b> </span></a></li>';
		var cotenedor = "#tabs";
	  $(cotenedor).append(contenido);
	 // $('#c2').html(categorias[i].c2);
		var contenido2 ="";
	 	contenido2+='<div role="tabpanel" class="tab-pane" id="t'+categorias[i].id+'"><ol type="a" id="m'+categorias[i].id+'" ></ol><div>';
		var cotenedor2 = "#contenido";
		$(cotenedor2).append(contenido2);
		canadaMenu(categorias[i].id);
	 	canadaContenido(categorias[i].id);
	
		

	}  
  
  });  
  }
  // tabs canada

  function canadaContenido(idSeccionTab){	

	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=canada&c=SeccionData&tipo=6&idSeccionTab='+idSeccionTab, 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	var t=1;
	//console.log(tope);
	var contenido3 ="";
	for (var i = 0; i < tope; i++) { 		
		contenido3="<p align='center' id='t"+idSeccionTab+"cont"+t+"'>";
		contenido3+=categorias[i].texto;		
		contenido3+="</p>";
		var cotenedor3 = "#t"+idSeccionTab+"";
	  $(cotenedor3).append(contenido3);
	 // $('#c2').html(categorias[i].c2);
	 t=t+1;	
	}  
  
  });  
  }

  function canadaMenu(idSeccionTab){	

	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=canada&c=SeccionData&tipo=8&idSeccionTab='+idSeccionTab, 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	var t=1;

	//console.log(tope);
	var contenido3 ="";
	for (var i = 0; i < tope; i++) { 
		
		var contenido3="";	
		contenido3+='<li><a href="#t'+idSeccionTab+'cont'+t+'">'+categorias[i].titulo+'</a></li>';
		//contenido3=categorias[i].titulo;		
		cotenedor3 = "#m"+idSeccionTab+"";
	  $(cotenedor3).append(contenido3);
	 // $('#c2').html(categorias[i].c2);
	 t=t+1;	
	}  
  
  });  
  }

  function mensajeNati(){	
	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=entrada&c=EntradaData&t="1"&tipo=9', 
  }).done(function(categorias) {  
	  //console.log(categorias);
	var i = 0;
	var tope =categorias.length;
	for (var i = 0; i < tope; i++) {

	  $('#mensajeNati').html(categorias[i].mensaje);
	}  
  
  });
  
  }
  
function guiaFotos(){	
	var idGuia = $("#idGuia").text().trim();
	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=combos&c=MediaData&t='+idGuia, 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	for (var i = 0; i < tope; i++) {

	  $('#galeria').append('<a class="col-12 col-md-6 col-lg-3 item" href="'+categorias[i].archivo+'" target="_blanck"><img src="'+categorias[i].archivo+'" alt="Project" class="w-100"></a>');
	}  
  
  });
  
  }

  function entradaFotos(){	
	var idGuia = $("#idEntrada").text().trim();
	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=combos&c=MediaDataBlog&t='+idGuia, 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	for (var i = 0; i < tope; i++) {
		if(categorias[i].archivo!=false){
			$('#galeriaEntrada').append('<a class="col-12 col-md-6 col-lg-3 item" href="'+categorias[i].archivo+'" target="_blanck"><img src="'+categorias[i].archivo+'" alt="Project" class="w-100"></a>');
		}
	 
	}  
  
  });
  
  }

  function canadaDatossettings(){	

	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=combos&c=SeccionData&t=4', 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	console.log(tope);
	for (var i = 0; i < tope; i++) { 
		var cotenedor = "#s"+i;
	  $(cotenedor).html(categorias[i].textSeccion);
	 // $('#c2').html(categorias[i].c2);
	}  
  
  });
  
  }

  function canadaDatosmessages(){	

	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=combos&c=SeccionData&t=3', 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	console.log(tope);
	for (var i = 0; i < tope; i++) { 
		var cotenedor = "#m"+i;
	  $(cotenedor).html(categorias[i].textSeccion);
	 // $('#c2').html(categorias[i].c2);
	}  
  
  });
  
  }

  function canadaDatosprofile(){	

	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=combos&c=SeccionData&t=2', 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	//console.log(categorias);
	for (var i = 0; i < tope; i++) { 
		var cotenedor = "#p"+i;
	  $(cotenedor).html(categorias[i].textSeccion);
	 // $('#c2').html(categorias[i].c2);
	}  
  
  });
  
  }

function canadaDatosHome(){	

	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=combos&c=SeccionData&t=1', 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	console.log(tope);
	for (var i = 0; i < tope; i++) { 
		var cotenedor = "#c"+i;
	  $(cotenedor).html(categorias[i].textSeccion);
	 // $('#c2').html(categorias[i].c2);
	}  
  
  });
  
  }

  

  function cargarEntradas2(){
	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=entrada&c=EntradaData&tipo=3&t=entrada', 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	for (var i = 0; i < tope; i++) { 
	//	console.log(i); 	
		var hoy = new Date();
		var hoyAno =   hoy.getFullYear();
		var hoyMes =  hoy.getMonth() + 1;
		var hoyDia =  hoy.getDate();
		let ano = categorias[i].fecha.substr(0, 4);
		let mes = categorias[i].fecha.substr(5, 2);
		let dia = categorias[i].fecha.substr(8, 2);
		var fecha = dia+'/'+mes+'/'+ano;
		var fechaHoy = hoyDia+'/'+hoyMes+'/'+hoyAno;
		//console.log('Dias : '+dia);
		//console.log('Mes : '+mes);
		//console.log('Año : '+ano);
		//console.log('Dias Hoy : '+hoyDia);
		///console.log('Mes Hoy : '+hoyMes);
		//console.log('Año Hoy : '+hoyAno);
		//console.log('Fecha : '+fecha);
		///console.log('Fecha Hoy : '+fechaHoy);
		var dias = restarFechas(fecha,fechaHoy);
		var respuesta ='';
		if(dias == 0){
			respuesta = 'Hoy';
		}else{
			respuesta = 'hace '+dias+' dias';
		}
		//console.log(categorias[i].o1);
		contenedor = '<div class="col-12 col-md-6 col-lg-4 item" >';
		contenedor+= '<div class="row card p-0 text-center">';
		contenedor+='<div class="image-over">';
		contenedor+='<img src="'+categorias[i].o1+'" alt="Lorem ipsum">';
		contenedor+='</div>';
		contenedor+='<div class="card-footer d-lg-flex align-items-center justify-content-center">';
		contenedor+='<a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Nati</a>';
		contenedor+='<a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>'+respuesta+'</a>';
		contenedor+='</div>';
		contenedor+='<div class="card-caption col-12 p-0">';
		contenedor+='<div class="card-body">';
		contenedor+='<a href="index.php?view=entrada&e='+categorias[i].id+'">';
		contenedor+='<h4>'+categorias[i].titulo+'</h4>';
		contenedor+='<p>'+fecha+'</p>';
		contenedor+='</a>';
		contenedor+='</div>';
		contenedor+='</div>';
		contenedor+='</div>';
		contenedor+='</div>';
		$('#entradas').html(contenedor);
	//	$('#entradas').prepend('<div class="col-12 col-md-6 item"><div class="row card p-0 text-center"><div class="image-over"><img src="'+categorias[i].o1+'" alt="Lorem ipsum"></div><div class="card-footer d-lg-flex align-items-center justify-content-center"><a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Nati</a><a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>'+respuesta+'</a></div><div class="card-caption col-12 p-0"><div class="card-body"><a href="index.php?view=entrada&e='+categorias[i].id+'"><h4>'+categorias[i].titulo+'</h4><p>'+fecha+'</p></a></div></div></div></div>');
	//	$('#entradas').prepend('<div class="col-12 col-md-6 item"><div class="row card p-0 text-center"><div class="image-over"><img src="'+categorias[i].o1+'" alt="Lorem ipsum"></div><div class="card-footer d-lg-flex align-items-center justify-content-center"><a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Nati</a><a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>'+respuesta+'</a></div><div class="card-caption col-12 p-0"><div class="card-body"><a href="index.php?view=entrada&e='+categorias[i].id+'"><h4>'+categorias[i].titulo+'</h4><p>'+fecha+'</p></a></div></div></div></div>');
	  //$('#entradas').prepend('<div class="swiper-slide slide-center item"><div class="row card p-0 text-center"><div class="image-over"><img src="'+categorias[i].o1+'" alt="Lorem ipsum"> </div>		  <div class="card-footer d-lg-flex align-items-center justify-content-center"><a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Nati</a><a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>'+respuesta+'</a></div><div class="card-caption col-12 p-0"><div class="card-body"><a href="#"><h4>'+categorias[i].titulo+'</h4><p>'+fecha+'</p></a></div></div></div></div>');
	}  
  
  });
  
  }

function cargarEntradas(){
	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=combos&c=EntradaData&t=entrada', 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	for (var i = 0; i < tope; i++) { 
	//	console.log(i); 
		var contenedor = "";	
		var hoy = new Date();
		var hoyAno =   hoy.getFullYear();
		var hoyMes =  hoy.getMonth() + 1;
		var hoyDia =  hoy.getDate();
		let ano = categorias[i].fecha.substr(0, 4);
		let mes = categorias[i].fecha.substr(5, 2);
		let dia = categorias[i].fecha.substr(8, 2);
		var fecha = dia+'/'+mes+'/'+ano;
		var fechaHoy = hoyDia+'/'+hoyMes+'/'+hoyAno;
		//console.log('Dias : '+dia);
		///console.log('Mes : '+mes);
		//console.log('Año : '+ano);
		//console.log('Dias Hoy : '+hoyDia);
		//console.log('Mes Hoy : '+hoyMes);
		//console.log('Año Hoy : '+hoyAno);
	//	console.log('Fecha : '+fecha);
	//	console.log('Fecha Hoy : '+fechaHoy);
		var dias = restarFechas(fecha,fechaHoy);
		var respuesta ='';
		if(dias == 0){
			respuesta = 'Hoy';
		}else{
			respuesta = 'hace '+dias+' dias';
		}
		//console.log(categorias[i].o1);

		if (i==0){
            active ="active";
        }else{
            active ="";
        }
        //archivo =categorias[i].o4;
        //$('#blogSlider').prepend('<div class="carousel-item '+active+'" style="border-radius: 80px;"><div id="fondo"><img class="img-fluid"  src="'+categorias[i].o1+'" alt="First slide"><div class="carousel-caption"><h2 class="text-white"><a href="index.php?view=entrada&e='+categorias[i].id+'"><h4>'+categorias[i].titulo+'</h4></a></h2><p>Como llegar | Tips | Consejos</p></div></div></div>');
		contenedor = '<div class="col-12 col-md-6 col-lg-4 item" >';
		contenedor+= '<div class="row card p-0 text-center">';
		contenedor+='<div class="image-over">';
		contenedor+='<img src="'+categorias[i].o1+'" alt="Lorem ipsum">';
		contenedor+='</div>';
		contenedor+='<div class="card-footer d-lg-flex align-items-center justify-content-center">';
		contenedor+='<a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Nati</a>';
		contenedor+='<a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>'+respuesta+'</a>';
		contenedor+='</div>';
		contenedor+='<div class="card-caption col-12 p-0">';
		contenedor+='<div class="card-body">';
		contenedor+='<a href="index.php?view=entrada&e='+categorias[i].id+'">';
		contenedor+='<h4>'+categorias[i].titulo+'</h4>';
		contenedor+='<p>'+fecha+'</p>';
		contenedor+='</a>';
		contenedor+='</div>';
		contenedor+='</div>';
		contenedor+='</div>';
		contenedor+='</div>';	
		$('#blogSlider').append(contenedor);
	  //$('#blogSlider').prepend('<div class="swiper-slide slide-center item"><div class="row card p-0 text-center"><div class="image-over"><img src="'+categorias[i].o1+'" alt="Lorem ipsum"></div><div class="card-footer d-lg-flex align-items-center justify-content-center"><a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Nati</a><a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>'+respuesta+'</a></div><div class="card-caption col-12 p-0"><div class="card-body"><a href="index.php?view=entrada&e='+categorias[i].id+'"><h4>'+categorias[i].titulo+'</h4><p>'+fecha+'</p></a></div></div></div></div>');
	}  
  
  });
  
  }




// Función para calcular los días transcurridos entre dos fechas
function restarFechas(f1,f2)
 {
 var aFecha1 = f1.split('/');
 var aFecha2 = f2.split('/');
 var fFecha1 = Date.UTC(aFecha1[2],aFecha1[1]-1,aFecha1[0]);
 var fFecha2 = Date.UTC(aFecha2[2],aFecha2[1]-1,aFecha2[0]);
 var dif = fFecha2 - fFecha1;
 var dias = Math.floor(dif / (1000 * 60 * 60 * 24));
 return dias;
 }

 function filterSearch() {
	//$("#preload").show();
	
}