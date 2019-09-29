<?php

include('connect_bdd.php');

$req = $bdd->prepare('SELECT * FROM content');

$req->execute();

?>