
var emarca      = document.getElementById('emarca');
var ereferencia = document.getElementById('ereferencia');
var emodelo     = document.getElementById('emodelo');
var eimagen     = document.getElementById('eimagen');
var ecilindraje = document.getElementById('ecilindraje');

var ini = document.getElementById('ini');
var det = document.getElementById('det');
var ava = document.getElementById('ava');
var fre = document.getElementById('fre');
var giz = document.getElementById('giz');
var gde = document.getElementById('gde');

var vhcl = document.getElementById('vhcl');

var vini = false; // No esta prendido
var vdet = true;  // Si esta detenido
var vgi  = true;  // Si puede girar a la izquierda
var vde  = false; // No puede girar a la derecha 

var vehiculo = {
	marca: 'lamborghini',
	referencia: 'Huracán Caopé',
	modelo: 2017,
	imagen: 'imgs/lamborghini.png',
	cilindraje: 2000,

	// Métodos
	info: function () {
		emarca.innerHTML      = '<span>Marca: </span>'          +this.marca;
		ereferencia.innerHTML = '<span>Referencia: </span>'     +this.referencia;
		emodelo.innerHTML     = '<span>Modelo: </span>'         +this.modelo;
		eimagen.innerHTML     = '<span>Imagen: </span><img src='+this.imagen+'>';
		ecilindraje.innerHTML = '<span>Cilindraje: </span>'     +this.cilindraje;


	},
	controles: function() {
		ini.onclick = function() {
			vini = true;
			vhcl.classList.add('arrancar');
		}
		det.onclick = function() {
			if(vdet == true){
				vini = false;
				vhcl.classList.remove('arrancar');
			}else{
				alert("Cuidado no puede apagar el vehículo.")
			}
		
		}
		ava.onclick = function() {
			if(vini == true){
				vdet = false;
				vhcl.classList.remove('frenar');
				vhcl.classList.add('avanzar');
			}else{
				alert("Debe iniciar el vehículo para poder avanzar.");
			}
			
		}
		fre.onclick = function() {
			vdet  = true;
			vhcl.classList.add('frenar');
		}
		giz.onclick = function() {
			if(vini == true && vdet == false){
				vgi = false;
				vgd = true;
				vhcl.classList.remove('derecha');
				vhcl.classList.add('izquierda');
			}else{
				alert("No puede girar.")
			}
			
		}
		gde.onclick = function() {
			if(vini == true && vdet == false){
				vgi = true;
				vgd = false;
				vhcl.classList.remove('izquierda');
				vhcl.classList.add('derecha');
			}else{
				alert("No puede girar.")
			}
			
			}

		}
	}
