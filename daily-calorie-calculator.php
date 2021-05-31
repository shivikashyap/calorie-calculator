<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Healthy Me-Daily calories calculator</title>
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
    <link href="fontello/fontello.css" rel="stylesheet" > 
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/slider.css" rel="stylesheet">
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
				<img src="img/calculator.jpg" alt=""/>
			</div><!-- End main-img -->
		</div><!-- End main-img-container -->
        
		<div class="col-lg-6 col-lg-offset-6 col-md-7 col-md-offset-5">
			<div class="row" id="content-row">
                
				<div class="col-md-12">
					<h1>Daily calories calculator</h1>
					<p class="lead">
					The Calorie Calculator can be used to estimate the number of calories a person needs to consume each day.
					</p>
					
                    <hr class="add_bottom_30">
                    
                    <div class="row" >
                    <div class="col-md-6 col-sm-6">
                        <form >
                        	<div class="form-group"><input type="text" class="form-control" name="Age" placeholder="Age (Years)" ></div>
                           	<div class="form-group"><input type="text" class="form-control" name="Weight" placeholder="Weight"></div>
                            
                            <div class="form-group">
                                <div class="styled-select">
                                    <select class="form-control" name="weight_select">
                                        <option value="kilo">By Kilo (KG)</option>
                                        <option value="pounds">By Pounds</option>
                                    </select>
                                </div>
                                </div>
                            
                            <div class="form-group"><input type="text" class="form-control" name="Height" placeholder="Height"></div>
                            
                            <div class="form-group">
                                <div class="styled-select">
                                    <select class="form-control" name="height_select">
                                        <option value="cm">By Centimeters (cm)</option>
                                        <option value="inches">By Inches</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group add_top">
                                <input type="radio" value="Male" name="Male" id="Male"><label for="Male" style="margin-right:30px;"><span></span>Male</label>
                                <input type="radio" value="Female" name="Female" id="Female"><label for="Female"><span></span>Female</label>
                            </div>
                            
                                          
                            <input type="hidden" name="calculator" value="daily_calorie"/>
                        </form>
                    <button id="selectBtn" class="button_medium add_top">Calculate</button>
                    </div><!-- End col-md-6 -->
                    
                    <div class="col-md-6 col-sm-6">
                    
                        <div class="result">
                            <h3>Your Daily Calories</h3>
                            <div id="your_cal_intake">0.0</div>
                        </div>
                        <div class="result">
                            <h3>Lowest Daily Calories</h3>
                            <div id="bmr_value">0.0</div>
                        </div>
                    </div><!-- End col-md-6-->
                    </div><!-- End row-->
                    
                    <hr>
                    
                   
                
			</div><!-- End col-md-12 -->
		</div><!-- End content-row -->
	</div><!-- End col-lg-6-->
</div><!-- End main-row -->
</div><!-- End main-wrapper  -->

<!-- JQUERY -->
<script src="js/jquery-1.10.min.js"></script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
<script src="js/slider_func.js"></script>


<!-- OTHER JS --> 
<script src="js/bootstrap.min.js"></script>
<script src="js/retina-replace.min.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/functions.js"></script>

  </body>
</html>