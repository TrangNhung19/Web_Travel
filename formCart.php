<?php
require_once("backend/auth.php");
require_once("repository/cartRepository.php");
require_once("repository/travelRepository.php");

$cartRepository = new CartRepository();
$travelRepository = new travelRepository();

$infoUser = Auth::loginWithCookie();

?>
<?php
    if($infoUser!=null){
        $cartList = $cartRepository->findByUserIdAndStatus($infoUser['id'],1);
?>
<div class="ps-cart__listing">
    <div class="ps-cart__content">
        <?php
        $sumPrice=0;
        foreach($cartList as $cart){
            $travel = $travelRepository->getById($cart['travel_id'])->fetch_assoc();
            $sumPrice+=$travel['price'] - $travel['price']*$travel['sale']*0.01;
            $arrLinkImage = $travelRepository->getImage($travel['travel_id']);
            if($arrLinkImage->num_rows > 0){
                $travel_image= $arrLinkImage->fetch_assoc()['link_image'];
            }
            else{
                $travel_image= "images/cart-preview/1.jpg";
            }
        ?>
        <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
            <div class="ps-cart-item__thumbnail"><a href="product-detail.php"></a><img src="<?php echo $travel_image ?>" alt=""></div>
            <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.php"><?php echo $travel['travel_name'] ?></a>
            <p><span>Price:<i><?php echo $travel['price'] - $travel['price']*$travel['sale']*0.01 ?> VND</i></span></p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="ps-cart__total">
        <p>Number of items:<span><?php echo $cartList->num_rows ?></span></p>
        <p>Item Total:<span><?php echo $sumPrice ?> VND</span></p>
    </div>
    <div class="ps-cart__footer"><a class="ps-btn" href="cart.php">Check out<i class="ps-icon-arrow-left"></i></a></div>
</div>
<?php
    }
?>