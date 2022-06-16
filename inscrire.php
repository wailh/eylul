<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Untitled.css">

	<title>S'inscrire</title>
</head>
<body>
	<div class="container">
		<form action="inscription.php" method="post" class="c" enctype="multipart/form-data">
            <p class="l-text" style="font-size: 40px; font-weight:800; font-family: 'Arial', cursive;"> S'inscrire </p>
		
            
            <div class="i">
				<input type="text" placeholder="Nom" name="nom" value="" required>
			</div>
			<div class="i">
				<input type="text" placeholder="Prenom" name="prenom" required>
			</div>
			<div class="i">
				<input type="text" placeholder="Numero carte etudiant" name="matricule" required>
			</div>
			<div class="i">
				<input type="email" placeholder="E-mail" name="email" required>
			</div>
			<div class="i">
				<input type="text" placeholder="Numero Telephone" name="tel" required>
			</div>
			<div class="i">
				<input type="password" placeholder="Mot de passe" name="motdepass" required>
            </div>
            <div class="i">
				<input type="password" placeholder="Confirmez le Mot de passe" name="cmotdepass" required>
			</div>

			<div class="i">
				<button name="submit" class="btn">S'inscrire</button>
			</div>
			<p class="inscrire">Avoir un compte? <a href="connecter.php">Connectez-vous ici</a>.</p>
		</form>
	</div>
</body>
</html>