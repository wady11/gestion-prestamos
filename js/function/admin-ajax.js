'use strict';

//re-name
const {document:doc} = window;

//variable
var user = doc.getElementById('user');
var useName = doc.getElementById('name');
var password = doc.getElementById('password');


doc.addEventListener('DOMContentLoaded',()=>{
        
        //create admin enve
        $('#create-admin').submit(function (e) { 
            e.preventDefault();

            let data = $('#create-admin').serializeArray();
            
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: data,
                dataType: 'json',
                success: function (response) {
                    let resultado = response;//if the result is = success
                    console.log(response);
                    if(resultado.resolve == 'success'){
                        Swal.fire(
                            'Se ha Agredado con Exito',
                            'El cliente se a Creado!',
                            'success',
                            user.value = "",
                            useName.value = "",
                            password.value = "",
                            user.focus()
                        )
                       
                        
                    }
                    else{
                        Swal.fire(
                            'ooops',
                            'hubo un error, falta campos por llenar!',
                            'error',
                            user.focus()
                        )
                        
                        
                    }
                }
            });

        });//create-admin ends


        //login evento form
        $('#login-form').submit(function(e){ 
            e.preventDefault();
            //variable just to delete the information
                var name = doc.querySelector('#user');
                var password = doc.querySelector('#keypassword');
            
            let data =  $(this).serializeArray();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: data,
                dataType: 'json',
                success: function (response) {
                    let resultado = response;//if the result is = success
                   // console.log(resultado);
                    if(resultado.respuesta == 'Administrador'){
                        Swal.fire(
                            'Se ha Logeado con exito',
                            `Bienvend@ Administrador ${resultado.usuario}`,
                            'success',
                        ) 
                        //intervalor para que mande a la pagina principal
                       setTimeout(()=>{
                            window.location.href = "http://localhost:83/Admin-LTE/dashboard.php"
                       }, 1000)                      
                    }   
                    else if(resultado.respuesta == 'reject'){
                        Swal.fire(
                            'ooops',
                            'Usuario O Contraseña Incorrectas!',
                            'error',
                            name.value = "",
                            password.value = "",
                            name.focus()

                        )
                            //if it empty
                    }else if(name.value == "" || password.value == ""){
                        Swal.fire(
                            'ooops',
                            'Hay Campos vacios',
                            'error',
                            name.value = "",
                            name.focus(),
                            password.value = ""

                        )
                    //if it user
                    }else if(resultado.respuesta == "User"){
                        Swal.fire(
                            'Se ha Logeado con exito',
                            `Bienvend@ Usuario ${resultado.usuario}`,
                            'success',
                        ) 
                        //intervalor para que mande a la pagina principal
                       setTimeout(()=>{
                            window.location.href = "http://localhost:83/Admin-LTE/dashboard.php"
                       }, 1000)  
                    }
                    
                }
            });
            
        });//login-form ends


        //create user
        $('#create-user').submit(function (e) { 
            e.preventDefault();

            let data = $(this).serializeArray();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: data,
                dataType: "json",
                success: function (response) {
                    let resultado = response;
                    console.log(resultado);
                    if(response.resolve == 'success'){
                        Swal.fire(
                            'Se ha Agredado con Exito',
                            `El cliente ${resultado.usuario +" "+ resultado.lastName} se a Creado!`,
                            'success'
                        )
                        setTimeout(()=>{
                            location.href = "http://localhost:83/Admin-LTE/List-user.php";
                            this.reset();
                        },2000)
                      
                        
                    }
                    else{
                        Swal.fire(
                            'ooops',
                            'hubo un error, falta campos por llenar!',
                            'error'
                           
                        )
                        
                        
                    }
                }
                
            });
            
        });//create-user ends

        $('#edit-user').submit(function (e) { 
            e.preventDefault();
            
            let data = $(this).serializeArray();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: data,
                dataType: "json",
                success: function (response) {
                    let resultado = response;
                    // console.log(resultado);
                    if(response.answer == 'success'){
                        Swal.fire(
                            'Se ha actualizado con Exito',
                            `El cliente ${resultado.usuario +" "+ resultado.lastName} se a Actualizado!`,
                            'success'
                        )
                        setTimeout(()=>{
                            location.href = "http://localhost:83/Admin-LTE/List-user.php";
                            this.reset();
                        },2000)
                      
                        
                    }
                    else{
                        Swal.fire(
                            'ooops',
                            'hubo un error, no se ha podido actualizar el usuario!',
                            'error'
                           
                        )
                        
                        
                    }
                }
                
            });
            
        });//edit-user ends

       
});//DOM CONTENT LOADED

