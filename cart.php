<?php include 'partials/header.php' ?>
<?php
$scripts[] = 'cart.js';
?>
<main class="cart-main container">
    <div class="cart-container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody id="kolicaTabela">
                <tr>
                    <th scope="row">1</th>
                    <td><img src="img/boots.jpg" alt="" height="30px"></td>
                    <td>Boots</td>
                    <td>$120</td>
                    <td>2</td>
                    <td>$240</td>
                    <td><button class="btn btn-danger">X</button></td>
                </tr>
            </tbody>
        </table>

        <button class="clear-cart btn btn-danger" onClick="isprazniKorpu()">Clear cart</button>
    </div>

</main>

<?php
$hideSubscribe = true;
?>

<?php include 'partials/footer.php' ?>