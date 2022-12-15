<?php
    session_start();
    
    include 'header.php';
    include 'footer.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./general.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./my-account.css">
    <link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <title>Tài khoản của Logitech</title>
</head>

<body>
    <div id="body">
        <?php headerHTML(0) ?>
        <div id="account">
            <div class="content">
                <?php
                    if (isset($_SESSION['user'])) {
                        ?>
                        <img src="<?php echo($_SESSION['user']['image']) ?>" alt="avatar" class="avatar">
                        <div class="hello uppercase white-text">Hi, <?php echo($_SESSION['user']['first_name']) ?></div>
                        <div class="edit"><a href="my-account/account-information.php" class="uppercase">Chỉnh sửa hồ sơ</a></div>
                        <a href="my-account/logout.php" class="logout uppercase white-text">Đăng xuất</a>
                        <?php
                    }
                    else {
                        ?>
                        <div class="title uppercase white-text">Tài khoản của tôi</div>
                        <div class="button">
                            <button type="button" class="login">
                                <a href="my-account/login.php" class="uppercase">Đăng nhập</a>
                            </button>
                            <button type="button" class="create-account">
                                <a href="my-account/signup.php" class="uppercase">Tạo tài khoản</a>
                            </button>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php footerHTML(0) ?>
</footer>
</html>