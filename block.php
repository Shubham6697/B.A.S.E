

<?php
$con = mysqli_connect('localhost','root','','base');
$result = mysqli_query($con,"SELECT `product_name`, `price`,`product_image1`,`product_id` FROM `products` LIMIT 20");
while($data = mysqli_fetch_assoc($result))
{

$var=$data['product_id'];

echo "<a href='showProduct.php?x=$var'>
	<div class = 'block'> 
	<img src='asset/product image/".$data['product_image1']."' alt='No Image' width='250px' height='250px' style='border-bottom:1px solid black;'><br>";
	echo "<div style='float:left;color:white;'><span><b>".$data['product_name']."</b></span></div>";
	echo "<div style='float:right;color:white;'><span><b><i class='fa fa-rupee'></i>".' '.$data['price']."</b></span></div>
</div>
</a>";



}
?>