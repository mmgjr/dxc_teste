<div class="container">
	<h1>Seus dados</h1>
	<form method="POST">
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome; ?>">
		</div>
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
		</div>
		<div class="form-group">
			<label for="xp">Xp:</label>
			<input type="number" name="xp" id="xp" class="form-control" value="<?php echo $xp; ?>" >
		</div>
		<input type="submit" value="Editar" class="btn btn-success">		
	</form>
</div>