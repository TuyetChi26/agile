<?php require_once 'layout/header.php'; ?>

<?php require_once 'layout/menu.php'; ?>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php BASE_URL ?>"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item " aria-current="page"><a href="<?= BASE_URL . '?act=shop' ?>">Shop</a></li>
                                <li class="breadcrumb-item " aria-current="page"><?= $products['categoryName'] ?></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $products['ten_san_pham'] ?></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-padding pb-0">
        <div class="container">
            <div class="row">
                <!-- product details wrapper start -->
                <div class="col-lg-12 order-1 order-lg-2">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">
                                    <div class="pro-large-img img-zoom">
                                        <img src="<?= $products['hinh_anh'] ?>" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="<?= $products['hinh_anh'] ?>" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="<?= $products['hinh_anh'] ?>" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="<?= $products['hinh_anh'] ?>" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="<?= $products['hinh_anh'] ?>" alt="product-details" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <div class="pro-nav-thumb">
                                        <img src="<?= $products['hinh_anh'] ?>" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="<?= $products['hinh_anh'] ?>" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="<?= $products['hinh_anh'] ?>" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="<?= $products['hinh_anh'] ?>" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="<?= $products['hinh_anh'] ?>" alt="product-details" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="manufacturer-name">
                                    <a href="#"> <?= $products['categoryName'] ?></a>
                                </div>
                                <div class="product-details-des">
                                    <h3 class="product-name"><?= $products['ten_san_pham'] ?></h3>
                                    <div class="ratings d-flex">
                                        <span><i class="fa fa-star-o"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <?php if ($products['gia_khuyen_mai']) { ?>
                                            <span class="price-regular"><?= number_format($products['gia_khuyen_mai'], 0, ',', '.') . 'đ'; ?></span>
                                            <span class="price-old"><del><?= number_format($products['gia'], 0, ',', '.') . 'đ'; ?></del></span>
                                        <?php } else { ?>
                                            <span class="price-regular"><?= number_format($products['gia'], 0, ',', '.') . 'đ' ?></span>
                                        <?php } ?>
                                    </div>
                                    <div class="availability">
                                        <i class="fa fa-check-circle"></i>
                                        <span><?= $products['so_luong'] . ' trong kho' ?></span>
                                    </div>
                                    <p class="pro-desc"><?= $products['mo_ta'] ?></p>
                                    <form action="<?= BASE_URL . '?act=add-cart' ?>" method="POST">
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <h6 class="option-title">Số lượng:</h6>
                                            <div class="quantity">
                                                <input type="hidden" name="product_id" value="<?= $products['id'] ?>">

                                                <div class="pro-qty"><input type="number" value="1" name="so_luong" min="1"></div>
                                            </div>
                                            <div class="action_link">
                                                <button class="btn btn-cart2" style="margin: 10px;">Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="action_link">
                                        <a class="btn btn-cart2" href="#">Mua ngay</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details inner end -->
            </div>
            <!-- product details wrapper end -->
        </div>
    </div>
    </div>
    <!-- page main wrapper end -->

    <!-- related products area start -->
    <section class="related-products section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Sản Phẩm Liên Quan</h2>
                        <p class="sub-title">Add related products to weekly lineup</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-carousel-4 slick-row-10 slick-arrow-style">

                        <?php foreach ($category as $key => $product) : ?>
                            <!-- product item start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="<?= BASE_URL . '?act=show&id_san_pham=' . $product['id'] ?>">
                                        <img class="pri-img" style="height: 300px;" class="pri-img" src="<?= $product['hinh_anh'] ?>" alt="product">
                                        <img class="sec-img" style="height: 300px;" class="sec-img" src="<?= $product['hinh_anh'] ?>" alt="product">
                                    </a>
                                    <div class="product-badge">
                                        <?php
                                        $ngayNhap = new DateTime($product['ngay_nhap']);
                                        $ngayHienTai = new DateTime();
                                        $tinhNgay = $ngayHienTai->diff($ngayNhap);

                                        if ($tinhNgay->days <= 7) {
                                        ?>
                                            <div class="product-label new">
                                                <span>Mới</span>
                                            </div>
                                        <?php
                                        }
                                        if ($product['gia_khuyen_mai']) {
                                        ?>
                                            <div class="product-label discount">
                                                <span>Giảm giá</span>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="cart-hover">
                                        <button class="btn btn-cart">
                                            <a href="<?= BASE_URL . '?act=show&id_san_pham=' . $product['id']; ?>">Xem chi tiết</a> </button>
                                    </div>
                                </figure>
                                <div class="product-caption text-center">
                                    <h6 class="product-name">
                                        <a href="<?= BASE_URL . '?act=show&id_san_pham=' . $product['id']; ?>"><?= $product['ten_san_pham'] ?></a>
                                    </h6>
                                    <div class="price-box">
                                        <?php if ($product['gia_khuyen_mai']) { ?>
                                            <span class="price-regular"><?= number_format($product['gia_khuyen_mai'], 0, ',', '.') . 'đ'; ?></span>
                                            <span class="price-old"><del><?= number_format($product['gia'], 0, ',', '.') . 'đ'; ?></del></span>
                                        <?php } else { ?>
                                            <span class="price-regular"><?= number_format($product['gia'], 0, ',', '.') . 'đ' ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!-- product item end -->
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- related products area end -->
</main>

<?php require_once 'layout/footer.php'; ?>