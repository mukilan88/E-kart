   
     <?php
     session_start();
include('admin/db.php');
if(isset($_POST['submit']))
{


$email=$_POST['email'];
$pass=$_POST['password'];
$sql="select email,pwd from register where email='$email' and pwd='$pass'";
$query=mysqli_query( $con,$sql);
$row=mysqli_num_rows($query);
if($row==1)
{
 $_SESSION['email'] = $email;
echo'sucess';
 header('location:user1.php');
}
else
echo "<script>alert('not valid!!!');  </script>";
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
                <div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="post" name="contact" action="#">
							<label for="email">Email:</label>
							<input type="text" class="required input_field" name="email" id="email"/>
							<label for="lpassword">Password:</label>
							<input type="Password" class="required input_field" name="password" id="subject"/>
							<button type="submit" value="Login" id="submit" name="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<?php require_once('inc\footer.php');?>