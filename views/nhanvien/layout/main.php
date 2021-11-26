<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <?php include_once "./views/nhanvien/layout/style.php" ?>
</head>

<body>
    <?php include_once './views/head_foot/header.php' ?>
    <main class="container-fluid"><?php require_once $VIEW_PAGE ?></main>
    <?php include_once './views/head_foot/footer.php' ?>
    <?php include_once "./views/nhanvien/layout/script.php" ?>
</body>

</html>