<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="Untitled.css">

	<title>Connexion</title>
</head>
<body>
	<div class="container">
		<form action="validation.php" method="post" class="c">
			<p class="l-text" style="font-size: 40px; font-weight:800; font-family: 'Arial', cursive;"> Connexion </p>
			<div class="i">
				<input type="text" placeholder="Numero carte etudiant" name="matricule" required>
			</div>
			<div class="i">
				<input type="password" placeholder="Mot de passe" name="motdepass" required>
			</div>
			<div class="i">
				<button name="submit" class="btn">Connecter</button>
			</div>
			<p class="inscrire">Vous n'avez pas de compte? <a href="inscrire.php">inscrivez-vous ici</a>.</p>
		</form>
	</div>
</body>
</html>