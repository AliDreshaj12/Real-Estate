<?php
    include('DatabaseConnection.php');
    include_once "shtepitrepository.php";
    include "connect.php";
    include_once "shtepitrepository.php";
    include_once "aboutrepository.php";

    $shtepi = new shtepitrepository();
    $shtepit = $shtepi->getAllShtepit();

    $con = new Connect();
    $conta = $con-> getAllMessage();

    $about = new aboutrepository();
    $aboutus= $about->getAllAbout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
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

            <table class="dash-table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($conta as $co) { ?>
                        <tr>
                            <td><?php echo $co['firstName'];?></td>
                            <td><?php echo $co['lastName'];?></td>
                            <td><?php echo $co['Email'];?></td>
                            <td><?php echo $co['numbers'];?></td>
                            <td><?php echo $co['notes'];?></td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div>
            <a href="register-about.php" class="register">Register</a>
            </div>
            <table class="dash-table">
                <thead>
                    <tr>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($aboutus as $ab) { ?>
                        <tr>
                            <td><?php echo $ab['img'];?></td>
                            <td class="edit-del"><a href='edit-about.php?id=<?php echo $ab['id'];?>'>Edit</a></td>
                            <td class="edit-del"><a href='delete-about.php?id=<?php echo $ab['id'];?>'>Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>                
</body>
</html>