<?php 
// HEADER
//error_reporting(0);
include_once('includes/header.php');


// NAV y BUSCADOR
include_once('includes/nav.php');

?>




<!-- Formularios -->
<div class="container p-4">
    <div class="row">

        <!-- Formulario registro-->
        <div class="col-md-4">
            <div class="card card-body">
                <form action="" method="POST" id="formulario">

                    <!-- Titulo del task -->
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Titulo de la Tarea" autofocus>
                    </div>
                    <br>

                    <!-- Texto del task -->
                    <div class="form-group">
                        <textarea name="texto" rows="4" class="form-control" placeholder="Descripcion de la Tarea"></textarea>
                    </div>
                    <br>

                    <!-- Boton Guardar Task -->
                    <input type="submit" class="btn btn-success btn-block" name="btn_save_task" value="Guardar Tarea">
                </form>
            </div>
            <br>



            <!-- SESSION MENSAJES -->
            <?php session_start(); ?>
            <?php if(isset($_SESSION['mensaje'])){ ?>
                <div class="alert <?php echo $_SESSION['msj_color'];?> alert-dismissible fade show" role="alert">

                    <?php echo $_SESSION['mensaje']; ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    
                </div>
            <?php session_unset(); } ?>
        </div>



        <!-- Formulario muestra datos-->
        <div class="col-md-8" id="datos_buscador" ></div>

        
         
    </div>

</div>



<?php 
// FOOTER
include_once('includes/footer.php');

?>

