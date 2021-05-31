<?php include 'admin/config.php';?>
<?php
if(isset($_POST['submit']))
{
    $food=$_POST['food'];
    $q=$_POST['quantity'];

                              $sql1="SELECT * FROM fooditem WHERE fooditem_name='$food'";
                              $result1=mysqli_query($conn,$sql1);
                              $row= mysqli_fetch_assoc($result1);
                              $cal=($row['fooditem_calories']*$q)/$row['fooditem_quantity'];
                              
}
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Healthy Me-Check Your Calorie Intake</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Montserrat:400,700|Raleway:400,500,600,700,800|Lato:400,700,900" rel="stylesheet">
    
    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="fontello/css/fontello.css" rel="stylesheet" > 
  </head>
  <body>
  <!-- Preloader -->
<div id="preloader">
	<div id="status"><img src="img/logo.png" alt="" data-retina="true" width="160" height="100"></div>
</div>
<!--  end Preloader -->

 <div id="main-wrapper">
 <?php include 'includes/header.php' ;?>
    
	<div class="row" id="row-main">
		<div class="col-lg-6 col-md-5" id="main-img-container">
			<div id="main-img"  >
				<img src="img/calorie1.jpeg" alt=""/>
			</div><!-- End main-img -->
		</div><!-- End main-img-container -->
        
		<div class="col-lg-6 col-lg-offset-6 col-md-7 col-md-offset-5">
			<div class="row" id="content-row">
                
				<div class="col-md-12">
					<h1>Calorie Intake</h1>
					<p class="lead">
						An ideal daily intake of calories varies depending on age, metabolism and levels of physical activity, among other things. Generally, the recommended daily calorie intake is 2,000 calories a day for women and 2,500 for men.
					</p>
                   
					<hr class="add_bottom_30">
                    
                    <div class="row">
                	<div class="col-md-6">
                         <form method="post">
                        <div class="form-group">
                            
                            <select name="food" class="form-control" id="food">
                                <?php
                        $sql1="SELECT * FROM fooditem";
                        $result1=mysqli_query($conn,$sql1);
                        while($row= mysqli_fetch_assoc($result1))
                        {?>
                            <option value="<?php echo $row['fooditem_name'];?>"><?php echo $row['fooditem_name'];?> - Quantity in:<?php echo $row['quantity_type']?></option>
                        <?php
                        }
                        ?>
  
                        </select>
                        </div>
                        
                 	     

                              
                       	
                            
                            <div class="form-group">
                                 <input type="number" name="quantity" placeholder="quantity by g/ml"  class="form-control" >
                                
                             </div>
                        <button id="selectBtn" name="submit"  class="button_medium add_top">  Calculate</button>
                             
                            </form>

                      </div>
                
                        <div class="col-md-6">
                              
                             <div class="result">
                                <h3>Calories for you</h3>
                                <div id="bmi_value"><?php echo $cal;?></div>
                                <div id ="indicator"></div>
                             </div>
                             
                        </div>
                        </div><!-- End row -->
                        
                        <hr>
                        
                      
                    
			</div><!-- End col-md-12 -->
		</div><!-- End content-row -->
	</div><!-- End col-lg-6-->
</div><!-- End main-row -->
</div><!-- End main-wrapper  -->

<!-- JQUERY -->
<script src="js/jquery-1.10.min.js"></script>

<!-- OTHER JS --> 
<script src="js/bootstrap.min.js"></script>
<script src="js/retina-replace.min.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/functions.js"></script>

  </body>
</html>