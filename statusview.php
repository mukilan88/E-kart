<?php require_once('inc\top.php');?>
<?php require_once('inc\steel-header.php');?>


<center>
	        
		<div id="contact_form">
            
                <h4>Order Details</h4>
                    <form method="post" name="contact" action="statusview.php">
                    
                        <label for="id">Order Id:</label> <input type="text"  name="orderid" class="required input_field">
                        <div class="cleaner_h10"></div>
                                                    
                        <label for="id">Status Detail:</label>
                        
                          <?php
                          include('admin/db.php');
    if(isset($_POST["submit"]))
      {
$name=$_POST["orderid"];
$sql="select status from status where orderid='".$name."'";
$result1=mysqli_query($con,$sql);
while($row1=mysqli_fetch_array($result1))
{
  

?>
  <?php echo $row1["status"];?>
  
                        
    <?php
  }
}
?>
<div class="cleaner_h10"></div>

       <input type="submit" value="Submit" id="submit" name="submit" class="submit_btn float_l" />
                        
                        
                    </form>
            </div>           
            </center><br><br><br><br><br><br><br><br><br><br>
        <?php require_once('inc\footer.php');?>         
                                   
                                                
                     