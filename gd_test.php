<?php
/**
 * gd_test.php tests the server to be sure GD library has been installed.  
 * If not, shows link to the library.  If installed, shows version info.
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

if(extension_loaded('gd') && function_exists('gd_info'))
{
	print "It looks like GD is installed!<br />";
	print "View the info below for version & compatibilities:<br />";
	print "<pre>"; var_dump(gd_info()); print "</pre>";
	print "For more info, view ";
	print '<a href="http://www.php.net/gd">GD on PHP.NET</a>';
}else{
	print "It looks like the GD Library is <b>NOT</b> installed!<br />";
	print "Contact your site administrator, and ask them to install the ";
	print '<a href="http://www.libgd.org/Main_Page">GD Library</a>';
}
?>
