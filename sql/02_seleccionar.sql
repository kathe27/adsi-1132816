# Seleccionar todos los registros
select * from nombretabla;

# Seleccionar una columna de la tabla
select nombrecolumna from nombretabla;

# Seleccionar mas de una columna de la tabla
select nombrecolumna1, nombrecolumna2 from nombretabla;

# Seleccionar valores distintos (unicos
select distinct nombrecampo from nombretabla;

# Seleccionar con condicion
select * from nombretabla where nombrecampo = valor;

# Seleccionar varios valores de una columna
select * from nombretabla where nombrecampo in (valor1,valor2);

# Seleccionar valores mayores a un valor de un campo
select * from nombretabla where id > valor;
select * from nombretabla where id < valor;

# Seleccionar todos menos un registro
select * from nombretabla where id <> valor;

# Seleccionar varios registros con OR (o)
select * 
from nombretabla
where nombrecampo = valor1
or nombrecampo = valor2;

# Seleccionar un registro con AND (y)
select *
from nombretabla
where nombrecampo = valor1
and nombrecampo = valor2;

# Seleccionar varios registros con OR y AND
select *
from nombretabla
where nombrecampo1 = valor1 and nombrecampo2 = valor2 
or nombrecampo1 = valor3 and nombrecampo2 = valor4;

# Ordenar
select *
from nombretabla 
order by nombrecampo;

select *
from nombretabla
order by nombrecampo asc;

select *
from nombretabla
order by nombrecampo desc;