<?php
$signup_error = '';

session_start();

// Kiểm tra nếu đã đăng nhập thì quay về homepage
if (isset($_SESSION['user'])) {
    header('../index.php');
}

$msg = '';
        
// Kiểm tra dữ liệu POST lên
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST ['password'])
    && isset($_POST['first-name']) && !empty($_POST['first-name']) && isset($_POST['last-name']) && !empty($_POST ['last-name']))
{
    include '../init.php';
    // Gán tài khoản và mật khẩu nhận được từ form vào 2 biến tương ứng
    $username = $_POST['username'];
    
    // Lấy thông tin người dùng từ DB
    $user = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users WHERE username='$username'"));
    // Kiểm tra sự tồn tại của người dùng và mật khẩu có trùng khớp
    if ($user) {
        $signup_error = '<div id="error">Tên đăng nhập đã tồn tại</div>';
    }
    else {
        $_SESSION['user'] = $user;
        $password = $_POST['password'];
        $first_name = $_POST['first-name'];
        $last_name = $_POST['last-name'];
        $image = 'https://www.iconspng.com/images/circled-user-icon.jpg';
        mysqli_query($link, "INSERT INTO users (username, password, first_name, last_name, image) VALUES ('$username', '$password', '$first_name', '$last_name', '$image')");
        header('Location: ../my-account.php');
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
    <?php echo($GLOBALS['signup_error']); ?>
    <div id="form" class="black-bgr">
        <form role ="form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <div class="title uppercase"><label for="">Tạo tài khoản</label></div>
            <div class="note"><label for="">Hoàn thành tất cả các trường để tạo ID Logi của bạn.</label></div>
            <div class="label uppercase"><label for="">Tên</label></div>
            <input type="text" name="first-name" id="" class="white-text" required><br>
            <div class="label uppercase"><label for="">Họ</label></div>
            <input type="text" name="last-name" id="" class="white-text" required><br>
            <div class="label uppercase"><label for="">Tên đăng nhập</label></div>
            <input type="text" name="username" id="" class="white-text" required><br>
            <div class="label uppercase"><label for="">Mật khẩu</label></div>
            <input type="password" name="password" id="" class="white-text" required><br>
            <button type="submit" class="uppercase">Tạo</button><br>
            <div class="addition uppercase"><a href="login.php" class="white-text">Đã có tài khoản? Đăng nhập</a></div>
        </form>
    </div>
</body>
</html>