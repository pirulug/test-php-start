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
    <!-- <h1>Agregar Usuario</h1> -->
    <form method="POST" action="">
      <label>Nombre:</label>
      <input type="text" name="name" required><br>
      <label>Email:</label>
      <input type="email" name="email" required><br>
      <label>Contraseña:</label>
      <input type="password" name="password" required><br>
      <button type="submit">Guardar</button>
    </form>
    <a href="<?php echo BASE_URL; ?>users">Volver a la lista</a>
  </div>
</div>
<?php $template->endBlock(); ?>