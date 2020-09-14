<?php
require_once 'db_connect.php';
$id=$_GET['id'];


$pdo->query("DELETE FROM products WHERE id_prod =".$id);

?>
<a href="index.php">Главная</a>
