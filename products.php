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
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <title>Sản phẩm của Logitech G</title>
</head>

<body>
    <div id="body">
        <?php headerHTML(0) ?>
        <div id="slider" class="white-text">
            <div class="content">
                <div class="uppercase pr">Không dây siêu nhanh</div>
                <div class="uppercase title">Bộ sưu tập LIGHTSPEED</div>
                <hr>
                <p class="description">Trải nghiệm kết nối siêu ổn định không bị trễ với công nghệ LIGHTSPEED không dây. Hiện đã có sẵn.</p>
            </div>
        </div>
        <div id="introduce">
            <div class="content">
                <div class="uppercase title">Thiết bị chơi game tiên tiến</div>
                <div class="description">Logitech G chuyên nỗ lực nâng cao hiệu suất và niềm đam mê cho cuộc chơi thông qua thiết kế và đổi mới về công nghệ.</div>
            </div>
        </div>
        <div id="product">
            <div class="item mouse white-text">
                <div class="content">
                    <div class="uppercase title">Chuột chơi game</div>
                    <hr>
                    <p class="description">Để chơi ở mức tốt nhất, bạn cần chuột chơi game có hiệu suất cao nhất. Chuột Logitech G, từ cảm biến tới hình dáng, đều dẫn đầu ngành về thiết kế và công nghệ.</p>
                    <a href="products/gaming-mice.php" class="uppercase">Mua sắm tất cả chuột<i class="ti-angle-right"></i></a>
                </div>
            </div>
            <div class="item headphone white-text">
                <div class="content right">
                    <div class="uppercase title">Âm thanh trò chơi</div>
                    <hr>
                    <p class="description">Tai nghe và loa chơi game của Logitech G được trang bị công nghệ âm thanh tiên tiến mang lại trải nghiệm đắm chìm vượt trội.</p>
                    <a href="products/gaming-audio.php" class="uppercase">Mua sắm tất cả thiết bị âm thanh<i class="ti-angle-right"></i></a>
                </div>
            </div>
            <div class="item keyboard white-text">
                <div class="content">
                    <div class="uppercase title">Bàn phím chơi game</div>
                    <hr>
                    <p class="description">Các bàn phím chơi game của Logitech G được thiết kế có chủ ý để chơi game. Chúng được thiết kế để thực hiện hoàn hảo và có khả năng tùy chỉnh mạnh mẽ.</p>
                    <a href="products/gaming-keyboards.php" class="uppercase">Mua sắm tất cả bàn phím chơi game<i class="ti-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php footerHTML(0) ?>
</footer>
</html>