<?php
include 'shtepitrepository.php';
$id = $_GET['id'];//e merr id prej url

    $shtepi = new shtepitrepository();
    $shtepi->deleteShtepia($id);

header("location:Dashboard.php");
?>
