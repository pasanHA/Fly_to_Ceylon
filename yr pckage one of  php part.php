<!-- 
<?php

$total = 0;
    if (isset($_SESSION['cart'])){
        $product_id = array_column($_SESSION['cart'], 'product_id');

        $result = $db->getData();
        while ($row = mysqli_fetch_assoc($result)){
            foreach ($product_id as $id){
                if ($row['id'] == $id){
                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                    $total = $total + (int)$row['product_price'];
                }
            }
        }
    }else{
        echo "<h5>Cart is Empty</h5>";
    }

?> -->