<!-- Start Header Area -->
<header class="header-area header-wide">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">

        <!-- header middle area start -->
        <div class="header-main-area sticky">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <!-- start logo area -->
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="<?= BASE_URL ?>">
                                <img src="assets/img/logo/z6475862695475_9f0cb8d5df52f316faffc8a2459e5e6f-removebg-preview.png">
                            </a>
                        </div>
                    </div>
                    <!-- start logo area -->

                    <!-- main menu area start -->
                    <div class="col-lg-6 position-static">
                        <div class="main-menu-area">
                            <div class="main-menu">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li><a href="<?= BASE_URL ?>">Trang Chủ</a></li>

                                        <li><a href="<?= BASE_URL . '?act=shop' ?>">Thời Trang<i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">

                                                <?php foreach ($listDanhMuc as $key => $DanhMuc) : ?>

                                                    <li><a href="<?= BASE_URL . '?act=shop&category=' . $DanhMuc['id'] ?>"><?= $DanhMuc['categoryName'] ?></a></li>

                                                <?php endforeach; ?>

                                            </ul>
                                        </li>

                                        <li><a href="<?= BASE_URL . '?act=cart' ?>">Giỏ hàng </a></li>

                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                    <!-- main menu area end -->

                    <!-- mini cart area start -->
                    <div class="col-lg-4">
                        <div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                            <div class="header-search-container">
                                <button class="search-trigger d-xl-none d-lg-block"><i class="pe-7s-search"></i></button>
                                <form class="header-search-box d-lg-none d-xl-block" action="<?= BASE_URL . '?act=shop' ?>" method="GET">
                                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm...." class="header-search-field">
                                    <button type="submit" class="header-search-btn"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">
                                    <li class="user-hover">
                                        <a href="">
                                            <i class="pe-7s-user"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <?php if (isset($_SESSION['user'])): ?>
                                                <span>Xin chào, <?= htmlspecialchars($_SESSION['user']['fullname']); ?></span>
                                                <li><a href="<?= BASE_URL . '?act=logout' ?>"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
                                                <li><a href="<?= BASE_URL . '?act=show-profile' ?>">Tài khoản của tôi</a></li>
                                            <?php else: ?>
                                                <li><a href="<?= BASE_URL . '?act=login' ?>">Đăng nhập</a></li>
                                                <li><a href="<?= BASE_URL . '?act=register' ?>">Đăng ký</a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- mini cart area end -->

                </div>
            </div>
        </div>
        <!-- header middle area end -->
    </div>
    <!-- main header start -->

</header>
<!-- end Header Area -->