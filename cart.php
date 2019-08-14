<?php

session_start();


$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
  foreach($_SESSION["shopping_cart"] as $key => $value) {
    if($_POST["code"] == $key){
    unset($_SESSION["shopping_cart"][$key]);
    $status = "<div class='box' style='color:red;'>
    Product is removed from your cart!</div>";
    }
    if(empty($_SESSION["shopping_cart"]))
    unset($_SESSION["shopping_cart"]);
      }   
    }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; 
    }
}
    
}
if(isset($_GET["action"]) && $_GET['action']=="getdetail"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_GET["code"]){
        include('db.php');
        $val=  $value['quantity'];
        $v=$_GET['code'];
        
       mysqli_query($con, "UPDATE products SET quantity=quantity-'$val' WHERE code='$v' ");
echo "<script>alert('Your Oder is placed!!!'); </script>";
    }
}
 
}


require_once('inc\top.php');
require_once('inc\header.php');
?><center>

<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />

<div style="width:700px; margin:50 auto;">

<h2>Cart</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="">
<a href="cart.php">
<img src="images/home/cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="">
  <div class="">
<a href="categories3.php"><img src="images/home/cart-icon.png" />Continue Shopping</a>
</div>
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>  
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
<td>Action</td>
</tr> 
<?php   
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>

</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "Rs.".$product["price"]; ?></td>
<td><?php echo "Rs.".$product["price"]*$product["quantity"]; ?></td>
<td><a href="cart.php?action=getdetail&code=<?php echo $product["code"];?>">place</a></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>

<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Rs.".$total_price; ?></strong>
</td>
</tr>
</tbody>

</table>

 <td><a href="cart.php?action=detail">Confirm Order</a></td>

  <?php
    $order=rand();

$_SESSION['order'] = $order ;
  if(isset($_GET["action"]) && $_GET['action']=="detail"){
  foreach($_SESSION["shopping_cart"] as &$value){
    
        include('admin/db.php');
      
      
        
       $f= $total_price;
      $q=$value['quantity'];
      $n=$value['name'];
    
   
 $query='insert into orderdetail(orderid,name,quantity,total)values ("'.$order.'","'.$n.'","'.$q.'","'.$f.'")';  
    $result = mysqli_query($con, $query);
    echo "<script>alert('Your Oder is Successfully placed!!!');  window.location='services.php'</script>";
   $date= $_SESSION['date'] ;
}
 
}
}else{
  echo "<h3>Your cart is empty!</h3>";
  }
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
  </div>
  </center>
        <?php require_once('inc\footer.php');?>
