<?php
include 'aboutrepository.php';
$id = $_GET['id'];//e merr id prej url

    $about = new aboutrepository();
    $about->deleteAbout($id);

header("location:Dashboard.php");
?>
