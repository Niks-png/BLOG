<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<form >
<input class=' mt-5 ml-5 rounded border-2 border-black' name='serch_query' />";
<button class='rounded border-2 border-black';>poga</button>
</form>

<?php if(count ($posts)==0) { ?>
<p>nav atrasts</p>
<?php } ?>


<ul>
<?php foreach($posts as $pos){ ?>
<li><?=$pos ["category_name"] ?> "</li>

<?php } ?>
</ul>
</body>
</html>