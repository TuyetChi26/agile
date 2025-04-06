<?php require_once 'layout/header.php'; ?>

<?php require_once 'layout/menu.php'; ?>

<main></main>
<!-- Single Tab Content Start -->
<div id="account-info" >
  <div class="myaccount-content">
    <h5>Thông tin tài khoản cá nhân</h5>
    <div class="account-details-form">
        <div class="row">
          <div class="col-lg-6">
            <div class="single-input-item">
              <label for="fullname" class="required">Họ tên</label>
              <input type="text" class="form-control" name="fullname" value="<?= $user['fullname'] ?>"  disabled/>
            </div>
          </div>
        </div>
        <div class="single-input-item">
          <label for="phone" class="required">Số điện thoại</label>
          <input type="number" class="form-control" name="phone" value="<?= $user['phone'] ?>" disabled />
        </div>
        <div class="single-input-item">
          <label for="email" class="required">Email</label>
          <input type="email" class="form-control" name="email" disabled
            value="<?= $user['email'] ?>" />
        </div>
    </div>
  </div>
</div> <!-- Single Tab Content End -->
<?php require_once 'layout/footer.php'; ?>