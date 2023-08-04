<table border="1">
    <tr>
        <th>Name</th>
        <th>Plan</th>
        <th>Price</th>
        <th>Category</th>
    </tr>
<?php
require('product-api.php');

$products_array = json_decode($products, true);

for ($i = 0; $i < count($products_array); $i++) {
    echo "<pre>";
    print_r($products_array[$i]);
    echo "</pre>";

    $plan = ($products_array[$i]["plan"]);
    $category = ($products_array[$i]["category"]);
    $name = ($products_array[$i]["product_name"]);
    $price = ($products_array[$i]["costprice"]);
?>   
    <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $plan ?></td>
        <td><?php echo number_format($price, 2) ?></td>
        <td><?php echo  $category ?></td>
    </tr>
<?php } ?>

</table>