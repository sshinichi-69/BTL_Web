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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Tin tức của Logitech G</title>
</head>

<body>
    <div id="body">
        <?php headerHTML(0) ?>
        <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="img/news/trending_top.png" alt="">
                                <div class="trend-top-cap">
                                    <span>Số hóa</span>
                                    <h2><a href="news_details.php">Synnex FPT phân phối thiết bị truyền hình hội nghị Logitech</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="img/news/trending_bottom1.jpg" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">Kinh doanh</span>
                                        <h4><a href="news_details.php">Logitech cung cấp bộ phải pháp tăng hiệu quả làm từ xa</a></h4>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="img/news/trending_bottom2.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color2">Số hóa</span>
                                            <h4><h4><a href="news_details.php">Những sáng tạo trong thiết kế của Logitech</a></h4></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="img/news/trending_bottom3.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Số hóa</span>
                                            <h4><a href="news_details.php"> Ưu điểm của combo chuột không dây M190 và bàn phím K270</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="img/news/right1.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Video</span>
                                <h4><a href="news_details.php">Chặng đường 39 năm phát triển của Logitech</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="img/news/right2.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color3">Tư vấn</span>
                                <h4><a href="news_details.php">​Chọn bàn phím và chuột cho tay kích cỡ lớn</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="img/news/right3.png" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color2">Tư vấn</span>
                                <h4><a href="news_details.php">Lợi ích khi sử dụng pin sạc cho chuột máy tính</a></h4>
                            </div>
                        </div> 
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="img/news/right4.png" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color4">Tư vấn</span>
                                <h4><a href="news_details.php">Vệ sinh bàn phím đúng cách</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="img/news/right5.png" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Tư vấn</span>
                                <h4><a href="news_details.php">Tiêu chí lựa chọn chuột quang phù hợp</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Sản phẩm công nghệ </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="img/news/product1.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Thiết bị</span>
                                    <h4><a href="news_details.php">Loạt thiết bị công nghệ đa sắc</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="img/news/product2.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Thiết bị</span>
                                    <h4><a href="news_details.php">6 tai nghe không dây cao cấp cho game thủ</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="img/news/product3.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Thiết bị</span>
                                    <h4><a href="news_details.php">5 mẫu tai nghe nổi bật tầm giá 500.000 đồng</a></h4>
                                </div>
                            </div>
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="img/news/product4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Sản phẩm</span>
                                    <h4><a href="news_details.php">Bàn phím rời Combo Touch 2020 tối ưu cho iPad</a></h4>
                                </div>
                            </div> 
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="img/news/product5.png" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Sản phẩm</span>
                                    <h4><a href="news_details.php">Loạt sản phẩm Logitech phù hợp thiết bị Apple</a></h4>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
    
    
    <!--Start pagination -->
    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
        </div>
    </div>
</body>
<footer>
    <?php footerHTML(0) ?>
</footer>
</html>