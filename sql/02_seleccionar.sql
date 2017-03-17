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

# Limite de registros
select * from nombretabla limit numero;

# Paginacion de registros
select * from nombretabla limit numeroregistros offset numeroinicia;

# Buscar registros (LIKE)
select *
from nombretabla
where nombrecampo
LIKE "%cadena%";

# Buscar al inicio
select *
from nombretabla
where nombrecampo
LIKE "cadena%";

# Buscar al final
select *
from nombretabla
where nombrecampo
LIKE "%cadena";

# Buscar - completando caracteres
select *
from nombretabla
where nombrecampo
LIKE "H_m_r_ S_mp_o_";

#Buscar (Negacion)
select *
from nombretabla
where nombrecampo
not LIKE "%homero%";

# Multiples valores en una columna (IN)
select *
from nombretabla
where nombrecampo
in(valor1,valor2,valor3);

# Entre (inicial - final) (BETWEEN)
select *
from nombretabla
where nombrecampo
BETWEEN valorinicial
and valorfinal;

# Entre (Negacion) (NOT BETWEEN)
select *
from nombretabla
where nombrecampo
not BETWEEN valorinicial
and valorfinal;

# Alias (3 tablas relacionadas)
select c.nombres, a.nombre, a.precio
from clientes as c, articulos as a,compras as compras
where cm.cliente_id = c.id
and cm.articulo_id = a.id;

# Sin Alias (3 Tablas Relacionadas)
select clientes.nombres, articulos.nombre, articulos.precio
from clientes, articulos, compras
where compras.cliente_id = clientes.id
and compras.articulo_id = articulos.id;

# INNER JOIN
select c.nombres, a.nombre, a.precio
from clientes as c
inner join compras as cm
on cm.cliente_id = c.id
inner join articulos as a
on cm.articulo_id = a.id;

# LEFT JOIN
select c.nombres, a.nombre, a.precio
from clientes as c
left join compras as cm
on cm.cliente_id = c.id
left join articulos as a
on cm.articulo_id = a.id;

# RIGHT JOIN
select c.nombres, a.nombre, a.precio
from clientes as c
right join compras as cm
on cm.cliente_id = c.id
right join articulos as a
on cm.articulo_id = a.id;

# JOIN
select c.nombres, a.nombre, a.precio
from clientes as c 
join compras as cm
on cm.cliente_id = c.id
join articulos as a
on cm.articulo_id = a.id;
and c.id = 2;

# YNIO (Unir la consulta de 2 o mas tablas)
select campo1, campo2 from tabla1
union
select campo1, campo2 from tabla2;

select campo1, campo2 from tabla1
union all
select campo1, campo2 from tabla2;

# Mostrar valor maximo
select max(precio)
from articulos;

# Contar
select count(id)
from articulos;

# Sumar
select sum(precio)
from articulos;

# Promedio
select avg(precio)
from articulos;

# Redondear
select round(avg(precio)
from articulos;
