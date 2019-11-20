<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php

if (!isset($_SESSION['username'])){
    header('location: login.php');
}

if (isset($_GET['add_to_cart'])){


switch ($_GET['add_to_cart']){

    case 36:
        if (!isset($_COOKIE['cake36'])) {
            setcookie('cake36', 1, 0);
        } else{
            setcookie('cake36', $_COOKIE ['cake36']+1, 0);
        }
        break;
    case 32:
        if (!isset($_COOKIE['cake32'])){
        setcookie('cake32', 1, 0);
        } else{
            setcookie('cake32', $_COOKIE ['cake32']+1, 0);
        }
        break;
    case 46:
        if (!isset($_COOKIE['cake46'])){
            setcookie('cake46', 1, 0);
        } else{
            setcookie('cake46', $_COOKIE ['cake46']+1, 0);}
        break;
    case 58:
        if (!isset($_COOKIE['cake58'])){
            setcookie('cake58', 1, 0);
        } else{
            setcookie('cake58', $_COOKIE ['cake58']+1, 0);
        }
        break;
}
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
