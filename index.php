<?php 

include('connect_bdd.php');

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://bootswatch.com/4/journal/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <title>Memo@Moves</title>
</head>

<body>
  <main>

    <div class="d-flex flex-column align-items-center">
      <h1 class="mb-3 mt-3">Memo@Moves</h1>
      <button type="button" class="btn btn-info mt-3" id="btn_block">Ajouter un mémo</button>
    </div>
    <div class="form_hid" id="form_open">
      <form id="form" class="ml-3 mr-3">
        <div class="form-group">
          <label for="exampleFormControlInput1">Titre du passage:</label>
          <input type="text" class="form-control" id="titre" name="titre" value="">
        </div>

        <div class="form-group">
          <label for="date">Date de création:</label>
          <input type="date" class="form-control" id="date" name="date" value="">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Contenu du passage:</label>
          <textarea class="form-control" id="contenu" rows="3" name="contenu" value=""></textarea>
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
      </form>
    </div>
    <h2 class="d-flex justify-content-center mb-4 mt-5">Vos mémos</h2>
    <div class="d-flex justify-content-center mt-4 mb-3" id="res">
      <?php 

include('select.php');

while($donnees = $req->fetch()){
	
	?>
      <div class="card border-info mr-3" id="cards" style="width: 18rem;">
        <div class="card-body">
          <div id="<?php echo $donnees['id_memo'] ?>">
            <h5 data-target="titre" class="card-title"><?php echo $donnees['titre']?></h5>
            <p data-target="date" class="card-subtitle mb-2 text-muted"><?php echo $donnees['datem']?></p>
            <p data-target="contenu" class="card-text"><?php echo $donnees['contenu']?></p>
            <button data-role="update" data-id="<?php echo $donnees['id_memo'];?>"
              class="btn btn-info" id="edit-data">Edit</button>
              <button data-id="<?php echo $donnees['id_memo'];?>" class="btn btn-danger delete">supprimer</button>
          </div>
        </div>
      </div>
      <?php
	
}

?>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="ml-3 mr-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Titre du passage:</label>
                <input type="text" class="form-control" id="tit" name="titre" value="">
              </div>

              <div class="form-group">
                <label for="date">Date de création:</label>
                <input type="date" class="form-control" id="dat" name="date" value="">
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Contenu du passage:</label>
                <textarea class="form-control" id="cont" rows="3" name="contenu" value=""></textarea>
              </div>
              <input type="hidden" id="formId" name='id_memo' value="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary save" data-dismiss="modal">Enregistrer</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/base.js"></script>
  <script src="js/ajax.js"></script>
</body>

</html>