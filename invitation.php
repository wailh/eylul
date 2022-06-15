<?php
include 'base.php';

error_reporting(0);

session_start();

?>

<!DOCTYPE html>
<head>
    <title>Les invitations</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="font6/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="profil">
            <a href="pub.php"><img class="image" src="user.png"></a>
            <p class="nom">Utilisateur</p>
        </div>

        <div class="menu">
            <ul class="r">
                    <li><a href="home.php">Accueil</a></li>
                    <li class="active"><a href="#">Invitation</a></li>
                    <li><a href="notification.php">Notification</a></li>
            </ul>
        </div>

        <div class="nn">
            <input class="ch" type="search" name="" placeholder="Rechercher">
            <a href="#"><button class="btn"><i class="fa-solid fa-magnifying-glass" style="font-size:26px"></i></button></a>
        </div>
    </nav>  
    <div class="f">
        <div class="gg">
            <ul class="rr">
                <li><a href="publier.php"><i class="fas fa-plus" style="font-size:30px"></i> Publier</a></li>
                <li><a href="ami.php"> <i class="fa-solid fa-user-group" style="font-size:29px"> </i> Amis</a></li>
                <li><a href="#"><i class="fa fa-cog"></i>  Paramètres </a></li>
                <li><a href="connecter.php"><i class="fa-solid fa-right-from-bracket" style="font-size:30px"></i> Déconnecter</a></li>
            </ul>
        </div>
        <div class="ff">
           <p><h2>La liste des invitations</h2></p> 
        </div>
        
    </div> 
</body>