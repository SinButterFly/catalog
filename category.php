<?php
require_once('db_connect.php');
$name_cat = $_POST['name_cat'];

$pdo->query("INSERT INTO `categories` (name_cat) VALUE ('$name_cat')");

?>

<form action="category.php" method="post">
    <div class="form-group">
        <input type="text" name="name_cat">
        <input type="submit">
    </div>
</form>
<a href="index.php">Главная</a>

