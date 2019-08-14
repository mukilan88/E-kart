<?php

session_start();
include('admin/db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$size = $row['size'];
$description = $row['description'];
$image = $row['image'];

$cartArray = array(
  $code=>array(
  'name'=>$name,
  'code'=>$code,
  'price'=>$price,
  'size'=>$size,
  'description'=>$description,
  'quantity'=>1,
  'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
  $_SESSION["shopping_cart"] = $cartArray;
  $status = "<div class='box'>Product is added to your cart!</div>";
}else{
  $array_keys = array_keys($_SESSION["shopping_cart"]);
  if(in_array($code,$array_keys)) {
    $status = "<div class='box' style='color:red;'>
    Product is already added to your cart!</div>";  
  } else {
  $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
  $status = "<div class='box'>Product is added to your cart!</div>";
  }

  }
}

require_once('inc\top.php');
require_once('inc\header.php');
?><center>

<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />

<div style="width:700px; margin:50 auto;">


<h2>OUR PRODUCTS</h2>   
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="">
<a href="cart.php"><img src="images/home/cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<div class="">
  <div class="">
<a href="categories3.php"><img src="images/home/cart-icon.png" />Continue Shopping</a>
</div>
<?php
}
if(isset($_GET['categories']))
{
$result = mysqli_query($con,"SELECT * FROM `products`where categories=".$_GET['categories']);
$cat=$_GET['categories'];
while($row = mysqli_fetch_assoc($result)){
  ?>
              
        <div class="image_wrapper fl_img"><img src="<?php echo $row["image"]; ?>" alt="Image 01" /></div>
    
        
        <p><?php echo $row["name"]; ?><br/>
            <?php echo $row["price"]; ?><br/>
            
            <?php echo $row["size"]; ?><br/></p>
          
        
    
        
        <?php
         echo "<div class='product_wrapper'>
        <form method='post' action=''>
        <input type='hidden' name='code' value=".$row['code']." />
        
        <button type='submit' class='buy'>Buy Now</button>
          
        </form>
          </div>";
        
    ?>
    <div class="button float_r"><a href="view.php?categories=<?php echo $cat; ?>">View More...</a></div>
      <div class="cleaner_h30 horizon_divider"></div>
        <div class="cleaner_h30"></div> 


        <?php
    }
}
mysqli_close($con);
?>
       <div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
 </div>
        </div>
    </div>
	</center>
        <?php require_once('inc\footer.php');?>
         