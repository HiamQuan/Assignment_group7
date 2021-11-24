<?php

$VIEW_PAGE =  "./views/nhanvien/desk/desk_ui.php";


include_once './views/nhanvien/layout/main.php';
function loadall_desk(){
    $sql= "select * from desk where 1 order by desk_id asc";
    $listdesk = pdo_query($sql);
            return $listdesk;
}