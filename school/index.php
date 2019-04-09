

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/estiloLogin.css">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<head>
<body>
    <div class="container">
        <div id="formulario">
            <h1>LOGIN</h1>
            <form method="POST" action="processa.php">
                <label>NOME:</label><br><br>
                <input class="inputs" type="text" name="nome" placeholder="DIGITE SEU NOME:"><br><br>
                <label>SENHA:</label><br><br>
                <input class="inputs" type="password" name="email" placeholder="DIGITE SUA SENHA:"><br><br>
                <input id="butao" type="submit" value="ENTRAR">
            </form>
            <a id="cadastro" href="cadastro.php">cadastrar conta</a>
        </div>
    </div>
</body>

</html>