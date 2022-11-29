<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Giỏ hàng </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap-min.css" type="text/css">
    <link rel="stylesheet" href="../style.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="../css/app.css" type="text/css">
</head>

<body>
   
    <div id="wrapper">
        <div id="header">
            <a href="../../index.html" class="logo">
                <img src="../png/logo.png" alt="">
            </a>
            <div id="menu">
                <div class="item">
                    <a href="../index.html">Trang chủ</a>
                </div>
                <div class="item">
                    <a href="">Du lịch miền bắc</a>
                </div>
                <div class="item">
                    <a href="">Du lịch miền Trung</a>
                </div>
                <div class="item">
                    <a href="">Du lịch miền Nam</a>
                </div>
                <div class="item">
                    <a href="">Tour nghỉ lễ</a>
                </div>
            </div>
            <!-- <div id="actions">
                <div class="item">
                    <img src="..//png/user.png" alt="">
                </div>
                <div class="item">
                    <img src="../png/cart.png" alt="">
                </div>
            </div> -->
        </div>
    <!-- end header -->

    <main role="main">    
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <h1 class="text-center">Giỏ hàng</h1>
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh đại diện</th>
                                <th>Tên sản phẩm</th>
                                <th>Số người</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="../../image/caobang.jpg" class="hinhdaidien">
                                </td>
                                <td>Du lịch Hà Nội - Cao Bằng </td>
                                <td class="text-right">2</td>
                                <td class="text-right">2.250.000 VND</td>
                                <td class="text-right">4.500.000 VND</td>
                                <td>
                                    <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                    <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                
                            </tr>
                            <tr>
                                <td>3</td>
                                
                            </tr>
                        </tbody>
                    </table>

                    <a href="../../index.html" class="btn btn-warning btn-md"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i>&nbsp;Quay
                        về trang chủ</a>
                    <a href="checkout.html" class="btn btn-primary btn-md"><i
                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Thanh toán</a>
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>

    <!-- footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
    
        </div>
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
