<?php 

include('connect_bdd.php');

if(isset($_POST['formId'])){
	
$id = $_POST['id_memo'];
$titre = $_POST['titre'];
$date = $_POST['date'];
$contenu = $_POST['contenu'];

$req = $bdd->prepare("UPDATE content SET titre='".$titre."', contenu='".$contenu."', datem='".$date."' WHERE id_memo =" .$id);

$req->execute();

}

?>