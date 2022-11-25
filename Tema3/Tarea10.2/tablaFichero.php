<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webrootTema3/css/estilos.css">
        <title>tabla notas</title>
    </head>

    <body>
        <header>
            <h2>Lista notas</h2>
        </header>
        <main>
            <table align="center" border="1px solid black">
                <tr>
                    <th>Alumno</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Editar</th>
                </tr>
                <?php
                    if (($fp = fopen('notas.csv', 'r')) !== false) {
                        $conta = 0;
                        while (($datos = fgetcsv($fp, 0, ";")) !== false) {
                            foreach ($datos as $key => $value) {
                                echo '<tr> <td>'.$value.'</td>';
                            }
                            echo "<td><a href='editar.php?indice=".$conta++."'>Editar</a></td> </tr>";
                        }
                        fclose($fp);
                    }
                ?>
            </table>
        </main>
    </body>

</html>