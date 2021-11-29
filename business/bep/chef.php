<?php 
function render_bill_in_chef (){
$sql="select bill.bill_id, food_id, quantity, desk.desk_name, desk.desk_id, bill.status ";
$sql.=" from detail_bill join bill on detail_bill.bill_id=bill.bill_id";
$sql.="join desk on desk.desk_id = ";
}
?>