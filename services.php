<?php
include('admin/db.php');
if(isset($_POST['Submit'])){
    // echo "hi";
   $order = $_POST['order'];
    $email = $_POST['email'];
     $name = $_POST['name'];
      $address= $_POST['address']; 
         $mobile= $_POST['mobile'];
// $gdate= $_POST['gdate'];
   
   $query='insert into services(orderid,email,name,address,mobile)values ("'.$order.'","'.$email.'","'.$name.'","'.$address.'","'.$mobile.'")';  
    $result = mysqli_query($con, $query);
    echo "<script>alert('Successfully delivered !!!'); </script>";
    
    if(!$result){
        die("OOPPS! query failed".mysqli_error($con)); 
    }
}
?>
   

 
   
      <?php
      session_start();
      require_once('inc\top.php');
      require_once('inc\header.php');
      ?><center>
        
       
   <div id="">
            
                <h4>Services</h4>
                 <form action="services.php" method="post"enctype="multipart/form-data">
                    
    
    

    
   <label for="fname">Order Id:</label>
    <?php
          $ord= $_SESSION['order'];
          ?> <input type="text"  class="required input_field"  name="order"  value="<?php echo $ord; ?>"/>
                        <div class="cleaner_h10"></div>
                          
                         <label for="text">Email:</label>


 <?php
     

$email=$_SESSION['email'];
          
require_once('admin/db.php');

                $result1 = mysqli_query($con,"SELECT * FROM `register`where email='$email' ");
while($row= mysqli_fetch_assoc($result1)){
  
  ?>
                          <input type="text" class="required input_field" name="email"  value="<?php echo $row["email"]; ?>"/>
                                                   
                        <label for="text">Name:</label> <input type="text" class="required input_field"  name="name"  value="<?php echo $row["fname"]; ?>"/>
                        
                                            
                         <label for="text">Address:</label> <input type="text" class="required input_field" name="address"  value="<?php echo $row["address"]; ?>"/>  
                        

                            
                      
                           <label for="text">Mobile:</label> <input type="text" class="required input_field" name="mobile"  value="<?php echo $row["mobile"]; ?>"/>
                        
                              
                        
                        
                                                
                        <input type="submit" value="Confirm " id="submit" name="Submit" class="submit_btn float_l" />
                       
                        
                    </form>
            </div>           
            
  
      
               <?php
     }
     ?>
   
   
    
    
  </form>
</div>
  </div>
  </center><br>
        <?php require_once('inc\footer.php');?>
