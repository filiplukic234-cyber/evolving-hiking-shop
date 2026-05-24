<footer>

    <?php if ($hideSubscribe == false): ?>

        <section class="subscribe">
            <h3>Subscribe on Hiking shop now!</h3>
            <p class="loremSubscribe">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br> Fuga accusantium labore
                voluptatum laudantium
                id, rem optio nemo minus voluptatibus voluptas.
            </p>
            <input type="email" placeholder="Your email" class="emailInput">
            <button type="submit" class="subscribeButton">Subscribe!</button>
        </section>


    <?php endif; ?>



    <article class="container">
        <h2 class="hiking-shop">
            <a href="" class="hiking-shop">
                <i class="fas fa-hiking"></i>&nbsp;Hiking shop
            </a>
        </h2>
        <?php include 'partials/nav.php' ?>
        <div class="icons">
            <a href=""><i class="fab fa-facebook-square"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-pinterest"></i></a>
        </div>
    </article>

    <article class="hiking-shop">
        <p>&copy; Hiking shop 2021.</p>
    </article>
</footer>

    <?php if (isset($useCarousel)): ?>

   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <?php endif; ?>

<?php if (!empty($scripts)): ?>
    <?php foreach ($scripts as $script): ?>
        <script src="<?= './js/' . $script ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>

</html>