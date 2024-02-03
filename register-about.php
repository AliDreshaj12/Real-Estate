<?php
    include_once 'about.php';
    include_once 'aboutrepository.php';

    if (isset($_POST['submitbtn'])) {
        // Validimi i të dhënave të dërguara nga forma
        if (empty($_POST['image'])) {
            echo "Ju lutem plotësoni të gjitha fushat!";
            exit();
        }
        $image = $_POST['image'];
        
        // Krijo një instancë të objektit Shtepia
        $about = new About($image);
    
        // Krijo një instancë të objektit shtepitrepository dhe bëj insertimin
        $aboutus = new aboutrepository();
        $aboutus->insertAbout($about);
        
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
    <title>Register</title>
    <link rel="stylesheet" href="edit-shtepit.css">
</head>
<body>
<?php
    include('header.php');
    echo $header1;
?>

<div class="edit-title">
    <p>Register About</p>
</div>

<div class="form-div">
    <form class="edit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="">Image</label>
            <input class="input" type="file" name="image" ?>
        </div><br>

        <input  type="submit" class="edit-s" name="submitbtn" value="Submit" >

        
    </form>

    
</div>
</body>
</html>
