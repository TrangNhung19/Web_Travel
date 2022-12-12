<?php
    require_once("repository/cartRepository.php");
    $cartRepository = new CartRepository();
    $cartRepository->deleteByUserIdAndtravelId($_GET['userId'],$_GET['travelId']);
    echo "<script>alert('Xóa thành công');
        window.location.href='cart.php';
        </script>";
?>