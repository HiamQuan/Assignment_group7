<?php

<<<<<<< Updated upstream

function loadall_desk(){
    $sql= "select * from desk where 1 order by desk_id asc limit 0,9";
            $listdesk=pdo_query($sql);
            return $listdesk;
}

function index(){
    echo "Hello";
}
$VIEW_PAGE = NHANVIEN_URL . "/desk/desk_ui.php";
=======
>>>>>>> Stashed changes

$VIEW_PAGE =  VIEWS_URL . "desk_ui.php";

include_once './views/layout/nhanvien/layout.php';
