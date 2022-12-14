<?php
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
    <link rel="stylesheet" href="my-account.css">
    <link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <title>Tài khoản của Logitech</title>
</head>

<body>
    <?php headerHTML(0) ?>
    <div id="account">
        <div class="content">
            <div class="title uppercase white-text">Tài khoản của tôi</div>
            <div class="button">
                <button type="button" class="login">
                    <a href="my-account/login.html" class="uppercase">Đăng nhập</a>
                </button>
                <button type="button" class="create-account">
                    <a href="my-account/signup.html" class="uppercase">Tạo tài khoản</a>
                </button>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php footerHTML(0) ?>
</footer>
</html>