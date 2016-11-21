
var emarca      = document.getElementById('emarca')
var ereferencia = document.getElementById('ereferencia')
var emodelo     = document.getElementById('emodelo')
var eimagen     = document.getElementById('eimagen')
var ecilindraje = document.getElementById('ecilindraje')


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
	arrancar: function() {

	},

	apagar: function() {
		
	},

	adelantar: function() {
		
	},

	frenar: function() {
		
	},

	girar_derecha: function() {
		
	},

	girar_izquierda: function() {
		
	}

}