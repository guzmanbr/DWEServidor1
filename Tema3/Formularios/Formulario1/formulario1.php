<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario1</title>
    </head>
    <body>
        <h1>Formulario</h1>

        <form action="./recibe.php" method="get" enctype="multipart/form-data">
            <p>
                <label for="idNombre">Nombre: </label>
                <input type="text" name="nombre" id="idNombre">
            </p>
            <p>
                <label for="idPass">Contraseña: </label>
                <input type="password" name="pass" id="idPass">
            </p>
            </br>
            <p>
                <b>Genero</b>
            </br>
                <label for="idMasculino">Masculino</label>
                <input type="radio" name="genero" id="idMasculino" value="masculino">
                </br>
                <label for="idFemenino">Femenino</label>
                <input type="radio" name="genero" id="idFemenino" value="femenino">
            </p>
            </br>
            <p>
                <b>Aignaturas</b>
                <br>
                <label for="idDWES">Desarrollo Web Servidor</label>
                <input type="checkbox" name="asignaturas" id="idDWES" value="DWES">
                <label for="idDWEC">Desarrollo Web Cliente</label>
                <input type="checkbox" name="asignaturas" id="idDWEC" value="DWEC">
            </p>
            </br>
            <p>
                <b>Curso</b>
                <br>
                <select name="curso" id="idCurso">
                    <option value="0">Selecciona una opcion</option>
                    <option value="1">Primero</option>
                    <option value="2">Segundo</option>
                </select>
            </p>
            </br>
            <p>
                <b>Fichero</b>
                <input type="file" name="fichero" id="idFichero">
            </p>
            <br>
            <p>
                <b></b>
            </p>



            <input type="submit" value="Enviar">
        </form>
        
    </body>
</html>