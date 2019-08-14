<?php
include('db.php');
if(isset($_POST['submit'])){
   
    $orderid = $_POST['orderid'];
    
    $orderdetail = $_POST['orderdetail'];
   

     $query='insert into orderdetails(orderid,orderdetail)values ("'.$orderid.'","'.$orderdetail.'")';  
    $result = mysqli_query($con, $query);
    echo "<script>alert('Successfully ordered!!!'); </script>";
    
    if(!$result){
        die("OOPPS! query failed".mysqli_error($con)); 
    }
}
?>
             
         
       
        
       
        <?php
        require_once('inc/top.php');
        require_once('inc/header.php');
        require_once('inc/sidebar.php');
        ?>
        
	        
		<div id="contact_form">
            
                <h4>Order Details</h4>
                    <form method="post" name="contact" action="orderdetails.php">
                    
                        <label for="id">Order Id:</label> <input type="text"  name="orderid" class="required input_field" />
                        <div class="cleaner_h10"></div>
                                                    
                        
                        
                            
                        <label for="text">Order Details:</label> <textarea id="text" name="orderdetail" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner_h10"></div> 
                               
                        
                                   
                                                
                        <input type="submit" value="Submit" id="submit" name="submit" class="submit_btn float_l" />
                        
                        
                    </form>
            </div>           
            
		<?php
        require_once('inc/footer.php');
        ?>