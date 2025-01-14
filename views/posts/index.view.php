<?php require"views/components/header.php" ?>
<?php require"views/components/navbar.php" ?>


<h1>Blogs</h1>

<form >
<input name='serch_query' value='<?= $_GET["serch_query"] ??""?>'/>
<button>poga</button>
</form>

<?php if(count($posts)==0){ ?>
<p>nav atrasts</p>
<?php } ?>

<ul>
<?php foreach($posts as $pos){ ?>
        <li><a href="show?id= <?= $pos["id"] ?>"> <?= $pos["content"] ?></a> </li>
<?php } ?>
    
</ul>
<?php require"views/components/footer.php"?>

</body>
</html>