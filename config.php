<?php
/**
 * Datos de conexión: en variables en php.
 */
$host = "localhost";
$user = "students_user";
$password = "12345";
$database = "students_db";

// los usuarios de la base de datos no son los usuarios de mi sistema (app)
// el usuario de la base de datos ES LA APLICACIÓN

/* NO se puede poner root, te pueden hacer una inyeccion en la base de
 datos lo cual es muy inseguro */

/**
 * $connection "variable", objeto instancia de mysqli
 * La extensión mysqli (mysql improved) permite acceder 
 * a la funcionalidad proporcionada por MySQL 4.1 y posterior. 
 * Se puede encontrar más información sobre el servidor de base 
 * de datos MySQL en » http://www.mysql.com/
 * 
 * instancio una conexión a la base de datos con las variables
 * definidas arriba.
 */

// Me conecto a la base de datos MySQL
// "new" es reserva de memoria, como el malloc en C
$connection = new mysqli($host, $user, $password, $database); 

/**
 * Verificar conexión, si hay error corto interpretación con la función "die"
 * y muestro por pantalla el error. "Modo Desarrollo"
 */ 

// En el modo de producción este corte es agresivo, mas no en el modo de desarrollo

if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
}
?>
