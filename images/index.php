<?php
/*need to use php to generate day of the week
use this day of the week to change content
within the html page (images, content, background color)

In class Bill did this:

$myDay = date('l');
$myPic = '';

switch($myDay){


    case 'Monday':
        $myPic = "pumpkin-spice-latte.jpg";
    
        break;
        
    case 'Tuesday':
        $myPic = "iced-coffee.jpg";
    
        break;


}
*/


$weekday = date("l");  //get the weekday off the server


//if it's Monday
if($weekday == "Monday"){

$image = "images/pumpkin-spice-latte.jpg";
$backgroundColor = "#FF7518";
$altTag = "Our Pumpkin Spice Latte tastes great on a Fall Day!";
$special = "Pumpkin Spice Latte";
$paragraph1 = "which makes us wish it was always Fall, as this is one of our top sellers!";
$paragraph2 = "Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical.";
$paragraph3 = "Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin.";


}

//if it's Tuesday
else if($weekday == "Tuesday"){

$image = "images/cappuccino.jpg";
$backgroundColor = "#CD853F";
$altTag = "Try our classic cappuccino!";
$special = "Cappuccino";
$paragraph1 = "which is one of our Fall classics!";
$paragraph2 = "A timeless treasure that will warm you up.";
$paragraph3 = "One of our other classic pastries like coffee cake.";

}
//if it's Wednesday
else if($weekday == "Wednesday"){
$image = "images/chaiTeaLatte.jpg";
$backgroundColor = "#F4A460";
    $altTag = "Nothing says it's Fall like a Chai Tea Latte!";
$special = "Chai Tea Latte";
$paragraph1 = "nothing says it's Fall like a $special";
$paragraph2 = "one of the most popular beverages we have!";
$paragraph3 = "many other equally delicious desserts.";

}
//if it's Thursday
else if($weekday == "Thursday"){
$image = "images/strawberry-shortcake.jpg";
$backgroundColor = "#FF69B4";
    $altTag = "For limited time, we are featuring our famous Strawberry Shortcake!";
$special = "Strawberry Shortcake";
$paragraph1 = "which all takes us back to the warmer days of summer and makes us forget the cold.";
$paragraph2 = "one of our most famous desserts.";
$paragraph3 = "yummy warm drinks as a soothing combination.";

}

//if it's Friday
else if($weekday == "Friday"){
$image = "images/cinnamonCoffeeCake.jpg";
    
    $backgroundColor = "#F5DEB3";
    $altTag = "Our Classic Cinnamon Coffee Cake.  This stuff sells itself!";
$special = "Classic Cinnamon Coffee Cake";
$paragraph1 = "which is a Fall classic!";
$paragraph2 = "our original best seller.  This stuff practically sells itself!";
$paragraph3 = "other Fall favorite, a Chai Tea Latte.";


}

//if it's Saturday
else if($weekday == "Saturday"){
$image = "images/espresso.jpg";
    $backgroundColor = "#A0522D";
    $altTag = "Need a pick me up?  Nothing gets your saturday morning going like an espresso!";
$special = "Espresso";
$paragraph1 = "one of the best picks me up you can get on a $weekday morning!";
$paragraph2 = "as simple and as effective as it gets.";
$paragraph3 = "other warm beverages after this classic has woken you up.";


}

//if it's Sunday
else if($weekday == "Sunday") {
$image = "images/hot-chocolate.jpg";
   // $backgroundColor = "#2b1d0e";
    //$backgroundColor = "#472400";
    //$backgroundColor = "#800000";
    $backgroundColor = "#8B0000";
    $altTag = "Its Sunday!  Try our signature, soothing Hot Chocolate!";
$special = "Hot Chocolate";
$paragraph1 = "the best way to start a $weekday morning!";
$paragraph2 = "one of our most cherished holiday drinks.";
$paragraph3 = "some of our homemade chocolate chip cookies.  Yum!";


    
}



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>LARGEBUCK$ Coffee</title>
    <meta name="robots" content="noindex,nofollow" />
	<!-- below is a google font, go to https://www.google.com/fonts to get yours! -->
	<link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<link id="mainStylesheet" rel="stylesheet" href="css/default.css" />
    <style type="text/css">
	
        html {background-color:<?=$backgroundColor?>;/* pumpkin - overwrites default */}
        
        .feature {color:<?=$backgroundColor?>; /* daily feature color - pumpkin! */}
        
		.masthead{
			font-family: 'Holtwood One SC', serif; /* required for google font */
			font-size:3em;
		}
	
		#logo{
			float:right;
			display:inline-block;
			padding:2px;
			max-width:100px; /* actual size of image */
			width:20%; /* approximate size taken on screen in maximum view */
		}
	
		#coffee {
			float:left;
			display:inline-block;
			padding:20px;
			max-width:300px; /* best if actual size of image */
			width:33%; /* approximate size taken on screen in maximum view */
		}

        h3.slogan{
           font-style:italic; /* make the slogan italics */ 
        }
    </style>
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
	<header>
	    <img src="images/largebucks-logo.jpg" alt="You drink our coffee, we make large bucks!" class="flexible" id="logo" />
        
		<h1 class="masthead">LARGEBUCK$ COFFEE</h1>
		<nav>
			<ul>
				<li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
			</ul>
		</nav>
	</header>
    <main>
		 <header><h3 class="slogan">You drink our coffee, we make large bucks!</h3></header>
        <p>
            <img src="<?=$image?>" alt="<?=$altTag?>" title="<?=$altTag?>" id="coffee" />
          
           <!-- <strong class="feature">Monday's Coffee Special:</strong> Monday's daily coffee special is <strong class="feature">Pumpkin Spice Latte</strong>, which makes us wish it was always Fall, as this is one of our top sellers!</p>
        <p><span class="feature">Pumpkin Spice is </span> Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical.</p>
        <p><span class="feature">Enjoy Pumpkin Spice with our </span> Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin.--></p>
       <strong class="feature"><?=$weekday?>'s Special:</strong> <?=$weekday?>'s daily special is <strong class="feature"><?=$special?></strong>, <?=$paragraph1?></p>
        <p><span class="feature"><?=$special?> is </span> <?=$paragraph2?></p>
        <p><span class="feature">Enjoy <?=$special?> with our </span> <?=$paragraph3?></p>
		 <p>
		 <b>At LargeBuck$ we aspire to: </b>Aesthetic gentrify YOLO McSweeney's typewriter single-origin coffee. Slow-carb hella listicle lomo, Helvetica single-origin coffee butcher stumptown. Chambray try-hard church-key mumblecore, tote bag PBR cardigan. Retro Austin Brooklyn, blog Intelligentsia gentrify jean shorts sartorial bicycle rights gastropub. Aesthetic wayfarers Pitchfork, tattooed Carles quinoa meh leggings distillery pork belly banjo. Umami cred lumbersexual skateboard, pork belly Tumblr vegan letterpress. Fixie bicycle rights butcher chillwave, gluten-free health goth Echo Park locavore whatever.

		 </p>
		<p>
		Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical. Biodiesel VHS Godard High Life, tousled Banksy craft beer. Mlkshk direct trade locavore, mumblecore keytar artisan hashtag fap. Cred cronut Brooklyn, locavore art party small batch PBR semiotics ennui kitsch taxidermy mlkshk stumptown.
		</p>
		<p>
		Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin. Etsy Wes Anderson 8-bit retro, polaroid synth paleo banh mi before they sold out Vice. Bushwick fap Intelligentsia, whatever Etsy High Life Kickstarter migas retro Banksy YOLO Carles yr raw denim. Gluten-free fixie taxidermy pop-up, actually Kickstarter flannel put a bird on it master cleanse.
		</p>
		<p>
		Text provided by <a href="http://hipsum.co/" target="_blank">Hipster Ipsum</a>
		</p>
     </main>
    <footer>
      <small>&copy; 2014-2015, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script type="text/javascript">
	$("document").ready(function(){
		$('.seasons a').click(function(e){//find all a tags inside class of seasons
            e.preventDefault();//stop default submission
			var season = $(this).attr("href");//contents of href attribute of this element
			var stylesheet = $('#mainStylesheet');
			season = season.toLowerCase();
			switch(season)
			{
				case 'spring':
				$('#logo').attr("src","images/spring.gif");
				$('#wear').attr("src","images/spring-wear.jpg");
				$('main header h3').html("Get a jump on Spring wear!");
				break;
				
				case 'summer':
				$('#logo').attr("src","images/summer.gif");
				$('#wear').attr("src","images/summer-wear.jpg");
				$('main header h3').html("Make Summer a hummer!");
				break;
				
				case 'fall':
				$('#logo').attr("src","images/fall.gif");
				$('#wear').attr("src","images/fall-wear.jpg");
				$('main header h3').html("Fall into Fall!");
				break;
				
				case 'winter':
				$('#logo').attr("src","images/winter.gif");
				$('#wear').attr("src","images/winter-wear.jpg");
				$('main header h3').html("Keep warm this Winter!");
				break;
				
				default:
				$('#logo').attr("src","images/four-seasons.gif");
				$('#wear').attr("src","images/300x400.png");
				$('main header h3').html("Outfitter for all seasons!");
				
			}
			
			var season = "css/" + season + ".css";
			$(stylesheet).attr("href",season);
			//alert(season);
		});
	});
    </script>
	
</body>
</html>