<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
    //customer_list.php - shows a list of customer data

//we connect to database here
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//we extract the data here
$sql = "select * from Workouts";

$result = mysqli_query($iConn, $sql) or die(mysqli_error($result));


if(mysqli_num_rows($result) > 0){//show records
      
    while($row = mysqli_fetch_assoc($result))
    {


        echo '<p>';

        echo 'Workout Name: <b>' . $row['WorkoutName'] . '</b> ';
        echo 'Workout Type: <b>' . $row['WorkoutType'] . '</b> ';
        //echo 'Date: <b>' . $row['WorkoutDate'] . '</b> ';

        echo '<a href="workout_view.php?id=' . $row['WorkoutID'] . '">' . $row['WorkoutName'] . '</a>';
        
        echo '</p>';

    }
        

}

else{//inform no records

echo '<div>Currently no workouts available</div>';

}

//release web server resources
@mysqli_free_result($result);

//close conection to mysql
@mysqli_close($iConn);
   
?>



<?php include 'includes/footer.php'; ?>


