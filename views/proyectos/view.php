<?php require "views/shared/header.php"; ?>

<div class="container">
    <h1 class="text-center"><?= $data['titulo']; ?></h1>
<p>
    <span class="fw-bold">ID</span>
    <?= $data['proyecto']['id'];?>
</p>
<p>
    <span class="fw-bold">Nombre</span>
    <?= $data['proyecto']['nombre'];?>
</p>
<p>
    <span class="fw-bold">Duración</span>
    <?= $data['proyecto']['duracion'];?>
</p>
</div>
<?php require "views/shared/footer.php";?>
