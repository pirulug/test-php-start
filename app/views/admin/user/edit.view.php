<?php global $template; ?>

<?php $template->layout('admin/layout/main', ["title"=>"Usuarios"]); ?>

<?php $template->startBlock("Styles"); ?>
<!-- <link rel="stylesheet" href="style-home.css"> -->
<?php $template->endBlock(); ?>

<?php $template->startBlock("Scripts"); ?>
<!-- <script src="script-home.js"></script> -->
<?php $template->endBlock(); ?>

<?php $template->startBlock("Content"); ?>
<div class="card">
  <div class="card-body">
    <!-- <h1>Editar Usuario</h1> -->
    <form method="POST" action="">
      <div class="mb-3">
        <label class="form-label">Nombre:</label>
        <input class="form-control" type="text" name="name" value="<?php echo $user['name']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email:</label>
        <input class="form-control" type="email" name="email" value="<?php echo $user['email']; ?>" required>
      </div>
      <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
    <a href="<?php echo BASE_URL; ?>users">Volver a la lista</a>
  </div>
</div>
<?php $template->endBlock(); ?>