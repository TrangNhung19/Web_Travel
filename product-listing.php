<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Sky - Product Listing</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions">
                    <?php
                      require_once("backend/filterWithCookie.php");
                    ?>
                    <!-- <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Japanese</a></li>
                        <li><a href="#">Chinese</a></li>
                      </ul>
                    </div> -->
                  </div>
                </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index.php"><img src="images/logo.png" alt=""></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                  <li class="menu-item menu-item-has-children dropdown"><a href="index.php">Home</a>
                  </li>
                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Men</a>
                    
                  </li>
                  <li class="menu-item"><a href="#">Women</a></li>
                  <li class="menu-item"><a href="#">Kids</a></li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">News</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.php">Blog-grid</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="blog-grid.php">Blog Grid 1</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.php">Blog Grid 2</a></li>
                                </ul>
                          </li>
                          <li class="menu-item"><a href="blog-list.php">Blog List</a></li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="contact-us.php">Contact</a>
                  </li>
                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Search Product…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon-shopping-cart"></i></a>
            <?php require_once("formCart.php") ?>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-products-wrap pt-80 pb-80">
        <div class="ps-products" data-mh="product-listing">
          <div class="ps-product-action">
            <div class="ps-product__filter">
              <select class="ps-select selectpicker">
                <option value="1">Shortby</option>
                <option value="2">Name</option>
                <option value="3">Price (Low to High)</option>
                <option value="3">Price (High to Low)</option>
              </select>
            </div>
            <div class="ps-pagination">
              <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="ps-product__columns">
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/1.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price">
                      <del>£220</del> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/2.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/3.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail">
                  <div class="ps-badge ps-badge--sale"><span>-35%</span></div><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/4.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price">
                      <del>£220</del> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/5.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/6.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/7.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/8.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/9.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/10.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/1.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price">
                      <del>£220</del> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/2.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/3.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail">
                  <div class="ps-badge ps-badge--sale"><span>-35%</span></div><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/4.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price">
                      <del>£220</del> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/5.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/6.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/7.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/8.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/9.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/10.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/1.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price">
                      <del>£220</del> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/2.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/3.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail">
                  <div class="ps-badge ps-badge--sale"><span>-35%</span></div><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/4.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price">
                      <del>£220</del> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/5.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/6.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/7.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/8.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/9.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-product__column">
              <div class="ps-travel mb-30">
                <div class="ps-travel__thumbnail"><a class="ps-travel__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/travel/10.jpg" alt=""><a class="ps-travel__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-travel__content">
                  <div class="ps-travel__variants">
                    <div class="ps-travel__variant normal"><img src="images/travel/2.jpg" alt=""><img src="images/travel/3.jpg" alt=""><img src="images/travel/4.jpg" alt=""><img src="images/travel/5.jpg" alt=""></div>
                    <select class="ps-rating ps-travel__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-travel__detail"><a class="ps-travel__name" href="#">Air Jordan 7 Retro</a>
                    <p class="ps-travel__categories"><a href="#">Men travels</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-travel__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ps-product-action">
            <div class="ps-product__filter">
              <select class="ps-select selectpicker">
                <option value="1">Shortby</option>
                <option value="2">Name</option>
                <option value="3">Price (Low to High)</option>
                <option value="3">Price (High to Low)</option>
              </select>
            </div>
            <div class="ps-pagination">
              <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="ps-sidebar" data-mh="product-listing">
          <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
              <h3>Category</h3>
            </div>
            <div class="ps-widget__content">
              <ul class="ps-list--checked">
                <li class="current"><a href="product-listing.php">Life(521)</a></li>
                <li><a href="product-listing.php">Running(76)</a></li>
                <li><a href="product-listing.php">Baseball(21)</a></li>
                <li><a href="product-listing.php">Football(105)</a></li>
                <li><a href="product-listing.php">Soccer(108)</a></li>
                <li><a href="product-listing.php">Trainning & game(47)</a></li>
                <li><a href="product-listing.php">More</a></li>
              </ul>
            </div>
          </aside>
          <aside class="ps-widget--sidebar ps-widget--filter">
            <div class="ps-widget__header">
              <h3>Category</h3>
            </div>
            <div class="ps-widget__content">
              <div class="ac-slider" data-default-min="300" data-default-max="2000" data-max="3450" data-step="50" data-unit="$"></div>
              <p class="ac-slider__meta">Price:<span class="ac-slider__value ac-slider__min"></span>-<span class="ac-slider__value ac-slider__max"></span></p><a class="ac-slider__filter ps-btn" href="#">Filter</a>
            </div>
          </aside>
          <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
              <h3>Sky Brand</h3>
            </div>
            <div class="ps-widget__content">
              <ul class="ps-list--checked">
                <li class="current"><a href="product-listing.php">Nike(521)</a></li>
                <li><a href="product-listing.php">Adidas(76)</a></li>
                <li><a href="product-listing.php">Baseball(69)</a></li>
                <li><a href="product-listing.php">Gucci(36)</a></li>
                <li><a href="product-listing.php">Dior(108)</a></li>
                <li><a href="product-listing.php">B&G(108)</a></li>
                <li><a href="product-listing.php">Louis Vuiton(47)</a></li>
              </ul>
            </div>
          </aside>
          <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
              <h3>Width</h3>
            </div>
            <div class="ps-widget__content">
              <ul class="ps-list--checked">
                <li class="current"><a href="product-listing.php">Narrow</a></li>
                <li><a href="product-listing.php">Regular</a></li>
                <li><a href="product-listing.php">Wide</a></li>
                <li><a href="product-listing.php">Extra Wide</a></li>
              </ul>
            </div>
          </aside>
          <div class="ps-sticky desktop">
            <aside class="ps-widget--sidebar">
              <div class="ps-widget__header">
                <h3>Size</h3>
              </div>
              <div class="ps-widget__content">
                <table class="table ps-table--size">
                  <tbody>
                    <tr>
                      <td class="active">3</td>
                      <td>5.5</td>
                      <td>8</td>
                      <td>10.5</td>
                      <td>13</td>
                    </tr>
                    <tr>
                      <td>3.5</td>
                      <td>6</td>
                      <td>8.5</td>
                      <td>11</td>
                      <td>13.5</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>6.5</td>
                      <td>9</td>
                      <td>11.5</td>
                      <td>14</td>
                    </tr>
                    <tr>
                      <td>4.5</td>
                      <td>7</td>
                      <td>9.5</td>
                      <td>12</td>
                      <td>14.5</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>7.5</td>
                      <td>10</td>
                      <td>12.5</td>
                      <td>15</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </aside>
            <aside class="ps-widget--sidebar">
              <div class="ps-widget__header">
                <h3>Color</h3>
              </div>
              <div class="ps-widget__content">
                <ul class="ps-list--color">
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                </ul>
              </div>
            </aside>
          </div>
          <!--aside.ps-widget--sidebar-->
          <!--    .ps-widget__header: h3 Ads Banner-->
          <!--    .ps-widget__content-->
          <!--        a(href='product-listing'): img(src="images/offer/sidebar.jpg" alt="")-->
          <!---->
          <!--aside.ps-widget--sidebar-->
          <!--    .ps-widget__header: h3 Best Seller-->
          <!--    .ps-widget__content-->
          <!--        - for (var i = 0; i < 3; i ++)-->
          <!--            .ps-travel--sidebar-->
          <!--                .ps-travel__thumbnail-->
          <!--                    a(href='#')-->
          <!--                    img(src="images/travel/sidebar/"+(i+1)+".jpg" alt="")-->
          <!--                .ps-travel__content-->
          <!--                    if i == 1-->
          <!--                        a(href='#').ps-travel__title Nike Flight Bonafide-->
          <!--                    else if i == 2-->
          <!--                        a(href='#').ps-travel__title Nike Sock Dart QS-->
          <!--                    else-->
          <!--                        a(href='#').ps-travel__title Men's Sky-->
          <!--                    p <del> £253.00</del> £152.00-->
          <!--                    a(href='#').ps-btn PURCHASE-->
        </div>
      </div>
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Sign up now</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header><a class="ps-logo" href="index.php"><img src="images/logo-white.png" alt=""></a>
                        <h3 class="ps-widget__title">Address Office 1</h3>
                      </header>
                      <footer>
                        <p><strong>460 West 34th Street, 15th floor, New York</strong></p>
                        <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                        <p>Phone: +323 32434 5334</p>
                        <p>Fax: ++323 32434 5333</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info second">
                      <header>
                        <h3 class="ps-widget__title">Address Office 2</h3>
                      </header>
                      <footer>
                        <p><strong>PO Box 16122 Collins  Victoria 3000 Australia</strong></p>
                        <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                        <p>Phone: +323 32434 5334</p>
                        <p>Fax: ++323 32434 5333</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Find Our store</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--link">
                          <li><a href="#">Coupon Code</a></li>
                          <li><a href="#">SignUp For Email</a></li>
                          <li><a href="#">Site Feedback</a></li>
                          <li><a href="#">Careers</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Get Help</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Order Status</a></li>
                          <li><a href="#">Shipping and Delivery</a></li>
                          <li><a href="#">Returns</a></li>
                          <li><a href="#">Payment Options</a></li>
                          <li><a href="#">Contact Us</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Products</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">travels</a></li>
                          <li><a href="#">Clothing</a></li>
                          <li><a href="#">Accessries</a></li>
                          <li><a href="#">Football Boots</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <p>&copy; <a href="#">SKYTHEMES</a>, Inc. All rights Resevered. Design by <a href="#"> Alena Studio</a></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <ul class="ps-social">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- JS Library-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>