
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="">
<header>
    <nav>
        <a href="category.php">Категория</a>
        <a href="product.php">Продукты</a>
    </nav>
</header>
<div>

<?php

require_once 'db_connect.php';
$stmt = $pdo->query("SELECT * FROM `products` JOIN `categories` ON categories.id_cat = products.cat_id");
while ($row = $stmt->fetch()) {
    echo "<div>";

        echo $row['name'];
        echo '<br>';
        echo $row['desc_p'];
        echo '<br>';
        echo $row['price'];
        echo '<br>';
        echo "<img src=".$row['photo']." height=200px;weight=200px>";
        echo '<br>';
        echo $row['name_cat'];
        echo '<br>';
        echo '<a href="delete.php?id='.$row['id_prod'].'">Удалить</a>';
        echo '<a href="edit.php?id='.$row['id_prod'].'">Редактировать</a>';
        echo '<hr>';

    echo "</div>";
}

?>


</body>
</html>

