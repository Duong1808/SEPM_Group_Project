<header>
    <div class="inner-header">
        <div class="container wide">
            <div class="wrap">
                <div class="header-left">
                    <div class="menu-bar">
                        <a href="#0" class="menu-trigger" trigger-button data-target="mobile-menu"><i
                                class="ri-menu-line"></i></a>
                    </div>
                    <div class="list-inline">
                        <ul>
                            <li><a href=""><i class="ri-user-line"></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-center">
                    <nav class="menu">
                        <ul>
                            <li><a href="<?php echo url(''); ?>"><span>Home</span></a></li>
                            <li><a href="">
                                    <span>Plants</span>
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="sub-mega">
                                    <li>
                                        <div class="container">
                                            <div class="wrapper">
                                                <div class="mega-content">
                                                    <div class="links">
                                                        <div class="list-block">
                                                            <?php
                                                            // Khởi tạo biến để lưu trữ chữ cái đầu tiên của danh mục hiện tại
                                                            $current_letter = '';

                                                            // Lặp qua danh sách các danh mục và thu thập tên các danh mục vào một mảng
                                                            $category_names = array();
                                                            foreach ($data['categories'] as $category) {
                                                                $category_name = $category['name'];
                                                                $first_letter = strtoupper(substr($category_name, 0, 1)); // Lấy chữ cái đầu và chuyển thành chữ hoa

                                                                // Kiểm tra nếu chữ cái đầu tiên của danh mục khác với chữ cái đầu tiên của danh mục trước đó
                                                                if ($first_letter !== $current_letter) {
                                                                    // Nếu là chữ cái đầu tiên mới, đóng khối danh mục trước (nếu có)
                                                                    if (!empty($current_letter)) {
                                                                        echo '</ul>'; // Đóng danh sách ul của khối danh mục trước
                                                                        echo '</div>'; // Đóng khối div của danh mục trước
                                                                    }

                                                                    // Mở khối mới cho nhóm danh mục mới có chữ cái đầu là $first_letter
                                                                    echo '<div class="category-block">';
                                                                    echo '<h3 class="dot-title">' . $first_letter . '</h3>'; // Tiêu đề khối là chữ cái đầu tiên
                                                                    echo '<ul>'; // Bắt đầu danh sách ul mới cho nhóm danh mục
                                                                    $current_letter = $first_letter; // Cập nhật chữ cái đầu tiên hiện tại
                                                                }

                                                                // Thêm danh mục vào danh sách ul của nhóm hiện tại
                                                                echo '<li><a href="">' . $category_name . '</a></li>';
                                                            }

                                                            // Đóng khối danh mục cuối cùng
                                                            if (!empty($current_letter)) {
                                                                echo '</ul>'; // Đóng danh sách ul của khối danh mục cuối cùng
                                                                echo '</div>'; // Đóng khối div của danh mục cuối cùng
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li><a href="">
                                    <span>Blog</span>

                                </a>

                            </li>
                        </ul>
                    </nav>
                    <div class="branding"><a href="">BloomBuddy</a></div>
                </div>
                <div class="header-right">
                    <div class="list-inline">
                        <ul>
                            <li><a href="<?php echo url('/search'); ?>" trigger-button data-target="search-float"><i
                                        class="ri-search-line"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="search-float" class="search-float">
            <div class="ontainer wide">
                <form action="" class="search">
                    <i class="ri-search-line"></i>
                    <input type="search" class="input" id="" placeholder="Search">
                    <i class="ri-close-line" close-button></i>
                </form>
            </div>
        </div>
    </div>

</header>