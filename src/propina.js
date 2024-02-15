let activarpropina = document.getElementById("activar-propina");
let inputpropina = document.getElementById("propina-input");
let textoprecio = document.getElementById("textoprecio");
let preciobase = parseFloat(document.getElementById("preciobase").value);
let inputpreciototal = document.getElementById("preciototal");
let valorpropina = document.getElementById("propina");
let puntosusuario = parseFloat(document.getElementById("puntosusuario").value);
let activarpuntos = document.getElementById("activar-puntos");
let inputpuntos = document.getElementById("puntos-input");
let backupprecio = preciobase;

let precioT, puntos;

inputpuntos.max = puntosusuario;

if (activarpropina.checked) {
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

    precioTotal(activarpuntos, activarpropina, inputpropina, backupprecio, textoprecio, inputpreciototal, inputpuntos, puntosusuario);
    
})

inputpropina.addEventListener('change', function() {
    precioTotal(activarpuntos, activarpropina, inputpropina, backupprecio, textoprecio, inputpreciototal, inputpuntos, puntosusuario);
}) 

activarpuntos.addEventListener('change', function() {
    inputpuntos.readOnly = !activarpuntos.checked;
    if (this.checked) {
        inputpuntos.classList.remove('readonly-style');
        
    } else {
        inputpuntos.classList.add('readonly-style');
    }

    precioTotal(activarpuntos, activarpropina, inputpropina, backupprecio, textoprecio, inputpreciototal, inputpuntos, puntosusuario);
})

inputpuntos.addEventListener('change', function() {
    precioTotal(activarpuntos, activarpropina, inputpropina, backupprecio, textoprecio, inputpreciototal, inputpuntos, puntosusuario);
})

function comprobarPropina(activarpropina, inputpropina) {
    if(activarpropina.checked) {
        let propina = parseFloat(inputpropina.value);
        return propina;
    } else {
        return 0;
    }
}

function calcularPrecioPropina (preciobase, propina)
{
    return preciobase + (propina/100)*preciobase;
}

function comprobarPuntos(inputpuntos, activarpuntos)
{
    if(activarpuntos.checked) {
        let puntos = inputpuntos.value;
        return puntos;
    } else {
        return 0;
    }
}

function calcularPrecioPuntos (preciopropina, puntos) 
{
    let preciofinal = preciopropina - puntos/100;
    if (preciofinal < 0) {
        preciofinal = 0;
    }

    return preciofinal;
}

function showPrecio(propina, preciototal, textoprecio, inputpreciototal, puntos, inputpuntos) 
{
    preciototal = parseFloat(preciototal);
    preciototal = preciototal.toFixed(2);
    textoprecio.innerHTML = preciototal + "€";
    inputpreciototal.value = preciototal;
    valorpropina.value = propina;

    return preciototal;
}

finalizar.addEventListener("click", function() {
    let puntosSumados = precioT*100;

    let puntostotales = puntosusuario - puntos + puntosSumados;
    console.log(puntostotales);

    fetch("http://localhost/proyecte1-restaurant/?controller=API&action=modificarPuntos", {
            method: 'POST',
            body: JSON.stringify({
                    puntos: puntostotales,
            }),
            headers: {
                'Content-Type': 'application/json; charset=UTF-8',
            }
            
        })
})

function precioTotal(activarpuntos, activarpropina, inputpropina, backupprecio, textoprecio, inputpreciototal, inputpuntos, puntosusuario) 
{
    let propina = comprobarPropina(activarpropina, inputpropina);
    let preciopropina = calcularPrecioPropina(backupprecio, propina);
    puntos = comprobarPuntos(inputpuntos, activarpuntos);
    let preciototal = calcularPrecioPuntos(preciopropina, puntos);
    precioT = showPrecio(propina, preciototal, textoprecio, inputpreciototal, puntos, inputpuntos);
    
}