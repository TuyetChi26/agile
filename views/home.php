<?php require_once 'layout/header.php'; ?>

<?php require_once 'layout/menu.php'; ?>

<main>
  <!-- hero slider area start -->
  <section class="slider-area">
    <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
      <!-- single slider item start -->
      <div class="hero-single-slide hero-overlay">
        <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider_3.webp">
        </div>
      </div>
      <!-- single slider item start -->

      <!-- single slider item start -->
      <div class="hero-single-slide hero-overlay">
        <div class="hero-slider-item bg-img" data-bg="assets/img/slider/Sale_kinh_dien.jpg">
        </div>
      </div>
      <!-- single slider item start -->

      <!-- single slider item start -->
      <div class="hero-single-slide hero-overlay">
        <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider_2.webp">
        </div>
      </div>
      <!-- single slider item end -->
    </div>
  </section>
  <!-- hero slider area end -->




  <!-- service policy area start -->
  <div class="service-policy section-padding">
    <div class="container">
      <div class="row mtn-30">
        <div class="col-sm-6 col-lg-3">
          <div class="policy-item">
            <div class="policy-icon">
              <i class="pe-7s-plane"></i>
            </div>
            <div class="policy-content">
              <h6>Miễn phí ship</h6>
              <p>Miễn phí vận chuyển tất cả các đơn đặt hàng</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="policy-item">
            <div class="policy-icon">
              <i class="pe-7s-help2"></i>
            </div>
            <div class="policy-content">
              <h6>Hỗ trợ 24/7</h6>
              <p>Hỗ trợ 24 giờ một ngày</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="policy-item">
            <div class="policy-icon">
              <i class="pe-7s-back"></i>
            </div>
            <div class="policy-content">
              <h6>Hoàn tiền</h6>
              <p>30 ngày trả lại miễn phí</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="policy-item">
            <div class="policy-icon">
              <i class="pe-7s-credit"></i>
            </div>
            <div class="policy-content">
              <h6>Thanh toán an toàn 100%</h6>
              <p>Chúng tôi đảm bảo thanh toán an toàn</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- service policy area end -->

  <!-- banner statistics area start -->
  <div class="banner-statistics-area">
    <div class="container">
      <div class="row row-20 mtn-20">
        <div class="col-sm-6">
          <figure class="banner-statistics mt-20">
            <a href="#">
              <img style="height: 350px;" src="assets/img/banner/cach-phoi-do-voi-ao-blazer-3_3e59a8bb683a42c1ac69f3e66ee80fda.webp" alt="product banner">
            </a>
            <div class="banner-content text-right">
              <h2 class="banner-text2">Blazer</h2>
              <a href="shop.html" class="btn btn-text">Mua Ngay</a>
            </div>
          </figure>
        </div>
        <div class="col-sm-6">
          <figure class="banner-statistics mt-20">
            <a href="#">
              <img style="height: 350px;" src="assets/img/banner/vai-ni-2-da-mang-lai-chat-luong-tham-my-cao_74393883a6f14f81b2cedb83e370468b.webp" alt="product banner">
            </a>
            <div class="banner-content text-center">
              <h2 class="banner-text2">Vải Nỉ Double Face </h2>
              <a href="shop.html" class="btn btn-text">Mua Ngay</a>
            </div>
          </figure>
        </div>
      </div>
    </div>
  </div>
  <!-- banner statistics area end -->

  <!-- product area start -->
  <section class="product-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- section title start -->
          <div class="section-title text-center">
            <h2 class="title">Sản Phẩm Khuyển Mãi</h2>
          </div>
          <!-- section title start -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">

          <!-- product tab menu end -->

          <!-- product tab content start -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
              <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                <?php foreach($listSanPham as $key => $sanPham) : ?>
                <!-- product item start -->
                <div class="product-item">
                  <figure class="product-thumb">
                    <a href="<?= BASE_URL . '?act=show&id_san_pham=' . $sanPham['id'] ?>">
                      <img class="pri-img" style="height: 300px;" src="<?= $sanPham['hinh_anh'] ?>" alt="product">
                      <img class="sec-img" style="height: 300px;" src="<?= $sanPham['hinh_anh'] ?>" alt="product">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new">
                        <span>new</span>
                      </div>
                      <div class="product-label discount">
                        <span>Sale</span>
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
                    <span class="price-regular"><?= number_format($sanPham['gia_khuyen_mai'], 0, ',', '.') ?>₫</span>
                    <span class="price-old"><del><?= number_format($sanPham['gia'], 0, ',', '.') ?>₫</del></span>
                    </div>
                  </div>
                </div>

                <!-- product item end -->
                 
                <?php endforeach ?>

              </div>
            </div>
          </div>

          <!-- product tab content end -->
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- product area end -->

  <!-- product banner statistics area start -->
  <section class="product-banner-statistics">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- section title start -->
          <div class="section-title text-center">
            <h2 class="title">Danh Mục Sản Phẩm</h2>

          </div>
          <!-- section title start -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="product-banner-carousel slick-row-10">
            <!-- banner single slide start -->
            <div class="banner-slide-item">
              <figure class="banner-statistics">
                <a href="#">
                  <img src="assets/img/banner/home_category_1_img.webp" alt="product banner">
                </a>
                <div class="banner-content banner-content_style2">
                  <h5 class="banner-text3"><a href="#">Áo Polo</a></h5>
                </div>
              </figure>
            </div>
            <!-- banner single slide start -->
            <!-- banner single slide start -->
            <div class="banner-slide-item">
              <figure class="banner-statistics">
                <a href="#">
                  <img src="assets/img/banner/home_category_4_img.webp" alt="product banner">
                </a>
                <div class="banner-content banner-content_style2">
                  <h5 class="banner-text3"><a href="#">Quần Âu</a></h5>
                </div>
              </figure>
            </div>
            <!-- banner single slide start -->
            <!-- banner single slide start -->
            <div class="banner-slide-item">
              <figure class="banner-statistics">
                <a href="#">
                  <img src="assets/img/banner/home_category_2_img.webp" alt="product banner">
                </a>
                <div class="banner-content banner-content_style2">
                  <h5 class="banner-text3"><a href="#">Áo Thun</a></h5>
                </div>
              </figure>
            </div>
            <!-- banner single slide start -->
            <!-- banner single slide start -->
            <div class="banner-slide-item">
              <figure class="banner-statistics">
                <a href="#">
                  <img src="assets/img/banner/home_category_3_img.webp" alt="product banner">
                </a>
                <div class="banner-content banner-content_style2">
                  <h5 class="banner-text3"><a href="#">Quần Jeans</a></h5>
                </div>
              </figure>
            </div>
            <!-- banner single slide start -->
            <!-- banner single slide start -->
            <div class="banner-slide-item">
              <figure class="banner-statistics">
                <a href="#">
                  <img src="assets/img/banner/d1fda40c-032f-45c7-a8f9-10a0baa84925_5847796781c14dd6864216cbe5def5f3_master.webp" alt="product banner">
                </a>
                <div class="banner-content banner-content_style2">
                  <h5 class="banner-text3"><a href="#">Áo Khoác</a></h5>
                </div>
              </figure>
            </div>
            <!-- banner single slide start -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- product banner statistics area end -->

  <!-- featured product area start -->
  <section class="feature-product section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- section title start -->
          <div class="section-title text-center">
            <h2 class="title">Sản Phẩm Nổi Bật</h2>
            <p class="sub-title">Add featured products to weekly lineup</p>

          </div>
          <!-- section title start -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
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
  <!-- featured product area end -->

  <!-- latest blog area start -->
  <section class="latest-blog-area section-padding pt-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- section title start -->
          <div class="section-title text-center">
            <h2 class="title">Bài Viết Mới Nhất</h2>
            <p class="sub-title">Những bài viết mới nhất về sản phẩm của chúng tôi</p>
          </div>
          <!-- section title start -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="blog-carousel-active slick-row-10 slick-arrow-style">
            <!-- blog post item start -->
            <div class="blog-post-item">
              <figure class="blog-thumb">
                <a href="blog-details.html">
                  <img style="height: 230px;" src="assets/img/banner/vai-ni-2-da-mang-lai-chat-luong-tham-my-cao_74393883a6f14f81b2cedb83e370468b.webp" alt="product banner" alt="blog image">
                </a>
              </figure>
              <div class="blog-content">
                <div class="blog-meta">
                  <p>10/04/2025 | <a href="#">NiOc</a></p>
                </div>
                <h5 class="blog-title">
                  <a href="blog-details.html">Vải Nỉ Double Face – Lựa Chọn Hoàn Hảo Cho Trang Phục Mùa Đông</a>
                </h5>
              </div>
            </div>
            <!-- blog post item end -->

            <!-- blog post item start -->
            <div class="blog-post-item">
              <figure class="blog-thumb">
                <a href="blog-details.html">
                  <img style="height: 230px;" src="assets/img/banner/cach-phoi-do-voi-ao-blazer-3_3e59a8bb683a42c1ac69f3e66ee80fda.webp" alt="blog image">
                </a>
              </figure>
              <div class="blog-content">
                <div class="blog-meta">
                  <p>10/04/2025 | <a href="#">NiOc</a></p>
                </div>
                <h5 class="blog-title">
                  <a href="blog-details.html">Blazer là gì? 5 cách phối đồ với áo blazer sành điệu nhất</a>
                </h5>
              </div>
            </div>
            <!-- blog post item end -->

            <!-- blog post item start -->
            <div class="blog-post-item">
              <figure class="blog-thumb">
                <a href="blog-details.html">
                  <img style="height: 230px;" src="assets/img/banner/ao-phao-nam-classic-da-tro-nen-gon-gang-va-tien-dung-hon_6c8a3107f0024f78840f2408fb8be4b4.jpg" alt="blog image">
                </a>
              </figure>
              <div class="blog-content">
                <div class="blog-meta">
                  <p>10/04/2025 | <a href="#">NiOc</a></p>
                </div>
                <h5 class="blog-title">
                  <a href="blog-details.html">12 Cách Phối Đồ Với Áo Phao Nam Cực ấm và Cool</a>
                </h5>
              </div>
            </div>
            <!-- blog post item end -->

            <!-- blog post item start -->
            <div class="blog-post-item">
              <figure class="blog-thumb">
                <a href="blog-details.html">
                  <img style="height: 230px;" src="assets/img/banner/quan-au-va-ao-somi-la-lua-chon-hoan-hao-cho-trang-phuc-cong-so_828054df78b344efb57b0ec6bed91b87.webp" alt="blog image">
                </a>
              </figure>
              <div class="blog-content">
                <div class="blog-meta">
                  <p>10/04/2025 | <a href="#">NiOc</a></p>
                </div>
                <h5 class="blog-title">
                  <a href="blog-details.html">Classic style là gì? Xu hướng phối đồ đầy sang trọng - cuốn hút</a>
                </h5>
              </div>
            </div>
            <!-- blog post item end -->

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- latest blog area end -->

  <!-- brand logo area start -->

  <!-- brand logo area end -->
</main>

<?php require_once 'layout/footer.php'; ?>