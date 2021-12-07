<?php
function menu_render()
{
    $table_id = $_GET['table-id'];
    $bill_id = isset($_GET['bill-id']) ? $_GET['bill-id'] : "";
    $sql = "select * from category";
    $category = pdo_query($sql);
    $category_id = $_GET['category-id'] ?? 1;
    if (isset($_POST['search'])) {
        $key = $_POST['key'];
        $sql = "select * from food where food_name like '%$key%'";
        $list_foods = pdo_query($sql);
    } else {
        $sql = "select * from food where category_id=$category_id";
        $list_foods = pdo_query($sql);
    }
    $sql = "select status from desk where desk_id=$table_id";
    $table_status = pdo_query_one($sql);

    if ($table_status['status'] == "trống") {

        $sql = "update desk set status='chưa đặt' where desk_id=$table_id";
        pdo_execute($sql);
    }
    $sql = "select status from desk where desk_id=$table_id";
    $table_status = pdo_query_one($sql);
    if ($bill_id != "") {
        $sql = "select food.food_id, food.food_name, food.image, food.price, bill.amount 
                    from food INNER JOIN detail_bill ON food.food_id = detail_bill.food_id 
                    INNER JOIN bill ON detail_bill.bill_id = bill.bill_id where bill.bill_id =$bill_id";
        $list_fooded = pdo_query($sql);
    } else {
        $list_fooded = NULL;
    }

    // echo "<pre>";
    // var_dump($list_fooded);
    nhanvien_render('order/order-ui.php', [
        'list_foods' => $list_foods,
        'list_fooded' => $list_fooded,
        'category' => $category,
        'table_id' => $table_id,
        'category_id' => $category_id,
        'table_status' => $table_status
    ]);
}
function add_food()
{
    if (isset($_POST['btn-addtocart'])) {
        $category_id = $_POST['category-id'];
        $food_id = $_POST['food_id'];
        $table_id = $_POST['table_id'];
        $bill_id = ($_POST['bill_id'] != "") ? "&bill-id=" . $_POST['bill_id'] : "";
        $food_name = $_POST['food_name'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        if (!isset($_SESSION["order"][$table_id][$food_id])) {
            $_SESSION["order"][$table_id][$food_id] = [];
            $_SESSION["order"][$table_id][$food_id] = [
                'food_id' => $food_id,
                'food_name' => $food_name,
                'price' => $price,
                'soluong' => 1,
                'image' => $image
            ];
        } else {
            $_SESSION["order"][$table_id][$food_id]['soluong'] += 1;
        }
    }
    $bill_id = isset($_SESSION['bill-id'][$table_id]) ? '&bill-id=' . $_SESSION['bill-id'][$table_id] : NULL;

    // echo "location:". STAFF_URL . 'order?table-id=' . $table_id.'&category-id='.$category_id.''.$bill_id;
    // session_unset();
    header("location:" . STAFF_URL . 'order?table-id=' . $table_id . '&category-id=' . $category_id . $bill_id);
}
function remove_order_food()
{
    $table_id = $_GET['table-id'];
    $bill_id = $_GET['bill-id'];
    $category_id = $_GET['category-id'];
    if (isset($_GET['id'])) {
        // array_splice($_SESSION['order'][$table_id], $_GET['id'],1);
        unset($_SESSION['order'][$table_id][$_GET['id']]);
        header("location:" . STAFF_URL . 'order?table-id=' . $table_id . '&bill-id=' . $bill_id . '&category-id=' . $category_id);
    } else {
        $_SESSION['order'][$table_id] = [];
        $_SESSION[$table_id] = [];
        $sql = "update desk set status='trống' where desk_id=$table_id";
        pdo_execute($sql);
        header("location:" . BASE_URL . "staff");
    }

    // header("location:". STAFF_URL . 'order?table-id=' . $table_id.'&category-id='.$category_id);
}
