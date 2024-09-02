<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!--
    Nome Completo
    Data de Nascimento
    telefone
    E-mail
    Senha
    -->
    <div class="container">
        <h1>Cadastrar novo(a) Usuario(a)</h1>
        <form action="processa_usuario.php" method="post">
            <div class="col-4">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="col-4">
                <label for="dataNascimento">Data de Nascimdento</label>
                <input type="date" name="dataNascimento" id="dataNascimento" class="form-control">
            </div>
            <div class="col-4">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" class="form-control">
            </div>
            <div class="col-4">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="col-4">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div><br>
            <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</body>
</html>