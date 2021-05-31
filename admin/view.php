<?php
session_start();
error_reporting(0);

if(strlen($_SESSION['admin_username'])==0)
  { 
      echo "<script> alert('Session Expired, Please Login Again!');</script>" ;
      echo "<script type='text/javascript'> document.location ='index.php'; </script>";
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <style>
    @media (min-width: 360px) {
        .navbar .navbar-brand img {
    max-width: 40px;
}
.navbar .navbar-nav li {
    width: 100%;
    margin-left: -40px;
}
  .card {
    margin-bottom: 24px;
    margin-bottom: 1.5rem;
    border-radius: 0;
    width: 360px;
    display: flex;
}
 .table-wrapper {
    overflow-x: auto;
    overflow-y: visible;
}
}

@media (min-width: 500px) {
    .navbar .navbar-brand img {
    max-width: 150px;
}
.navbar .navbar-nav li {
    width: 100%;
    margin-left: 20px;
}
  .card {
    margin-bottom: 24px;
    margin-bottom: 1.5rem;
    border-radius: 0;
    width: 500px;
    display: flex;
}
  
}    
        
        
        
        
        
    </style>


</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" id="ig" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="view.php"> <i class="menu-icon fa fa-plus-square "></i>View </a>
                    </li>
                    <li>
                        <a href="edit.php"> <i class="menu-icon fa fa-pencil"></i>Edit</a>
                    </li>
                    <li>
                        <a href="logout.php"> <i class="menu-icon fa fa-power-off"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Food Items</strong>
                </div>
                <div class="card-body">
                    <div class="table-wrapper">
                    <table id="table" class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">FOOD ITEM</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">TYPE</th>
                                <th scope="col">CALORIES</th>
                                
                            </tr>
                        </thead>
                    
                    <?php include'config.php';?>
<?php
 $sql1="SELECT * FROM fooditem";
$result1=mysqli_query($conn,$sql1);
$num=1;
while($row= mysqli_fetch_assoc($result1))
    {
                        
    	echo "<tr>";
        echo "<td>".$num;
        echo "<td>".$row['fooditem_name'];
        echo "<td>".$row['fooditem_quantity'];
        echo "<td>".$row['quantity_type'];
        echo "<td>".$row['fooditem_calories'];
        ?>
    	<?php echo "</tr>";$num++;
    }
?>
               </table>
               </div>
                </div>
            </div>
        </div>
        </div>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
   
</body>

</html>
