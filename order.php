<?php
session_start();

require_once('inc\top.php');
require_once('inc\steel-header.php');
?>
<center>
<style>
  #tab {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tab td, #tab th {
  border: 1px solid #ddd;
  padding: 28px;
  width:50px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}

#tab tr:hover {background-color: #ddd;}

#tab th {
  padding-top: 28px;
  padding-bottom: 28px;
  text-align: left;
  background-color: #4F7F99;
  color: white;
  width:50px;
}
</style>
<form method="post" action="order.php">
 <table id="tab">
                            
                                
                              <center> ALMIRA</center>  
                            <thead>

                                <tr>
                                    
                                    <th style="text-align:center;">Height</th>
                            
                                          <th style="text-align:center;">Weight</th>
                                             <th style="text-align:center;">Colors</th>
                                               <th style="text-align:center;">Racks</th>

                                               <th style="text-align:center;">Locker</th>
                                               <th style="text-align:center;">Anchor</th>
                                               <th style="text-align:center;">Mirror</th>
                                             
                                </tr>
                            </thead>
                            <tbody>
              <?php
     
$email=$_SESSION['email'];
          
require_once('admin/db.php');

                $result1 = mysqli_query($con,"SELECT * FROM `almira`where email='$email' ");
while($row = mysqli_fetch_assoc($result1)){
  
  ?>
                <tr>
                  
                 <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['height']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['weight']; ?></td>
                   <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['colors']; ?></td>
                    <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['rack']; ?></td>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['locker']; ?></td>
               <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['anchor']; ?></td>
               <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['mirror']; ?></td>
                
                
                </tr>
                <?php } 
              ?>
                            </tbody>
                        </table>
<br/><br/>
                        <table id="tab">
                            
                                <center> COT</center> 
                                
                            <thead>
                                <tr>
                                 
                                    <th style="text-align:center;">Height</th>
                            
                                          <th style="text-align:center;">Weight</th>
                                             <th style="text-align:center;">Colors</th>
                                               <th style="text-align:center;">Arch</th>

                                               <th style="text-align:center;">Model</th>
                                                 
                                           
                                </tr>
                            </thead>
                            <tbody>
              <?php
     
$email=$_SESSION['email'];
          
require_once('admin/db.php');

                $result1 = mysqli_query($con,"SELECT * FROM `cot`where email='$email' ");
while($row = mysqli_fetch_assoc($result1)){
  
  ?>
                <tr>
                  
                 <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['height']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['weight']; ?></td>
                   <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['colors']; ?></td>
                    <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['arch']; ?></td>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['model']; ?></td>
               
                
                </tr>
                <?php } 
              ?>
                            </tbody>
                        </table>

<br/><br/>

                        <table id="tab">
                            
                                
                               <center> CHAIR</center>  
                            <thead>
                                <tr>
                                    
                                    <th style="text-align:center;">Categories</th>
                            
                                          <th style="text-align:center;">Weight</th>
                                             <th style="text-align:center;">Colors</th>
                                               
                                                                                            
                                </tr>
                            </thead>
                            <tbody>
              <?php
     
$email=$_SESSION['email'];
          
require_once('admin/db.php');

                $result1 = mysqli_query($con,"SELECT * FROM `chair`where email='$email' ");
while($row = mysqli_fetch_assoc($result1)){
  
  ?>
                <tr>
                  
                 <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['categories']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['weight']; ?></td>
                   <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['colors']; ?></td>
                    
                
                </tr>
                <?php } 
              ?>
                            </tbody>
                        </table><br/><br/>

<table id="tab">
                            
                                
                             <center> TABLE</center>    
                            <thead>
                                <tr>
                                   
                                    <th style="text-align:center;">Categories</th>
                            
                                          <th style="text-align:center;">Weight</th>
                                             <th style="text-align:center;">Colors</th>
                                            
                                </tr>
                            </thead>
                            <tbody>
              <?php
     
$email=$_SESSION['email'];
          
require_once('admin/db.php');

                $result1 = mysqli_query($con,"SELECT * FROM `table1`where email='$email' ");
while($row = mysqli_fetch_assoc($result1)){
  
  ?>
                <tr>
                  
                 <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['categories']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['weight']; ?></td>
                   <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['colors']; ?></td>
                    
                
                </tr>
                <?php
                  } 
              ?>
                            </tbody>
                        </table>
                        <br><br>
                        <td style="text-align:center; word-break:break-all; width:300px;"> 
  <a href="order.php?action=delete">Delete</a></td>
   <td style="text-align:center; word-break:break-all; width:300px;"> 
<a href="order.php?action=detail">Confirm</a></td>



           <?php 
 if(isset($_GET["action"]) && $_GET['action']=="detail"){
$order=rand();
$_SESSION['order'] = $order ;

  $email=$_SESSION['email'];
  
    mysqli_query($con, "UPDATE chair SET orderid='$order' WHERE email='$email' ");
    mysqli_query($con, "UPDATE table1 SET orderid='$order' WHERE email='$email' ");
      mysqli_query($con, "UPDATE almira SET orderid='$order' WHERE email='$email' ");
        mysqli_query($con, "UPDATE cot SET orderid='$order' WHERE email='$email' ");
        echo "<script>alert('Successfully ordered!!!'); window.location='order.php'</script>";
  
  
}
 if(isset($_GET["action"]) && $_GET['action']=="delete")
 {
  $email=$_SESSION['email'];
  mysqli_query($con, "DELETE FROM almira  WHERE email='$email' ");
  mysqli_query($con, "DELETE FROM cot  WHERE email='$email' ");
  mysqli_query($con, "DELETE FROM chair  WHERE email='$email' ");
  mysqli_query($con, "DELETE FROM table1  WHERE email='$email' ");
  echo "<script>alert('Successfully deleted!!!'); window.location='order.php'</script>";
  
  
}

if(isset($_POST['submit']))
{
  $order=$_SESSION['order'];
echo $order;
}
?>
<input type="submit" value="Your Order id" id="submit" name="submit" class="submit_btn float_l" />


</form>
</center>
        <?php require_once('inc\footer.php');?>

