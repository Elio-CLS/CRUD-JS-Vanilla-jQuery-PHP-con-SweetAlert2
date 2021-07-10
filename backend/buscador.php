<?php 
include('conexion.php');


$conect = new Conexion;

$sql = "SELECT * FROM tareas WHERE title LIKE LOWER('%".$_POST['buscar']."%') OR texto LIKE LOWER('%".$_POST['buscar']."%')";

$stml = $conect->conexionBD()->prepare($sql);
$stml->execute();

$numero = $stml->rowCount();

?>




<!-- Muestra el numero de resultados encontrados -->
<h5 class="card-title">Resultados encontrados (<?php echo $numero; ?>):</h5>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
<tbody>



<?php while($resultado = $stml->fetch()){ ?>

    <tr>
            <td><?php echo $resultado['title'] ?></td>
            <td><?php echo $resultado['texto'] ?></td>
            
            <td><center>

                <button class="btn btn-secondary" name="btn_editar" onclick="sendEditar(<?php echo $resultado['id']; ?>);">Editar</button>


                <button class="btn btn-danger" name="btn_borrar" onclick="sendBorrar(<?php echo $resultado['id']; ?>);">Borrar</button>

            </td></center>
        </tr>

<?php } ?>

</tbody>
</table>