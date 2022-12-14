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
    <title>Chuột chơi game | Logitech G</title>
</head>

<body>
    <div id="body">
        <?php headerHTML(1) ?>
        <div id="slider" class="white-text mouse">
            <div class="content">
                <div class="uppercase title">Chuột chơi game</div>
                <hr>
                <p class="description">Logitech G phát triển ra những con chuột chơi game không dây và có dây giành được giải thưởng. Thường xuyên đổi mới từ cảm biến tới hình dáng, tìm ra lựa chọn phù hợp với bạn.</p>
            </div>
        </div>
        <div id="product">
            <?php getMouseList() ?>
        </div>
    </div>
</body>
<footer>
    <?php footerHTML(1) ?>
</footer>
</html>