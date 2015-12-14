<?php include 'includes/config.php';?>
<?php

if(isset($_GET['day']))
{//show the selected day

    $weekday = $_GET['day'];

}
else
{//show today
$weekday = date("l");  //get the weekday off the server
}


//$weekday = date("l");  //get the weekday off the server


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

<?php include 'includes/header.php';?>
		<h1><?=$pageID?></h1>
<img src="<?=$image?>" alt="<?=$altTag?>" title="<?=$altTag?>" id="coffee" />
<p><strong class="feature"><?=$weekday?>'s Special:</strong></p>
<p><a href='daily.php?day=Sunday'>Sunday</a></p>
<p><a href='daily.php?day=Monday'>Monday</a></p>
<p><a href='daily.php?day=Tuesday'>Tuesday</a></p>
<p><a href='daily.php?day=Wednesday'>Wednesday</a></p>
<p><a href='daily.php?day=Thursday'>Thursday</a></p>
<p><a href='daily.php?day=Friday'>Friday</a></p>
<p><a href='daily.php?day=Saturday'>Saturday</a></p>


<?php include 'includes/footer.php'; ?>