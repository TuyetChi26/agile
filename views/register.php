<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <main class="bg-light">
<div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
            <div class="card-body">
                <h4 class="text-center fw-bold mb-3">Đăng ký</h4>
                <form action="<?= BASE_URL . '?act=register' ?>" method="post">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Họ và tên</label>
                        <input type="text" name="fullname" class="form-control" id="fullname" >
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="text" name="phone" class="form-control" id="phone" >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" id="password" >
                    </div>
                    <div class="mb-3">
                        <label for="repassword" class="form-label">Nhập lại mật khẩu</label>
                        <input type="password" name="repassword" class="form-control" id="repassword" >
                    </div>
                    <button type="submit" class="btn btn-success w-100">Đăng ký</button>
                </form>
                <p class="mt-3 text-center">
                Đã có tài khoản? <a href="<?= BASE_URL . '?act=login' ?>">Đăng nhập</a>
            </p>
            </div>
        </div>
    </div>
  </main>
  
</body>

</html>