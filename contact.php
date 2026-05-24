<?php include 'partials/header.php' ?>
<main class="contact-main small-dash-before">
    <h2>Contact us</h2>
    <article class="contact-article">
        <div class="contact-article-part part-1">
            <!-- <img src="./img/about.jpg" alt="" class="about-img"> -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2808.5301886176453!2d19.8503584!3d45.257292299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b1066090a7219%3A0xf05b709a8e7ae221!2z0KLRgNCzINCg0LXQv9GD0LHQu9C40LrQtSAyMCwg0J3QvtCy0Lgg0KHQsNC0IDIxMDAw!5e0!3m2!1ssr!2srs!4v1779123618599!5m2!1ssr!2srs"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-article-part part-2">
            <input type="text" class="contact-input" placeholder="Name">
            <br>
            <input type="email" class="contact-input" placeholder="Email">
            <br>
            <input type="text" class="contact-input" placeholder="Message...">
            <button type="submit" class="emailInputButton">Send message</button>
            <hr>
            <div class="line-icons-about icons">
                <p class="Find us">
                    Find us on:
                </p>
                <div class="icons-only">
                    <a href=""><i class="fab fa-facebook-square"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </article>
</main>

<?php
$hideSubscribe = true;
?>

<?php include 'partials/footer.php' ?>