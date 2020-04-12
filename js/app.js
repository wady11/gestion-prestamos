$(function () {
  $("#event").DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
  });
});

//JQUERY-UI
$('#tooltiphome').tooltip();
$('#tooltipcalcu').tooltip();
$('.addbottom').tooltip();


'use strict';

(function(){
  //variable
  var validFeedback = document.getElementsByClassName('valid-feedback');
  var inputs = [];
  //inputs
  var userName = document.getElementById("name");
  var userLastname = document.getElementById('lastName');
  var userEmail = document.getElementById('email')
  var userAddress = document.getElementById('address');
  var userTelephone = document.getElementById('telePhone');
  var userCellphone = document.getElementById('cellPhone');
  var userCity = document.getElementById('city');
  var userTown = document.getElementById('town');
  var userBanc = document.getElementById('banc');
  var userBancaccount = document.getElementById('bancAccount');
  var userDate = document.getElementById('date');
  var usercedula = document.getElementById('cedula');
  
  //inputs array
  inputs.push(userName,userLastname,userEmail,userAddress,userTelephone,userCellphone,userCity,
    userTown,userBanc,userBancaccount,userDate,usercedula);
  

  // window.addEventListener("load",()=>{
   
    //Defined Style
    for (const iterator in inputs) {
      inputs[iterator].classList.remove('is-invalid');
      inputs[iterator].classList.remove('is-valid');
      inputs[iterator].style.borderColor = '#8c7777';
    }

    //username configuration
     userName.addEventListener('blur',()=>{
        if(userName.value != "" ){
          userName.classList.remove('is-invalid');
            userName.classList.add('is-valid');
             validFeedback[0].innerHTML = 'Looks good!';
            userName.style.borderColor = '#13e013';
             validFeedback[0].style.color = '#13e013';  
        }else if(userName.value == ""){
          userName.classList.remove('is-valid');
          userName.classList.add('is-invalid');
          validFeedback[0].style.color = 'red';
          userName.style.borderColor = "red"; 
          validFeedback[0].innerHTML = 'looks bad';
          validFeedback[0].style.display = 'block'
        }
     })

     //userlastname configuration
     userLastname.addEventListener('blur',()=>{
      if(userLastname.value != "" ){
        userLastname.classList.remove('is-invalid')
        userLastname.classList.add('is-valid');
         validFeedback[1].innerHTML = 'Looks good!';
         userLastname.style.borderColor = '#13e013'
         validFeedback[1].style.color = '#13e013';  
      }
      else{
        userLastname.classList.remove('is-valid')
          userLastname.classList.add('is-invalid');
       validFeedback[1].style.color = 'red';
       validFeedback[1].innerHTML = 'Este Campo debe ser llenado';
       validFeedback[1].style.display = 'block'
       userLastname.style.borderColor = 'red';
     
      }
    })

    //useremail configuration
    userEmail.addEventListener('blur',()=>{
      if(userEmail.value.indexOf('@') > -1){
        userEmail.classList.remove('is-invalid')
        userEmail.classList.add('is-valid');
         validFeedback[2].innerHTML = 'Looks good!';
         userEmail.style.borderColor = '#13e013'
         validFeedback[2].style.color = '#13e013';  
      }
      else{
        userEmail.classList.remove('is-valid')
        userEmail.classList.add('is-invalid');
       validFeedback[2].style.color = 'red';
       validFeedback[2].innerHTML = 'Este Campo debe ser llenado';
       validFeedback[2].style.display = 'block'
       userEmail.style.borderColor = 'red';
     
      }
    })

    //useraddress configuration
    userAddress.addEventListener('blur',()=>{
      if(userAddress.value != "" ){
        userAddress.classList.remove('is-invalid')
        userAddress.classList.add('is-valid');
         validFeedback[3].innerHTML = 'Looks good!';
         userAddress.style.borderColor = '#13e013'
         validFeedback[3].style.color = '#13e013';  
      }
      else{
        userAddress.classList.remove('is-valid')
        userAddress.classList.add('is-invalid');
       validFeedback[3].style.color = 'red';
       validFeedback[3].innerHTML = 'Este Campo debe ser llenado';
       validFeedback[3].style.display = 'block'
       userAddress.style.borderColor = 'red';
     
      }
    })

    //usertelephone configuration
    userTelephone.addEventListener('blur',()=>{
      if(userTelephone.value != "" ){
        userTelephone.classList.remove('is-invalid')
        userTelephone.classList.add('is-valid');
         validFeedback[4].innerHTML = 'Looks good!';
         userTelephone.style.borderColor = '#13e013'
         validFeedback[4].style.color = '#13e013';  
      }
      else{
        userTelephone.classList.remove('is-valid')
        userTelephone.classList.add('is-invalid');
       validFeedback[4].style.color = 'red';
       validFeedback[4].innerHTML = 'Este Campo debe ser llenado';
       validFeedback[4].style.display = 'block'
       userTelephone.style.borderColor = 'red';
     
      }
    })

    //usercellphone configuration
    userCellphone.addEventListener('blur',()=>{
      if(userCellphone.value != "" ){
        userCellphone.classList.remove('is-invalid')
        userCellphone.classList.add('is-valid');
         validFeedback[5].innerHTML = 'Looks good!';
         userCellphone.style.borderColor = '#13e013'
         validFeedback[5].style.color = '#13e013';  
      }
      else{
        userCellphone.classList.remove('is-valid')
        userCellphone.classList.add('is-invalid');
       validFeedback[5].style.color = 'red';
       validFeedback[5].innerHTML = 'Este Campo debe ser llenado';
       validFeedback[5].style.display = 'block'
       userCellphone.style.borderColor = 'red';
     
      }
    })

    //usercity configuration
    userCity.addEventListener('blur',()=>{
      if(userCity.value != "" ){
        userCity.classList.remove('is-invalid')
        userCity.classList.add('is-valid');
         validFeedback[6].innerHTML = 'Looks good!';
         userCity.style.borderColor = '#13e013'
         validFeedback[6].style.color = '#13e013';  
      }
      else{
        userCity.classList.remove('is-valid')
        userCity.classList.add('is-invalid');
       validFeedback[6].style.color = 'red';
       validFeedback[6].innerHTML = 'Este Campo debe ser llenado';
       validFeedback[6].style.display = 'block';
       userCity.style.borderColor = 'red';
     
      }
    })

    //usertown configuration
    userTown.addEventListener('blur',()=>{
      if(userTown.value != "" ){
        userTown.classList.remove('is-invalid')
        userTown.classList.add('is-valid');
         validFeedback[7].innerHTML = 'Looks good!';
         userTown.style.borderColor = '#13e013'
         validFeedback[7].style.color = '#13e013';  
      }
      else{
        userTown.classList.remove('is-valid')
        userTown.classList.add('is-invalid');
       validFeedback[7].style.color = 'red';
       validFeedback[7].innerHTML = 'Este Campo debe ser llenado';
       validFeedback[7].style.display = 'block';
       userTown.style.borderColor = 'red';
     
      }
    })

    //userbanc configuration
    userBanc.addEventListener('blur',()=>{
      if(userBanc.value != "" ){
        userBanc.classList.remove('is-invalid')
        userBanc.classList.add('is-valid');
         validFeedback[8].innerHTML = 'Looks good!';
         userBanc.style.borderColor = '#13e013'
         validFeedback[8].style.color = '#13e013';  
      }
      else{
        userBanc.classList.remove('is-valid')
        userBanc.classList.add('is-invalid');
       validFeedback[8].style.color = 'red';
       validFeedback[8].innerHTML = 'Este Campo debe ser llenado'
       validFeedback[8].style.display = 'block'
       userBanc.style.borderColor = 'red';
     
      }
    })

    //uservancaccount configuration
    userBancaccount.addEventListener('blur',()=>{
      if(userBancaccount.value != "" ){
        userBancaccount.classList.remove('is-invalid')
        userBancaccount.classList.add('is-valid');
         validFeedback[9].innerHTML = 'Looks good!';
         userBancaccount.style.borderColor = '#13e013'
         validFeedback[9].style.color = '#13e013'; 
         
      }
      else{
        userBancaccount.classList.remove('is-valid')
          userBancaccount.classList.add('is-invalid');
       validFeedback[9].style.color = 'red';
       validFeedback[9].innerHTML = 'Este Campo debe ser llenado';
       validFeedback[9].style.display = 'block';
       userBancaccount.style.borderColor = 'red';
     
      }
    })

    //userDate configuration
    userDate.addEventListener('blur',()=>{
      if(userDate.value != "" ){
        userDate.classList.remove('is-invalid')
        userDate.classList.add('is-valid');
         validFeedback[10].innerHTML = 'Looks good!';
         userDate.style.borderColor = '#13e013'
         validFeedback[10].style.color = '#13e013'; 
         
      }
      else{
        userDate.classList.remove('is-valid')
        userDate.classList.add('is-invalid');
       validFeedback[10].style.color = 'red';
       validFeedback[10].innerHTML = 'Este Campo debe ser llenado'
       validFeedback[10].style.display = 'block'
       userDate.style.borderColor = 'red';
     
      }
    })
    
    //userCedula configuration
    usercedula.addEventListener('blur',()=>{
      if(usercedula.value != "" ){
        usercedula.classList.remove('is-invalid')
        usercedula.classList.add('is-valid');
         validFeedback[11].innerHTML = 'Looks good!';
         usercedula.style.borderColor = '#13e013'
         validFeedback[11].style.color = '#13e013'; 
       
      }
      else{
        usercedula.classList.remove('is-valid')
        usercedula.classList.add('is-invalid');
       validFeedback[11].style.color = 'red';
       validFeedback[11].textContent ='Este Campo debe ser llenado';
       validFeedback[11].style.display = 'block'
       usercedula.style.borderColor = 'red';
     
      }
    })
    

  // });//DOCUMENT CONTENT LOADED
  
}());
  