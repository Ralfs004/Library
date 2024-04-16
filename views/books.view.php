<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>



<?php foreach($books as $book) { ?>
  <div class="book">
  <a href="/show?id=<?= $book['id'] ?>"><h2><?= $book["nosaukums"] ?></h2></a>
    <p>Pieejamība: <?= $book["pieejamiba"] ? 'Pieejams' : 'Nav pieejams' ?></p><br>
    <form class="delete-form" method="POST" action="/delete">
      <button id="delete-poga" name="id" value="<?= $book["id"] ?>">Delete</button>
    </form>
  </div>
<?php } ?>


<?php require "components/footer.php" ?>

