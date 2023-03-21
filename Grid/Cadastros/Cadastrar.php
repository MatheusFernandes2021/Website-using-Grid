<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Cadastrar.css">
    <title>Cadastro</title>
</head>
<body>
<div class="Container">
    <h1>Cadastro: </h1>
    <form action="Functions/Cadastro.php" method="POST">

        <div class="Campos">
            <label for="Nome">Nome: </label>
            <input type="text" id="Nome" name="Nome" required>
        </div>

        <div class="Campos">
            <label for="DataNasc">Data de Nascimento: </label>
            <input type="date" id="DataNasc" max="<?= date("Y-m-d",time()) ?>" name="DataNasc">
        </div>

        <div class="Campos">
            <label for="Endereco">Endereço: </label>
            <input type="text" id="Endereco" name="Endereco" required>
        </div>

        <div class="Campos">
            <label for="Telefone">Telefone: </label>
            <input type="text" id="Telefone" name="Telefone" required>
        </div>

        <div class="Campos">
            <label for="Email">Email: </label>
            <input type="email" id="Email" name="Email" required>
        </div>

        <div class="Campos">
            <label for="Senha">Senha: </label>
            <input type="password" id="Senha" name="Senha" required>
        </div>

        <div class="Campos">
            <label for="Senha2">Redigite sua senha: </label>
            <input type="password" id="Senha2" name="Senha2" required>
        </div>

        <div class="Botoes">
            <button type="reset" id="Btn-Limpar">Limpar!</button>
            <button type="submit" id="Btn-Tudo">Cadastrar!</button>
        </div>

        <h1 id="H1"></h1>
        </form>
    </div>
</body>
</html>