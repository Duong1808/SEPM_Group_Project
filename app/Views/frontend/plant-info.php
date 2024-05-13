<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloomBuddy | Start your plant journey now</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/plants/public/css/plant-info.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>

    <div id="page" class="page-single">
        <?php include __DIR__ . '/../inc/header.php'; ?>

        <main>
            <div class="single-product">
                <div class="container">
                    <div class="wrapper">
                        <!-- <div class="breadcrumb">
                            <ul class="flexitem">
                                <li><a href="">Home</a></li>
                                <li><a href="">Rose</a></li>
                                <li>Red Rose</li>
                            </ul>
                        </div> -->
                        <!-- Breadcrumb -->
                        <div class="column">
                            <div class="products one">
                                <div class="flexwrap">
                                    <?php
                                    // Lặp qua danh sách cây cảnh và hiển thị trong bảng
                                    foreach ($data['plants'] as $plant) {
                                        $plant_id = $plant['id'];
                                        $genus_name = $plant['genus_name'];
                                        $common_name = $plant['common_name'];
                                        $plant_type = $plant['plant_type'];
                                        $light = $plant['light'];
                                        $height = $plant['height'];
                                        $width = $plant['width'];
                                        $flower_color = $plant['flower_color'];
                                        $foliage_color = $plant['foliage_color'];
                                        $season_features = $plant['season_features'];
                                        $special_features = $plant['special_features'];
                                        $zones = $plant['zones'];
                                        $propagation = $plant['propagation'];
                                        $problem_solvers = $plant['problem_solvers'];
                                        $details = $plant['details'];
                                        $where_to_plant = $plant['where_to_plant'];
                                        $when_to_plant = $plant['when_to_plant'];
                                        $care_tips = $plant['care_tips'];
                                        $reputable_address = $plant['reputable_address'];
                                        $image_url = $plant['image_url'];
                                    ?>
                                    <div class="row">
                                        <div class="item is_sticky">
                                            <div class="big-image">
                                                <div class="big-image-wrapper swiper-wrapper">
                                                    <div class="image-show swiper-slide">
                                                        <a data-fslightbox><img src="<?php echo $image_url; ?>"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="item">
                                            <h1><?php echo $common_name; ?></h1>
                                            <div class="content">
                                                <div class="description collapse">
                                                    <ul>
                                                        <li class="has-child expand">
                                                            <a href="" class="icon-small">Information</a>
                                                            <ul class="content">
                                                                <li><span>GENUS NAME</span>
                                                                    <span><?php echo $genus_name; ?></span>
                                                                </li>
                                                                <li><span>COMMON NAME</span>
                                                                    <span><?php echo $common_name; ?></span>
                                                                </li>
                                                                <li><span>PLANT TYPE</span>
                                                                    <span><?php echo $plant_type; ?></span>
                                                                </li>
                                                                <li><span>LIGHT</span>
                                                                    <span><?php echo $light; ?>n</span>
                                                                </li>
                                                                <li><span>HEIGHT</span>
                                                                    <span><?php echo $height; ?></span>
                                                                </li>
                                                                <li><span>WIDTH</span>
                                                                    <span><?php echo $width; ?></span>
                                                                </li>
                                                                <li><span>FLOWER COLOR</span>
                                                                    <span><?php echo $flower_color; ?></span>
                                                                </li>
                                                                <li><span>FOLIAGE COLOR</span>
                                                                    <span><?php echo $foliage_color; ?></span>
                                                                </li>
                                                                <li><span>SEASON
                                                                        FEATURES</span><?php echo $season_features; ?>
                                                                    <span></span>
                                                                </li>
                                                                <li><span>SPECIAL FEATURES</span>
                                                                    <span><?php echo $special_features; ?></span>
                                                                </li>
                                                                <li><span>ZONES</span>
                                                                    <span><?php echo $zones; ?></span>
                                                                </li>
                                                                <li><span>PROPAGATION</span>
                                                                    <span><?php echo $propagation; ?></span>
                                                                </li>
                                                                <li><span>PROBLEM SOLVERS</span>
                                                                    <span><?php echo $problem_solvers; ?></span>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-child">
                                                            <a href="" class="icon-small">Details</a>
                                                            <div class="content">
                                                                <p><?php echo $details; ?></p>
                                                            </div>
                                                        </li>
                                                        <li class="has-child">
                                                            <a href="" class="icon-small">Where to Plant Rose</a>
                                                            <div class="content">
                                                                <p><?php echo $where_to_plant; ?></p>
                                                        </li>
                                                        <li class="has-child">
                                                            <a href="" class="icon-small">When and How to Plant Rose</a>
                                                            <div class="content">
                                                                <p><?php echo $when_to_plant; ?></p>
                                                        </li>
                                                        <li class="has-child expand">
                                                            <a href="" class="icon-small">Care Tips</a>
                                                            <div class="content">
                                                                <p><?php echo $care_tips; ?></p>

                                                            </div>

                                                        </li>
                                                        <li class="has-child">
                                                            <a href="" class="icon-small">Reputable address to buy
                                                                products</a>
                                                            <div class="content">
                                                                <p><?php echo $reputable_address; ?></p>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include __DIR__ . '/../inc/footer.php'; ?>

    </div>
    <div class="overlay" data-overlay></div>
    <div id="mobile-menu" class="mobile-menu">
        <div class="wrap">
            <a href="" class="close-trigger" close-button>
                <i class="ri-close-line"></i>
            </a>
            <div class="main-menu scrollto">
                <nav class="wrapper">
                    <ul>
                        <li><a href=""><span>Home</span></a></li>
                        <li class="has-child"><a href="">
                                <span>Plant</span>
                                <span class="child-trigger"><i class="ri-arrow-down-s-line"></i></span>
                            </a>
                            <ul class="sub-menu list-block">
                                <li><a href="#">African Daisy</a></li>
                                <li><a href="#">Aguja</a></li>
                                <li><a href="#">Amaranth</a></li>
                                <li><a href="#">Angelica</a></li>
                                <li><a href="#">Anemone</a></li>
                                <li><a href="#">Astilbe</a></li>

                                <li><a href="#">Ballon Flower</a></li>
                                <li><a href="#">Begonia</a></li>
                                <li><a href="#">Blueberry</a></li>
                                <li><a href="#">Basil</a></li>
                                <li><a href="#">Bacopa</a></li>
                                <li><a href="#">Beech</a></li>

                                <li><a href="#">Cotton</a></li>
                                <li><a href="#">Corn</a></li>
                                <li><a href="#">Clematis</a></li>
                                <li><a href="#">Cumin</a></li>
                                <li><a href="#">Carrot</a></li>

                                <li><a href="#">Daylily</a></li>
                                <li><a href="#">Dill</a></li>
                                <li><a href="#">Dahlia</a></li>
                                <li><a href="#">Dusty Miller</a></li>
                                <li><a href="#">Dianthus</a></li>


                            </ul>
                        </li>
                        <li><a href=""><span>Blog</span></a></li>


                </nav>
                <div class="button">
                    <a href="" class="secondary-btn">Login</a>
                    <a href="" class="primary-btn">Register</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/homepage.js"></script>
</body>

</html>