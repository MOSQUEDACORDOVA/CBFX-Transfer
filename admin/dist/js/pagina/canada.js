$(function() { 
  


 //* eliminar Guia
//=============================================*/
$(".table").on("click", ".btnEliminarMoneda", function(e){ 
  
	var idMoneda = $(this).attr("idMoneda");

  e.preventDefault();
  Swal.fire({
    title: 'Deseas eliminar esta moneda?',
    text: "No podras detener la operacion un ves iniciada!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si',
    cancelButtonText: 'No'
  }).then((result) => {
    if (result.isConfirmed) {
      let timerInterval
        Swal.fire({
          title: 'Eliminando ...!',
          html: 'Se esta borrando el contenido.',
          timer: 3000,
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
              const content = Swal.getContent()
              if (content) {
                const b = content.querySelector('b')
                if (b) {
                  b.textContent = Swal.getTimerLeft()
                }
              }
            }, 100)
          },
          willClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          /* Read more about handling dismissals below */
          if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
          }
        })
    //  pagar();
    eliminarMoneda(idMoneda);
    }
  })

})


//* eliminar Guia
//=============================================*/
$(".table").on("click", ".btnEliminarBoton", function(e){ 
  
	var idBoton = $(this).attr("idBoton");

  e.preventDefault();
  Swal.fire({
    title: 'Deseas eliminar este Enlace?',
    text: "No podras detener la operacion un ves iniciada!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si',
    cancelButtonText: 'No'
  }).then((result) => {
    if (result.isConfirmed) {
      let timerInterval
        Swal.fire({
          title: 'Eliminando ...!',
          html: 'Se esta borrando el contenido.',
          timer: 3000,
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
              const content = Swal.getContent()
              if (content) {
                const b = content.querySelector('b')
                if (b) {
                  b.textContent = Swal.getTimerLeft()
                }
              }
            }, 100)
          },
          willClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          /* Read more about handling dismissals below */
          if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
          }
        })
    //  pagar();
    eliminarEnlace(idBoton);
    }
  })

})




/*=============================================
eliminar Guia
=============================================*/
$(".table").on("click", ".btnEliminarTema", function(e){
  
  
	var idTema = $(this).attr("idTema");
	var seccionTab = $(this).attr("seccionTab");
  var idSeccionTab = $(this).attr("idSeccionTab");
  e.preventDefault();
  Swal.fire({
    title: 'Deseas eliminar este Tema?',
    text: "No podras detener la operacion un ves iniciada!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si',
    cancelButtonText: 'No'
  }).then((result) => {
    if (result.isConfirmed) {
      let timerInterval
        Swal.fire({
          title: 'Eliminando ...!',
          html: 'Se esta borrando el contenido.',
          timer: 3000,
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
              const content = Swal.getContent()
              if (content) {
                const b = content.querySelector('b')
                if (b) {
                  b.textContent = Swal.getTimerLeft()
                }
              }
            }, 100)
          },
          willClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          /* Read more about handling dismissals below */
          if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
          }
        })
    //  pagar();
    eliminarTema(idTema,seccionTab,idSeccionTab);
    }
  })

})


     //inicializarjQueryValidation();
 $(".registrarTema").on('click', function() {
  //
  var tipo =5;
  var id = $("#idSeccionTab").val().trim();   
  var tema = $("#tema").val().trim();  
  var seccionTab = $("#seccionTab").val().trim();  
  if(tema==""){
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Debes escribir tema del contenido a registrar en la seccion de Canadá'
      
    })
  }else{
    $.ajax({
      url: '../admin/core/modules/index/view/index/index.php?action=seccion', 
        type: 'post',
        data:{id:id,tipo:tipo,tema:tema},        
        success: function(response) {
          if(response == 1){                
            console.log(response);
              Swal.fire(
                'Exito',
                'Sección tema  con éxito',
                'success'
              ),
              window.location = "index.php?view=seccionesTemas&id="+id+"&seccionTab="+seccionTab;
            } else {
              console.log(response),
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al registrar'
                
              })
             
             }
        }
    });
  }
 
return false;
});

   //inicializarjQueryValidation();
   $(".registrarEnlace").on('click', function() {
    //
    var tipo =10;
    var caption = $("#caption").val().trim();  
    var enlace = $("#enlace").val().trim();  
    if((caption=="") || (enlace=="")){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Debes escribir el nombre y enlace el boton'
        
      })
    }else{
      $.ajax({
        url: '../admin/core/modules/index/view/index/index.php?action=seccion', 
          type: 'post',
          data:{tipo:tipo,caption:caption,enlace,enlace},        
          success: function(response) {
            if(response == 1){                
              console.log(response);
                Swal.fire(
                  'Exito',
                  'Enlace  registrado  con éxito',
                  'success'
                ),
                window.location = "index.php?view=enlaces";
              } else {
                console.log(response),
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Error al registrar'
                  
                })
               
               }
          }
      });
    }
   
  return false;
  });
   //registrarMoneda();
 $(".registrarMoneda").on('click', function() {
  //
  var tipo =4;
  var pais = $("#pais").val().trim();  
  var abreviatura = $("#abreviatura").val().trim();  
  var usd = $("#usd").val().trim();  
  var ars = $("#ars").val().trim();  
  var cop = $("#cop").val().trim();  
  var ves = $("#ves").val().trim();  
  if((pais=="") || (abreviatura=="") || (usd=="")|| (ars=="")|| (cop=="")|| (ves=="")){
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Debes escribir para seguir registrando'
      
    })
  }else{
    $.ajax({
      url: '../admin/core/modules/index/view/index/index.php?action=moneda', 
        type: 'post',
        data:{tipo:tipo,pais:pais,abreviatura:abreviatura,usd:usd,ars:ars,cop:cop,ves:ves},        
        success: function(response) {
          if(response == 1){                
            console.log(response);
              Swal.fire(
                'Exito',
                'Moneda registrada  con éxito',
                'success'
              ),
              window.location = "index.php?view=monedas";
            } else {
              console.log(response),
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al registrar'
                
              })
             
             }
        }
    });
  }
 
return false;
});

 //inicializarjQueryValidation();
 $(".editarEnlace").on('click', function() {
  //
  var id = $("#id").val().trim();  
  var caption = $("#caption").val().trim();  
  var enlace = $("#enlace").val().trim();  
  if((caption=="") || (enlace=="")) {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Debes escribir el nombre del botón y su link o enlace'
      
    })
  }else{
  var tipo =12;  
    $.ajax({
      url: '../admin/core/modules/index/view/index/index.php?action=seccion', 
        type: 'post',
        data:{tipo:tipo,caption:caption,enlace:enlace,id:id},        
        success: function(response) {
          if(response == 1){                
            console.log(response);
              Swal.fire(
                'Exito',
                'Enlace editado con exito',
                'success'
              );
             window.location = "index.php?view=enlaces"      
            } else {
              console.log(response),
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al editar el contenido'
                
              })
             
             }
        }
    });
  }
 
return false;
});

 //inicializarjQueryValidation();
 $(".editarc1").on('click', function() {
  //
  var id = $("#idS").text().trim();  
  if(id==0){
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Error al editar el contenido, Debes seleccionar un titulo a ser editado'
      
    })
  }else{
  var tipo =2;  
  var textSeccion = $("#editor").html();
  console.log(textSeccion);
    $.ajax({
      url: '../admin/core/modules/index/view/index/index.php?action=seccion', 
        type: 'post',
        data:{tipo:tipo,textSeccion:textSeccion,id:id},        
        success: function(response) {
          if(response == 1){                
            console.log(response);
              Swal.fire(
                'Exito',
                'Contenido editado con exito',
                'success'
              ),
              $('#editor').html(" ");
              $('#idS').html("0");
              $('#texto').html("");
              window.location = "index.php?view=secciones"      
            } else {
              console.log(response),
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al editar el contenido'
                
              })
             
             }
        }
    });
  }
 
return false;
});


 //inicializarjQueryValidation();
 $(".editarc2").on('click', function() {
  // 
  var tipo =2;  
  var id = $("#id").val().trim();  
  var titulo = $("#titulo").val().trim(); 
  var entradaBlog = c2.container.firstChild.innerHTML;
  if((titulo=="") || (entradaBlog=="")){
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Error al editar el contenido, Debes escribir un titulo  o entrada a ser editado'      
    })
  }else{
 
 
  console.log(entradaBlog);
    $.ajax({
      url: '../admin/core/modules/index/view/index/index.php?action=entrada', 
        type: 'post',
        data:{tipo:tipo,entradaBlog:entradaBlog,id:id,titulo:titulo},        
        success: function(response) {
          if(response == 1){                
            console.log(response);
              Swal.fire(
                'Exito',
                'Contenido editado con exito',
                'success'
              ),
              window.location = "index.php?view=entradas"           
            } else {
              console.log(response),
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al editar el contenido'
                
              })
             
             }
        }
    });
  }
 
return false;
});

if ($('#materiasData').length) {
  $('#materiasData').ready(function() {
   // console.log('no passo');
    cargarCombo();
        return false; 
  });
} else {
  //alert('no existo')
}

$("#materiasData").change(function() {
    var idSeccion = $("#materiasData").val().trim();  
if(idSeccion==0){
  $('#texto').html("Debe seleccionar un titulo");
  $('#idS').html(0);
}else{
    $.ajax({
      type: "GET",
      url: '../admin/core/modules/index/view/index/index.php?action=seccion&tipo=3&c=SeccionData&t='+idSeccion, 
  }).done(function(categorias) {  
    //alert(categorias);
    console.log(categorias);
    var i = 0;
    var tope =categorias.length;
    if(tope>=1){   
      for (var i = 0; i < tope; i++) {   
      
        //$('#materiasData').append('<option value="five" selected="selected">Five</option>');
  
       $('#texto').html(categorias[i].texto);
       $('#idS').html(categorias[i].id);
       $('#editor').html(categorias[i].texto);
      }  
    }else{
     // $('#materiasData').prepend("<b>No hay materias Secciones cargadas</b>");
    }
    //alert(tope);
  });
   //console.log(v);
  }
});


/*
var form4 = $(".validation-wizard-canada").show();
  
$(".validation-wizard-canada").steps({

  headerTag: "h6",
  bodyTag: "section",
  transitionEffect: "fade",
  titleTemplate: '<span class="step">#index#</span> #title#',
  labels: {
      finish: "Submit"
  },
  onStepChanging: function(event, currentIndex, newIndex) {
      return currentIndex > newIndex || !(4 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form4.find(".body:eq(" + newIndex + ") label.error").remove(), form4.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form4.validate().settings.ignore = ":disabled,:hidden", form4.valid())
  },
  onFinishing: function(event, currentIndex) {
      return form4.validate().settings.ignore = ":disabled", form4.valid()
  },
  onFinished: function(event, currentIndex) {

    var tipo = 1;
    var c1 = c1.container.firstChild.innerHTML;
    //var c1 = $("#c1").val().trim();     
    var c2 = $("#c2").val().trim();     
    var c3 = $("#c3").val().trim();       
    var c4 = $("#c4").val().trim();
    var c5 = $("#c5").val().trim();
    var c6 = $("#c6").val().trim();
    var c7 = $("#c7").val().trim();
    var c8 = $("#c8").val().trim();
    var c9 = $("#c9").val().trim();
    var c10 = $("#c10").val().trim();
    var c11 = $("#c11").val().trim();
    var c12 = $("#c12").val().trim();
    var c13 = $("#c13").val().trim();
    var c14 = $("#c14").val().trim();
    var c15 = $("#c15").val().trim();
    var c16 = $("#c16").val().trim();
    var c17 = $("#c17").val().trim();
    var c18 = $("#c18").val().trim();
    var c19 = $("#c19").val().trim();
    var c20 = $("#c20").val().trim();
    var c21 = $("#c21").val().trim();
    var c22 = $("#c22").val().trim();
    var c23 = $("#c23").val().trim();
    var c24 = $("#c24").val().trim();
    var c25 = $("#c25").val().trim();
    var c26 = $("#c26").val().trim();
    var c27 = $("#c27").val().trim();
    var c28 = $("#c28").val().trim();
   
    
        $.ajax({
            url: '../admin/core/modules/index/view/index/index.php?action=canada', 
            type:'post',
            data:{tipo:tipo,c1:c1,c2:c2,c3:c3,c4:c4,c5:c5,c6:c6,c7:c7,c8:c8,c9:c9,c10:c10,c11:c11,c12:c12,c13:c13,c14:c14,c15:c15,c16:c16,c17:c17,c18:c18,c19:c19,c20:c20,c21:c21,c22:c22,c23:c23,c24:c24,c25:c25,c26:c26,c27:c27,c28:c28},
            success:function(response){
             //alert(response);
             if(response == 1){                   
                
              Swal.fire(
                'Exito',
                'Sección de Canadá  Editada exitosamente',
                'success'
              ),
             window.location = "index.php?view=canada"
             // $("#responsive-modal").modal('hide');
            // window.location.reload();
            }else{                     
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al editar sección'
                
              }),
               console.log(response)
            }
               
            },            
            complete : function() {
             // $("#zero_config").load(" #zero_config");
           
           // cargarCategorias();
          }
        });
  }
})
*/
});
function cargarCombo(){
  var idSeccion = $("#idSeccion").text().trim();  
  $.ajax({
    type: "GET",
    url: '../admin/core/modules/index/view/index/index.php?action=combos&c=SeccionData&t='+idSeccion, 
}).done(function(categorias) {  
  //alert(categorias);
  console.log(categorias);
  var i = 0;
  var tope =categorias.length;
  if(tope>=1){   
    for (var i = 0; i < tope; i++) {   
    
      //$('#materiasData').append('<option value="five" selected="selected">Five</option>');

     $('#materiasData').prepend('<option value = '+categorias[i].id+'>'+categorias[i].tituloSeccion+'</option>');
  
    }  
  }else{
    $('#materiasData').prepend("<b>No hay materias Secciones cargadas</b>");
  }
  //alert(tope);
});
}

function eliminarEnlace(id){
  var tipo =11;
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=seccion', 
    type:'post',
    data:{tipo:tipo,id:id},
    success:function(response){
      console.log(response)
        if(response == 1){ 
          Swal.fire({
            icon: 'success',
            title: 'Bien...',
            text: 'Se ha eliminado exitosamente!' 

          }) ;
          window.location = "index.php?view=enlaces";
        }else{
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Hubo un error al eliminar!'            
          })
        }
       
    }
});
}

function eliminarMoneda(id){
  var tipo =7;
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=moneda', 
    type:'post',
    data:{tipo:tipo,id:id},
    success:function(response){
      console.log(response)
        if(response == 1){ 
          Swal.fire({
            icon: 'success',
            title: 'Bien...',
            text: 'Se ha eliminado exitosamente!' 

          }) ;
          window.location = "index.php?view=monedas";
        }else{
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Hubo un error al eliminar!'            
          })
        }
       
    }
});
}

function eliminarTema(id,seccionTab,idSeccionTab){
  var tipo =6;
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=seccion', 
    type:'post',
    data:{tipo:tipo,id:id},
    success:function(response){
      console.log(response)
        if(response == 1){ 
          Swal.fire({
            icon: 'success',
            title: 'Bien...',
            text: 'Se ha eliminado exitosamente!' 

          }) ;
          window.location = "index.php?view=seccionesTemas&seccionTab="+seccionTab+"&id="+idSeccionTab;
        }else{
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Hubo un error al eliminar!'            
          })
        }
       
    }
});
}