function init(inner) {
    let innerAddr = '/';
    for (let i = 0; i < inner; i++) {
        innerAddr = '..' + innerAddr;
    }
    // init header
    let innerHeader = '';
    innerHeader += '<ul>';
    innerHeader += '<li class="logo"><a href="' + innerAddr + 'index.html"><img src="' + innerAddr + 'img/logo-logitech-overlay.svg" alt="logo" height="20"></a></li>';
    innerHeader += '<li class="account"><a href="#" class="uppercase"><i class="ti-user"></i>Tài khoản của tôi</a></li>';
    innerHeader += '</ul>';
    document.getElementById("header").innerHTML = innerHeader;
    // init navigation
    let innerNavigation = '';
    innerNavigation += '<ul>';
    innerNavigation += '<li><a href="#" class="uppercase">Giới thiệu</a></li>';
    innerNavigation += '<li><a href="' + innerAddr + 'products.html" class="uppercase">Sản phẩm</a></li>';
    innerNavigation += '<li><a href="#" class="uppercase">Bảng giá</a></li>';
    innerNavigation += '<li><a href="' + innerAddr + 'contact.html" class="uppercase">Liên hệ</a></li>';
    innerNavigation += '<li><a href="#" class="uppercase">Tin tức</a></li>';
    innerNavigation += '<li><a href="#"><i class="ti-search"></i></a></li>';
    innerNavigation += '</ul>';
    document.getElementById("navigation").innerHTML = innerNavigation;
    // init footer
    let innerFooter = '';
    innerFooter += '<div class="copyright">';
    innerFooter += '&copy; 2022 Logitech. Bảo lưu mọi quyền';
    innerFooter += '</div>';
    innerFooter += '<div class="contact nav">';
    innerFooter += '<ul>';
    innerFooter += '<li><a href="https://www.facebook.com/LogitechG" class="facebook"><i class="ti-facebook"></i></a></li>';
    innerFooter += '<li><a href="https://twitter.com/LogitechG" class="twitter"><i class="ti-twitter-alt"></i></a></li>';
    innerFooter += '<li><a href="https://www.instagram.com/logitechg/" class="instagram"><i class="ti-instagram"></i></a></li>';
    innerFooter += '<li><a href="https://www.youtube.com/logitechg" class="youtube"><i class="ti-youtube"></i></a></li>';
    innerFooter += '</ul>';
    innerFooter += '</div>';
    document.getElementsByTagName("footer")[0].innerHTML = innerFooter;
}