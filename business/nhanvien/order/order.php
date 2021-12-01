<?php 
    function menu_render() {
        $table_id=$_GET['table-id'];
        $sql= "select * from category";
        $category= pdo_query($sql);
        $category_id=$_GET['category-id']??1;
        $sql = "select * from food where category_id=$category_id";
        $list_foods = pdo_query($sql); 
        $sql = "select status from desk where desk_id=$table_id";
        $table_status = pdo_query_one($sql);
        if ($table_status['status'] == "trống") {
           $sql = "update desk set status='chưa đặt' where desk_id=$table_id";
            pdo_execute($sql);
        }
        $sql = "select status from desk where desk_id=$table_id";
        $table_status = pdo_query_one($sql); 
        nhanvien_render('order/order-ui.php', [
            'list_foods' => $list_foods,
            'category'=> $category ,
            'table_id'=>$table_id,
            'category_id'=>$category_id,
            'table_status'=>$table_status
        ]);
        return $category_id;
    }
    function add_food() {
        if(isset($_POST['btn-addtocart'])) {
          $category_id=$_POST['category-id'];
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
        header("location:". STAFF_URL . 'order?table-id=' . $table_id.'&category-id='.$category_id);
        
    }
    function remove_order_food() {
        $table_id = $_GET['table-id'];
        $category_id=$_GET['category-id'];
        if (isset($_GET['id'])) {
            // array_splice($_SESSION['order'][$table_id], $_GET['id'],1);
            unset($_SESSION['order'][$table_id][$_GET['id']]);
            header("location:". STAFF_URL . 'order?table-id=' . $table_id);
        }else{
            $_SESSION['order'][$table_id] = [];
            $sql = "update desk set status='trống' where desk_id=$table_id";
            pdo_execute($sql);
            header("location:".BASE_URL."staff");

        }
        header("location:". STAFF_URL . 'order?table-id=' . $table_id.'&category-id='.$category_id);
    }

// Update trạng thái "đang chờ"
    function update_desk($desk_id){
        $sql= "update desk set status='đang chờ' where desk_id=$desk_id";
        pdo_execute($sql);
    }
