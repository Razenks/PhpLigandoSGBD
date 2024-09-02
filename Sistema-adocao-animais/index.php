<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php if (!empty($_GET['msgErro'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $_GET['msgErro']; ?>
            </div>
        <?php } ?>

        <?php if (!empty($_GET['msgSucesso'])) { ?>
            <div class="alert alert-sucess" role="alert">
                <?php echo $_GET['msgSucesso']; ?>
            </div>
        <?php } ?>
        
    </div>
    <div class="container">
        <h1>Olá, Seja bem-vindo(a)</h1>
        <form class="" action="" method="post">
            <div class="col-4">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
                <div class="col-4">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>
            </div>
            <br>
            <button type="submit" name="enviarDados" class="btn btn-primary">Entrar</button>
            <a href="cad_usuario.php" class="btn btn-warning">Cadastrar-se</a>
        </form>
    </div>
</body>
</html>