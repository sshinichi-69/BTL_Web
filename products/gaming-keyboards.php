<?php
    session_start();
    
    include '../header.php';
    include '../footer.php';
    include './products.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../general.css">
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="products.css">
    <link rel="stylesheet" href="../themify-icons/themify-icons.css">
    <title>Bàn phím chơi game | Logitech G</title>
</head>

<body>
    <div id="body">
        <?php headerHTML(1) ?>
        <div id="slider" class="white-text keyboard">
            <div class="content">
                <div class="uppercase title">Bàn phím chơi game</div>
                <hr>
                <p class="description">Tốc độ. Độ chính xác. Độ bền. Bàn phím chơi game của Logitech G được thiết kế với công nghệ và vật liệu cần thiết để chơi game hiệu suất cao.</p>
            </div>
        </div>
        <div id="product">
            <?php getKeyboardList() ?>
        </div>
    </div>
</body>
<footer>
    <?php footerHTML(1) ?>
</footer>
</html>