<?php
function list_category()
{
    $sql = 'select*from category';
    $list_category = pdo_query($sql);
    admin_render('category/index.php', [
        'list_category' => $list_category
    ], 'category.js');
}

function add_form(){
    admin_render('category/add-form.php');
}


