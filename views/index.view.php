<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>




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


</body>
</html>