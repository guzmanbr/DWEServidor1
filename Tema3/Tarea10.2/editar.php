<?php
    require('validar.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webrootTema3/css/estilos.css">
        <title>Editar</title>
    </head>

    <body>
        <?php
            $arrayNotas = array();
            if (($fp = fopen('notas.csv', 'r')) !== false) {
                while (($notas = fgetcsv($fp, 0, ";")) !== false) {
                    array_push($arrayNotas, $notas);
                }
                fclose($fp);
            }
        ?>
        <main>
            <?php
                if (valido()){
                    $arrayNotas[$_REQUEST['indice']][1]=$_REQUEST['nota1'];
                    $arrayNotas[$_REQUEST['indice']][2]=$_REQUEST['nota2'];
                    $arrayNotas[$_REQUEST['indice']][3]=$_REQUEST['nota3'];
                    if (($fp = fopen('notas.csv', 'w')) !== false) {
                        foreach ($arrayNotas as $celda) {
                            fputcsv($fp, $celda, ";");
                        }
                    }
                    fclose($fp);
                    header('Location: ./tablaFichero.php');
                    exit();
                } 
            ?>
            <form action="./editar.php" method="post">    
                <input type="hidden" name="indice" value="<?php echo $_REQUEST['indice'];?>">
                <p>
                    <label for="idNombre">Nombre:</label><?php echo "<p>" . $arrayNotas[$_REQUEST['indice']][0] . "</p>"; ?>
                </p>
                <label for="idNota1">Nota 1:</label>
                <input type="text" name="nota1" id="idNota1" value="<?php echo $arrayNotas[$_REQUEST['indice']][1] ?>">
                <?
                    if (enviado()){
                        if (vacio("nota1")) {
                            ?><span>Nota no introducida, revise</span><?
                        }
                    } 
                ?>
                <label for="idNota2">Nota 2:</label>
                <input type="text" name="nota2" id="idNota2" value="<?php echo $arrayNotas[$_REQUEST['indice']][2];?>">
                <?
                    if (enviado()){
                        if (vacio("nota2")) {
                            ?><span>Nota no introducida, revise</span><?
                        }
                    } 
                ?>
                <label for="idNota3">Nota 3:</label>
                <input type="text" name="nota3" id="idNota3" value="<?php echo $arrayNotas[$_REQUEST['indice']][3];?>">
                <?
                    if (enviado()){
                        if (vacio("nota3")) {
                            ?><span>Nota no introducida, revise</span><?
                        }
                    } 
                ?>
                
                <input type="submit" value="Guardar" name="guardar">
            </form>
                    
        </main>
    </body>

</html>