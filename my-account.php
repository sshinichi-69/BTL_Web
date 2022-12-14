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
                        echo('<img src="' . $_SESSION['user']['image'] . '" alt="avatar" class="avatar">');
                        echo('<div class="hello uppercase white-text">Hi, ' . $_SESSION['user']['first_name'] . '</div>');
                        echo('<a href="my-account/logout.php" class="logout uppercase white-text">Đăng xuất</a>');
                    }
                    else {
                        echo('<div class="title uppercase white-text">Tài khoản của tôi</div>');
                        echo('<div class="button">');
                        echo('<button type="button" class="login">');
                        echo('<a href="my-account/login.php" class="uppercase">Đăng nhập</a>');
                        echo('</button>');
                        echo('<button type="button" class="create-account">');
                        echo('<a href="my-account/signup.php" class="uppercase">Tạo tài khoản</a>');
                        echo('</button>');
                        echo('</div>');
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