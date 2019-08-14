<?php
     session_start();
include('admin/db.php');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $hw = $_POST['hw'];
    $weight = $_POST['weight'];
    $colors = $_POST['colors'];
     $racks = $_POST['racks'];
      $locker = $_POST['locker'];
    $anchor = $_POST['anchor'];
    $mirror = $_POST['mirror'];
    

    //TO ALERT SUBMISSION OF BLANK FIELDS(IT DOESN'T PREVENT SUBMISSION OF BLANK FIELD THOUGH)
    if (!$hw  && !$weight && !$colors && !$racks && !$locker && !$anchor && !$mirror){
        echo "can't submit blank fields";
    }

    //TO CONFIRM YOU ARE CONNECTED TO YOUR DATABASE (OPTIONAL)
  
    //TO INSERT username and password from field to jossyusers database
   $query='insert into almira(email,height,weight,colors,rack,locker,anchor,mirror,orderid)values ("'.$email.'","'.$hw.'","'.$weight.'","'.$colors.'","'.$racks.'","'.$locker.'","'.$anchor.'","'.$mirror.'",0)';  
       echo "<script>alert('Successfully inserted!!!'); window.location='categories.php'</script>";
    $result = mysqli_query($con, $query);
      if(!$result){
        die("OOPPS! query failed".mysqli_error($con)); 
    }
}


?>            
       
       <?php require_once('inc\top.php');?>
<?php require_once('inc\steel-header.php');?>
        <style>
            .foo {
  float: left;
  width: 20px;
  height: 20px;
  margin: 15px;
  border: 1px solid rgba(0, 0, 0, .2);
}

.blue {
  background: #939aa5;
}

.purple {
  background: #22467f;
}

.wine {
  background: #217f7a;
}
        </style>
	        <center>
		<div id="contact_form">
            
                <h4>Almirah Form</h4>
             
                    <form method="post" name="contact" action="almira.php">
                       <table>


<?php
     

$email=$_SESSION['email'];
          
require_once('admin/db.php');

                $result1 = mysqli_query($con,"SELECT * FROM `register`where email='$email' ");
while($row1 = mysqli_fetch_assoc($result1)){
  
  ?>
<tr><th> <label>EMAIL-ID</label> </th><th><input type="text"  name="email" value="<?php echo $row1 ['email']; ?>" class="required input_field" />
<?php
}

?>
                        <div class="cleaner_h10"></div>
                                                    </th></tr>
                        
                       <tr><th> <label>Height & Breadth:</label> </th><th><input type="text"  name="hw" class="required input_field" />
                        <div class="cleaner_h10"></div>
                                                    </th></tr>
                      <tr><th>   <label>Weight:</label> </th><th><select name="weight">

<option value="heavy">Heavy</option><br>
<option value="medium">Medium</option><br>
<br><br><br><br></select>

                        <div class="cleaner_h10"></div></th>
 <?php
                          if(isset($_POST['view'])){

if($_POST['weight']=='heavy')
{
    $result =13000;
      
    }
else if($_POST['weight']=='medium')
{
     $result = 8000;
     
     
 } ?> 
                        <th><input type="hidden" name="res" value="<?php echo $result ;?>"></th></tr>
                           <?php
                         }
                           
                            ?>                   
                        
                            
                      <tr><th> <label>Color:</label> </th><th><div class="foo blue"> <input type="radio" name="colors" value="Grey"  /><br><br>Grey</div>
                        <div class="foo purple"> <input type="radio" name="colors" value="Blue"  /><br><br>Blue</div>
                      <div class="foo wine"> <input type="radio" name="colors" value="Green"  /><br><br>Green</div><br><br><br>
                     
     

                        <div class="cleaner_h10"></div> </th></tr>
                      
                       <tr><th> <label>Racks:</label></th><th><select name="racks">

<option value="5 Racks">5 Racks</option><br>
<option value="6 Racks">6 Racks</option><br>
<option value="7 Racks">7 Racks</option><br>
</select>
                        <div class="cleaner_h10"></div></th>
 <?php
                          if(isset($_POST['view'])){
if($_POST['racks']=='5 Racks')
{
    $result1 =1000;
      
    }
else if($_POST['racks']=='6 Racks')
{
     $result1 = 2000;
     
     
 }
 else if($_POST['racks']=='7 Racks')
{
     $result1 = 3000;
     
     
 } ?> 
                        <th><input type="hidden" name="res" value="<?php echo $result1 ;?>"></th></tr>
                              <?php
                         }
                           
                            ?>                
                        <tr><th><label>Locker:</label></th><th> <select name="locker">

<option value="double">Double</option><br>
<option value="single">Single</option><br>
</select>
                              
                        <div class="cleaner_h10"></div>  </th>

 <?php
                          if(isset($_POST['view'])){

if($_POST['locker']=='single')
{
    $result2 =1000;
      
    }
else if($_POST['locker']=='double')
{
     $result2 = 2000;
     
     
 } ?> 
                        <th><input type="hidden" name="res" value="<?php echo $result2 ;?>"></th></tr> 
                        <?php
                         }
                           
                            ?>  
                         <tr><th>  <label>Anchor:</label> </th><th><select name="anchor">

<option value="yes">Yes</option><br>
<option value="no">No</option><br>
</select>
                              
                        <div class="cleaner_h10"></div>  </th>

 <?php
                          if(isset($_POST['view'])){
if($_POST['anchor']=='yes')
{
    $result3 =1000;
      
    }
else if($_POST['anchor']=='no')
{
     $result3 = 0;
     
     
 } ?> 
                        <th><input type="hidden" name="res" value="<?php echo $result3 ;?>"></th></tr>
                        <?php
                         }
                           
                            ?>  
                       <tr><th> <label>Mirror:</label></th><th> <select name="mirror">

<option value="yes">Yes</option><br>
<option value="no">No</option><br>
</select>

                        <div class="cleaner_h10"></div>    </th>
 <?php
                          if(isset($_POST['view'])){
if($_POST['mirror']=='yes')
{
    $result4 =500;
      
    }
else if($_POST['mirror']=='no')
{
     $result4 = 0;
     
     
 } ?> 
                        <th><input type="hidden" name="res" value="<?php echo $result4 ;?>"></th></tr> 
                       <?php
                         }
                           
                            ?>    </table>   
                                                
                        <input type="submit" value="Submit" id="submit" name="submit" class="submit_btn float_l" />
                        <input type="submit" value="Viewcost"  name="view" class="submit_btn float_r" />
                        <br/> <br/> <br/> <br/>
                       <?php
                          if(isset($_POST['view'])){
                       $add=$result+$result1+$result2+$result3+$result4;
                      
                    ?>
                    <tr><th></th><th>TOtal Estimation:<input type="text" name="res" value="<?php echo $add ;?>"></th></tr>

                        <?php


                       }
                       ?>
                    </form>
            </div>  </center>         
            
            <?php require_once('inc\footer.php');?>