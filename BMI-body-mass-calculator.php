<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Healthy Me - Body mass calculator</title>
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
			<div id="main-img-bmi"  >
				<img src="img/bmi1.jpeg" height="10" alt=""/>
			</div><!-- End main-img -->
		</div><!-- End main-img-container -->
        
		<div class="col-lg-6 col-lg-offset-6 col-md-7 col-md-offset-5">
			<div class="row" id="content-row">
                
				<div class="col-md-12">
					<h1>Body mass calculator</h1>
					<p class="lead">
						BMI is a measure of body fat based on height and weight that applies to adult men and women.
					</p>
					<hr class="add_bottom_30">
                    
                    <div class="row">
                	<div class="col-md-6">
                         <form>
                            <div class="form-group"><input type="text"  class="form-control"  name="Weight"  placeholder="Weight"></div>
                            
                            <div class="form-group">
                            <div class="styled-select">
                            <select class="form-control col-md-3"  name="weight_select">
                            <option value="kilo">By Kilo (KG)</option>
                                  <option value="pounds">By Pounds</option>
                                </select>
                                </div>
                             </div>
                             
                            <div class="form-group"><input type="text"  class="form-control"  name="Height"  placeholder="Height"></div>
                            
                            <div class="form-group">
                            <div class="styled-select">
                            <select class="form-control"  name="height_select">
                                  <option value="cm">By Centimeters (cm)</option>
                              <option value="inches">By Inches</option>
                                </select>
                                </div>
                            </div>
        
                            <input type="hidden" name="calculator" value="bmi_calculator"/>
                        </form>
                        <button id="selectBtn"  class="button_medium add_top">Calculate</button>
                      </div>
                
                        <div class="col-md-6">
                              
                             <div class="result">
                                <h3>BMI Value for you</h3>
                                <div id="bmi_value">0</div>
                                <div id ="indicator"></div>
                             </div>
                             
                        </div>
                        </div><!-- End row -->
                        
                        <hr>
        
                        	<h3>The Indication for BMI Range</h3>
                                  <div class="table-responsive">
                                  <table class="table table-striped">
                                      <thead>
                                          <tr>
                                            <th>BMI Range</th>
                                            <th>Category</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <td>Less than 16.5</td>
                                        <td>Serverely Underweight</td>
                                      </tr>
                                      <tr>
                                        <td>16.5 - 18.5 </td>
                                        <td>Underweight</td>
                                      </tr>
                                      <tr>
                                        <td>18.5 - 25</td>
                                        <td>Normal</td>
                                      </tr>
                                      <tr>
                                        <td>25 - 30 </td>
                                        <td>Overweight</td>
                                      </tr>
                                      <tr>
                                        <td>30+ </td>
                                        <td>Obese</td>
                                      </tr>
                                      </tbody>
                                    </table> 
                                    </div><!-- End table responsive --> 
                    
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