<?php
/**
 * upload_info.php identifies PHP settings to determine obstacles in uploading files
 *
 *
 * @package nmUpload
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 2.031 2012/03/11
 * @link http://www.newmanix.com/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see config_test.php
 * @todo none
 */
?>
<html>
<head>
	<style type="text/css">
	 .red {color:#FF0000;font-family:'Courier New',Courier,Verdana;font-weight:bold;font-size:120%;}
	 .blue {color:#0000FF;font-family:'Courier New',Courier,Verdana;font-weight:bold;font-size:120%;}
	 .green {color:#347235;font-family:'Courier New',Courier,Verdana;font-weight:bold;font-size:120%;}
	</style>
	<title>upload_info.php</title>
	<meta name="robots" content="no index, no follow" />
</head>
<body>
<p><b>upload_info.php</b></p>
<p>This file will attempt to expose the <strong>PHP.INI</strong> settings that could effect your ability to 
upload files via PHP.</p><p>
  <?php
  
if(ini_get('file_uploads') && ini_get('file_uploads') == 1)
{#file upload allowed!
	echo '<b>file_uploads</b> is currently: <span class="green">ON</span>.  This identifies the raw ability to upload a file at all.<br />';
	echo 'You <b>are</b> currently able to upload files on this server. Check the other limitations below that may effect the base ability to upload.<br />';
}else{#file upload shut off by default!
	echo 'By default, <b>file_uploads</b> is: <span class="red">OFF</span><br />';
	
	ini_set('file_uploads',1); #attempt to turn on error logging
	if(ini_get('file_uploads')!='' && ini_get('file_uploads') == 1)
	{#apparently able to turn on error logging
		echo '<br />Able to turn on <b>file uploads</b> via <b>ini_set()</b>: <span class="green">TRUE</span><br />';
		echo 'You can turn on file uploads on a page by page basis by using <b>ini_set("file_uploads",1)</b>.<br />';
		echo 'You will likely also need to set other upload settings (see below).<br /><br />';
	}else{
		echo '<br />Able to turn on <b>file uploads</b> via <b>ini_set()</b>: <span class="red">FALSE</span><br />';
		echo 'However, you may be able to place a custom <b>php.ini</b> file in the root of your application space, which could contain ';
		echo 'a single line of code:<br /><br />';
		echo '<b>file_uploads = 1</b><br /><br />';
		echo 'Not all hosting companies allow a custom <b>php.ini</b> however. You may wish to check with the hosting company to 
		see if file uploads can be enabled.<br />';
	}
}
echo '<br /><b>max_execution_time</b> by default is: <span class="blue">' . ini_get('max_execution_time') . '</span> seconds.  This identifies the maximum time allowed for any script to run before its terminated.<br />';
$defaultMax = (int)ini_get('max_execution_time');
$newValue = $defaultMax + 30; #add 30 seconds to default
ini_set('max_execution_time',$newValue); #attempt to add more
$defaultMax = (int)ini_get('max_execution_time'); #see if change worked...

if($defaultMax == $newValue)
{#able to make change
	echo "We were able to change the <b>max_execution_time</b> via <b>ini_set('max_execution_time'," . $newValue . ")</b> to increase the time. ";
	echo '<b>max_execution_time</b> after the change is: <span class="blue">' . ini_get('max_execution_time') . '</span> seconds.<br />';
}else{#not able to make change
	echo "We were <b>not</b> able to change the <b>max_execution_time</b> to a higher value via <b>ini_set()</b>.<br />";
}

echo '<br /><b>max_input_time</b> by default is: <span class="blue">' . ini_get('max_input_time') . '</span> seconds.  This is the amount of time allowed for files to be uploaded.<br />';
$defaultMax = (int)ini_get('max_input_time');
$newValue = $defaultMax + 30; #add 30 seconds to default
ini_set('max_input_time',$newValue); #attempt to add more
$defaultMax = (int)ini_get('max_input_time'); #see if change worked...

if($defaultMax == $newValue)
{#able to make change
	echo "We were able to change the <b>max_input_time</b> via <b>ini_set('max_input_time'," . $newValue . ")</b> to increase the time. ";
	echo '<b>max_input_time</b> after the change is: <span class="blue">' . ini_get('max_input_time') . '</span> seconds.';
}else{#not able to make change
	echo "We were <b>not</b> able to change the <b>max_input_time</b> to a higher value via <b>ini_set()</b>.";
}
?>
<p><b>NOTE:</b> Either of the above two settings, <b>max_execution_time</b> or <b>max_input_time</b> could stop your file upload application 
prematurely.  In a perfect world they are both set to the same number of seconds (or set <b>max_execution_time</b> slightly higher) and both should be 90 
seconds or so to allow for a slow connection for an upload page.</p>
<?php

echo '<b>post_max_size</b> by default is: <span class="blue">' . ini_get('post_max_size') . '</span>. This is the maximum size of <b>all</b> POST data, including uploads.<br />';
$defaultMax = (int)ini_get('post_max_size');
$newValue = $defaultMax + 5; #add 5 MB to default
ini_set('post_max_size',$newValue); #attempt to add more
$defaultMax = (int)ini_get('post_max_size'); #see if change worked...

if($defaultMax == $newValue)
{#able to make change
	echo "We were able to change the <b>post_max_size</b> via <b>ini_set('post_max_size'," . $newValue . ")</b> to increase the POST size. ";
	echo '<b>post_max_size</b> after the change is: <span class="blue">' . ini_get('post_max_size') . '</span>.<br />';
}else{#not able to make change
	echo "We were <b>not</b> able to change the <b>post_max_size</b> to a higher value via <b>ini_set()</b>.<br />";
}

echo '<br /><b>upload_max_filesize</b> by default is: <span class="blue">' . ini_get('upload_max_filesize') . '</span>. This is the maximum size of each uploaded file.<br />';
$defaultMax = (int)ini_get('upload_max_filesize');
$newValue = $defaultMax + 5; #add 5 MB to default
ini_set('upload_max_filesize',$newValue); #attempt to add more
$defaultMax = (int)ini_get('upload_max_filesize'); #see if change worked...

if($defaultMax == $newValue)
{#able to make change
	echo "We were able to change the <b>upload_max_filesize</b> via <b>ini_set('upload_max_filesize'," . $newValue . ")</b> to increase the uploaded file size. ";
	echo '<b>upload_max_filesize</b> after the change is: <span class="blue">' . ini_get('upload_max_filesize') . '</span>.<br />';
}else{#not able to make change
	echo "We were <b>not</b> able to change the <b>upload_max_filesize</b> to a higher value via <b>ini_set()</b>.<br />";
}

echo '<br /><b>max_file_uploads</b> by default is: <span class="blue">' . ini_get('max_file_uploads') . '</span> files/form elements.  This identifies how many simultaneous files we can try to upload.<br />';
$defaultMax = (int)ini_get('max_file_uploads');
$newValue = $defaultMax + 10; #add files to default
ini_set('max_file_uploads',$newValue); #attempt to add more
$defaultMax = (int)ini_get('max_file_uploads'); #see if change worked...

if($defaultMax == $newValue)
{#able to make change
	echo "We were able to change the <b>max_file_uploads</b> via <b>ini_set('max_file_uploads'," . $newValue . ")</b> to increase the number of simultaneous file/form elements we can try to upload. ";
	echo '<b>max_file_uploads</b> after the change is: <span class="blue">' . ini_get('max_file_uploads') . '</span> files/form elements.<br />';
}else{#not able to make change
	echo "We were <b>not</b> able to change the <b>max_file_uploads</b> to a higher value via <b>ini_set()</b>.<br />";
}
?>
<p>Changing <b>any</b> setting using <b>ini_set()</b> must be done on <b>every</b> page (hence our config file)</p>
<p><strong>Custom php.ini file: </strong>Sometimes the best (and most flexible) results of all come from being allowed to create your own custom <strong>php.ini</strong> file. However this is frequently not supported by shared hosting packages. Check to see if your hosting company supports a custom <strong>php.ini </strong>file. Some folks even compile their own version of PHP, which would then have it's own <strong>php.ini</strong> file. This is sometimes done (although not supported) at Dreamhost, and is what you would do if you had a dedicated server. </p>
</body>
</html>