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
  width:70px;
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
                            
                                
                                
                           <h1> Our Products Details</h1>
                           <thead>
                                <tr>
                                    
                                    <th style="text-align:center;">Order ID</th>
                                    <th style="text-align:center;">Email</th>
                                       <th style="text-align:center;">Name</th>
                                          <th style="text-align:center;">Address</th>
                                             <th style="text-align:center;">Mobile</th>
                                                  </tr>
                            </thead>
                            <tbody>
              <?php
          

require_once('db.php');
                $result1 = mysqli_query($con,"SELECT * FROM `orderdetail`");
while($row = mysqli_fetch_assoc($result1)){
?>
                <tr>
                
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['orderid']; ?></td>
                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['email']; ?></td>
                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['name']; ?></td>
                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['address']; ?></td>
                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['mobile']; ?></td>
                
  
                </tr>
                <?php } 
              ?>
                            </tbody>
                        </table>

<?php require_once('inc/footer.php');?>

