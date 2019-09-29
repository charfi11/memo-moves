<?php 

include('connect_bdd.php');

$titre = isset( $_POST['titre']) ? $_POST['titre'] : NULL;
$date = isset( $_POST['date']) ? $_POST['date'] : NULL;
$contenu = isset( $_POST['contenu']) ? $_POST['contenu'] : NULL;

$req = $bdd->prepare("INSERT INTO content(titre, datem, contenu) VALUES(?,?,?)");

$req->execute(array(

$titre,
$date,
$contenu

));

?>