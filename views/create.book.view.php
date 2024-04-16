<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<div id="create-div">
    <form id="create-form" action="" method="post">
        <label>
            Nosaukums:
            <input class="create-input" type="text" name="nosaukums" required />
        </label>
        <label>
            Autors:
            <input class="create-input" type="text" name="autors" required />
        </label>
        <label>
            Gads:
            <input class="create-input" type="number" name="gads" required />
        </label>
        <label>
            Pieejamiba:
            <select class="create-input" name="pieejamiba">
                <option value="1">Pieejams</option>
                <option value="0">Nav pieejams</option>
            </select>
        </label>
        <button id="create-poga"type="submit">Saglabat</button>
    </form>
</div>

<?php require "components/footer.php" ?>


