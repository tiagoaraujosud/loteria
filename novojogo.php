<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Inserir novo Jogo</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="loteria.php">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

	    <!-- Formúlário de Login -->
	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>

	    	<div class="col-md-4">

	    		<h3>Inserir Números sorteados:</h3>

	    		<form method="post" action="registrarjogo.php" id="novojogo">

					<div class="form-group" method="post">
						<input type="text" class="form-control" id="numjogo" name="numjogo" placeholder="Sorteio Nº" required="requiored">

					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="num1" name="num1" placeholder="Número 1" required="requiored">


					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="num2" name="num2" placeholder="Número 2" required="requiored">


					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="num3" name="num3" placeholder="Número 3" required="requiored">

					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="num4" name="num4" placeholder="Número 4" required="requiored">


					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="num5" name="num5" placeholder="Número 5" required="requiored">

					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="num6" name="num6" placeholder="Número 6" required="requiored">


					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="num7" name="num7" placeholder="Número 7" required="requiored">


					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="num8" name="num8" placeholder="Número 8" required="requiored">


					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="num9" name="num9" placeholder="Número 9" required="requiored">


					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="num10" name="num10" placeholder="Número 10" required="requiored">


					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="num11" name="num11" placeholder="Número 11" required="requiored">


					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="num12" name="num12" placeholder="Número 12" required="requiored">


					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="num13" name="num13" placeholder="Número 13" required="requiored">


					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="num14" name="num14" placeholder="Número 14" required="requiored">


					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="num15" name="num15" placeholder="Número 15" required="requiored">

					</div>
					
					<button type="submit" class="btn btn-primary form-control">Salvar</button>


				</form>
	    		
				<!-- Fim da inserção dos novos números -->
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>