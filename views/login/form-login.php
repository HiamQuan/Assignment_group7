<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <?php include_once './views/nhanvien/layout/style.php'; ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="<?= BASE_URL . 'login/submit' ?>" method="POST" role="form">
                    <legend>Login</legend>
                    <p style="color: red;"><?= isset($_GET['err']) ? 'Tài khoản hoặc mật khẩu không chính xác' : ''; ?></p>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="user_name" id="" placeholder="name@example.com" required autocomplete="off">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="" placeholder="name@example.com" required >
                        <label for="floatingInput">Password</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>

            </div>
        </div>
    </div>
    <?php include_once './views/nhanvien/layout/script.php'; ?>
</body>

</html>