'use strict';

//variables
var currentFocus = 0;
let crearCedula = document.getElementById('clientepago');
let ocultarCedula = document.getElementById('cuentacliente');
let mostrarMonto = document.getElementById('montovisual');
let interesMostrar = document.getElementById('interespago');
let cliente = document.getElementById("clientepago");
let valorPago = document.getElementById('valorpago');




window.addEventListener('load',()=>{
    
function inputFunction(inp,arr,cedula,monto,interes){
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
    var createDiv, createDivChild, val = this.value;
    /*close any already open lists of autocompleted values*/
    closeAllLists(inp);

    if (!val) { return false;}
    currentFocus = -1;

    /*create a DIV element that will contain the items (values):*/
    createDiv = document.createElement("DIV");
  
    createDiv.setAttribute("id", this.id + "autocomplete-list");
    createDiv.setAttribute("class", "autocomplete-list-item");
    /*append the DIV element as a child of the autocomplete container:*/
    this.parentNode.appendChild(createDiv);
    /*for each item in the array...*/
    for (let incr = 0; incr < arr.length; incr++) {
      /*check if the item starts with the same letters as the text field value:*/
      if (arr[incr].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
        /*create a DIV element for each matching element:*/
        createDivChild = document.createElement("DIV");
        
        createDivChild.innerHTML = "<strong>" + arr[incr].substr(0, val.length) + "</strong>";
        createDivChild.innerHTML += arr[incr].substr(val.length);
        /*insert a input field that will hold the current array item's value:*/
        createDivChild.innerHTML += "<input type='hidden' value='" + arr[incr] + "'>";

        /*execute a function when someone clicks on the item value (DIV element):*/
        createDivChild.addEventListener("click", function(e) {
            /*insert the value for the autocomplete text field:*/
            inp.value = this.getElementsByTagName("input")[0].value;
            
            //fill inputcedula on clik
            ocultarCedula.value = cedula[incr];
            mostrarMonto.value = MontoTrue(monto[incr]);
            interesMostrar.value = interes[incr];
            //validation function
            valorPago.value = pagoComponent.interesFunction(interes[incr],mostrarMonto.value);
            
            //funcion
            closeAllLists(inp);
            
        });
        createDiv.appendChild(createDivChild);
      }
    }
});
}


//monto true
function MontoTrue(valor){
  if(valor){
    return valor
  }else{
    Swal.fire(
      'ooops',
      `este cliente no tiene deudas!`,
      'error'
    )
  }
}


function closeAllLists(elmnt,inp) {
let val = document.getElementById("clientepago").value
/*close all autocomplete lists in the document,
except the one passed as an argument:*/
var x = document.getElementsByClassName("autocomplete-list-item");
for (var i = 0; i < x.length; i++) {
if (elmnt != x[i] && elmnt != inp) {
  x[i].parentNode.removeChild(x[i]);
}
}
if(val == "") ocultarCedula.value = '';



}

//autocomplete function
function autocomplete(inp, arr) {

//input function
inputFunction(inp,arr.nombre,arr.cedula,arr.monto,arr.interes);


/*execute a function presses a key on the keyboard:*/
inp.addEventListener("keydown", function(e) {
  var createNewDiv = document.getElementById(this.id + "autocomplete-list");
  if (createNewDiv) createNewDiv = createNewDiv.getElementsByTagName("div");

      switch (e.keyCode) {
            case 40:
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(createNewDiv);
              break;
            case 38 :
              currentFocus--;
              /*and and make the current item more visible:*/
              addActive(createNewDiv);
              break;
            case 13 :
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                  e.preventDefault();
                  if (currentFocus > -1) if (createNewDiv) createNewDiv[currentFocus].click();     
              break;  

            default:
              break;
      }
});


function addActive(x) {
/*a function to classify an item as "active":*/
if (!x) return false;
/*start by removing the "active" class on all items:*/
removeActive(x);
if (currentFocus >= x.length) currentFocus = 0;
if (currentFocus < 0) currentFocus = (x.length - 1);
/*add class "autocomplete-active":*/
x[currentFocus].classList.add("autocomplete-active");
}
function removeActive(x) {
/*a function to remove the "active" class from all autocomplete items:*/
for (var i = 0; i < x.length; i++) {
  x[i].classList.remove("autocomplete-active");
}
}

/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
  closeAllLists(e.target);
});
}


async function getPHP() {
  let country = await getArrayPhp();
    autocomplete(cliente, country);
}



const getArrayPhp = () => {
    return new Promise(async (resolve, reject) => {
        try {
            const response = await fetch("/Admin-LTE/funciones/autocompletepago.php");
            const data = await response.json();
            resolve(data);
        } catch (error) {
            reject(error);    
        }
    });
};


 //async function 
  getPHP();







})//DOCUMENT LOADED





