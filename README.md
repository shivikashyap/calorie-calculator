# calorie-calculator
This project has three fields. Firstly it calculates your daily calorie count.Secondly it calculates the calorie intake and lastly it tells you your BMI.

STACK USED :
HTML, CSS (with bootstrap) , JS (with jquery), Core PHP, MySql

Requirements :
PHP version 7.0 and above with extensions : MySqli ,  mbstring and other basic extensions.

To setup this project, upload all the files in your server and create a database (MySql) with it's privileged user. 
Import shivangicalories_db.sql file.
Edit /admin/config.php and write your database name, database user's name and respective password along with hostname.

Admin login link : base_url/admin
default credentials : admin , admin as username and password

An admin can add a food item (edit and delete them too) along with it's respective units and calories, which will be used to calculate the calories intake in  check-your-calorie-intake.php file.
Thus the food item and it's respective calorie count in predefined by admin and can be dynamically changed.
The rest two pages, BMI-body-mass-calculator and  daily-calorie-calculator works on a pre-defined javascript.

Demo URL : https://calories.shivangikashyap.com/

Admin URL : https://calories.shivangikashyap.com/admin
 (admin , admin - credentials)


