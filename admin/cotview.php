<?php 
require_once('inc/top.php');
require_once('inc/header.php');
require_once('inc/sidebar.php');
?>
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

  <table id="tab">
                            
                                <center> COT</center> 
                                
                            <thead>
                                <tr>
                                    
                                    <th style="text-align:center;">Height</th>
                            
                                          <th style="text-align:center;">Weight</th>
                                             <th style="text-align:center;">Colors</th>
                                               <th style="text-align:center;">Arch</th>

                                               <th style="text-align:center;">Model</th>
                                               <th style="text-align:center;">Orderid</th>
                                                 
                                </tr>
                            </thead>
                            <tbody>
              <?php
     

          
require_once('db.php');

                $result1 = mysqli_query($con,"SELECT * FROM `cot` ");
while($row = mysqli_fetch_assoc($result1)){
  
  ?>
                <tr>
                 <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['height']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['weight']; ?></td>
                   <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['colors']; ?></td>
                    <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['arch']; ?></td>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['model']; ?></td>
            
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['orderid']; ?></td>
                </tr>
                <?php } 
              ?>
                            </tbody>
                        </table>
<br/><br/>


<?php
require_once('inc/footer.php');
?>
