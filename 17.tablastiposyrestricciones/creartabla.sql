/* -------------------------------------------------------------------------- */
/*                                   Tablas                                   */
/* -------------------------------------------------------------------------- */

/* ----------------------------- Tipos de datos ----------------------------- */
/* 
int(nro de caracteres)          Entero
integer(nro de caracteres)      Entero (maximo 255)
mediumint
bigint
varchar(nro de caracteres)      String/Alfanumerico
char(nro de caracteres)         String/Alfanumerico
float(nro de cifras,nro dec)    Decimal/Coma flotante
date,time,timestamp
text        65535 caracteres
mediumtext  16 millones de caracteres
longtext    4 billones de caracteres


*/ 

CREATE TABLE usuarios(
    id  int(11),
    nombre  varchar(100),
    apellidos varchar(255),
    email   varchar(100),
    password varchar(255)
);