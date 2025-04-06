<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>trang chu</h1>
  <?php if (isset($_SESSION['user'])): ?>
    <div class="user-info">
      <span>Xin chào, <?= htmlspecialchars($_SESSION['user']['fullname']); ?></span>
      <button><a href="<?= BASE_URL . '?act=logout' ?>">Đăng xuất</a></button>
      <button><a href="<?= BASE_URL . '?act=show-profile' ?>">Thông tin tài khoản</a></button>
    </div>
  <?php else: ?>
    <div class="auth-buttons">
      <button><a href="<?= BASE_URL . '?act=login' ?>">Đăng nhập</a></button>
      <button><a href="<?= BASE_URL . '?act=register' ?>">Đăng ký</a></button>
    </div>
  <?php endif; ?>
</body>
</html>