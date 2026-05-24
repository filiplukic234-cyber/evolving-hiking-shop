<?php
$useCarousel = true;
include 'partials/header.php';
$scripts[] = 'index.js';
?>

<!-- Header -->
<header>
    <div class="container">
        <article class="header-article">
            <h1 class="small-dash-after">Online outdoor shop, buy online outdoor clothing & trekking</h1>
            <p class="loremHeader">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eaque nisi minus iusto enim
                sapiente.
                Unde ea, corporis quaerat laboriosam est, laborum molestias sapiente qui nostrum, saepe consequatur
                adipisci
                velit!
            </p>
            <a class="order-now" href="products.php">Order now</a>
        </article>
    </div>
</header>
<!-- Main -->

<main class="featured-items container small-dash-before">
    <h2>Featured items</h2>
    <article class="owl-carousel owl-theme" id="carousel-featured">
        <!-- This is how a single item should look -->
        <!-- <div class="item">
            <a href="single1.html">
                <img src="img/boots.jpg" alt="">
                <h3>Boots</h3>
                <p>$220</p>
            </a>
        </div> -->
    </article>
</main>
<?php
$scripts[] = 'carousel.js';
?>


<?php include 'partials/footer.php' ?>