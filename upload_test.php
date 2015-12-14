<?php
/**
 * upload_test.php shows the raw file upload via var_dump()
 *
 * GD support is required for 'Thumbnail' creation in upload_execute.php file.
 * 
 * @package nmUpload
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 2.031 2012/03/11
 * @link http://www.newmanix.com/itc280/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @todo none
 */
//isset determines if var has valid contents
if (isset($_POST['submit'])) 
{//if var is set, show what it contains
    echo '<pre>';  
	var_dump($_FILES);
	echo '</pre>';
    print "<br><a href=" . basename($_SERVER['PHP_SELF']) . ">Reset page</a>";

}else{ //show form
?>
       <html>
       <body>
       <form action="<?=basename($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
       Please select an image to test upload: <input type="file" name="image"><br />
       <input type="submit" name="submit" value="Test File Upload">
       </form>
       </body>
       </html>
<?
}
?>
