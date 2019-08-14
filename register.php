<?php
include('admin/db.php');
if(isset($_POST['submit'])){
    // echo "hi";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    //TO ALERT SUBMISSION OF BLANK FIELDS(IT DOESN'T PREVENT SUBMISSION OF BLANK FIELD THOUGH)
    if (!$fname  && !$lname && !$address && !$mobile && !$email && !$password){
        echo "can't submit blank fields";
    }

    if(isset($_POST['email'])){



if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $query='insert into register(fname,lname,address,mobile,email,pwd)values ("'.$fname.'","'.$lname.'","'.$address.'","'.$mobile.'","'.$email.'","'.$password.'")';  
    $result = mysqli_query($con, $query);
    header('location:login.php');
    if(!$result){
        die("OOPPS! query failed".mysqli_error($con)); 
    }
}
else {
    echo "<script>alert('email not valid!!!');  </script>";
}
} 
    
}
?>

<?php require_once('inc\top.php');?>

<body>
<?php require_once('inc\login-header.php');?>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
            <div class="col-sm-8">
                <h2>User Login</h2><br>
                <section id="slider"><!--slider-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-7">
                                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                                        </ol>
                                
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-sm-6">
                                                <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                            </div>
                                        </div>
                                    <div class="item">
                                        <div class="col-sm-6">
                                            <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <div class="col-sm-6">
                                            <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
		            </div>
	                </section><!--/slider-->
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form method="post" name="contact" action="register.php">
						<label for="fname">FirstName:</label> <input type="text"  name="fname" class="required input_field" />
                        <label for="lname">Lastname:</label> <input type="text" class="required input_field" name="lname" id="lname" />  
                        <label for="text">Address:</label> <textarea id="text" name="address" rows="0" cols="0" class="required"></textarea>
                        <label for="mobile">Mobile:</label> <input type="text" class="required input_field" name="mobile" id="mobile" pattern="[0-9]{10}">                    
                        <label for="email">Email:</label> <input type="text" class="required input_field" name="email" id="email"/>                               
                        <label for="password">Password:</label> <input type="Password" class="required input_field" name="pwd" id="subject"/>                               
						<button type="submit" value="Submit" id="submit" name="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<?php require_once('inc\footer.php');?>