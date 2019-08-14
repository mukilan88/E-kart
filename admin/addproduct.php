<?php

    require_once ('db.php');
    if (isset($_POST['Submit'])) {
        $location=$_FILES["image"]["name"];
        $dst="../uploads/" . $location;  
        move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
        $categories=$_POST['categories'];
        $name=$_POST['name'];
        $code=$_POST['code'];
        $price=$_POST['price'];
        $size=$_POST['size'];
        $quantity=$_POST['quantity'];
        $description=$_POST['description'];
        $guarantee=$_POST['guarantee'];

        mysqli_query($con, "INSERT INTO products(categories,name,code,quantity,size, price,description,guarantee,image)
        VALUES ('$categories','$name','$code','$quantity','$size','$price', '$description', '$guarantee', '$dst')");

    echo "<script>alert('Successfully Added!!!'); </script>";
}
    require_once('inc/top.php');
    require_once('inc/header.php');
    require_once('inc/sidebar.php');
?>
<div class="col-sm-6">
    <div id="contact_form">
        <h4>Add Products</h4>
        <form action="addproduct.php" method="post"enctype="multipart/form-data">
            <label for="fname">Categories:</label>
            <select name="categories">    
                <option value="Monitor">Monitor</option><br>
                <option value="Ram">Ram</option><br>
                <option value="MotherBoard">MotherBoard</option><br>
                <option value="Processors">Processors</option><br>
                <option value="HardDisk">HardDisk</option><br>
            </select>              
            <label for="fname">Product Name:</label> <input type="text" name="name" class="required input_field" /><br><br>
            <label for="Code">Code:</label> <input type="text" class="required input_field" name="code"  value="P<?php echo rand(10,100);?>" />     
            <label for="text">Quantity:</label> <input type="text" class="required input_field" name="quantity" /><br><br>                       
            <label for="text">Size:</label> <input type="text" class="required input_field" name="size"  />               
            <label for="text">Price:</label> <input type="text" class="required input_field" name="price" /><br><br>
            <label for="text">Description:</label> <textarea id="text" name="description" rows="0" cols="0" class="required"></textarea>
            <label for="text">Guarantee:</label> <input type="text" class="required input_field" name="guarantee" /><br><br> 
            <label for="text">Product Image:</label>  <input type="file" name="image"><br>     
            <input type="submit" value="Submit" id="submit" name="Submit" class="submit_btn float_l" />
            <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                            
        </form>
    </div>           
</div>       
<?php require_once('inc/footer.php');?>