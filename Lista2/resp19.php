<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarefa 2 - atv1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
          $num1 = $_POST['num1'];

          $horas = $num1 * 24;
          $minutos = $horas * 60;
          $segundos = $minutos * 60;
      
          echo "Valor em dias: $num1 dias";
          echo "Equivale a: $horas horas";
          echo "Equivale a: $minutos minutos";
          echo "Equivale a: $segundos segundos";
        }
        ?>
    </main>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>