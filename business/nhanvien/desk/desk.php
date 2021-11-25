<?php

function loadall_desk()
{
    $sql = "select * from desk where 1 order by desk_id asc";
    $listdesk = pdo_query($sql);
    $VIEW_PAGE =  "./views/nhanvien/desk/desk_ui.php";
    include_once './views/nhanvien/layout/main.php';
}
function admin_render($viewpath, $data = [], $jsFiles = []){

    extract($data);
    $businessView = "./views/admin/" . $viewpath;
    include_once './views/admin/layouts/main.php';
}

    