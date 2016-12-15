<!DOCTYPE html>
<html>
<body>

<h1>form</h1>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evento";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id_part FROM participante where email='".$_POST["email"]."';";
$result = $conn->query($sql);
$id_part="";
$id_evento="";
$id_evento=$_POST["id_evento"];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id_part=$row["id_part"];
        echo "id_part: " . $id_part . "<br>";
    }
} else {
    echo "0 results";
}
echo "id_evento: " . $id_evento . "<br>";

$sql = "INSERT INTO registro (id_evento,id_part,fecha)
VALUES ('".$_POST["id_evento"]."','".$id_part."',now() )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	echo"
<div class='container'><div class='alert alert-success alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Se realizaó con éxito el registro</div></div>";
 header("Refresh:0; url=dashboard/participante/eventopage.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo"
<div class='container'><div class='alert alert-warning alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Ha habido un error</div></div>";
 header("Refresh:0; url=dashboard/participante/eventopage.html");

}


$conn->close();
?>



</body>
</html>
