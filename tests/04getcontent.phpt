--TEST--
File_HtAccess::getContent() 
--SKIPIF--
<?php 
/* first one for cvs */
if (@include(dirname(__FILE__)."/../HtAccess.php")) {
    $status = ''; 
} else if (@include('File/HtAccess.php')) {
    $status = ''; 
} else {
    $status = 'skip';
}
print $status; 
?>
--FILE--
<?php
/* first one for cvs */
if (@include(dirname(__FILE__)."/../HtAccess.php")) {
    $status = ''; 
} else if (@include('File/HtAccess.php')) {
    $status = ''; 
} else {
    $status = 'skip';
}
print $status; 

$fh = new File_HtAccess(dirname(__FILE__) . '/htaccess01');
$fh->load();
print $fh->getContent();
$fh = new File_HtAccess(dirname(__FILE__) . '/htaccess02');
$fh->load();
print $fh->getContent();
$fh = new File_HtAccess(dirname(__FILE__) . '/htaccess03');
$fh->load();
print $fh->getContent();
?>
--GET--
--POST--
--EXPECT--
AuthName "Protected"
AuthType Basic
AuthUserFile /usr/local/apache/conf/users.dat
Require valid-user

AuthName "Protected"
AuthType Basic
AuthUserFile /usr/local/apache/conf/users.dat
Require user tuupola laane viemero

AuthName "Protected"
AuthType Basic
AuthUserFile /usr/local/apache/conf/users.dat
Require user tuupola laane viemero
