<?php
   function food_index(){
       $sql = "select * from food";
       $food = pdo_query($sql);

       admin_render('food/index.php',
       [
            'dsfood' => $food,
       ]
       );
   }
   
?>