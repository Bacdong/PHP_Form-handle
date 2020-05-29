<?php
    require_once('./public/connection.php');

    // Định dạng ngày giờ về giờ Việt Nam
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    $fullname = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password2 != $password) {
        setcookie('msg', 'Retype the password incorrectly!', time()+3);
        header('Location: register.php');
    } else {
        $created_at = date('Y-m-d H:i:s');
        $status = 1;

        // Băm password bằng thuật toán mã hóa BCRYPT để lưu vào database
        // $password = password_hash($password, PASSWORD_BCRYPT);
        $password = sha1($_POST['password']);

        $query = "INSERT INTO authors(username, password, fullname, status, created_at) VALUES ('".$username."', '".$password."', '".$fullname."', '".$status."', '".$created_at."')";
        // die($query);
        
        $result = $connection->query($query);
        // echo $result; die;

        // Nếu insert thành công thì khởi tạo một cookie chứa thông báo đăng kí tài khoản thành công và chuyển đến trang login.
        // Ngược lại nếu insert không thành công thì khởi tạo một cookie chứa thông báo đăng kí tài khoản thất bại và chuyển trở lại trang register.
        if ($result) {
            setcookie('msg', 'Register successful!', time() + 3);
            header('Location: index.php');
        } else {
            setcookie('msg', 'Register Failed!', time() + 3);
            header('Location: register.php');
        }
    }

    // echo $fullname.'<br/>'.$username.'<br/>'.$password.'<br/>'.$password2; die;
?>