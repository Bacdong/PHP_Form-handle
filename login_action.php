<?php
    session_start();
    require_once('./public/connection.php');

    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    // $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "SELECT fullname FROM authors WHERE status = 1 and username = '".$username."' and password = '".$password."'";
    // die($query);

    $author = $connection->query($query)->fetch_assoc();

    if ($author !== NULL) {
        setcookie('msg', 'Sign in successfull!', time() + 3);
        $_SESSION['isLogin'] = true;
        $_SESSION['author'] = $author;
        header('Location: home.php');
    } else {
        setcookie('msg', 'Sign in failed! Try again!', time() + 3);
        header('Location: index.php');
    }
?>