<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1>Edit book</h1>

<form method="POST">
  <input name="id" type="hidden" value="<?= $book['id'] ?>" />
  
  <label>Nosaukums:
    <input name="nosaukums<?= $_POST['nosaukums'] ?? $book['nosaukums'] ?>"/>
    
  </label>

  <label>Autors:
    <input name="autors<?= $_POST['autors'] ?? $book['autors'] ?>"/>
    
  </label>

  <label>Gads:
    <input name="gads" type="number" value="<?= $_POST['calorigadses'] ?? $book['gads'] ?>"/>
   
  </label>

  <input class="edit-pogas" type="submit" value="Update" />
</form>



<?php require "views/components/footer.php"; ?>