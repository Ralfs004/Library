<?php require "views/components/head.php"; ?>
<?php require "views/components/navbar.php"; ?>

<div class="book">
<h2><?= "Nosaukums: " .  $book["nosaukums"] ?></h2>
<h3>Autors: <?= $book["autors"] ?><br>
Gads: <?= $book["gads"] ?><br>
Pieejamība: <?= $book["pieejamiba"] ? 'Pieejams' : 'Nav pieejams' ?></h3>
</div>

<form action="/edit" method="post">
    <input type="hidden" name="id" value="<?= $book['id'] ?>">
    <button type="submit" class="edit-pogas">Edit</button>
</form>


<?php require "views/components/footer.php"; ?>
