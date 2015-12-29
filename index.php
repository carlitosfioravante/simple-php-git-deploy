<!DOCTYPE html>
<html lang="pt-Br">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex">
	<title>Deploy</title>
	<style>
		body { padding: 0 1em; background: #222; color: #fff; }
		h2, .error { color: #c33; }
		.prompt { color: #6be234; }
		.command { color: #729fcf; }
		.output { color: #999; }
	</style>
</head>
<body>
	<form action="deploy.php" method="POST">
		<label>Sat</label>
		<input type="password" name="sat"/>
		<label>Usuário</label>
		<input type="text" name="user"/>
		<label>Senha</label>
		<input type="password" name="pass"/>
		<input type="submit" value="Enviar"/>
	</form>
</body>
</html>