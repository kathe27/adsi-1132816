#modificar un campo ce una tabla
update nombre tabla
	set nombrecampo = 'valor'
	where id = valor;

#modificar mas de un campo
update  nombretabla
	set nombrecampo1 = 'valor1', nombrecampo2 = 'valor2'
	where id = valor;
	
update nombretabla
	set nombrecampo = 'valor'
	where id > valor1
	and id < valor2;