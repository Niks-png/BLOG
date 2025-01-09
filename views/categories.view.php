<?php require"components/header.php" ?>
<?php require"components/navbar.php" ?>


<form >
<input class=' mt-5 ml-5 rounded border-2 border-black' name='serch_query' />
<button class='rounded border-2 border-black'>poga</button>
</form>

<?php if(count ($posts)==0) { ?>
<p>nav atrasts</p>
<?php } ?>


<ul>
<?php foreach($posts as $pos){ ?>
<li><?=$pos ["category_name"] ?> </li>
<?php require"components/footer.php"?>
<?php } ?>
</ul>
</body>
</html>