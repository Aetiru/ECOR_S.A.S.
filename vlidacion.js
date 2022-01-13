	function validaDatos(formulario){
        if ((form.f_name.value.length == 0) || (form.l_name.value.length == 0) || (fom.email.value.length == 0) || (form.password.value.length == 0)) {
            alert("Uno de los campos esta vacio!");
            return false;
        }
        return true;
    }
    function soloLetras(e) {
    	/*Validacion de nombre y apellido obligatorio*/
    	key = e.keyCode || e.which;
    	teclado = String.fromCharCode(key).toLowerCase();
    	letras = "abcdefghijklmnñopqrstuvwxyz";
    	especiales = "8-37-38-46-164";
    	teclado_especiales = false;


    	for(var i in especiales) {
    		if (key == especiales[i]) {
    			teclado_especiales = true; break;
    		}
    	}
    	if (letras.indexOf(teclado) == -1 !teclado_especiales) {
    		return false;
    	}
    }