<?php include 'includes/config.php';?>
<?php

//process querystring here

if(isset($_GET['id'])){//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];

}

else{//redirect to sage page (no data or data is wrong)

    header('Location:workout_list.php');
    
}

//we connect to database here
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//we extract the data here
$sql = "select * from Workouts where WorkoutID = $id";

$result = mysqli_query($iConn, $sql);


if(mysqli_num_rows($result) > 0){//show records
      
    while($row = mysqli_fetch_assoc($result))
    {
        $WorkoutName = stripslashes($row['WorkoutName']);
        $WorkoutType = stripslashes($row['WorkoutType']);
        $WorkoutDescription = stripslashes($row['WorkoutDescription']);
        $WorkoutDate = stripslashes($row['WorkoutDate']);
        
        $title = "Title Page for " . $WorkoutName;
        $pageID = $WorkoutName;
        $Feedback = ''; //no feedback necessary
        

    }
        

}

else{//inform no records

$Feedback = '<p>This customer does not exist</p>';

}





?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
    //customer_view.php - shows details of a single customer 

if($Feedback == ''){//data exists, show it



//echo '<img src="uploads/workout' . $id . '.jpg" style="width:400px;" style="height:400px;" />';
echo '<img src="uploads/workout' . $id . '.jpg" />';

    
    if(startSession() && isset($_SESSION["AdminID"]))
        {# only admins can see 'peek a boo' link:
            //echo '<p align="center"><a href="' . VIRTUAL_PATH . 'upload_form.php?' . $_SERVER['QUERY_STRING'] . '">UPLOAD IMAGE</a></p>';
            
            # if you wish to overwrite any of these options on the view page, 
            # you may uncomment this area, and provide different parameters:						
            echo '<p align="center"><a href="' . VIRTUAL_PATH . 'upload_form.php?' . $_SERVER['QUERY_STRING']; 
            echo '&imagePrefix=workout';
            echo '&uploadFolder=uploads/';
            echo '&extension=.jpg';
            echo '&createThumb=TRUE';
            echo '&thumbWidth=50';
            echo '&thumbSuffix=_thumb';
            echo '&sizeBytes=270000';
            echo '">UPLOAD IMAGE</a></p>';
            						

        }
        if(isset($_GET['msg']))
        {# msg on querystring implies we're back from uploading new image
            $msgSeconds = (int)$_GET['msg'];
            $currSeconds = time();
            if(($msgSeconds + 2)> $currSeconds)
            {//link only visible once, due to time comparison of qstring data to current timestamp
                echo '<p align="center"><script type="text/javascript">';
                echo 'document.write("<form><input type=button value=\'IMAGE UPLOADED! CLICK TO REFRESH PAGE!\' onClick=history.go()></form>")</scr';
                echo 'ipt></p>';
            }
        }
    
    
echo '<p>';

echo 'Workout Name: <b>' . $WorkoutName . '</b><br />';
echo 'Workout Type: <b>' . $WorkoutType . '</b><br /> ';
echo 'Date: <b>' . $WorkoutDate . '</b> <br />';
echo 'Workout Description: <br /><b>' . $WorkoutDescription . '</b> <br />';
    


//echo '<a href="customer_view.php?id=' . $row['CustomerID'] . '">' . $row['FirstName'] . '</a>';

echo '</p>';


} 
 else{//warn user no data
 
     echo $Feedback;
 
 }
/*
echo '<p>';

echo 'FirstName: <b>' . $FirstName . '</b> ';
echo 'LastName: <b>' . $LastName . '</b> ';
echo 'Email: <b>' . $Email . '</b> ';

//echo '<a href="customer_view.php?id=' . $row['CustomerID'] . '">' . $row['FirstName'] . '</a>';

echo '</p>';*/

echo '<p><a href="workout_list.php">Go Back</a></p>';



//release web server resources
@mysqli_free_result($result);

//close conection to mysql
@mysqli_close($iConn);
   
?>



<?php include 'includes/footer.php'; ?>


