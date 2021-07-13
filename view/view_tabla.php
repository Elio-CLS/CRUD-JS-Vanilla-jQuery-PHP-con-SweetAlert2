<?php 
// INCLUIR ARCHIVOS
//error_reporting(0);
include('../class/c_mostrar.php');


// EJECUTAMOS CONSULTA
$mostrar = new Mostrar;
$view = $mostrar->mostrarBD();

?>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
<tbody>


<?php
while($row = $view->fetch()){ ?>

        <tr>

            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['texto'] ?></td>

            <td><center>

                <button class="btn btn-outline-primary btn-sm" name="btn_editar" onclick="editando(<?php echo $row['id']; ?>);">Editar</button>


                <button class="btn btn-outline-danger btn-sm" name="btn_borrar" onclick="borrando(<?php echo $row['id']; ?>);">Borrar</button>

            </td></center>
        </tr>


<?php } ?>

</tbody>
</table>