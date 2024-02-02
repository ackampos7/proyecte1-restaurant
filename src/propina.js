let activarpropina = document.getElementById("activar-propina");
let inputpropina = document.getElementById("propina-input");
let textoprecio = document.getElementById("textoprecio");
let preciobase = parseFloat(document.getElementById("preciobase").value);
let inputpreciototal = document.getElementById("preciototal");
let backupprecio = preciobase;

activarpropina.addEventListener('change', function() {
    inputpropina.readOnly = !activarpropina.checked;

    if (this.checked) {
        inputpropina.classList.remove('readonly-style');
        
    } else {
        inputpropina.classList.add('readonly-style');
    }
})

inputpropina.addEventListener('change', function() {
    let propina = parseFloat(inputpropina.value);
    textoprecio.innerHTML = "";
    let preciototal = backupprecio;
    preciototal += (propina/100)*preciobase;
    preciototal = parseFloat(preciototal);
    textoprecio.innerHTML = preciototal + "€";
    inputpreciototal.value = preciototal;
})