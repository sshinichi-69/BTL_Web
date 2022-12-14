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
    <title>Tai nghe & Tai nghe có mic chơi game, Tai nghe không dây | Logitech G</title>
</head>

<body>
    <div id="body">
        <?php headerHTML(1) ?>
        <div id="slider" class="white-text audio">
            <div class="content">
                <div class="uppercase title">Tai nghe và loa chơi game</div>
                <hr>
                <p class="description">Âm thanh đắm chìm, mic trong trẻo-rõ ràng, Bộ cân bằng có thể tùy chỉnh và âm thanh vòm 7.1 tùy chọn. Mọi thứ bạn cần để bắt đầu cuộc chơi và thể hiện mình với thêm lợi thế từ âm thanh chính xác.</p>
            </div>
        </div>
        <div id="product">
            <?php getAudioList() ?>
        </div>
    </div>
</body>
<footer>
    <?php footerHTML(1) ?>
</footer>
</html>