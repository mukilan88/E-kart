<?php
    if(isset($_POST['submit'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];

    if($user=="admin" and $pass=="admin")
    {
    echo'sucess';
    header('location:categories.php');
    }
    else
    echo "<script>alert('not valid!!!');  </script>";
}
?>   
<?php 
require_once('inc/top.php');
require_once('inc/alogin-header.php');
?>  
<div class="container">
	<div class="row">
        <div class="col-sm-12 padding-right">
            <div class="product-details"><!--product-details-->
                <div class="col-sm-7">
                    <div class="product-information"><!--/product-information-->
                        <h2>Welcome to Admin Page</h2><br>
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
                                                <img src="../images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                            </div>
                                        </div>
                                    <div class="item">
                                        <div class="col-sm-6">
                                            <img src="../images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <div class="col-sm-6">
                                            <img src="../images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
		            </div>
	                </section><!--/slider-->
                </div>
			</div><!--/product-information-->
        </div><br>
		<div class="col-sm-5">			  
            <div class="contact_form">
                <h4>Admin Panel</h4><br>
                <form method="post" name="contact" action="#">
                    <label for="username">Username:</label><br><br>
                    <input type="text" class="required input_field" name="username" id="email"/><br><br>                                  
                    <label for="password">Password:</label><br><br> 
                    <input type="Password" class="required input_field" name="password" id="subject"/><br><br>                               
                    <input type="submit" value="Submit" id="Submit" name="submit" class="submit_btn float_l" />
                </form>
            </div>
        </div>
    </div>
</div>           
<?php require_once('inc/footer.php');?>