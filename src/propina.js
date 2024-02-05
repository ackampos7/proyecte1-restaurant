let activarpropina = document.getElementById("activar-propina");
let inputpropina = document.getElementById("propina-input");
let textoprecio = document.getElementById("textoprecio");
let preciobase = parseFloat(document.getElementById("preciobase").value);
let inputpreciototal = document.getElementById("preciototal");
let valorpropina = document.getElementById("propina");
let puntosusuario = parseFloat(document.getElementById("puntosusuario").value);
let activarpuntos = document.getElementById("activar-puntos");
let inputpuntos = document.getElementById("puntos-input");
inputpuntos.max = puntosusuario;
let backupprecio = preciobase;

if (inputpropina.checked) {
    inputpropina.classList.remove('readonly-style');
    
} else {
    inputpropina.classList.add('readonly-style');
}

precioTotal(activarpuntos, activarpropina, inputpropina, backupprecio, textoprecio, inputpreciototal, inputpuntos);

activarpropina.addEventListener('change', function() {
    inputpropina.readOnly = !activarpropina.checked;

    if (this.checked) {
        inputpropina.classList.remove('readonly-style');
        
    } else {
        inputpropina.classList.add('readonly-style');
    }

    precioTotal(activarpropina, inputpropina, backupprecio, textoprecio, inputpreciototal, inputpuntos);
    
})

inputpropina.addEventListener('change', function() {
    precioTotal(activarpuntos, activarpropina, inputpropina, backupprecio, textoprecio, inputpreciototal, inputpuntos);
})

activarpuntos.addEventListener('change', function() {
    inputpuntos.readOnly = !activarpuntos.checked;
    if (this.checked) {
        inputpuntos.classList.remove('readonly-style');
        
    } else {
        inputpuntos.classList.add('readonly-style');
    }

})

inputpuntos.addEventListener('change', function() {

    precioTotal(activarpuntos, activarpropina, inputpropina, backupprecio, textoprecio, inputpreciototal, inputpuntos);
})

function comprobarPropina(activarpropina, inputpropina) {
    if(activarpropina.checked) {
        let propina = parseFloat(inputpropina.value);
        propina = propina;
        return propina;
    } else {
        return 0;
    }
}

function calcularPrecioPropina (preciobase, propina)
{
    return preciobase + (propina/100)*preciobase;
}

function showPrecio(propina, preciopropina, textoprecio, inputpreciototal) 
{
    preciopropina = preciopropina.toFixed(2);
    textoprecio.innerHTML = preciopropina + "€";
    inputpreciototal.value = preciopropina;
    valorpropina.value = propina;

}

function comprobarPuntos(inputpuntos, activarpuntos)
{
    if(activarpuntos.checked) {
        let puntos = parseFloat(inputpuntos.value);
        return puntos;
    } else {
        return 0;
    }
}

function calcularPrecioPuntos (preciopropina, puntos) 
{
    return preciopropina - puntos/100;
}

function precioTotal(activarpuntos, activarpropina, inputpropina, backupprecio, textoprecio, inputpreciototal, inputpuntos) 
{
    let propina = comprobarPropina(activarpropina, inputpropina);
    console.log(propina);
    let preciopropina = calcularPrecioPropina(backupprecio, propina);
    console.log(preciopropina);
    let puntos = comprobarPuntos(inputpuntos, activarpuntos);
    let preciototal = calcularPrecioPuntos(preciopropina, puntos);
    showPrecio(propina, preciototal, textoprecio, inputpreciototal);
}