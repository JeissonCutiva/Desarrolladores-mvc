<?php require "views/shared/header.php";?>
<div class="container">
    <h1><?= $data['titulo']; ?></h1>
    <form action="index.php?controlador=proyecto&accion=store" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Duracion:</label>
            <input type="text" id="duracion" class="form-control" name="duracion">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
<?php require "views/shared/footer.php";?>   
