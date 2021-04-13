<?php

	//inicia a sessão
	session_start();
	require_once('bd.php');

	$numjogo = $_POST['numjogo'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];
	$num4 = $_POST['num4'];
	$num5 = $_POST['num5'];
	$num6 = $_POST['num6'];
	$num7 = $_POST['num7'];
	$num8 = $_POST['num8'];
	$num9 = $_POST['num9'];
	$num10 = $_POST['num10'];
	$num11 = $_POST['num11'];
	$num12 = $_POST['num12'];
	$num13 = $_POST['num13'];
	$num14 = $_POST['num14'];
	$num15 = $_POST['num15'];
	
	$objDb = new db();
	$link = $objDb->conecta_mysql();

	

	$sql = "INSERT INTO maissorteado(sorteionum, num1, num2, num3, num4, num5, num6, num7, num8, num9, num10, num11, num12, num13, num14, num15) values('$numjogo', '$num1', '$num2', '$num3', '$num4', '$num5', '$num6', '$num7', '$num8', '$num9', '$num10', '$num11', '$num12', '$num13', '$num14', '$num15') ";


	mysqli_query($link, $sql);

?>