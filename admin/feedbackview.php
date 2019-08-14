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
 
  width:68px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;
  width: 100%;
}

#tab tr:hover {background-color: #ddd;
}

#tab th {
  padding-top: 22px;
  padding-bottom: 22px;
  text-align: left;
 background-color: #4F7F99;
  color: white;
}
</style>
 <table id="tab">
                            
                                
                                
                            <thead>
                                <tr>
                                    
                                    <th style="text-align:center;">Email</th>
                                    <th style="text-align:center;">Name</th>
                                    <th style="text-align:center;">Feedback</th>
                                       
                                </tr>
                            </thead>
                            <tbody>
							<?php
					

require_once('db.php');
                $result = mysqli_query($con,"SELECT * FROM `feedback`");
while($row = mysqli_fetch_assoc($result)){
?>
								<tr>
								
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['email']; ?></td>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['feedback']; ?></td>
								
								</tr>
								<?php } 
              ?>
                            </tbody>
                        </table>


          
       

                        <?php 
require_once('inc/footer.php');
?>

