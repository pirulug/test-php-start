<?php global $template; ?>

<?php $template->layout('admin/layout/main', ["title" => "Dashboard"]); ?>

<?php $template->startBlock("Styles"); ?>
<!-- <link rel="stylesheet" href="style-home.css"> -->
<?php $template->endBlock(); ?>

<?php $template->startBlock("Scripts"); ?>
<!-- <script src="script-home.js"></script> -->
<?php $template->endBlock(); ?>

<?php $template->startBlock("Content"); ?>
<div class="card">
  <div class="card-body">
    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
      </tr>
      <?php foreach ($users as $user): ?>
        <tr>
          <td><?php echo $user['id']; ?></td>
          <td><?php echo $user['name']; ?></td>
          <td><?php echo $user['email']; ?></td>
          <td>
            <a class="btn btn-light-success" href="<?php echo BASE_URL; ?>user/edit/<?php echo $user['id']; ?>">Editar</a>
            <a class="btn btn-light-danger" href="<?php echo BASE_URL; ?>user/delete/<?php echo $user['id']; ?>"
              onclick="return confirm('¿Seguro que quieres eliminar este usuario?')">Eliminar</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
<?php $template->endBlock(); ?>