<?php
require_once 'db_connect.php';
$name = $_POST['name'];
$desc_p = $_POST['desc_p'];
$price = $_POST['price'];
$photo = $_POST['photo'];
$cat_id = $_POST['cat_id'];

$pdo->query("INSERT INTO `products`(`name`,desc_p,price,photo,cat_id)VALUE ('$name','$desc_p','$price', '$photo', '$cat_id')");
$stmt1 = $pdo->query('SELECT LAST_INSERT_ID() AS id FROM products');
$id = $stmt1->fetch();

?>
<form action="product.php" method="post">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="desc_p" placeholder="Описание">
    <input type="number" name="price" placeholder="Цена">
    <input type="text" name="photo">
    <select name="cat_id"  title="Категории">
        <?php
        require_once 'db_connect.php';
        $stmt = $pdo->query("SELECT * FROM `categories`");
        while ($row = $stmt->fetch()){
            echo '<option value="' . $row['id_cat'] . '">' . $row['name_cat'] . '</option>';
        }
        ?>
    </select>
    <input type="submit">
</form>
<a href="index.php">Главная</a>