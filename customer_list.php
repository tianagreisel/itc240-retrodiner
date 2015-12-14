<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
    //customer_list.php - shows a list of customer data

//we connect to database here
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//we extract the data here
$sql = "select * from test_Customers";

$result = mysqli_query($iConn, $sql);


if(mysqli_num_rows($result) > 0){//show records
      
    while($row = mysqli_fetch_assoc($result))
    {


        echo '<p>';

        echo 'FirstName: <b>' . $row['FirstName'] . '</b> ';
        echo 'LastName: <b>' . $row['LastName'] . '</b> ';
        echo 'Email: <b>' . $row['Email'] . '</b> ';

        echo '<a href="customer_view.php?id=' . $row['CustomerID'] . '">' . $row['FirstName'] . '</a>';
        
        echo '</p>';

    }
        

}

else{//inform no records

echo '<div>Currently no customer records</div>';

}

//release web server resources
@mysqli_free_result($result);

//close conection to mysql
@mysqli_close($iConn);
   
?>



<?php include 'includes/footer.php'; ?>


