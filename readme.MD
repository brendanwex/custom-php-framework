# Simple PHP Framework

This is a simple no fuss MVC framework, great for your smaller projects. No need  to unleash the bigger frameworks anymore!.

**No learning curve no messy work around's, only two 3rd party libraries, but of course it has composer support built in :)**


**3rd party libs (disabled by default)**

* DB Lib - [PHP-MySQLi-Database-Class](https://github.com/joshcam/PHP-MySQLi-Database-Class)
* PHPMailer - [PHPMailer](https://github.com/PHPMailer/PHPMailer)


**Our own libs**

* Router
* Logger (disabled by default)
* Upload (Testing only, disabled by default)


# Installation

* Extract Zip or Repository to your root or sub directory (remember to change base in .htaccess)
* Have a look at config.php, you can enable / disable libraries, db access etc
* You need to set your default controller / method in config.php, demo ones already set.
* All your code goes in the app folder, see example controller/Home.php and model/TestModel.php
