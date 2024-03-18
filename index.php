<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Calculadora de Média</h1>
        <div class="container">
            <form method="get" action="">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nota 1</label>
                    <input type="number" class="form-control" name="nota1" id="formGroupExampleInput" placeholder="Digite a Primeira Nota">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nota 2</label>
                    <input type="number" class="form-control" name="nota2" id="formGroupExampleInput2" placeholder="Digite a Segunda Nota">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nota 3</label>
                    <input type="number" class="form-control" name="nota3" id="formGroupExampleInput2" placeholder="Digite a terceira nota">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar Dados</button>
                </div>
            </form>
        </div><!-- ENCERRA DIV DO FORM -->
        <?php
        if (!empty($_GET)) { //VALIDA SE EXISTE ALGO DENTRO DO GET
        ?>
            <div class="container">
                <h2> A nota do elemento é
                    <?php
                    echo $_GET['nota1'] + $_GET['nota2'] + $_GET['nota3'];
                    ?>
                </h2>
            </div>
        <?php } ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>