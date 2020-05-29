<?php
    session_start();
    require_once('./public/connection.php');

    if(!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true) {
        setcookie('msg', 'You need to login first!', time()+1);
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import CSS - Boostrap 4 CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- /Import CSS - Boostrap 4 CDN -->

    <?php require_once('./public/head.php'); ?>
    
    <title>Home | Nguyễn Hoàng Anh Hùng</title>
</head>
<body>

    <?php if(isset($_SESSION['isLogin'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo 'Congratulations on your successful signin! <br/>'.'Hello '.$_SESSION['author']['fullname']; ?>
        </div>
    <?php } ?>
    
    <a class="link logout" href="logout.php">Logout</a>

</body>
</html>