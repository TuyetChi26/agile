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
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?= BASE_URL . '?act=cart' ?>">Giỏ hàng </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <?php if (isset($chiTietGioHang) && !empty($chiTietGioHang)): ?>

        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <form action="<?= BASE_URL . '?act=update-cart' ?>" method="POST" id="cartForm">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="pro-thumbnail">Ảnh</th>
                                                <th class="pro-title">Tên sản phẩm</th>
                                                <th class="pro-price">Giá</th>
                                                <th class="pro-quantity">Số lượng</th>
                                                <th class="pro-subtotal">Tổng</th>
                                                <th class="pro-remove">Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $tongGioHang = 0;
                                            foreach ($chiTietGioHang as $key => $sanPham) :
                                            ?>
                                                <tr>
                                                    <td class="pro-thumbnail">
                                                        <a href="#">
                                                            <img class="img-fluid" src="<?= $sanPham['hinh_anh'] ?>" alt="Product" />
                                                        </a>
                                                    </td>
                                                    <td class="pro-title">
                                                        <a href="#"><?= $sanPham['ten_san_pham'] ?></a>
                                                    </td>
                                                    <td class="pro-price">
                                                        <span>
                                                            <?php
                                                            if ($sanPham['gia_khuyen_mai']) {
                                                                echo number_format($sanPham['gia_khuyen_mai'], 0, ',', '.') . ' đ';
                                                            } else {
                                                                echo number_format($sanPham['gia'], 0, ',', '.') . ' đ';
                                                            }
                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="hidden" name="product_id[]" value="<?= $sanPham['product_id'] ?>">
                                                            <input type="number"
                                                                name="so_luong[]"
                                                                value="<?= $sanPham['so_luong'] ?>"
                                                                min="1"
                                                                step="1"
                                                                class="form-control">
                                                        </div>
                                                    </td>
                                                    <td class="pro-subtotal">
                                                        <span>
                                                            <?php
                                                            $tongTien = 0;
                                                            if ($sanPham['gia_khuyen_mai']) {
                                                                $tongTien = $sanPham['gia_khuyen_mai'] * $sanPham['so_luong'];
                                                            } else {
                                                                $tongTien = $sanPham['gia'] * $sanPham['so_luong'];
                                                            }
                                                            $tongGioHang += $tongTien;
                                                            echo number_format($tongTien, 0, ',', '.') . ' đ';
                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td class="pro-remove">
                                                        <a href="<?= BASE_URL . '?act=delete-cart-item&product_id=' . $sanPham['product_id'] ?>"
                                                            onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')"
                                                            class="delete-item">
                                                            <i class="fa fa-trash-o"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <!-- Cart Update Option -->
                            <div class="cart-update-option d-block d-md-flex justify-content-between">
                                <div class="cart-update">
                                    <button type="submit" form="cartForm" class="btn btn-sqr">Cập nhật giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h6>Tổng đơn hàng</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Tổng tiền sản phẩm</td>
                                                <td><?= number_format($tongGioHang, 0, ',', '.') . ' đ' ?></td>
                                            </tr>
                                            <tr>
                                                <td>Vận chuyển</td>
                                                <td>30.000 đ</td>
                                            </tr>
                                            <tr class="total">
                                                <td>Tổng cộng</td>
                                                <td class="total-amount"><?= number_format($tongGioHang + 30000, 0, ',', '.') . ' đ' ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <a href="" class="btn btn-sqr d-block">Tiến hành đặt hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="text-center py-5 my-5">
            <div class="alert alert-info" role="alert">
                <i class="fas fa-shopping-cart fa-2x mb-3"></i>
                <h4 class="alert-heading">Giỏ hàng trống</h4>
                <p>Giỏ hàng của bạn chưa có sản phẩm nào.</p>
                <p class="mb-0">
                    <a href="<?= BASE_URL ?>" class="btn btn-primary">Tiếp tục mua sắm</a>
                </p>
            </div>
        </div>
    <?php endif; ?>
    <!-- cart main wrapper end -->
</main>

<?php require_once 'layout/footer.php' ?>