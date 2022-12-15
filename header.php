<?php
    function headerHTML($inner) {
        $innerAddr = '';
        for ($i = 0; $i < $inner; $i++) {
            $innerAddr = '../' . $innerAddr;
        }
        ?>
        <div class="desktop">
        <!-- init header -->
            <div id="header" class="nav">
                <ul>
                    <li class="left">
                        <ul>
                            <li class="logo"><a href="<?php echo($innerAddr) ?>index.php"><img src="<?php echo($innerAddr) ?>img/logo-logitech-overlay.svg" alt="logo" height="20"></a></li>
                        </ul>
                    </li>
                    <li class="right nav">
                        <ul>
                        <?php if (isset($_SESSION['user'])) { ?>
                            <li><a href="<?php echo($innerAddr) ?>cart.php"><i class="ti-shopping-cart"></i></a></li>
                        <?php } ?>
                            <li><a href="<?php echo($innerAddr) ?>my-account.php" class="uppercase"><i class="ti-user"></i>Tài khoản của tôi</a></li>
                        <?php if (isset($_SESSION['user'])) { ?>
                            <li><a href="<?php echo($innerAddr) ?>my-account/logout.php"  class="uppercase">Đăng xuất</a></li>
                        <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- init navigation -->
            <div id="navigation" class="nav">
                <ul>
                    <li><a href="<?php echo($innerAddr) ?>aboutus.php" class="uppercase">Giới thiệu</a></li>
                    <li><a href="<?php echo($innerAddr) ?>products.php" class="uppercase">Sản phẩm</a></li>
                    <li class="dropdown menu">
                        <a href="#" class="uppercase dropbtn menu">Bảng giá</a>
                        <div class="dropdown-content menu">
                            <a href="<?php echo($innerAddr) ?>products/gaming-mice.php" class="uppercase">Chuột chơi game</a>
                            <a href="<?php echo($innerAddr) ?>products/gaming-audio.php" class="uppercase">Âm thanh trò chơi</a>
                            <a href="<?php echo($innerAddr) ?>products/gaming-keyboards.php" class="uppercase">Bàn phím chơi game</a>
                        </div>
                    </li>
                    <li><a href="<?php echo($innerAddr) ?>contact.php" class="uppercase">Liên hệ</a></li>
                    <li><a href="<?php echo($innerAddr) ?>news.php" class="uppercase">Tin tức</a></li>
                    <li><a href="#"><i class="ti-search"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="mobile">
            <div class="left">
                <div class="dropdown menu">
                    <button class="dropbtn menu"><i class="ti-menu"></i></button>
                    <div class="dropdown-content menu">
                        <a href="<?php echo($innerAddr) ?>index.php" class="uppercase">Trang chủ</a>
                        <a href="<?php echo($innerAddr) ?>aboutus.php" class="uppercase">Giới thiệu</a>
                        <a href="<?php echo($innerAddr) ?>products.php" class="uppercase">Sản phẩm</a>
                        <div class="dropdown submenu">
                            <a href="#" class="uppercase dropbtn submenu">Bảng giá</a>
                            <div class="dropdown-content submenu">
                                <a href="<?php echo($innerAddr) ?>products/gaming-mice.php" class="uppercase">Chuột chơi game</a>
                                <a href="<?php echo($innerAddr) ?>products/gaming-audio.php" class="uppercase">Âm thanh trò chơi</a>
                                <a href="<?php echo($innerAddr) ?>products/gaming-keyboards.php" class="uppercase">Bàn phím chơi game</a>
                            </div>
                        </div>
                        <a href="<?php echo($innerAddr) ?>contact.php" class="uppercase">Liên hệ</a>
                        <a href="<?php echo($innerAddr) ?>news.php" class="uppercase">Tin tức</a>
                        <?php if (isset($_SESSION['user'])) { ?>
                            <a href="<?php echo($innerAddr) ?>cart.php">Giỏ hàng</a>
                        <?php } ?>
                            <a href="<?php echo($innerAddr) ?>my-account.php" class="uppercase"><i class="ti-user"></i>Tài khoản của tôi</a>
                        <?php if (isset($_SESSION['user'])) { ?>
                            <a href="<?php echo($innerAddr) ?>my-account/logout.php"  class="uppercase">Đăng xuất</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="right">
                <button type="button"><i class="ti-search"></i></button>
            </div>
        </div>
<?php } ?>