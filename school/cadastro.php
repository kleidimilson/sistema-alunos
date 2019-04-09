
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>CADASTRAR</title>
<link rel="stylesheet" type="text/css" href="css/estiloCadastro.css">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<head>
<body>
    <div class="container">
        <div id="formulario">
            <h1>CADASTRAR</h1>
            <form method="POST" action="processa.php">
                <label>NOME:</label><br><br>
                <input class="inputs" type="text" name="nome" placeholder="DIGITE SEU NOME:"><br><br>
                <label>EMAIL:</label><br><br>
                <input class="inputs" type="email" name="email" placeholder="DIGITE SEU EMAIL:"><br><br>
                <label>TELEFONE:</label><br><br>
                <input class="inputs" type="text" name="telefone" placeholder="DIGITE SEU TELEFONE:"><br><br>
                <label>SENHA:</label><br><br>
                <input class="inputs" type="password" name="senha" placeholder="DIGITE SUA SENHA:"><br><br>
                <input id="butao" type="submit" value="CADASTRAR">
            </form>
            
        </div>
    </div>
</body>

</html>