<?php
require('./database.php');

$sort = "DESC";
$column = "id";

if (isset($_GET['column']) && isset($_GET['sort'])) {
    $sort = $_GET['sort'];
    $column = $_GET['column'];
}

$queryAccount = "SELECT * FROM Account ORDER BY $column $sort";
$sqlAccount = mysqli_query($connection, $queryAccount);
?>
