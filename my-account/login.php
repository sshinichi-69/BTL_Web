<?php
require '../init.php';
session_start();

// Kiểm tra nếu đã đăng nhập thì quay về homepage
if (isset($_SESSION['user'])) {
    header('../index.html');
}

$msg = '';
        
// Kiểm tra dữ liệu POST lên
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST ['password']))
{
    // Gán tài khoản và mật khẩu nhận được từ form vào 2 biến tương ứng
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Lấy thông tin người dùng từ DB
    $user = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM accounts WHERE username='$username'"));
    // Kiểm tra sự tồn tại của người dùng và mật khẩu có trùng khớp
    if ($user && $user['password'] == md5($password))
    {
        // Tạo session lưu thông tin người dùng đăng nhập thành công
        $_SESSION['user'] = $user;
        
        // Chuyển hướng về trang quản trị hay trang profile
        if ($user['user'] == "admin")
            header('admin.php');
        else
            header('profile.php');        
    }
    else 
        header('register.php');
}
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <style>
        body {text-align: center;}

        .container {
            width: 61%;
            margin: auto;
        }

        .box {display: flex;}

        form {
            margin: auto;
            width: 37%;
        }

            form > div {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

        .lbl {text-align: left;}

        .btn {
            display: flex;
            width: 16%;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <form role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
                <h4><?php echo $msg; ?></h4>
                <input type = "text" name = "username" placeholder = "username" required autofocus>
                <input type = "password" name = "password" placeholder = "password" required>
                <button type = "submit" name = "login">Login</button>
            </form>
        </div>
    </div>
</body>
</html> -->