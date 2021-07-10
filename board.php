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


                <!-- Campos del Formulario de Registro-->
                <div  id="form_edit"></div>

                
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

