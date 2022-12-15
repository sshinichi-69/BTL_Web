<?php
    session_start();
    
    include '../header.php';
    include '../footer.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../general.css">
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="account-information.css">
    <link rel="stylesheet" href="../themify-icons/themify-icons.css">
    <script src="account-information.js"></script>
    <title>Thông tin tài khoản | Logitech G</title>
</head>

<body>
    <?php
        $id = $_SESSION['user']['id'];
        if (isset($_POST['first-name']) && !empty($_POST['first-name'])) {
            require '../init.php';
            $value = $_POST['first-name'];
            mysqli_query($link, "UPDATE users SET first_name='$value' WHERE id='$id'");
            $_SESSION['user']['first_name'] = $value;
            mysqli_close($link);
        }
        if (isset($_POST['last-name']) && !empty($_POST['last-name'])) {
            require '../init.php';
            $value = $_POST['last-name'];
            mysqli_query($link, "UPDATE users SET last_name='$value' WHERE id='$id'");
            $_SESSION['user']['last_name'] = $value;
            mysqli_close($link);
        }
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            require '../init.php';
            $value = $_POST['email'];
            mysqli_query($link, "UPDATE users SET email='$value' WHERE id='$id'");
            $_SESSION['user']['email'] = $value;
            mysqli_close($link);
        }
        if (isset($_POST['image']) && !empty($_POST['image'])) {
            require '../init.php';
            $value = $_POST['image'];
            mysqli_query($link, "UPDATE users SET image='$value' WHERE id='$id'");
            $_SESSION['user']['image'] = $value;
            mysqli_close($link);
        }
    ?>
    <div id="body">
        <?php headerHTML(1) ?>
        <div id="content">
            <div class="title uppercase">Hồ sơ</div>
            <form action="account-information.php" method="post">
                <table>
                    <tr>
                        <td class="label">Tên</td>
                        <td class="value">
                            <div><?php echo $_SESSION['user']['first_name'] ?></div>
                            <input type="text" name="first-name" class="hide" value="<?php echo $_SESSION['user']['first_name'] ?>"></input>
                        </td>
                        <td class="action">
                            <button type="button" class="uppercase" onclick="switchButton(event)">Chỉnh sửa</button>
                            <button type="submit" class="save uppercase hide">Lưu</button>
                            <button type="button" class="uppercase hide" onclick="switchButton(event)">Hủy</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Họ</td>
                        <td class="value">
                            <div><?php echo $_SESSION['user']['last_name'] ?></div>
                            <input type="text" name="last-name" class="hide" value="<?php echo $_SESSION['user']['last_name'] ?>"></input>
                        </td>
                        <td class="action">
                            <button type="button" class="uppercase" onclick="switchButton(event)">Chỉnh sửa</button>
                            <button type="submit" class="save uppercase hide">Lưu</button>
                            <button type="button" class="uppercase hide" onclick="switchButton(event)">Hủy</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Email</td>
                        <td class="value">
                            <div><?php echo $_SESSION['user']['email'] ?></div>
                            <input type="email" name="email" class="hide" value="<?php echo $_SESSION['user']['email'] ?>"></input>
                        </td>
                        <td class="action">
                            <button type="button" class="uppercase" onclick="switchButton(event)">Chỉnh sửa</button>
                            <button type="submit" class="save uppercase hide">Lưu</button>
                            <button type="button" class="uppercase hide" onclick="switchButton(event)">Hủy</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Ảnh</td>
                        <td class="value">
                            <img src="<?php echo $_SESSION['user']['image'] ?>" alt="avater">
                            <input type="text" name="image" class="hide" value="<?php echo $_SESSION['user']['image'] ?>"></input>
                        </td>
                        <td class="action">
                            <button type="button" class="uppercase" onclick="switchButton(event)">Chỉnh sửa</button>
                            <button type="submit" class="save uppercase hide">Lưu</button>
                            <button type="button" class="uppercase hide" onclick="switchButton(event)">Hủy</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
<footer>
    <?php footerHTML(1) ?>
</footer>
</html>