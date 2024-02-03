<?php
session_start();
include 'aboutrepository.php';
    $id = $_GET['id'];
    $about = new aboutrepository();
    $aboutus = $about->getAboutById($id);


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
    <p>Edit Shtepit</p>
</div>

<div class="form-div">
    <form class="edit" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST">
        <div>

            <label for="">Image:</label>
            <input class="input" type="file" name="image" value="<?php echo $shtepit['img']?>">
        </div><br>

        <input class="edit-s" type="submit" name="editB" value="save">
    </form>
</div>
</body>
</html>

<?php 
    if(isset($_POST['editB'])){
        $id = $id;
        $image =$_POST['image'];
        
        $about->editAbout($id,$image);
        
        header("location:Dashboard.php");
        exit();
    }
    $aboutus=$about->getAboutById($id);
?>
