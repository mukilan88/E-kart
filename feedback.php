<?php
include('admin/db.php');
if(isset($_POST['submit'])){
    // echo "hi";
    $email = $_POST['email'];
     $name = $_POST['fname'];
      $feedback= $_POST['feedback']; 
      

   
   $query='insert into feedback(email,fname,feedback)values ("'.$email.'","'.$name.'","'.$feedback.'")';  
    $result = mysqli_query($con, $query);
    echo "<script>alert('Successfully POSTED!!!');</script>";
    
    if(!$result){
        die("OOPPS! query failed".mysqli_error($con)); 
    }
}
?>
   

 
   
      <?php
      session_start();
      require_once('inc/top.php');
      require_once('inc/user-header.php');
      
?>
        <center>
      <div id="contact_form">
    <h2>FEEDBACK</h2><br><br><br><br>

     
  <form method="post" action="feedback.php">

    

     
      <?php
     

$email=$_SESSION['email'];
          
require_once('admin/db.php');

                $result1 = mysqli_query($con,"SELECT * FROM `register`where email='$email' ");
while($row1 = mysqli_fetch_assoc($result1)){
  
  ?>
      
     <label for="email">Email:</label>
      <input type="text" class="required input_field" name="email" value="<?php echo $row1 ['email']; ?>">   
      </div>                              
                        <label for="email">Firstname:</label>
      <input type="text" class="required input_field" name="fname" value="<?php echo $row1 ['fname']; ?>"> 
      </div>     
       <?php
     }
     ?>
   
   <label for="email">Feedback:</label>
      <input type="text" class="required input_field" name="feedback" >      
    <input type="submit" value="Submit" id="submit" name="submit" class="submit_btn float_l" />
                       
                        
                
    </form>
            </div>           
            
    </center>
    
  </form><br><br><br><br><br><br><br><br>
  <?php
        require_once('inc/footer.php');

        ?>