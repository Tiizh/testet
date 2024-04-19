<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vinho</title>
</head>
<body>

<?php
require_once "Vinho.php";

$vinho = new Vinho();

if (isset($_POST['Cadastrar'])){
    echo 'oi';
    $vinho->setNome($_POST['nome']);
    $vinho->setTipo($_POST['tipo']);
    $vinho->setPreco($_POST['preco']);
    $vinho->setSafra($_POST['safra']);
        echo "<h2>Informações do Vinho</h2>";
        echo $vinho->mostrarVinho();
        echo $vinho->verificarPreco();
    }
?>

<h1>Cadastro de Vinho</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome"><br>

    <label for="tipo">Tipo:</label><br>
    <input type="text" id="tipo" name="tipo"><br>

    <label for="preco">Preço:</label><br>
    <input type="text" id="preco" name="preco"><br>

    <label for="safra">Safra:</label><br>
    <input type="text" id="safra" name="safra"><br><br>

    <input type="submit" name="submit" value="Cadastrar">
</form>

</body>
</html>
