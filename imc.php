<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora de IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Calculadora IMC</h1>
        <form method="get" action="">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Peso</label>
                <input type="text" class="form-control" name="peso" id="formGroupExampleInput" placeholder="Digite seu Peso">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Altura</label>
                <input type="text" class="form-control"  name="altura" id="formGroupExampleInput2" placeholder="Digite sua Altura">
            </div>
            <div class="mb-3">
                <button type="submit">Salvar</button>
            </div>
        </form>
        <?php
            if(!empty($_GET)){
                $imc = $_GET['peso']/($_GET['altura']*$_GET['altura']);
                echo "<h2>SEU IMC É DE ".$imc." </h2>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>