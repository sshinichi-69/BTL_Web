<?php
$login_error = '';

session_start();

// Kiểm tra nếu đã đăng nhập thì quay về homepage
if (isset($_SESSION['user'])) {
    header('../index.php');
}

$msg = '';
        
// Kiểm tra dữ liệu POST lên
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST ['password']))
{
    include '../init.php';
    // Gán tài khoản và mật khẩu nhận được từ form vào 2 biến tương ứng
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Lấy thông tin người dùng từ DB
    $user = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users WHERE username='$username'"));
    // Kiểm tra sự tồn tại của người dùng và mật khẩu có trùng khớp
    if ($user && $user['password'] == $password)
    {
        // Tạo session lưu thông tin người dùng đăng nhập thành công
        $_SESSION['user'] = $user;
        
        // Chuyển hướng về trang quản trị hay trang profile
        if ($user['username'] == "admin")
            header('Location: ../my-account.php');
        else
            header('Location: ../my-account.php');        
    }
    else {
        $login_error = '<div id="error">Tên đăng nhập hoặc mật khẩu bạn đã nhập không chính xác</div>';
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../general.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../themify-icons/themify-icons.css">
    <title>Logi ID</title>
</head>

<body>
    <?php echo($GLOBALS['login_error']); ?>
    <div id="form" class="black-bgr">
        <form role ="form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <div class="note"><label for="">Đăng nhập bằng ID Logi.</label></div>
            <div class="label uppercase"><label for="">Tên đăng nhập</label></div>
            <input type="text" name="username" id="username" class="white-text" required><br>
            <div class="label uppercase"><label for="">Mật khẩu</label></div>
            <input type="password" name="password" id="password" class="white-text" required><br>
            <button type="submit" class="uppercase">Đăng nhập</button><br>
            <div class="addition uppercase"><a href="signup.php" class="white-text">Tạo tài khoản</a></div>
        </form>
    </div>
</body>
</html>