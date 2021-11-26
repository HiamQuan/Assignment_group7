<?php
function admin_render($viewpath, $data = []){

    extract($data);
    $VIEW_PAGE = "./views/nhanvien/" . $viewpath;
    include_once './views/nhanvien/layout/main.php';
}
?>