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
		$result = mysql_query("SELECT * from organizador");
		
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
		$result = mysql_query("INSERT INTO organizador(nombre,apellMa,apellPa,telefono,RFC,email,password) VALUES('" . $_POST["nombre"] . "','" . $_POST["apellMa"] . "','" . $_POST["apellPa"] . "','" . $_POST["telefono"] . "','" . $_POST["RFC"] . "','" . $_POST["email"] . "', '" . $_POST["password"] . "');");
		
		//Get last inserted record (to return to jTable)
		$result = mysql_query("SELECT * FROM organizador WHERE id_organizador = LAST_INSERT_ID();");
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
		$result = mysql_query("UPDATE organizador SET password = '" . $_POST["password"] . "',nombre = '".$_POST["nombre"]."',RFC='".$_POST["RFC"]."',email='".$_POST["email"]."', apellMa='".$_POST["apellMa"]."',apellPa='".$_POST["apellPa"]."', telefono = " . $_POST["telefono"] . " WHERE id_organizador = " . $_POST["id_organizador"] . ";");
		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM organizador WHERE id_organizador = " . $_POST["id_organizador"] . ";");

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