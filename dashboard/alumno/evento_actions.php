<?php

try
{
	//Open database connection
	$con = mysql_connect("localhost","root","");
	mysql_select_db("evento", $con);

	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
		//Get records from database
		$result = mysql_query("SELECT * FROM evento,registro WHERE evento.id_part=registro.id_part;");

		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{
		//Insert record into database
		$result = mysql_query("INSERT INTO evento(ISBN, titulo_e,
		 lugar, ubicacion, ubicacion_v, FechIniReg, FechFinReg, Fechtrbajo,
		 FechPago, FechIniEv, FechFinEv, duracion) VALUES('" . $_POST["ISBN"] . "', " . $_POST["titulo_e"] . ",now());");

		//Get last inserted record (to return to jTable)
		$result = mysql_query("SELECT * FROM people WHERE PersonId = LAST_INSERT_ID();");
		$row = mysql_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);
	}
	//Updating a record (updateAction)
	else if($_GET["action"] == "update")
	{
		//Update record in database
		$result = mysql_query("UPDATE evento SET ISBN = '" . $_POST["ISBN"] . "', titulo_e = '" . $_POST["titulo_e"] ."', lugar = '". $_POST["lugar"]."', ubicacion = '". $_POST["ubicacion"]."', ubicacion_v = '". $_POST["ubicacion_v"]."', FechIniReg = '". $_POST["FechIniReg"]."', FechFinReg = '".$_POST["FechFinReg"]."', Fechtrbajo = '". $_POST["Fechtrbajo"]."', FechPago = '". $_POST["FechPago"]."', FechIniEv = '". $_POST["FechIniEv"]."', FechFinEv = '". $_POST["FechFinEv"]."', duracion = '". $_POST["duracion"]."' WHERE id_evento = " . $_POST["id_evento"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM evento WHERE id_evento = " . $_POST["id_evento"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	//Close database connection
	mysql_close($con);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}

?>
