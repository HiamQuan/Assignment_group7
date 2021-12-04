<?php
function desk_add_form(){

    admin_render('desk/add-form.php');
}
function desk_save_add(){
    // nhận dữ liệu từ form gửi lên
    $desk_name = $_POST['desk_name'];
    $capacity = $_POST['capacity'];
    $location = $_POST['location'];

    
    $sql = "insert into desk 
                (desk_name, capacity, location) 
            values 
                ('$desk_name', '$capacity', '$location')";
    // Thực thi câu sql với db
    pdo_execute($sql);
    header("location: " . ADMIN_URL . 'tai-khoan');
}
?>