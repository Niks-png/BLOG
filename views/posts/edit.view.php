<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>



<h1>Izveidot bloga ierakstu</h1>
    <form method="POST">
        <label><input type="hidden" name="id"  value="<?= $_POST['id'] ?? "" ?>" /></label>  
        <label><input  name="content"  value="<?= $_POST['content'] ?? "" ?>" /></label>  
        <button></button>
    </form>

            <?php if(isset($errors["content"])) { ?>
              <p><?= $errors["content"] ?></p>
            <?php } ?>
           <?php require    views/posts/edit.view.php ?>

<?php require "views/components/footer.php" ?>

</body>
</html>