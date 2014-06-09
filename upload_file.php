<?php

$allowedExts = array(
  "pdf", 
  "doc", 
  "docx"
); 

$allowedMimeTypes = array( 
  'application/msword',
  'text/pdf',
  'image/gif',
  'image/jpeg',
  'image/png'
);

$extension = end(explode(".", $_FILES["file"]["name"]));

if ( 20000 < $_FILES["file"]["size"]  ) {
  die( 'Please provide a smaller file [E/1].' );
}

if ( ! ( in_array($extension, $allowedExts ) ) ) {
  die('Please provide another file type [E/2].');
}

if ( in_array( $_FILES["file"]["type"], $allowedMimeTypes ) ) 
{      
 move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]); 
}
else
{
die('Please provide another file type [E/3].');
}

?>