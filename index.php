
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
$stmt = $pdo->query("SELECT * FROM `products` INNER JOIN `categories` ON categories.id_cat = products.cat_id");
$product = $stmt->fetch();
echo "<div>";

    echo $product['name'];
    echo $product['desc_p'];
    echo $product['price'];
    echo "<img src=".$product['photo'].">";

echo "</div>";

?>


</body>
</html>

