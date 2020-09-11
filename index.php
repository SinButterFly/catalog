
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="category.php">Категория</a>
<a href="product.php">Продукты</a>
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
        echo '<hr>';
        echo "<form action='delete.php' method='post'><input type='submit'></form>";

    echo "</div>";
}

?>


</body>
</html>

