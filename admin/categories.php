<?php require_once('inc/top.php');?>
  <body>
    <div id="wrapper">
    <?php require_once('inc/header.php');?>

        <div class="container-fluid body-section">
            <div class="row">
            <?php require_once('inc/sidebar.php');?>
                <div class="col-md-9">
                    <h1><i class="fa fa-folder-open"></i> Categories <small>Different Categories</small></h1><hr>
                    <ol class="breadcrumb">
                        <li><a href="index.html"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                      <li class="active"><i class="fa fa-folder-open"></i> Categories</li>
                    </ol>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <form action="">
                                <div class="form-group">
                                    <label for="category">Category Name:</label>
                                    <ul class="tooplate_list">
                                    <h1 style "font-size=25px">
                                        <li><a href="almiraview.php">Almira</a></li>
                                        <li><a href="cotview.php">Cot</a></li>
                                        <li><a href="chairview.php">Chair</a></li>
                                        <li><a href="tableview.php">Table</a></li>
                                    </h1>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once('inc/footer.php');?>