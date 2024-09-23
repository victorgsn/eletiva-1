<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atividade 4 Desconto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <main class="container">
    <h2 class="text-center">Informe o valor do produto</h2>
    <form action="resp4.php" method="POST">
        <div class="form-group">
            <label for="valor_produto">Valor do Produto (R$):</label>
            <input type="number" class="form-control" id="valor_produto" name="valor_produto" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Desconto</button>
    </form>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>