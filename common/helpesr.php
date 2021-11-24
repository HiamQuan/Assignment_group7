<?php

function admin_render($viewpath, $data = [], $jsFiles = []){

    extract($data);
    $businessView = "./views/quanly/" . $viewpath;
    include_once './views/quanly/layouts/main.php';
}

?>