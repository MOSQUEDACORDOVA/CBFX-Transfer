$(function() { 





  var form = $(".validation-wizard").show();
  var form2 = $(".validation-wizard-edit").show();
  var form3 = $(".validation-wizard-blog").show();



  $(".validation-wizard-blog").steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: "Submit"
    },
    onStepChanging: function(event, currentIndex, newIndex) {
        return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form3.find(".body:eq(" + newIndex + ") label.error").remove(), form3.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form3.validate().settings.ignore = ":disabled,:hidden", form3.valid())
    },
    onFinishing: function(event, currentIndex) {
        return form3.validate().settings.ignore = ":disabled", form3.valid()
    },
    onFinished: function(event, currentIndex) {

      var tipo = 1;
      var idTipo = $("#idTipo").val().trim();     
      var fecha = $("#fecha").val().trim();     
      var destacado = $("#destacado").val().trim();       
      var slider = $("#slider").val().trim();
      var titulo = $("#titulo").val().trim();
      var entrada = $("#editor").html();
      var ruta1 = $("#ruta1").val().trim();
      var ruta2 = $("#ruta2").val().trim();
      var ruta3 = $("#ruta3").val().trim();
      var ruta4 = $("#ruta4").val().trim();
      
          $.ajax({
              url: '../admin/core/modules/index/view/index/index.php?action=entrada', 
              type:'post',
              data:{ruta1:ruta1,ruta2:ruta2,ruta3:ruta3,ruta4:ruta4,titulo:titulo,tipo:tipo,idTipo:idTipo,fecha:fecha,destacado:destacado,slider:slider,entrada:entrada,ruta3:ruta3},
              success:function(response){
               //alert(response);
               if(response == 1){                   
                  
                Swal.fire(
                  'Exito',
                  'Entrada de blog  registrada exitosamente',
                  'success'
                ),
                window.location = "./"
               // $("#responsive-modal").modal('hide');
              // window.location.reload();
              }else{                     
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Error al registrar el blog'
                  
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
}),

  $(".validation-wizard").steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: "Submit"
    },
    onStepChanging: function(event, currentIndex, newIndex) {
        return currentIndex > newIndex || !(9 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
    },
    onFinishing: function(event, currentIndex) {
        return form.validate().settings.ignore = ":disabled", form.valid()
    },
    onFinished: function(event, currentIndex) {
      var tipo = 1;
      var continente = $("#continente").val().trim();     
      var pais = $("#pais").val().trim();     
      var capital = $("#capital").val().trim();     
      var moneda = $("#moneda").val().trim();       
      var idioma = $("#idioma").val().trim();
      var estatus = $("#estatus").val().trim();
      var clima = $("#clima").val().trim();
      var llegar = $("#llegar").val().trim(); 
      var hospedaje = $("#hospedaje").val().trim();   
      var actividad = $("#actividad").val().trim();       
      var presupuesto = $("#presupuesto").val().trim();       
      var transporte = $("#transporte").val().trim();
      var comida = $("#comida").val().trim();
      var consejo = $("#consejo").val().trim();  
      var latitud = $("#latitud").val().trim();  
      var longitud = $("#longitud").val().trim();  
          $.ajax({
              url: '../admin/core/modules/index/view/index/index.php?action=agenda', 
              type:'post',
              data:{continente:continente,latitud:latitud,longitud:longitud,tipo:tipo,pais:pais,capital:capital,moneda:moneda,idioma:idioma,estatus:estatus,clima:clima,llegar:llegar,hospedaje:hospedaje,actividad:actividad,presupuesto:presupuesto,transporte:transporte,comida:comida,consejo:consejo},
              success:function(response){
               //alert(response);
               if(response == 1){                   
                  
                Swal.fire(
                  'Exito',
                  'Guia de viajes  registrada exitosamente',
                  'success'
                ),
                window.location = "./"
               // $("#responsive-modal").modal('hide');
              // window.location.reload();
              }else{                     
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Error al registrar la Guia'
                  
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
}),
$(".validation-wizard-edit").steps({
  headerTag: "h6",
  bodyTag: "section",
  transitionEffect: "fade",
  titleTemplate: '<span class="step">#index#</span> #title#',
  labels: {
      finish: "Submit"
  },
  onStepChanging: function(event, currentIndex, newIndex) {
      return currentIndex > newIndex || !(9 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form2.find(".body:eq(" + newIndex + ") label.error").remove(), form2.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form2.validate().settings.ignore = ":disabled,:hidden", form2.valid())
  },
  onFinishing: function(event, currentIndex) {
      return form2.validate().settings.ignore = ":disabled", form2.valid()
  },
  onFinished: function(event, currentIndex) {
    var tipo = 2;
    var id = $("#id").val().trim();  
    var pais = $("#pais").val().trim();     
    var capital = $("#capital").val().trim();     
    var moneda = $("#moneda").val().trim();       
    var idioma = $("#idioma").val().trim();
    var estatus = $("#estatus").val().trim();
    var clima = $("#clima").val().trim();
    var llegar = $("#llegar").val().trim(); 
    var hospedaje = $("#hospedaje").val().trim();   
    var actividad = $("#actividad").val().trim();       
    var presupuesto = $("#presupuesto").val().trim();       
    var transporte = $("#transporte").val().trim();
    var comida = $("#comida").val().trim();
    var consejo = $("#consejo").val().trim();  
    
        $.ajax({
            url: '../admin/core/modules/index/view/index/index.php?action=agenda', 
            type:'post',
            data:{tipo:tipo,id:id,pais:pais,capital:capital,moneda:moneda,idioma:idioma,estatus:estatus,clima:clima,llegar:llegar,hospedaje:hospedaje,actividad:actividad,presupuesto:presupuesto,transporte:transporte,comida:comida,consejo:consejo},
            success:function(response){
             //alert(response);
             if(response == 1){                   
                
              Swal.fire({
                title: 'Editando ...!',
                html: 'Se esta Editando el contenido.',
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
              }),

              window.location = "./"
             // $("#responsive-modal").modal('hide');
            // window.location.reload();
            }else{                     
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al Actualizar la Guia'
                
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
}),

function inicializarjQueryValidation(){
  validator = $(".validation-wizard-blog").validate({
    submit: false,
    ignore: ":hidden:not(#summernoteBlog),.note-editable.panel-body",
    errorClass: "text-danger",
    successClass: "text-success",
    messages: {
      idTipo: {
        required: "Debes elegir el Tipo de entrada"           
      },     
      fecha: {
        required: "Debes elegir La fecha "
      },
      destacado: {
        required: "Debes elegir si debe ser una entrada destacada"
      },
      slider: {
        required: "Debes elegir si esta entrada debe estar en el slider"
      },
      titulo: {
        required: "Debes escribir el título  de entrada al blog"
      },
      entrada: {
        required: "Debes escribir la informacion que servira de entrada al blog"
      },
      ruta: {
        required: "Debes subir una imagen de portada para el blog" 
      }
  },
    highlight: function(element, errorClass) {
        $(element).removeClass(errorClass)
    },
    unhighlight: function(element, errorClass) {
        $(element).removeClass(errorClass)
    },
    errorPlacement: function(error, element) {
        error.insertAfter(element)
    }
  });

  // Corrección del Summernote con jQueryValidation
  // Estas son las líneas que harán que no nos marque error cuando cambiemos de ver la vista normal
  // del Summernote a la vista de código HTML
  $('.validation-wizard-blog').each(function () {
    if ($(this).data('validator')) $(this).data('validator').settings.ignore = ".note-editor *";
  });
};//fn
/*
$(".validation-wizard-blog").validate({
  ignore: "input[type=hidden]",

}),
*/

$(".validation-wizard-edit").validate({
  ignore: "input[type=hidden]",
  errorClass: "text-danger",
  successClass: "text-success",
  messages: {
    pais: {
      required: "Debes elegir el país"           
    },     
    capital: {
      required: "Debes elegir la capital del  país"
    },
    moneda: {
      required: "Debes elegir la moneda oficial del país"
    },
    idioma: {
      required: "Debes elegir el dioma predominante del país"
    },
    clima: {
      required: "Debes elegir tipo de clima del país"       
    },
    estatus: {
      required: "Debes elegir el estatus de la agenda"    
    },
    llegar: {
      required: "Describe como llegar al país"      
    },
    hospedaje: {
      required: "Describe como son los hoteles y hospedajes del  país"      
    },
    actividad: {
      required: "Describe cuaeles son las actividades que se pueden realizar en   país"      
    },
    presupuesto: {
      required: "Describe los tips monetarios a tomar en cuenta en el  país"      
    },
    transporte: {
      required: "Describe los tipo de transportes en el  país"      
    },
    comida: {
      required: "Describe la gastronomia del país"      
    },
    consejos: {
      required: "Consejos y sugerencias a tomar en cuenta" 
    }
},
  highlight: function(element, errorClass) {
      $(element).removeClass(errorClass)
  },
  unhighlight: function(element, errorClass) {
      $(element).removeClass(errorClass)
  },
  errorPlacement: function(error, element) {
      error.insertAfter(element)
  }
}),
/*
pais
capital
moneda
idioma
clima
estatus
llegar
hospedaje
actividad
presupuesto
transporte
comida
consejos
*/
$(".validation-wizard").validate({
  ignore: "input[type=hidden]",
  errorClass: "text-danger",
  successClass: "text-success",
  messages: {
    pais: {
      required: "Debes elegir el país"           
    },     
    capital: {
      required: "Debes elegir la capital del  país"
    },
    moneda: {
      required: "Debes elegir la moneda oficial del país"
    },
    idioma: {
      required: "Debes elegir el dioma predominante del país"
    },
    clima: {
      required: "Debes elegir tipo de clima del país"       
    },
    estatus: {
      required: "Debes elegir el estatus de la agenda"    
    },
    llegar: {
      required: "Describe como llegar al país"      
    },
    hospedaje: {
      required: "Describe como son los hoteles y hospedajes del  país"      
    },
    actividad: {
      required: "Describe cuaeles son las actividades que se pueden realizar en   país"      
    },
    presupuesto: {
      required: "Describe los tips monetarios a tomar en cuenta en el  país"      
    },
    transporte: {
      required: "Describe los tipo de transportes en el  país"      
    },
    comida: {
      required: "Describe la gastronomia del país"      
    },
    consejos: {
      required: "Consejos y sugerencias a tomar en cuenta" 
    }
},
  highlight: function(element, errorClass) {
      $(element).removeClass(errorClass)
  },
  unhighlight: function(element, errorClass) {
      $(element).removeClass(errorClass)
  },
  errorPlacement: function(error, element) {
      error.insertAfter(element)
  }
});



});

$(document).ready(function() {
  $(".uploadFoto").on('click', function() {
    //
      var formData = new FormData();
      var files = $('#image1')[0].files[0];
      var idGuia = $("#idGuia").val().trim();     
     // alert(files);
     if (typeof files!=='undefined'){    
      $("#preload").show();
      formData.append('file',files);
      $.ajax({
        url: '../admin/core/modules/index/view/index/index.php?action=upload', 
          type: 'post',
          data: formData,
          contentType: false,
          processData: false,
          success: function(response) {
              if (response != 0) {
                $("#preload").hide();
                Swal.fire(
                  'Exito',
                  'Primera imagen subida con exito',
                  'success'
                );
                
                 $("#imagen1").attr("src", response);               
                 $("#ruta1").attr("value", response);
                // $("#uploadFoto").attr('style','display:none');
                //  $("#image1").attr('value',' ');
                 guardarFoto(idGuia,response);
                // $("#image1").attr('value',' ');
                 //$(".card-img-top").attr("src", response);

              } else {
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Error al subir la imagen'
                  
                }),
                 console.log(response)
      }
          }
      });
    }else{
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Debes elegir una imagen para subir'
        
      })
    }
  return false;
  });
 $(".upload1").on('click', function() {
    //
      var formData = new FormData();
      var files = $('#image1')[0].files[0];
     // alert(files);
     if (typeof files!=='undefined'){    
      $("#preload").show();
      formData.append('file',files);
      $.ajax({
        url: '../admin/core/modules/index/view/index/index.php?action=upload', 
          type: 'post',
          data: formData,
          contentType: false,
          processData: false,
          success: function(response) {
              if (response != 0) {
                $("#preload").hide();
                Swal.fire(
                  'Exito',
                  'Primera imagen subida con exito',
                  'success'
                );
                 $("#imagen1").attr("src", response);
                 $("#1").attr("href", response);
                 $("#ruta1").attr("value", response);
                 $("#upload1").attr('style','display:none');
                 $("#image1").attr('style','display:none');
               
                 //$(".card-img-top").attr("src", response);
              } else {
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Error al subir la imagen'
                  
                }),
                 console.log(response)
      }
          }
      });
    }else{
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Debes elegir una imagen para subir'
        
      })
    }
  return false;
  });
  $(".upload2").on('click', function() {
    var formData = new FormData();
    var files = $('#image2')[0].files[0];
    if (typeof files!=='undefined'){    
      $("#preload").show();
    formData.append('file',files);
    $.ajax({
      url: '../admin/core/modules/index/view/index/index.php?action=upload', 
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            if (response != 0) {
              $("#preload").hide();
              Swal.fire(
                'Exito',
                'Segunda imagen subida con exito',
                'success'
              );
               $("#imagen2").attr("src", response);
               $("#2").attr("href", response);
               $("#ruta2").attr("value", response);
               $("#upload2").attr('style','display:none');
               $("#image2").attr('style','display:none');
               //$(".card-img-top").attr("src", response);
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al subir la imagen'
                
              }),
               console.log(response)
    }
        }
    });
  }else{
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Debes elegir una imagen para subir'
      
    })
  }
return false;
});
$(".upload3").on('click', function() {
  var formData = new FormData();
  var files = $('#image3')[0].files[0];
  if (typeof files!=='undefined'){    
    $("#preload").show();
  formData.append('file',files);
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=upload', 
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(response) {
          if (response != 0) {
            $("#preload").hide();
            Swal.fire(
              'Exito',
              'Tercera imagen subida con exito',
              'success'
            );
             $("#imagen3").attr("src", response);
             $("#3").attr("href", response);
             $("#ruta3").attr("value", response);
             $("#upload3").attr('style','display:none');
             $("#image3").attr('style','display:none');
             //$(".card-img-top").attr("src", response);
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Error al subir la imagen'
              
            }),
             console.log(response)
  }
      }
  });
}else{
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Debes elegir una imagen para subir'
    
  })
}
return false;
});
$(".upload4").on('click', function() {
  var formData = new FormData();
  var files = $('#image4')[0].files[0];
  if (typeof files!=='undefined'){    
    $("#preload").show();
  formData.append('file',files);
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=upload', 
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(response) {
          if (response != 0) {
            $("#preload").hide();
            Swal.fire(
              'Exito',
              'Cuarta imagen subida con exito',
              'success'
            );
            //alert(response);
             $("#imagen4").attr("src", response);
             $("#4").attr("href", response);
             $("#ruta4").attr("value", response);
             $("#upload4").attr('style','display:none');
             $("#image4").attr('style','display:none');
             //$(".card-img-top").attr("src", response);
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Error al subir la imagen'
              
            }),
             console.log(response)
  }
      }
  });
}else{
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Debes elegir una imagen para subir'
    
  })
}
return false;
});


if ($('#guias').length) {
  $('#guias').ready(function() {
   cargarGuias();
  // alert("guias");    
   return false;
 
  });
} else {
  //alert('no existo')
}
$(".upload3").on('click', function() {
  var formData = new FormData();
  var files = $('#image3')[0].files[0];
  if (typeof files!=='undefined'){    
    $("#preload").show();
  formData.append('file',files);
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=upload', 
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(response) {
          if (response != 0) {
            $("#preload").hide();
            Swal.fire(
              'Exito',
              'Tercera imagen subida con exito',
              'success'
            );
             $("#imagen3").attr("src", response);
             $("#3").attr("href", response);
             $("#ruta3").attr("value", response);
             $("#upload3").attr('style','display:none');
             $("#image3").attr('style','display:none');
             //$(".card-img-top").attr("src", response);
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Error al subir la imagen'
              
            }),
             console.log(response)
  }
      }
  });
}else{
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Debes elegir una imagen para subir'
    
  })
}
return false;
});
  $('#capital').on('change',function(){
    var pais = $('select[name="pais"] option:selected').text();
    var capital = $('select[name="capital"] option:selected').text();
    //var pais = $("#pais").val() != "" ? $("#pais").val() : '';
    //var capital = $("#capital").val() != "" ? $("#capital").val() : "";
    console.log(pais);
    console.log(capital);
    var direccion = capital+' '+ pais;
    axios.get("https://maps.googleapis.com/maps/api/geocode/json?address="+encodeURIComponent(direccion)+"&key=AIzaSyC7R50sKkqNrACGSC99F2vkcyZ8NpMSxW8")
    .then( (data) => {
      if(data.data.status == 'OK'){
        let coordenadas = data.data.results[0].geometry.location;
        $("#latitud").focus().val(coordenadas.lat);
        $("#longitud").focus().val(coordenadas.lng);
        console.log(coordenadas.lat);
        console.log(coordenadas.lng);
  console.log(direccion);
      
      
      }
      
   });
      
    });
    /*=============================================
eliminar comentario
=============================================*/
$(".table").on("click", ".btnEliminarComentario", function(e){

	var idEntrada = $(this).attr("idEntrada");

  e.preventDefault();
  Swal.fire({
    title: 'Deseas eliminar este comentario?',
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
    eliminarComentario(idEntrada);
    }
  })

})
/*=============================================
eliminar entrada
=============================================*/
$(".table").on("click", ".btnEliminarEntrada", function(e){

	var idEntrada = $(this).attr("idEntrada");

  e.preventDefault();
  Swal.fire({
    title: 'Deseas eliminar esta Entrada?',
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
    eliminarEntrada(idEntrada);
    }
  })

})

/*=============================================
eliminar Guia
=============================================*/
$(".table").on("click", ".btnEliminarCliente", function(e){

	var idGuia = $(this).attr("idGuia");

  e.preventDefault();
  Swal.fire({
    title: 'Deseas eliminar esta guia?',
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
    eliminarGuia(idGuia);
    }
  })

})


$(".eliminarFoto").on('click', function(e) {
var idGuia = $(this).attr("idGuia");
var id = $(this).attr("id");
var foto = $(this).attr("foto");
  e.preventDefault();
  Swal.fire({
    title: 'Deseas eliminar esta Foto?',
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
    eliminarFoto(id,foto,idGuia);
    }
  })

})

$(".upload4").on('click', function() {
  var formData = new FormData();
  var files = $('#image4')[0].files[0];
  if (typeof files!=='undefined'){    
    $("#preload").show();
  formData.append('file',files);
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=upload', 
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(response) {
          if (response != 0) {
            $("#preload").hide();
            Swal.fire(
              'Exito',
              'Cuarta imagen subida con exito',
              'success'
            );
            //alert(response);
             $("#imagen4").attr("src", response);
             $("#4").attr("href", response);
             $("#ruta4").attr("value", response);
             $("#upload4").attr('style','display:none');
             $("#image4").attr('style','display:none');
             //$(".card-img-top").attr("src", response);
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Error al subir la imagen'
              
            }),
             console.log(response)
  }
      }
  });
}else{
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Debes elegir una imagen para subir'
    
  })
}
return false;
});


});

$(document).ready(function(){
  $("#pais").change(function(){
    $.get("../admin/core/modules/index/view/index/index.php?action=ciudades","pais="+$("#pais").val(), function(data){
      $("#capital").html(data);
      //console.log(data);
    });
  });

});

function guardarFoto(id,archivo){
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=guardarFoto&c=MediaData', 
    type:'post',
    data:{id:id,archivo:archivo},
    success:function(response){
      console.log(response)
      window.location = "./index.php?view=galeria&id="+id;
    }
});
}


function eliminarFoto(id,foto,idGuia){

var c = "MediaData";
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=eliminarFoto', 
    type:'post',
    data:{id:id,foto:foto,c:c},
    success:function(response){
      console.log(response)
        if(response == 1){ 
          Swal.fire({
            icon: 'success',
            title: 'Bien...',
            text: 'Se ha eliminado la foto exitosamente!' 

          }) ;
          window.location = "./index.php?view=galeria&id="+idGuia;
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

function eliminarComentario(id){
  var idEntrada = $("#idEntrada").text().trim();     
  var tipo =8;
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=entrada&c=EntradaData', 
    type:'post',
    data:{tipo:tipo,id:id},
    success:function(response){
     // console.log(response);
        if(response == 1){ 
          Swal.fire({
            icon: 'success',
            title: 'Bien...',
            text: 'Se ha eliminado el comentario exitosamente!' 

          }) ;
          window.location = "index.php?view=comentarios&id="+idEntrada;
        }else{
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Hubo un error al eliminar!'            
          }),
          console.log(response)
        }
       
    }
});
}

function eliminarEntrada(id){
  var tipo =7;
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=entrada&c=EntradaData', 
    type:'post',
    data:{tipo:tipo,id:id},
    success:function(response){
      console.log(response)
        if(response == 1){ 
          Swal.fire({
            icon: 'success',
            title: 'Bien...',
            text: 'Se ha eliminado la Entrada exitosamente!' 

          }) ;
          window.location = "index.php?view=entradas"   ;
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

function eliminarGuia(id){
  $.ajax({
    url: '../admin/core/modules/index/view/index/index.php?action=eliminar&c=AgendaData', 
    type:'post',
    data:{id:id},
    success:function(response){
      console.log(response)
        if(response == 1){ 
          Swal.fire({
            icon: 'success',
            title: 'Bien...',
            text: 'Se ha eliminado la guia exitosamente!' 

          }) ;
          window.location = "./"   ;
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

 
function cargarGuias(){
  $.ajax({
    type: "GET",
    url: '../admin/core/modules/index/view/index/index.php?action=combos&c=AgendaData&t=agenda', 
}).done(function(categorias) {  
console.log(categorias);
  var i = 0;
  var tope =categorias.length;
  if(tope>=1){   
  for (var i = 0; i < tope; i++) {
    $('#guias').append('<li class="d-flex border-bottom p-t-20 p-b-20 align-items-center"><i class="flag-icon flag-icon-'+categorias[i].pais+' m-r-15" title="'+categorias[i].pais+'" id="'+categorias[i].pais+'"></i><span class="text-info">'+categorias[i].o1+'</span><h5 class="ml-auto m-b-0">'+categorias[i].o2+'</h5></li>');
  }

}else{
  $('#guias').html('<li class="d-flex border-bottom p-t-20 p-b-20 align-items-center">No hay guias cargadas actualmente</li>');
}
//alert(tope);
});
}
