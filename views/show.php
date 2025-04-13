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
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="shop.html">shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $products['categoryName'] ?></li>
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
                                            <span class="price-regular"><?= $products['gia_khuyen_mai'] ?></span>
                                            <span class="price-old"><del><?= $products['gia'] ?></del></span>
                                        </div>
                                        
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <h6 class="option-title">Số lượng:</h6>
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </div>
                                            
                                        </div>
                                        <div class="pro-size">
                                            <h6 class="option-title">size :</h6>
                                            <select class="nice-select">
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                        </div>

                                        

                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <div class="action_link">
                                                <a class="btn btn-cart2" href="#" style="margin: 10px;">Thêm vào giỏ hàng</a>
                                        </div>

                                        <div class="action_link">
                                                <a class="btn btn-cart2" href="#">Mua ngay</a>
                                        </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews section-padding pb-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-bs-toggle="tab" style="background-color: yellowgreen;">Mô tả</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p><?= $products['mo_ta'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details reviews end -->
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

                        <?php foreach($listSanPham as $key => $sanPham) : ?>
                        <!-- product item start -->
                        <div class="product-item">
                        <figure class="product-thumb">
                            <a href="<?= BASE_URL . '?act=show&id_san_pham=' . $sanPham['id'] ?>">
                            <img style="height: 300px;" class="pri-img" src="<?= $sanPham['hinh_anh'] ?>" alt="product">
                            <img style="height: 300px;" class="sec-img" src="<?= $sanPham['hinh_anh'] ?>" alt="product">
                            </a>
                            <div class="product-badge">
                            <div class="product-label new">
                                <span>new</span>
                            </div>
                            </div>
                            <div class="button-group">
                            <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                            <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                            </div>
                            <div class="cart-hover">
                            <button class="btn btn-cart">Thêm vào giỏ hàng</button>
                            </div>
                        </figure>
                        <div class="product-caption text-center">
                            <h6 class="product-name">
                            <a href="<?= BASE_URL . '?act=show&id_san_pham' . $sanPham['id']; ?>"><?= $sanPham['ten_san_pham'] ?></a>
                            </h6>
                            <div class="price-box">
                            <span class="price-regular"><?= $sanPham['gia_khuyen_mai'] ?></span>
                            <span class="price-old"><del><?= $sanPham['gia'] ?></del></span>
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