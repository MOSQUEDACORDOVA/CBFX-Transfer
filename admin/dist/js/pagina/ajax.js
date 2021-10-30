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
      confirmButtonText: 'Si',
      cancelButtonText: 'No'
    }).then((result) => {
      if (result.isConfirmed) {
        let timerInterval
          Swal.fire({
            title: 'Saliendo ...!',
            html: 'Vuelve pronto ..',
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
            html: 'Vuelve pronto...',
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

