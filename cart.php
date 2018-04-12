<?php require 'inc/head.php';

if(!isset($_SESSION['loginname'])){
    header('location:login.php');
}

?>
<section class="cookies container-fluid">
    <div class="row text-left">


        <div class="col-md-11 col-md-offset-1">
                <h1>Votre panier : </h1>
                <p><?= 'Pecan nuts : ' . ($_SESSION['Pecan nuts']);?></p>
                <p><?= 'Chocolate Chips : ' . ($_SESSION['Chocolate Chips']);?></p>
                <p><?= 'Chocolate cookie : ' . ($_SESSION['Chocolate cookie']);?></p>
                <p><?= 'M&M\'s© cookies : ' . ($_SESSION['M&M\'s© cookies']);?></p>
        </div>




    </div>
</section>
<?php require 'inc/foot.php'; ?>
