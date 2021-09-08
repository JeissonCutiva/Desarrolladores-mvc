<?php require "views/shared/header.php";?>
    <div class="container">
        <h1 class="text-center my-3" <?= $data['titulo']; ?>></h1>
        <a href="index.php?controlador=proyecto&accion=insert" class="btn btn-primary mb-3">Crear proyecto</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">duracion</th>
      <th>Acciones<th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($data['proyectos'] as $proyecto){ ?>
        <tr>
            <td><?= $proyecto['id'] ?></td>
            <td><?= $proyecto['nombre'] ?></td>
            <td><?= $proyecto['duracion'] ?></td>
            <td>
              <a href="index.php?controlador=proyecto&accion=view&id=<?= $proyecto['id'];?>" class="btn btn-info">ver</a>
              <a href="" class="btn btn-warning">Editar</a>
              <a href="" class="btn btn-danger">Borrar</a>            
            </td>
        </tr>
      <?php 
      } ?>
  </tbody>
</table>
    </div>
<?php require "views/shared/footer.php";?>   

