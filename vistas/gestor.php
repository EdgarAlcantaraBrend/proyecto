<?php 
    session_start();
    include "header.php";
    if (isset($_SESSION['usuario'])) {
        # code...
    
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Gestor de archivos</h1>
        <div id="tablaGestorArchivos"></div>
    </div>
</div>

<?php include "footer.php";?>
<script>

    $(document).ready(function(){
        $('#tablaGestorArchivos').load("gestor/tablaGestor.php");
    });
</script>

<?php
    }else{

        header("location:../index.php");
    } 
?>