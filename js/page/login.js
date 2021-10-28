$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      var email = $("#email").val().trim();
      var password = $("#password").val().trim();

      if( email != "" && password != "" ){
          $.ajax({
              url: 'admin/core/modules/index/view/index/index.php?action=login', 
              type:'post',
              data:{email:email,password:password},
              success:function(response){
               //alert(response);
                  if(response == 1){
                    let timerInterval
                      Swal.fire({
                        title: 'Acceso concedido',
                        html: 'Bienvenida Nati.',
                        timer: 2000,
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
                          console.log('I was closed by the timer'),
                          window.location = "admin/index.php"
                        }
                      })
                     
                  }
                     if(response == 2){
                    let timerInterval
                      Swal.fire({
                        title: 'Acceso concedido',
                        html: 'Bienvenido Usuario.',
                        timer: 2000,
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
                          console.log('I was closed by the timer'),
                          window.location = "cliente/index.php"
                        }
                      })                     
                  }               
                  if(response == 3){
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'No ha confirmado su cuenta.!'
                   
                    })
                  }
                  if(response == 0){
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Email o contraseña inválidos!',
                      footer: '<a href class="linkActivo">Has olvidado la contraseña?</a>'
                    })
                  }

                 
              }
          });
      }
    }
  });
  $('#loginform').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      email: {
        required: "Por favor un correo electrónico válido",
        email: "Por favor un correo electrónico válido"
      },
      password: {
        required: "Por favor escriba su contraseña",
        minlength: "Tu contraseña debe ser de al menos de 6 caracteres"
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
    }
  });
});
