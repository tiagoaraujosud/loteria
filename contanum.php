<?php

	function contanum(){

		require_once('bd.php');

		$total1 = '0';

		$resultado['total'] = '0';

		$objDb = new db();
		$link = $objDb->conecta_mysql();

		$query = mysqli_query($link, "SELECT count(*) as total from maissorteado");
		$resultado = mysqli_fetch_assoc($query);
		echo $resultado['total'];			

		$total = 0;

			for ($j=1; $j <= 25 ; $j++) { 
				
				$total = 0;

				for ($i=1; $i <= 25; $i++) { 

					$sql = "SELECT sum(num".$i.") AS soma FROM maissorteado WHERE num".$i."=".$j."";

        			$resultado_count = mysqli_query($link, $sql);

        			while ($values = mysqli_fetch_assoc($resultado_count)){

        				$total = $total + $values['soma'];

        			}

        		}

        		echo $total;

        	}	

	}

?>