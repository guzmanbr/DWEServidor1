

<table border="1px solid black">
    <thead>
        <th>Cod.Producto</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Ver</th>
        <th>Editar</th>
        <th>Borrar</th>
    </thead>

    <tbody>
        <?
            foreach ($lista as  $value) {
                echo "<tr>";

                echo "<td>".$value->$codProd."</td>";
                echo "<td>".$value->$nombre."</td>";
                echo "<td>".$value->$descripcion."</td>";
                echo "<td>".$value->$precio."</td>";
                echo "<td>".$value->$stock."</td>";

                echo "<form action='./index.php>";
                echo " <td> <input type='submit' name = 'codProd' value = ".$value->codProd."></td>";
                echo "<td><input type='submit' name = 'ver' value = 'ver'></td>";
                echo "<td><input type='submit' name = 'editar' value = 'editar'></td>";
                echo "<td><input type='submit' name = 'borrar' value = 'borrar'></td>";
                echo "</form>"; 
                echo "</tr>";
            }
        ?>

    </tbody>
</table>

<?
    echo "<form action='./index.php>";
    echo " <input type='submit' name = 'nuevoP' value = 'Nuevo producto'>";
    echo "</form>"; 
?>
