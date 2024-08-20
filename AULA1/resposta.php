<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

    //ESTE É UM COMENTARIO 
    #ESTILO PYTHON
    /*
        BLOCO DE COMENTARIO 
        OK ?
    */
        $valor = $_POST['valor'];

        $valor = (int) $_POST['Valor'];
        $valor = (float) $_POST['valor'];
        $valor = (string) $_POST['valor'];
        //$valor = (bool) $_POST['valor'];
        //

        echo 'valor informado: '.$valor;  // .(ponto) é operador de contenação
    
    ?>    
</body>
</html>