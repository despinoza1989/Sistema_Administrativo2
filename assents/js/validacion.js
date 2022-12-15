var validacion = {
	
	validaRut : function (rutCompleto) {
		rutCompleto = rutCompleto.replace("‐","-");
		if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
			return false;
		var tmp 	= rutCompleto.split('-');
		var digv	= tmp[1]; 
		var rut 	= tmp[0];
		if ( digv == 'K' ) digv = 'k' ;
		
		return (validacion.dv(rut) == digv );
	},
	dv : function(T){
		var M=0,S=1;
		for(;T;T=Math.floor(T/10))
			S=(S+T%10*(9-M++%6))%11;
		return S?S-1:'k';
	},

    validarEmail: function(valor) {
        if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
            return true;
        } else {
            return false
        }
    },

    validarTelefono: function(valor) {
        if (/^([0-9])*$/.test(valor) && valor.length==9){
            return false;
        } else {
            return true;
        }
    },

    validarNumero: function(valor) {
        return !isNaN(valor) && valor.length==9
    }, 

	validarNombre: function(valor) {
		var texto = /^[a-zA-ZáéíóúÁÉÍÓÚñÑäÄëËïÏöÖüÜ ]*$/;
		if(valor.search(texto)){
			return false;
		} else {
			return true;
		}

	},

	validarRazonSocial: function(valor) {
		var texto = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ-.'-"@_ ]*$/;
		if(valor.search(texto)){
			return false;
		} else {
			return true;
		}

	},
	
	validarDireccion: function(valor) {
		var texto = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ.'#,0-9 ]*$/;
		if(valor.search(texto)){
			return false;
		} else {
			return true;
		}

	},

	validarUsuario: function(valor) {
		var texto = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ]*$/;
		if(valor.search(texto)){
			return false;
		} else {
			return true;
		}

	},


	validarEmail: function(valor) {
        if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
            return true;
        } else {
            return false
        }
    },

	validarPassword: function(valor) {	
		var texto =	/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&.])([a-zA-Z0-9@$!%*?&.]{8,})$/;
		if(valor.search(texto)){
			return false;
		} else {
			return true;
		}

	},


}



