<?php

session_start();
header('location:connecter.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'etudiants');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$motdepass = $_POST['motdepass'];
$matricule = $_POST['matricule'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$s = "select * from etudiant where nom = '$nom'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num === 1) {
    echo "Username Already Taken";
} else {
    // $reg = "insert into etudiant(nom, motdepass) values ('$nom', '$motdepass')";
    $reg = "insert into etudiant(nom, prenom, motdepass, matricule, email, tel) values ('$nom', '$prenom', '$motdepass','$matricule','$email','$tel')";
    mysqli_query($con, $reg);
    echo "registration Successful";
}

?>
