<?php
    include('DatabaseConnection.php');
    include_once "shtepitrepository.php";

    $shtepi = new shtepitrepository();
    $shtepit = $shtepi->getAllShtepit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>
<body>
<?php
    include('header.php');
    echo $header1;

    
    ?>
    <div>
        <a href="register-shtepit.php" class="register">Register</a>
    </div>
    <table class="dash-table">
                <thead>
                    <tr>
                        <th>Pershkrimi</th>
                        <th>Qmimi</th>
                        <th>Emri</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($shtepit as $sh) { ?>
                        <tr>
                            <td><?php echo $sh['Pershkrimi'];?></td>
                            <td><?php echo $sh['Qmimi'];?></td>
                            <td><?php echo $sh['Emri'];?></td>
                            <td class="edit-del"><a href='edit-shtepit.php?id=<?php echo $sh['ID'];?>'>Edit</a></td>
                            <td class="edit-del"><a href='delete-shtepit.php?id=<?php echo $sh['ID'];?>'>Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
</body>
</html>