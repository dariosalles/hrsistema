<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sistema Estoque / LOGIN</title>
		<link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css') ?>">
		
		
	</head>
	<body>
	<section id="home">
		
			<div id="boxlogin">
				<div class="logo">
					<img class="imglogo" src="img/logo.png">
				</div>

				<form class="form" onSubmit="" method="POST">

					<input type="text" name="usuario" class="user" placeholder="USUARIO">
						<img class="iconuser" src="img/user.png">
					<input type="password" name="senha" class="pass" placeholder="SENHA">
						<img class="iconpass" src="img/pass.png">
					
				
					<div class="button">
						<input class="btn" type="submit" value="ACESSAR"></input>
					</div>
				</form>

                <div class="alerta"></div>

				<div class="logoemp">
					<img class="imgemp" src="img/logoemp.png">
				</div>

				<div class="empname">Controle Patrimonial</div>

				<div class="version">V 1.0</div>

            </div>
            
           

	</section>

	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

</html>