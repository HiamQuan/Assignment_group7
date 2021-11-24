<?php 
    function menu_render() {
        $sql = "select * from food";
        $list_foods = pdo_query($sql); 
        
        nhanvien_render('order/order-ui.php', [
            'list_foods' => $list_foods
        ]);
    }
    function add_food() {
        if(isset($_POST['btn-addtocart'])) {
            $food_id = $_POST['food_id'];
            $table_id = $_POST['table_id'];
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
            }else{
                $_SESSION["order"][$table_id][$food_id]['soluong']+=1;
            }
        }
        // session_unset();
        header("location:". STAFF_URL . 'order?table-id=' . $table_id);
        
    }
    function remove_order_food() {
        $table_id = $_GET['table-id'];
        if (isset($_GET['id'])) {
            array_splice($_SESSION['order'][$table_id], $_GET['id'],1);
        }else{
            $_SESSION['order'][$table_id] = [];
        }
        header("location:". STAFF_URL . 'order?table-id=' . $table_id);
    }
?>