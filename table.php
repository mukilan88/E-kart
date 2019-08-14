<?php
    session_start();
include('admin/db.php');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $category = $_POST['category'];
    $weight = $_POST['weight'];
    $colors = $_POST['colors'];
    

    //TO ALERT SUBMISSION OF BLANK FIELDS(IT DOESN'T PREVENT SUBMISSION OF BLANK FIELD THOUGH)
    if (!$category  && !$weight && !$colors ){
        echo "can't submit blank fields";
    }

    //TO CONFIRM YOU ARE CONNECTED TO YOUR DATABASE (OPTIONAL)
  
    //TO INSERT username and password from field to jossyusers database
   $query='insert into table1(email,categories,weight,colors,orderid)values ("'.$email.'","'.$category.'","'.$weight.'","'.$colors.'",0)';  
       echo "<script>alert('Successfully inserted!!!'); window.location='categories.php'</script>";
    $result = mysqli_query($con, $query);
    
    if(!$result){
        die("OOPPS! query failed".mysqli_error($con)); 
    }
}

  
     
?>
         
       
        
       
         <?php require_once('inc\top.php');?>
<?php require_once('inc\steel-header.php');?><center>
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
	        
		<div id="contact_form">
            
                <h4>Tables</h4>
             
                    <form method="post" name="contact" action="table.php">
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
                      
                        <tr><th> <label>Categories:</label></th><th><select name="category">

<option value="normal">Normal Table</option><br>
<option value="dinning">Dinning Table</option><br>

<option value="studytable">Study Table</option><br>
<option value="foldingtable">Folding Table</option><br>
<option value="withdraw">With Drawer</option><br>
</select>
                        <div class="cleaner_h10"></div></th>


<?php
                          if(isset($_POST['view'])){
 if($_POST['category']=='normal')
{
    $result =3000;
      
    }
else if($_POST['category']=='dinning')
{
     $result = 5000;
     
     
 }
 else if($_POST['category']=='studytable')
{
     $result = 2500;
     
     
 }
 else if($_POST['category']=='foldingtable')
{
     $result = 2500;
     
 }
 else if($_POST['category']=='withdraw')
{
     $result = 3500;
     
 }
                       ?> 
                        <th><input type="hidden" name="res" value="<?php echo $result ;?>"></th></tr>
                           <?php
                         }
                           
                            ?>    

                      
                      <tr><th>  <label>Weight:</label> </th><th><select name="weight" >

<option value="heavy">Heavy</option><br>
<option value="medium">Medium</option><br>
<br><br><br><br></select>


                 <div class="cleaner_h10"></div></th>
<?php
                          if(isset($_POST['view'])){

if($_POST['weight']=='heavy')
{
    $result1 =1000;
      
    }
else if($_POST['weight']=='medium')
{
     $result1 = 2000;
     
     
 }
 
               ?> 
                        <th><input type="hidden" name="res" value="<?php echo $result1 ;?>"></th></tr> 
                       <?php
                         }
                           
                            ?>
                          
  


                      </tr>
                                            
                        
                            
                        <tr><th> <label>Color:</label> </th><th><div class="foo blue"> <input type="radio" name="colors" value="Grey"  /><br><br>Grey</div>
                         <div class="foo purple"> <input type="radio" name="colors" value="Blue"  /><br><br>Blue</div>
                      <div class="foo wine"> <input type="radio" name="colors" value="Green"  /><br><br>Green</div><br><br><br>
                     
     

                        <div class="cleaner_h10"></div> </th></tr>
                      
                       
                              
                                                   
                        

                         </table>   <br/> <br/>
                                                
                        <input type="submit" value="Submit" id="submit" name="submit" class="submit_btn float_l" />
                        <input type="submit" value="Viewcost"  name="view" class="submit_btn float_r" />
                        <br/> <br/> <br/> <br/>
                       <?php
                          if(isset($_POST['view'])){
                       $add=$result+$result1;
                      
                    ?>
                    <tr><th></th><th>TOtal Estimation:<input type="text" name="res" value="<?php echo $add ;?>"></th></tr>

                        <?php


                       }
                       ?>
                    </form>
            </div>           
            
            </center>
        <?php require_once('inc\footer.php');?>