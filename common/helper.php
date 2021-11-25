<?php
function admin_render($viewpath, $data = [], $jsFiles = []){

    extract($data);
    $businessView = "./views/nhanvien/" . $viewpath;
    include_once './views/nhanvien/layout/main.php';
}
?>