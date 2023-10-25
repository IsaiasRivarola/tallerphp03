<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once dirname(__FILE__,3).'/php/config/header.php';
    
?>
    <title>Create Record</title>
</head>
<body>
<?php
    require_once dirname(__FILE__,3).'/php/config/menu.php';
    
?>


    <div class="container-md">
        <h2>index de creacion</h2>
    </div>
    <h2>Creando registro</h2>
    <form action="create.php" method="post" id="formCreate">
        <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="ingrese nombre">
        </div>
        <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" placeholder="ingrese apellido">
        <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="telefono" placeholder="ingrese telefono">
        <div class="mb-3">
        <label for="cedula" class="form-label">cedula</label>
        <input type="number" class="form-control" id="cedula" placeholder="ingrese cedula">
        <div class="mb-3">
        <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</body>
    <?php
        
        require_once dirname(__FILE__,3).'/php/config/footer.php';
    ?>
</html>