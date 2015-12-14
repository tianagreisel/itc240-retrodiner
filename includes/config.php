<?php
//config.php

define('DEBUG',true); #we want to see all errors

define('SECURE',false); #force secure, https, for all site pages

define('PREFIX', 'retro_'); #Adds uniqueness to your DB table names.  Limits hackability, naming collisions

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

/* 
 *   Virtual (web) 'root' of application for images, JS & CSS files
 *   
 *   IF SECURE, MUST BE https://
 *   Contact hosting company for assistance:
 *   http://wiki.dreamhost.com/Secure_Hosting
*/
define('VIRTUAL_PATH',  'http://tianagreisel.com/itc240/retrodiner/'); 

define('PHYSICAL_PATH',  '/home/tiagre1/tianagreisel.com/itc240/retrodiner/'); # Physical (PHP) 'root' of application for file & upload reference

# END GENERAL SETTINGS, START BOOTSTRAP CODE ---------------------------

/*
 * reference required include files here
 */
include 'credentials.php'; //stores database login info
include 'common.php'; //stores all unsightly application functions, etc.
include 'MyAutoLoader.php'; //loads class that autoloads all classes in include folder

//widget extra credit includes and array of images for widget

include 'planets2.php';
include 'random_rotate.php';

/*
Super hero images for widget randomize() to randomly
pic super hero image to display on page reloads.


*/
$heros[] = '<img src="images/coulson.png" />';
$heros[] = '<img src="images/fury.png" />';
$heros[] = '<img src="images/hulk.png" />';
$heros[] = '<img src="images/thor.png" />';
$heros[] = '<img src="images/black-widow.png" />';
$heros[] = '<img src="images/captain-america.png" />';
$heros[] = '<img src="images/machine.png" />';
$heros[] = '<img src="images/iron-man.png" />';
$heros[] = '<img src="images/loki.png" />';
$heros[] = '<img src="images/giant.png" />';
$heros[] = '<img src="images/hawkeye.png" />';
//echo randomize($heros);

$planets[] = '<img src="images/mercury.gif" />';

$planets[] = '<img src="images/venus.gif"/>';

$planets[] = '<img src="images/mars.gif" />';

$planets[] = '<img src="images/jupiter.gif"/>';

$planets[] = '<img src="images/saturn.gif"/>';

$planets[] = '<img src="images/uranus.gif"/>';

$planets[] = '<img src="images/neptune.gif"/>';

$planets[] = '<img src="images/pluto.gif"/>';



//This defines the current file name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//force secure website
if (SECURE && $_SERVER['SERVER_PORT'] != 443) {#force HTTPS
	header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}

define('INCLUDE_PATH', PHYSICAL_PATH . 'includes/'); # Path to PHP include files - INSIDE APPLICATION ROOT

define('ADMIN_PATH', VIRTUAL_PATH); # Could change to sub folder

ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

# END BOOTSTRAP CODE, START SITE SPECIFIC DATA ---------------------------



//START PLACEMENT OF switch AND $nav1!--------------

//this allows us to add unique info to our pages
switch(THIS_PAGE){

    /*case "template.php":
        $title = "My Template Title Tag";
        $pageID = "My Template Page ID";
        //$headerImage = "diner-girl.jpg";
        $headerImage = "waitress.png";
        $widget = randomize($heros);
        
        break;*/
        
     case "daily.php":
        $title = "Daily Special!";
        $pageID = "Daily Special";
        //$headerImage = "Waitress2.jpg";
        $headerImage = "waitress.png";
        $widget = rotate($planets);
        break;
        
    case "index.php":
        $title = "Home Page";
        $pageID ="Welcome to the Retro Diner Home Page!";
        $headerImage = "waitress.png";
        //$widget = '';
        $widget = randomize($heros);
        break;
        
    case "contact.php":
        $title = "Contact Page";
        $pageID = "Contact Page";
        //$headerImage = "fries2.jpg";
        $headerImage = "waitress.png";
         $widget = '';
        break;
    
    case "links.php":
        $title = "Links Page";
        $pageID = "Links Page";
        //$headerImage = "burger.jpg";
        $headerImage = "waitress.png";
         $widget = '';
        break;
        
    case "register.php":
        $title = "Registration Page";
        $pageID = "Registration Page";
       // $headerImage = "milkshake.jpg";
        $headerImage = "waitress.png";
         $widget = '';
        break;
        
    /*case "customer_list.php":
        $title = "Our First Data Page";
        $pageID = "Customer Data";
        $headerImage = "waitress.png";
         $widget = '';
        break;*/
        
    case "workout_list.php":
        $title = "Workouts Page";
        $pageID = "Workouts";
        $headerImage = "waitress.png";
         $widget = '';
        break;
         
     
    default:
        $title = THIS_PAGE;
        $pageID = "Retro Diner";
        $headerImage = "waitress.png";
         $widget = '';
                
                
}//end switch

//Here are our navigation pages:

$nav1['index.php'] = 'Home';
//$nav1['template.php'] = 'Template';
$nav1['daily.php'] = 'Daily';
//$nav1['customer_list.php'] = 'Customers';
$nav1['contact.php'] = 'Contact';
$nav1['register.php'] = 'Register';
//$nav1['links.php'] = 'Links';
$nav1['workout_list.php'] = 'Workouts';

//END PLACEMENT OF switch AND $nav1!--------------


/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/
if(startSession() && isset($_SESSION['AdminID']))
{#add admin logged in info to sidebar or nav
	$adminWidget = '<li><a href="' . ADMIN_PATH . 'admin_dashboard.php">ADMIN</a></li>';
	$adminWidget .= '<li><a href="' . ADMIN_PATH . 'admin_logout.php">LOGOUT</a></li>';
}else{//show login (YOU MAY WANT TO SET TO EMPTY STRING FOR SECURITY)
    $adminWidget = '<li><a href="' . ADMIN_PATH . 'admin_login.php">LOGIN</a></li>';
}

/*
 * These variables, when added to the header.php and footer.php files, 
 * allow custom JS or CSS scripts to be loaded into <head> element and 
 * just before the closing body tag, respectively
 */
$loadhead = '';
$loadfoot = '';
