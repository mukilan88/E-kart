<?php

session_start();
include('admin/db.php');
$status="";

require_once('inc\top.php');
require_once('inc\header.php');
?><center>


    
     
                   
      <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />

<div style="width:700px; margin:50 auto;">

<h2>OUR PRODUCTS</h2>   

<?php
if(isset($_GET['categories']))
{
$result = mysqli_query($con,"SELECT * FROM `products`where categories=".$_GET['categories']);
$cat=$_GET['categories'];
while($row = mysqli_fetch_assoc($result)){
    ?>
              
        <div class="image_wrapper fl_img"><img src="<?php echo $row["image"]; ?>" alt="Image 01" /></div>
		
        
        <p><?php echo $row["name"]; ?><br/>
            <?php echo $row["price"]; ?><br/>
            <?php echo $row["quantity"]; ?><br/>
            <?php echo $row["description"]; ?><br/>
            <?php echo $row["guarantee"];
$_SESSION['date'] = $row["guarantee"] ;

             ?><br/></p>
        
        <div class="button float_r"><a href="products.php?categories=<?php echo $cat; ?>"">Continue</a></div>
        
        <div class="cleaner_h30 horizon_divider"></div>
        <div class="cleaner_h30"></div>
        <?php
   } 
}
    ?>
     </div>
        </div>
        </center>
        <?php require_once('inc\footer.php');?>
         