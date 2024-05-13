<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloomBuddy|Start your plant journey now</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="css/plant-searching.css">
</head>


<body>
    <!-- Header session start -->
    <div class="header">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#Blog">Blog</a></li>
            <li><a href="plantsearching.html">Plant Information</a></li>
            <li><a href="#reviews"> Our customer </a></li>
        </ul>
        <h2>Bloom<span>Buddy</span></h2>
        <form action="<?php echo url('/category'); ?>" method="GET">
            <div class="search">
                <div class="search-icon material-symbols-outlined">search</div>
                <input class="search-input" type="text" name="name" placeholder="Find your plant">
            </div>
        </form>

    </div>

    <section class="home" id="home">
    </section>
</body>