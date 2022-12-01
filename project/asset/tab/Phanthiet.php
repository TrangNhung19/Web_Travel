<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DU LỊCH PHAN THIẾT</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/sanpham.css" type="text/css">
    <link rel="stylesheet" href="../style1.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="../css/bootstrap-min.css" type="text/css">
</head>
<style>
.babi {
   padding: 2%;
   text-align: center;
 }
#slideshow {
   overflow: hidden;
   height: 510px;
   width: 728px;
   margin: 0 auto;
 }
.slide-wrapper {
   width: 2912px;
   -webkit-animation: slide 14s ease infinite;
 }
.slide {
   float: left;
   height: 510px;
   width: 728px;
 }
@-webkit-keyframes slide {
   20% {margin-left: 0px;}
   30% {margin-left: -728px;}
   50% {margin-left: -728px;}
   60% {margin-left: -1456px;}
   80% {margin-left: -1456px;}
 }
</style>


<body>

    <div id="wrapper">
        <div id="header">
            <div id="header">
                <a href="" class="logo">
                    <img src="../png/logo.png" alt="">
                </a>
                <div id="menu">
                    <div class="item">
                        <a href="../trangchu.php">Trang chủ</a>
                    </div>
                    <div class="item">
                        <a href="product1.php">Du lịch miền Bắc</a>
                    </div>
                    <div class="item">
                        <a href="product2.php">Du lịch miền Trung</a>
                    </div>
                    <div class="item">
                        <a href="product3.php">Du lịch miền Nam</a>
                    </div>
                    <div class="item">
                        <a href="product4.php">Tour nghỉ Lễ</a>
                    </div>
                    
                </div>
            <div id="actions">
                <div class="item">
                    <img src="..//png/user.png" alt="">
                </div>
                <div class="item">
                    <img src="../png/cart.png" alt="">
                </div>
            </div>
        </div>
        
    </div>
    <!-- end header -->
    
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="card">
                <div class="container-fliud">
                    <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post"
                        action="/php/twig/frontend/giohang/themvaogiohang">
                        <input type="hidden" name="sp_ma" id="sp_ma" value="5">
                        <input type="hidden" name="sp_ten" id="sp_ten" value="Samsung Galaxy Tab 10.1 3G 16G">
                        <input type="hidden" name="sp_gia" id="sp_gia" value="10990000.00">
                        <input type="hidden" name="hinhdaidien" id="hinhdaidien" value="samsung-galaxy-tab-10.jpg">

                        <div class="wrapper row">
                            <div class="babi">
                                <div id="slideshow">
                                   <div class="slide-wrapper">
                                   <div class="slide"><img src="../../image/phanthiet1.jpg"></div>
                                   <div class="slide"><img src="../../image/phanthiet2.jpg"></div>
                                   <div class="slide"><img src="../../image/phanthiet5.jpg"></div>
                                </div>
                           </div>
                            <br> <br>
                            <div class="details col-md-6">
                                <h3 class="product-title">Du lịch Phan Thiết - TP HCM</h3>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <span class="review-no">999 reviews</span>
                                </div>
                                <p class="product-description">Điểm hấp dẫn trong hành trình:<br>


                                    ✔ Khám phá Thác Bản Giốc – thác nước đẹp nhất Việt Nam. Đồng thời, lập kỷ lục là thác nước lớn nhất Đông Nam Á. Khoảng thời gian đẹp nhất để ghé thăm nơi đây là từ tháng 9 đến tháng 12, ngắm thác Bản Giốc mùa nước đổ hùng vĩ, uy nghiêm.<br>
                                    
                                    ✔ Khám phá Động Ngườm Ngao – một trong những động dài và đẹp nhất Việt Nam với truyền thuyết phong phú của dân tộc Tày<br>
                                    
                                    ✔ Mãn nhãn khung cảnh thần tiên tại Hồ Ba Bể, một trong 100 hồ lớn nhất thế giới và được công nhận là khu du lịch quốc gia Việt Nam.<br>
                                    
                                    ✔ Thưởng thức những món đặc sản trứ danh Cao Bằng, Bắc Kạn.</p>
                                <small class="text-muted">Giá cũ: <s><span>2.550.000 vnđ</span></s></small>
                                <h4 class="price">Giá hiện tại: <span>2.250.000 vnđ</span></h4>
                                <!-- <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                    <strong>Uy
                                        tín</strong>!</p>
                                <h5 class="sizes">sizes:
                                    <span class="size" data-toggle="tooltip" title="cỡ Nhỏ">s</span>
                                    <span class="size" data-toggle="tooltip" title="cỡ Trung bình">m</span>
                                    <span class="size" data-toggle="tooltip" title="cỡ Lớn">l</span>
                                    <span class="size" data-toggle="tooltip" title="cỡ Đại">xl</span>
                                </h5>
                                <h5 class="colors">colors:
                                    <span class="color orange not-available" data-toggle="tooltip"
                                        title="Hết hàng"></span>
                                    <span class="color green"></span>
                                    <span class="color blue"></span>
                                </h5> -->
                                <div class="form-group">
                                    <label for="soluong">Bạn đi bao nhiêu người :</label>
                                    <input type="number" class="form-control" id="soluong" name="soluong">
                                </div>
                                <div class="action">
                                    <a class="add-to-cart btn btn-default" id="btnThemVaoGioHang">Thêm vào giỏ hàng</a>
                                    <a class="like btn btn-default" href="#"><span class="fa fa-heart"></span></a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="container-fluid">
                    <h3>Thông tin chi tiết về Tour du lịch</h3>
                    <div class="row">
                        <div class="col">
                            Vi xử lý Dual-core 1 Cortex-A9 tốc độ 1GHz
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>

    <!-- footer -->
    <footer class="footer mt-auto py-3">
        
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom script - Các file js do mình tự viết -->
    <script src="../assets/js/app.js"></script>

</body>

</html>