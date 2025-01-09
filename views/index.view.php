<?php require"components/header.php" ?>
<?php require"components/navbar.php" ?>


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
        <li><?= $pos["content"] ?> </li>
<?php } ?>
    
</ul>
<?php require"components/footer.php"?>

</body>
</html>