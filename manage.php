<?php include 'partials/header.php' ?>
<?php
$scripts[] = 'manage.js';
?>
<main class="manage-main">


    <section class="container">
        <h3 id="naslov-forme">New Product</h3>

        <form method="post" enctype="multipart/form-data" action="http://localhost:3000/add">
            <div class="form-part">

                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="form-name" class="form-control">

            </div>
            <div class="form-part">

                <label for="" class="form-label">Price</label>
                <input type="number" name="price" id="form-price" class="form-control">

            </div>
            <div class="form-part">

                <label for="" class="form-label">Description</label>
                <input type="text" name="desc" id="form-description" class="form-control">

            </div>
            <div class="form-part">

                <label for="" class="form-label">Category</label>
                <input type="text" name="category" id="form-category" class="form-control">

            </div>
            <div class="form-part">

                <label for="" class="form-label">Qty</label>
                <input type="number" name="qty" id="form-qty" class="form-control">

            </div>
            <div class="form-part">

                <label for="" class="form-label" id="label-image">Image</label>
                <input type="file" name="img" id="form-image" class="form-control">

            </div>
            <div class="button-add-item">
                <input type="submit" value="Add item" class="btn  btn-primary add-btn" id="add-btn">
            </div>

        </form>
        <div class="hiddenButtons">
            <div class="partialHiddenButton">
                <button class="btn btn-warning" id="save-btn" hidden>Save</button>
            </div>
            <div class="partialHiddenButton">
                <button class="btn btn-danger" id="cancel-btn" hidden>Cancel</button>
            </div>
        </div>

    </section>

    <section class="container-table">

        <table class="edit-table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <!-- <th scope="col">Unit Price</th> -->
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">View</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody id="proizvodiTabela">
                <tr>
                <tr>
                    <th scope="row">1</th>
                    <td><img src="img/boots.jpg" alt="" height="30px"></td>
                    <td>2</td>
                    <td>quantity</td>
                    <td>$120</td>
                    <td><button class="btn btn-info" onClick="vidiProizvod(${proizvod.id})">View</button></td>
                    <td><button class="btn btn-warning" onClick="urediProizvod(${proizvod.id})">Edit</button></td>
                    <td><button class="btn btn-danger" onClick="ukloniProizvod(${proizvod.id})">Delete</button></td>
                </tr>

                </tr>
            </tbody>
        </table>

    </section>

</main>

<?php
$hideSubscribe = true;
?>

<?php include 'partials/footer.php' ?>