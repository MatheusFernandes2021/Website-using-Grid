<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Cadastrar.css">
    <title>Entrar</title>
</head>
<body>
    <div class="Container">
    <h1>Entrar: </h1>
    <form action="Functions/Entrar.php" method="POST">

        <div class="Campos">
            <label for="Email">Email: </label>
            <input type="email" id="Email" name="Email" required>
        </div>

        <div class="Campos">
            <label for="Senha">Senha: </label>
            <input type="password" id="Senha" name="Senha" required>
        </div>

        <div class="Botoes">
            <button type="reset" id="Btn-Limpar">Limpar!</button>
            <button type="submit" id="Btn-Tudo">Cadastrar!</button>
        </div>
    </form>
    </div>
</body>
</html>