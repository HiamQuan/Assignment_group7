<?php
require_once "./common/global.php";
require_once "./dao/pdo.php";
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        require_once "./business/login.php";
        break;
    case 'admin':
        require_once "./business/quanly/result.php";
        index();
        break;
    case 'admin/user':
        require_once "./business/quanly/account.php";
        user_index();
        break;
    case 'admin/user/tao-moi':
        require_once "./business/quanly/account.php";
        user_add_form();
        break;
    case 'admin/user/luu-tao-moi':
        require_once "./business/quanly/account.php";
        user_submit_add();
        break;
    case 'admin/user/sua':
        require_once "./business/quanly/account.php";
        user_edit_form();
        break;
    case 'admin/user/luu-sua':
        require_once "./business/quanly/account.php";
        user_save_edit();
        break;
    case 'admin/user/xoa':
        require_once "./business/quanly/account.php";
        user_remove();
        break;
    case 'staff':
        require_once "./business/nhanvien/desk/desk.php";
        loadall_desk();
        break;
    case 'staff/desk':
        require_once "./business/nhanvien/desk/desk.php";
        load_location();
        break;
    case 'staff/order':
        require_once "./business/nhanvien/order/order.php";
        menu_render();
        break;
    case 'staff/order/addtocart':
        require_once "./business/nhanvien/order/order.php";
        add_food();
        break;
    case 'staff/order/delete':
        require_once "./business/nhanvien/order/order.php";
        remove_order_food();
        break;
    case 'staff/order/add-bill':
        require_once "./business/nhanvien/bill/bill.php";
        add_bill();
        break;
    case 'staff/order/bill':
        require_once "./business/nhanvien/bill/bill.php";
        get_bill();
        break;
    case 'staff/order/done-bill':
        require_once "./business/nhanvien/bill/bill.php";
        done_bill();
        break;
    case 'chef':
        require_once "./business/bep/undone.php";
        break;
    case 'chef/done':
        require_once "./business/bep/done.php";
        break;
    case  'login':
        require_once "./business/login/login.php";
        login();
        break;
    case  'login/submit':
        require_once "./business/login/login.php";
        submit_login();
        break;
     case  'logout/submit':
        require_once "./business/login/login.php";
        submit_logout();
        break;
    default:
        echo " Đường dẫn này chưa được định nghĩa";
        break;
}

