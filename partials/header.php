<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <?php if (isset($useCarousel)): ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <?php endif; ?>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Hiking shop but mine</title>
</head>

<body>

    <!-- Top bar -->
    <section class="topbar">
        <h1>
            <a href="" class="hiking-shop">
                <i class="fas fa-hiking"></i>&nbsp;Hiking shop
            </a>
        </h1>

    </section>
    <?php include 'partials/nav.php' ?>