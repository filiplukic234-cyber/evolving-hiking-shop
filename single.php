<?php include 'partials/header.php' ?>
<?php
$scripts[] = 'single.js';
$scripts[] = 'carousel.js';
?>
<main class="single-main container small-dash-before">
    <h2>Single product</h2>
    <article>
        <div id="slika">
            <!-- <img src="img/boots.jpg" alt="BootsPhoto"> -->
        </div>
        <div>
            <h3 id="naziv">Boots</h3>
            <div class="cena">Price: $<span id="cena">$210</span></div>
            <p id="opis">Description. IF YOU CAN SEE THIS, THE SERVER IS UNAVAILABLE</p>
            <form id="forma">
                <label>Quantity</label>
                <select id="qty" name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <button type="submit">Order now</button>
            </form>
            <hr>
            <p>Category:
            <div id="kategorije">
                <a href="">Here should be categories (link)</a>
            </div>
            </p>
            <hr>
            <span>Share:</span>
            <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
            <span><a href=""><i class="fab fa-instagram"></i></a></span>
            <span><a href=""><i class="fab fa-twitter"></i></a></span>
            <span><a href=""><i class="fab fa-pinterest"></i></a></span>
        </div>
    </article>
</main>

<?php
$hideSubscribe = true;
?>

<?php include 'partials/footer.php' ?>