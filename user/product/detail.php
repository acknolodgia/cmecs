<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from product where Id = $id");

$row=mysql_fetch_array($query)
?>	
	
<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<div class="single">
			<div class="left_content">
				<div class="span1_of_1">
					<div class="product-view">
						<div class="product-essential">
							<div class="product-img-box">
								<div class="product-image"> 
									<img src="../../media/<?=$row['image']?>"></br>
							   </div>
							</div>
						</div>
					</div>
				</div>
				<div class="span1_of_1_des">
					<div class="desc1">
						<h3>Name: <?=$row['name']?></br></h3>
						<p>Description: <?=$row['description']?></p>
						<p>Price:<?=$row['price']?><p>
						<div class="available">
									<form action="process.php?action=add-to-cart" method="POST" >
									<input type="hidden" name="username" value="<?=$_SESSION['customer_session']?>">
									<input type="hidden" name="productId" value="<?=$id?>">
									<input type="hidden" name="quantity" value="1">
									<input type="hidden" name="price" value="<?=$row['price']?>">
									
									<?php
									$countData = mysql_num_rows(mysql_query("select * from temp_cart where productId = $id"));
									?>
									<?php
										if ($countData > 0){
											echo "<button class='button updatebtn' type='button'>Already Added to Cart</button>";
										}
										else{
											echo "<button class='button updatebtn' type='submit'>Add to Cart</button>";
										}
									?>
									</form>
								
								
								
							<div class="clear"></div>
						</div>
					 </div>
				</div>
				<div class="clear"></div>
	       </div>
	   <div class="clear"></div>
	</div>
</div>
</div>


<?php
require_once 'tempCart.php';
?>