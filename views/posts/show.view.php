<?php require"views/components/header.php" ?>
<?php require"views/components/navbar.php" ?>

<h1> <?= $post["content"] ?></h1>
<?php htmlspecialchars($post["content"]) ?>
<?php require"views/components/footer.php"?>

</html>