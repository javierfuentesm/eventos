<?php
function recuperarDatos1()
{
$host = "localhost";
$user = "root";
$pw = "";
$db = "evento";
$con = mysql_connect($host, $user, $pw) or die ("No se pudo conectar a la base de datos");
mysql_select_db($db, $con) or die ("No se encontro la base de datos");
$query = "SELECT * FROM participante where email='" . $_SESSION['email'] . "'";
$resultado = mysql_query($query);
while($fila = mysql_fetch_array($resultado)) {
echo "<br>";
echo "" . $fila['id_part'] . "<br>";
}
}
function recuperarDatos2()
{
$host = "localhost";
$user = "root";
$pw = "";
$db = "evento";
$con = mysql_connect($host, $user, $pw) or die ("No se pudo conectar a la base de datos");
mysql_select_db($db, $con) or die ("No se encontro la base de datos");
$query = "SELECT * FROM participante where email='" . $_SESSION['email'] . "'";
$resultado = mysql_query($query);
while($fila = mysql_fetch_array($resultado)) {
echo "<br>";
echo "" . $fila['email'] . "<br>";
}
}
function recuperarDatos3()
{
$host = "localhost";
$user = "root";
$pw = "";
$db = "evento";
$con = mysql_connect($host, $user, $pw) or die ("No se pudo conectar a la base de datos");
mysql_select_db($db, $con) or die ("No se encontro la base de datos");
$query = "SELECT * FROM participante where email='" . $_SESSION['email'] . "'";
$resultado = mysql_query($query);
while($fila = mysql_fetch_array($resultado)) {
echo "<br>";
echo "" . $fila['nombre'] . "<br>";
}
}
function recuperarDatos4()
{
$host = "localhost";
$user = "root";
$pw = "";
$db = "evento";
$con = mysql_connect($host, $user, $pw) or die ("No se pudo conectar a la base de datos");
mysql_select_db($db, $con) or die ("No se encontro la base de datos");
$query = "SELECT * FROM participante where email='" . $_SESSION['email'] . "'";
$resultado = mysql_query($query);
while($fila = mysql_fetch_array($resultado)) {
echo "<br>";
echo "" . $fila['apellidoP'] . "<br>";
}
}   
function recuperarDatos5()
{
$host = "localhost";
$user = "root";
$pw = "";
$db = "evento";
$con = mysql_connect($host, $user, $pw) or die ("No se pudo conectar a la base de datos");
mysql_select_db($db, $con) or die ("No se encontro la base de datos");
$query = "SELECT * FROM participante where email='" . $_SESSION['email'] . "'";
$resultado = mysql_query($query);
while($fila = mysql_fetch_array($resultado)) {
echo "<br>";
echo "" . $fila['tel'] . "<br>";
}
} 
function recuperarDatos6()
{
$host = "localhost";
$user = "root";
$pw = "";
$db = "evento";
$con = mysql_connect($host, $user, $pw) or die ("No se pudo conectar a la base de datos");
mysql_select_db($db, $con) or die ("No se encontro la base de datos");
$query = "SELECT * FROM participante where email='" . $_SESSION['email'] . "'";
$resultado = mysql_query($query);
while($fila = mysql_fetch_array($resultado)) {
echo "<br>";
echo "" . $fila['CP'] . "<br>";
}
} 
?>  