<?php
require_once 'db_connect.php';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $desc_p = $_POST['desc_p'];
    $price = $_POST['price'];
    $photo = $_POST['photo'];
    $cat_id = $_POST['cat_id'];
    $id=$_GET['id'];
    echo $name;
}



    $pdo->query("UPDATE `products` SET name= ".$name."
                      WHERE  id_prod=".$id);
var_dump($pdo);

?>
<form action="edit.php" method="post">
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
