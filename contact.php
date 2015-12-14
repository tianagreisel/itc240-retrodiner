<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
		<h1><?=$pageID?></h1>
<?php
    
    if(isset($_POST['submit'])){//data submitted
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = 'tgreis01@seattlecentral.edu';
    $message = process_post();
    $replyTo = $_POST['Email'];
    $subject = 'Test from contact form';
    
    safeEmail($to, $subject, $message, $replyTo);
    
    
    
    //connect to the database in order to add contact data
    $iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

    //process each post var, adding slashes, using mysqli_real_escape(), etc.
    $Name = dbIn($_POST['Name'],$iConn);
    $Age = dbIn($_POST['Age'],$iConn);
    $Telephone = dbIn($_POST['Telephone'],$iConn);
    $Email = dbIn($_POST['Email'],$iConn);
    $Comments = dbIn($_POST['Comments'],$iConn);

    //place question marks in place of each item to be inserted
    $sql = "INSERT INTO test_Contacts (Name,Age, Telephone, Email,Comments,DateAdded) VALUES(?,?,?,?,?,NOW())";
    $stmt = @mysqli_prepare($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
    
    /*
     * second parameter of the mysqli_stmt_bind_param below 
     * identifies each data type inserted: 
     *
     * i == integer
     * d == double (floating point)
     * s == string
     * b == blob (file/image)
     *
     *example: an integer, 2 strings, then a double would be: "issd"
     */

    mysqli_stmt_bind_param($stmt, 'sisss',$Name,$Age, $Telephone,$Email,$Comments);

    //execute sql command
    mysqli_stmt_execute($stmt) or die();
    
    //close statement
    @mysqli_stmt_close($stmt);
    
    //close connection
    @mysqli_close($iConn);

    
    
    echo '<p>Your data was submitted!</p>';

}
else{//show form

    echo '
    
    <form method="post" action="' . THIS_PAGE . '">
    Name: <input type="text" name="Name" required="required" /><br />
    Age: <input type="number" name="Age" required="required" /><br />
    Telephone <input type="tel" name="Telephone" required="required" /><br />
    Email: <input type="email" name="Email" required="required" /><br />
    Comments:  <textarea name="Comments"></textarea><br />
    <input type="submit" value="Send" name="submit" />

    
    </form>
    
    ';
    
}
    
    
    
?>


<?php include 'includes/footer.php'; ?>