<?php global $template; ?>

<?php $template->layout('home/layout/main', ["title" => "Dashboard"]); ?>

<?php $template->startBlock("Content"); ?>
<h1>Login</h1>
<form method="post">
  <input class="form-control" type="text" name="user" value="admin"><br>
  <input class="form-control" type="text" name="password" value="admin123"><br>
  <button>Ingresar</button>
</form>
<?php $template->endBlock(); ?>