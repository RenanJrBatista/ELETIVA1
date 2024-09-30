<?php
    declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta Exer 3 - lista 4</h1>
        <?php 
            function Contem(string $palavra1, string $palavra2) :int
            {
                return  strpos($palavra1, $palavra1);
            }

            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                try
                {
                    $palavra1 = (string) $_POST['palavra1'];
                    $palavra2 = (string) $_POST['palavra2'];
                    $pos = Contem($palavra1, $palavra2);
                    if ($pos === false)
                        echo "<P>Palavras não existe na outra</P>";
                    else
                        echo "<p> Palavra não existe</p>";

                }catch(Exception $e)
                {
                    echo "ERRO !!".$e->getMessage();
                }
            }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>