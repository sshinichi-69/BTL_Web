
<?php
    function headerHTML($inner) {
        $innerAddr = '';
        for ($i = 0; $i < $inner; $i++) {
            $innerAddr = '../' . $innerAddr;
        }
        // init header
        echo('<div id="header" class="nav">');
        echo('<ul>');
        echo('<li class="left">');
        echo('<ul>');
        echo('<li class="logo"><a href="' . $innerAddr . 'index.php"><img src="' . $innerAddr . 'img/logo-logitech-overlay.svg" alt="logo" height="20"></a></li>');
        echo('</ul>');
        echo('</li>');
        echo('<li class="right nav">');
        echo('<ul>');
        echo('<li><a href="' . $innerAddr . 'my-account.php" class="uppercase"><i class="ti-user"></i>Tài khoản của tôi</a></li>');
        if (isset($_SESSION['user'])) {
            echo('<li><a href="./my-account/logout.php"  class="uppercase">Đăng xuất</a></li>');
        }
        echo('</ul>');
        echo('</li>');
        echo('</ul>');
        echo('</div>');
        // init navigation
        echo('<div id="navigation" class="nav">');
        echo('<ul>');
        echo('<li><a href="' . $innerAddr . 'aboutus.php" class="uppercase">Giới thiệu</a></li>');
        echo('<li><a href="' . $innerAddr . 'products.php" class="uppercase">Sản phẩm</a></li>');
        echo('<li class="dropdown">');
        echo('<a href="#" class="uppercase dropbtn">Bảng giá</a>');
        echo('<div class="dropdown-content">');
        echo('<a href="' . $innerAddr . 'products/gaming-mice.php" class="uppercase">Chuột chơi game</a>');
        echo('<a href="' . $innerAddr . 'products/gaming-audio.php" class="uppercase">Âm thanh trò chơi</a>');
        echo('<a href="' . $innerAddr . 'products/gaming-keyboards.php" class="uppercase">Bàn phím chơi game</a>');
        echo('</div>');
        echo('</li>');
        echo('<li><a href="' . $innerAddr . 'contact.php" class="uppercase">Liên hệ</a></li>');
        echo('<li><a href="' . $innerAddr . 'news.php" class="uppercase">Tin tức</a></li>');
        echo('<li><a href="#"><i class="ti-search"></i></a></li>');
        echo('</ul>');
        echo('</div>');
    }
?>