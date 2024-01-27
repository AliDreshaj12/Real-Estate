<?php
include 'shtepitrepository.php';


    $id = $_GET['id'];
    $shtepi = new shtepitrepository();
    $shtepit = $shtepi->getShtepitById($id);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="edit-shtepit.css">
</head>
<body>
<?php
    include('header.php');
    echo $header1;
?>

<div class="edit-title">
    <p>Edit Vetura</p>
</div>

<div class="form-div">
    <form class="edit" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST">
        <div>
            <label for="">Pershkrimi:</label>  
            <input class="input-1" type="text" name="pershkrimi" value="<?php echo $shtepit['Pershkrimi']?>">

            <label for="">Qmimi:</label>
            <input class="input-2" type="text" name="qmimi" value="<?php echo $shtepit['Qmimi']?>">

            <label for="">Emri:</label>
            <input class="input" type="text" name="emri" value="<?php echo $shtepit['Emri']?>">
        </div><br>

        <input class="edit-s" type="submit" name="editB" value="save">
    </form>
</div>
</body>
</html>

<?php 
    if(isset($_POST['editB'])){
        $id = $id;
        $pershkrimi = $_POST['pershkrimi'];
        $qmimi = $_POST['qmimi'];
        $emri = $_POST['emri'];
        
        $shtepi->editShtepia($id, $pershkrimi, $qmimi, $emri);
        
        header("location:Dashboard.php");
        exit();
    }
?>
