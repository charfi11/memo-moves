<?php 

include('connect_bdd.php');

if(isset($_GET['delete'])){
	
	$id = $_GET['delete'];

$req = $bdd->prepare('DELETE FROM content WHERE id_memo =' .$id);

$req->execute();

header('Location: index.php');

}

?>