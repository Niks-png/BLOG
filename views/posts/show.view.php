<?php require "views/components/header.php" ?>

<h1><?= $post["content"]?></h1>
<a href="/edit?id=<?= $post["id"]?>">edit</a>
<form method="POST" action="/delete">
        <label><input type="hidden" name="id"  value="<?= $post['id']  ?>" /></label>  
        <input type="submit" value="delet" />

    </form>
<?php require "views/components/footer.php" ?>

</body>
</html>