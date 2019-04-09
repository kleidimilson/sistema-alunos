<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta utf-8>
	<title>CADASTRO DE ALUNOS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
    <link rel="stylesheet" href="sistema.css/sistema.css">
</head>
<body>


<div class="container">
	<div class="header clearfix">
		<h2 id="titulos" class="text-center">SISTEMA DE CADASTRO DE ALUNOS:</h2>
    </div>
    <div class="jumbotron">
    	<form id="formulario" method="POST" action="processa.php">
					<div class="form-group">
						<label>NOME DO ALUNO:</label>
						<input type="text" required="" id="nome" class="form-control">
					</div>
				<div class="form-group">
					<label>NÚMERO DA MATRÍCULA:</label>
					<input type="number" id="Nmatricula" class="form-control">
				</div>
				<div class="form-group">
					<label>E-MAIL:</label>
					<input type="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label>TELEFONE:</label>
					<input type="text" id="telefone" class="form-control">
				</div>
					<button type="submit" class="btn btn-dark">CADASTRAR</button>
				</form>
    	<h2 class="text-center">ALUNOS CADASTRADOS:</h2>
    	<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Número da matricula</th>
						<th scope="col">Email</th>
						<th scope="col">Telefone</th>
						<th scope="col">Data de cadastro</th>
					</tr>
				</thead>
				<tbody id="resultados">
		      
		    </tbody>
		  </table>
		</div>
	</div>
</div>

</body>
</html>