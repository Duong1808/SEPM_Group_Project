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
    <link rel="stylesheet" href="http://localhost/plants/public/css/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <div id="page" class="page-category">
        <?php include __DIR__ . '/../inc/header.php'; ?>

        <main>
            <!-- <div class="single-product">
                <div class="container">
                    <div class="wrapper">
                        <div class="breadcrumb">
                            <ul class="flexitem">
                                <li><a href="">Home</a></li>
                                <li><a href="">Rose</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container">
                <div class="wrap">
                    <div class="content">
                        <div class="category-content">
                            <!-- <div class="sorter">
                                <a href="#0" class="menu-trigger"><i class="ri-filter-line"></i></a>
                                <div class="sort-list">
                                    <div class="wrap">
                                        <div class="opt-trigger">
                                            <span class="grey-color">Showing 9 of N results</span>
                                        </div>
                                        <ul>
                                            <li class="active"><a href=""></a></li>
                                            <li><a href=""></a></li>
                                            <li><a href=""></a></li>
                                            <li><a href=""></a></li>
                                            <li><a href=""></a></li>
                                            <li><a href=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="list-inline">
                                    <ul>
                                        <list><a href=""><i class="ri-pause-mini-line"></i></a></list>
                                        <list><a href=""><i class="ri-list-check-2"></i></a></list>
                                        <list><a href=""><i class="ri-layout-grid-line"></i></a></list>
                                        <list><a href=""><i class="ri-layout-masonry-line"></i></a></list>
                                    </ul>
                                </div>
                            </div> -->


                            <div class="dotgrid">
                                <?php
                                $plant_count = 0; // Biến đếm số lượng plant đã được hiển thị trong wrapper hiện tại
                                foreach ($data['plants'] as $plant) {
                                    if ($plant_count == 0) {
                                        // Bắt đầu một wrapper mới
                                        echo '<div class="wrapper">';
                                    }
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
                                <div class="item">
                                    <div class="dot-image">
                                        <a href="#" class="plant-permalink"></a>
                                        <div class="thumbnail">
                                            <img src="<?php echo $image_url; ?>" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href="<?php echo url('/detail/' .  $plant_id); ?>"><i
                                                            class="ri-eye-line"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href=""><?php echo $genus_name; ?></a></h2>
                                    </div>
                                </div>
                                <?php
                                    $plant_count++;

                                    if ($plant_count == 3) {
                                        // Kết thúc wrapper hiện tại và đặt lại biến đếm về 0
                                        echo '</div>';
                                        $plant_count = 0;
                                    }
                                }

                                // Kiểm tra nếu có plant còn sót lại trong wrapper cuối cùng
                                if ($plant_count > 0) {
                                    // Kết thúc wrapper cuối cùng nếu có plant còn sót lại
                                    echo '</div>';
                                }
                                ?>
                            </div>

                            <!-- <div class="button"><a href="" class="primary-btn">Load more</a></div> -->
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