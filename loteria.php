<?php

  include "bd.php";  

  //conexão com o banco de dados
  $objDb = new db();
  $link = $objDb->conecta_mysql();

  $sql = "SELECT * FROM loteriabd";

  $resultado_id = mysqli_query($link, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Loteria</title>

    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!-- Barra navegação -->
    <nav class="navbar navbar-default">
      <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" 
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">Alternar Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">LOGO</a>
        </div>

        <div class="collapse navbar-collapse" id="barra-navegacao">

          <ul class="nav navbar-nav navbar-right">
            <li> <a href="#">home</a> </li>
            <li> <a href="novojogo.php">Novo Jogo</a> </li>
            <li> <a href="#">Meus Jogos</a> </li>
          </ul>

        </div>

      </div>
    </nav>
    
    <div class="container">

     <h1> Números mais sorteados </h1>


      <br /><br />

      <table class="table table-striped" width="100%">
        <tr>
          <th>1º</th>
          <th>2º</th>
          <th>3º</th>
          <th>4º</th>
          <th>5º</th>
          <th>6º</th>
          <th>7º</th>
          <th>8º</th>
          <th>9º</th>
          <th>10º</th>
          <th>11º</th>
          <th>12º</th>
          <th>13º</th>
          <th>14º</th>
          <th>15º</th>
          <th>16º</th>
          <th>17º</th>
          <th>18º</th>
          <th>19º</th>
          <th>20º</th>
          <th>21º</th>
          <th>22º</th>
          <th>23º</th>
          <th>24º</th>
          <th>25º</th>
        </tr>

        <?php

          include "contanum.php";

          contanum();

        ?>

        <?php 

          $objDb = new db();
          $link = $objDb->conecta_mysql();

          $sql = "SELECT * FROM contanum";

          $resultado_id = mysqli_query($link, $sql);

          if ($resultado_id-> num_rows > 0) {

            while ($row = $resultado_id-> fetch_assoc()) {
              
              echo "<tr><td>". $row["num1"]."</td><td>". $row["num2"]."</td><td>". $row["num3"]."</td><td>". $row["num4"]."</td><td>".$row["num5"]."</td><td>". $row["num6"]."</td><td>". $row["num7"]."</td>"."<td>".$row["num8"]."</td><"."<td>". $row["num9"]."</td>"."<td>". $row["num10"]."</td>"."<td>". $row["num11"]."</td>"."<td>". $row["num12"]."</td>"."<td>". $row["num13"]."</td>"."<td>". $row["num14"]."</td>"."<td>". $row["num15"]."</td>"."<td>". $row["num16"]."</td>"."<td>". $row["num17"]."</td>"."<td>". $row["num18"]."</td>"."<td>". $row["num19"]."</td>"."<td>". $row["num20"]."</td>"."<td>". $row["num21"]."</td>"."<td>". $row["num22"]."</td>"."<td>". $row["num23"]."</td>"."<td>". $row["num24"]."</td>"."<td>". $row["num25"]."</td>"."</tr>";
            }
            
          }else{

            echo "";
            
          }
        ?>

      </table>
      
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>