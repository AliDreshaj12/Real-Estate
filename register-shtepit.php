<?php
    include_once 'shtepia.php';
    include_once 'shtepitrepository.php';

    if (isset($_POST['submitbtn'])) {
        // Validimi i të dhënave të dërguara nga forma
        if (empty($_POST['pershkrimi']) || empty($_POST['qmimi']) || empty($_POST['emri'])) {
            echo "Ju lutem plotësoni të gjitha fushat!";
            exit();
        }

        // Merrni të dhënat nga forma
        $pershkrimi = $_POST['pershkrimi']; 
        $qmimi = $_POST['qmimi'];
        $emri = $_POST['emri'];
        
        // Krijo një instancë të objektit Shtepia
        $shtepia = new Shtepia($pershkrimi, $qmimi, $emri);
    
        // Krijo një instancë të objektit shtepitrepository dhe bëj insertimin
        $shtepit = new shtepitrepository();
        $shtepit->insertShtepit($shtepia);
        
        // Ridrejtohuni në faqen Dashboard.php
        header("location:Dashboard.php");
        exit();
    }
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
    <p>Edit Shtepia</p>
</div>

<div class="form-div">
    <form class="edit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="">Pershkrimi:</label>  
            <input class="input-1" type="text" name="pershkrimi">

            <label for="">Qmimi:</label>
            <input class="input-2" type="text" name="qmimi" ?>

            <label for="">Emri:</label>
            <input class="input" type="text" name="emri" ?>
        </div><br>

        <input  type="submit" class="edit-s" name="submitbtn" value="Submit" >

        
    </form>

    
</div>
</body>
</html>
