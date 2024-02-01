let activarpropina = document.getElementById("activar-propina");
let inputpropina = document.getElementById("propina-input");

activarpropina.addEventListener('change', function() {
    inputpropina.readOnly = !activarpropina.checked;

    if (this.checked) {
        inputpropina.classList.remove('readonly-style');
        
    } else {
        inputpropina.classList.add('readonly-style');
    }
})