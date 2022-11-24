<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../webrootTema3/css/estilos.css">
    <title>tabla notas</title>
</head>

<body>
    <header>
        <h1>Practica 10.2</h1>
        <h2>Lista notas</h2>
    </header>
    <main>
        <table align="center">
            <tr>
                <th>Alumno</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Editar</th>
            </tr>
            <?php
            //abrimos el archivo notas para recoger los datos
            if (($open = fopen('notas.csv', 'r')) !== FALSE) {
                $contador = 0;
                //fgetcsv — Obtiene una línea de un puntero a un fichero y la analiza en busca de campos CSV
                while (($datos = fgetcsv($open, 0, ";")) !== FALSE) {
                    echo '<tr>';
                    //Usamos foreach para recorrer las filas y poner los datos en cada celda
                    foreach ($datos as $key => $celda) {
                        echo '<td>';
                        echo $celda;
                        echo '</td>';
                    }
                    echo "<td><a href='editar.php?indice=".$contador++."'> Editar </a></td>";
                    echo '</tr>';
                }
                //Siempre se cierra
                fclose($open);
            }
            ?>
        </table>
    </main>
</body>

</html>