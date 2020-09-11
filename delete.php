<?php
require_once 'db_connect.php';
if(isset($_GET['id']))
{

    $query ="DELETE FROM products WHERE id = '$id'";


}