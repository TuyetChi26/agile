<?php require_once 'layout/header.php' ?>

<?php require_once 'layout/menu.php' ?>

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?= BASE_URL . '?act=shop' ?>">Shop</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <!-- sidebar area start -->
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="sidebar-wrapper">
                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <h5 class="sidebar-title">categories</h5>
                            <div class="sidebar-body">
                                <ul class="shop-categories">
                                    <?php foreach ($listDanhMuc as $danhMuc): ?>
                                        <?php
                                        // Đếm số sản phẩm trong danh mục
                                        $count = 0;
                                        foreach ($listSanPham as $sanPham) {
                                            if ($sanPham['id_danh_muc'] == $danhMuc['id']) {
                                                $count++;
                                            }
                                        }
                                        ?>
                                        <li>
                                            <a href="<?= BASE_URL . '?act=shop&category=' . $danhMuc['id']; ?>">
                                                <?php echo $danhMuc['categoryName']; ?> <span>(<?php echo $count; ?>)</span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->
                    </aside>
                </div>
                <!-- sidebar area end -->

                <!-- shop main wrapper start -->
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="shop-product-wrapper">
                        <!-- shop product top wrap start -->
                        <div class="shop-top-bar">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                    <div class="product-topbar">
                                        <!-- Total Products -->
                                        <div class="total-products">
                                            <p><span><?php echo count($listSanPham); ?></span> sản phẩm</p>
                                            <?php if (isset($_GET['search'])): ?>
                                                <p>Kết quả tìm kiếm cho: "<?php echo htmlspecialchars($_GET['search']); ?>"</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop product top wrap start -->

                        <!-- product item list wrapper start -->
                        <div class="shop-product-wrap grid-view row mbn-30">
                            <?php foreach ($listSanPham as $sanPham): ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="<?= BASE_URL . '?act=show&id_san_pham=' . $sanPham['id'] ?>">
                                                <img style="height: 300px;" class="pri-img" src="<?= $sanPham['hinh_anh'] ?>" alt="product">
                                                <img style="height: 300px;" class="sec-img" src="<?= $sanPham['hinh_anh'] ?>" alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <?php
                                                $ngayNhap = new DateTime($sanPham['ngay_nhap']);
                                                $ngayHienTai = new DateTime();
                                                $tinhNgay = $ngayHienTai->diff($ngayNhap);

                                                if ($tinhNgay->days <= 7) {
                                                ?>
                                                    <div class="product-label new">
                                                        <span>Mới</span>
                                                    </div>
                                                <?php
                                                }
                                                if ($sanPham['gia_khuyen_mai']) {
                                                ?>
                                                    <div class="product-label discount">
                                                        <span>Giảm giá</span>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">
                                                    <a href="<?= BASE_URL . '?act=show&id_san_pham=' . $sanPham['id']; ?>">Xem chi tiết</a>
                                                </button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="product-name">
                                                <a href="<?= BASE_URL . '?act=show&id_san_pham=' . $sanPham['id']; ?>"><?= $sanPham['ten_san_pham'] ?></a>
                                            </h6>
                                            <div class="price-box">
                                                <?php if ($sanPham['gia_khuyen_mai']) { ?>
                                                    <span class="price-regular"><?= number_format($sanPham['gia_khuyen_mai'], 0, ',', '.') . 'đ'; ?></span>
                                                    <span class="price-old"><del><?= number_format($sanPham['gia'], 0, ',', '.') . 'đ'; ?></del></span>
                                                <?php } else { ?>
                                                    <span class="price-regular"><?= number_format($sanPham['gia'], 0, ',', '.') . 'đ' ?></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- product item list wrapper end -->

                        <!-- start pagination area -->
                        <?php if ($totalPages > 1): ?>
                            <div class="paginatoin-area text-center">
                                <ul class="pagination-box">
                                    <?php
                                    $startPage = max(1, $currentPage - 2);
                                    $endPage = min($totalPages, $currentPage + 2);

                                    // Link previous page
                                    if ($currentPage > 1) {
                                        echo '<li><a href="' . BASE_URL . '?act=shop&page=' . ($currentPage - 1) . '&search=' . urlencode($searchTerm) . '&category=' . urlencode($category) . '"><i class="fa fa-angle-left"></i></a></li>';
                                    }

                                    // Display page numbers
                                    for ($i = $startPage; $i <= $endPage; $i++) {
                                        if ($i == $currentPage) {
                                            echo '<li class="active"><a href="#">' . $i . '</a></li>';
                                        } else {
                                            echo '<li><a href="' . BASE_URL . '?act=shop&page=' . $i . '&search=' . urlencode($searchTerm) . '&category=' . urlencode($category) . '">' . $i . '</a></li>';
                                        }
                                    }

                                    // Link next page
                                    if ($currentPage < $totalPages) {
                                        echo '<li><a href="' . BASE_URL . '?act=shop&page=' . ($currentPage + 1) . '&search=' . urlencode($searchTerm) . '&category=' . urlencode($category) . '"><i class="fa fa-angle-right"></i></a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <!-- end pagination area -->
                    </div>
                </div>
                <!-- shop main wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->
</main>

<?php require_once 'layout/footer.php' ?>