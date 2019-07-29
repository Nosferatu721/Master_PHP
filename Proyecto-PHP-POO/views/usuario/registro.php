<h1>Registrarse</h1>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
	<div class="alert_Verde">
		<strong>Registrado Exitosamente</strong>
	</div>
<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>
	<div class="alert_Rojo">
		<strong>No se ha regristrado Correctamente</strong>
	</div>
<?php endif; ?>
<?php
Utils::deleteSession('register');
?>

<form action="<?= base_url; ?>usuario/save" method="POST">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" />

	<label for="apellidos">Apellidos</label>
	<input type="text" name="apellidos" />

	<label for="email">Email</label>
	<input type="email" name="email" />

	<label for="password">Contraseña</label>
	<input type="password" name="password" />

	<input type="submit" value="Registrarse" />
</form>