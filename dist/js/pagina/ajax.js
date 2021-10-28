$(function() {
  $('#salir').on('click', function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Deseas Salir?',
      text: "No podras detener la operacion un ves iniciada!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si'
    }).then((result) => {
      if (result.isConfirmed) {
        let timerInterval
          Swal.fire({
            title: 'Saliendo ...!',
            html: 'Vuelve pronto.',
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
       salir();
      }
    })
  });
  $('#salir2').on('click', function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Deseas Salir?',
      text: "No podras detener la operacion un ves iniciada!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si'
    }).then((result) => {
      if (result.isConfirmed) {
        let timerInterval
          Swal.fire({
            title: 'Saliendo ...!',
            html: 'Vuelve pronto.',
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
       salir();
      }
    })
  });
});

function salir(){
  $.ajax({
    url: 'admin/core/modules/index/view/index/index.php?action=desloguear', 
    type:'post',
    data:{},
    success:function(response){
     //alert(response);
        if(response == 1){      
                window.location = "../"           
        }else{
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Hubo un error al desloguear!'            
          })
        }
       
    }
});
}

$(function () {
  $('#frmCategoria').validate({
    rules: {
      categoria: {
        required: true            
      },
      comentario: {
        required: true
      }
    },
    messages: {
      categoria: {
        required: "Desbes especificar la categoria"           
      },
      comentario: {
        required: "Desbes escribir un comentario sobre la categoria"
        
      }
},
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function () {       
    
      //e.preventDefault();
Swal.fire({
  title: 'Confirmacion de datos',
  text: "Los datos suministrados son correctos?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si',
  cancelButtonText: 'No'
}).then((result) => {
  if (result.isConfirmed) {     
    var categoria = $("#categoria").val().trim();      
    var comentario = $("#comentario").val().trim();
  
        $.ajax({
            url: 'admin/core/modules/index/view/index/index.php?action=categorias&t=1', 
            type:'post',
            data:{categoria:categoria,comentario:comentario},
            success:function(response){
             //alert(response);
                if(response == 1){                   
                
                  Swal.fire(
                    'Exito',
                    'Categoria registrada',
                    'success'
                  ),
                  $("#responsive-modal").modal('hide');
                   
                }else{                     
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error al agregar la categoria'
                    
                  }),
                   console.log(response)
                }
               
            },
            complete : function() {
             // $("#zero_config").load(" #zero_config");
            window.location.reload();
           // cargarCategorias();
          }
        });

  }
})  
}
}); 

});
/*
$(document).ready(function() {
  $('#data').ready(function() {
    cargarCategorias()
        return false;
 
  });

});  
function cargarCategorias(){
  var t =2;
  $.ajax({  
    cache: false,
    type: "GET",
    url: 'admin/core/modules/index/view/index/index.php?action=categorias', 
    data:{t:t},   
    success: function(data) {
  //  alert(data);
      }, complete: function(){
        $('#data').load('admin/core/modules/index/view/index/index.php?action=categorias&t=2');
      }
});
}
*/