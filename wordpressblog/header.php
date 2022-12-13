<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Complete Responsive Food Website Design Tutorial </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link  rel="stylesheet" href="<?php echo get_template_directory_uri();?> ./style.css" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <?php wp_head() ?>

</head>
<body>

<!-- header section starts -->

<header>

    <a href="#" class="logo"> <i class="fas fa-utensils"> </i> resto </a>

    <nav class="navbar">
        <a class="active" href="#home">home </a>
        <a href="#dishes"> dishes </a>
        <a href="#about"> about </a>
        <a href="#menu"> menu </a>
        <a href="#review"> review </a>
        <a href="#order"> order </a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends -->

<!-- search form -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"> </label>
    <i class="fas fa-times" id="close"> </i>
</form>