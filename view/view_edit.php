<?php 
// INCLUIR ARCHIVOS
//error_reporting(0);
include('../class/c_editar.php');



// VERIFICAMOS ID
if(isset($_POST['editar_task'])){

    $id = $_POST['editar_task'];



    // EJECUTAMOS CONSULTA
    $mostrar = new Editar;
    $db_mostrar = $mostrar->consultaBD($id);
    $row = $db_mostrar->fetch();



    $title_db = trim($row['title']);
    $texto_db = trim($row['texto']);
    $_POST['id'] = $id     ;   
    
}
?>



    <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
    <!-- Titulo del task -->
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="<?php echo $title_db ?>" autofocus value="<?php echo $title_db ?>" >
    </div>
    <br>

    <!-- Texto del task -->
    <div class="form-group">
        <textarea name="texto" rows="4" class="form-control" placeholder="<?php echo $texto_db ?>" ></textarea>
    </div>
    <br>

    <!-- Boton Guardar Task -->
    <input type="submit" class="btn btn-success btn-block" name="btn_save_task" value="Guardar Tarea">
