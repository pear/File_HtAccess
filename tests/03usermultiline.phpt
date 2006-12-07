--TEST--
File_HtAccess::load() 
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

$fh = new File_HtAccess('htaccess03');
$fh->load();
print_r($fh);
?>
--GET--
--POST--
--EXPECT--
file_htaccess Object
(
    [file] => htaccess03
    [authname] => "Protected"
    [authtype] => Basic
    [authuserfile] => /usr/local/apache/conf/users.dat
    [authgroupfile] => 
    [authdigestfile] => 
    [authdigestgroupfile] => 
    [require] => Array
        (
            [0] => user
            [1] => tuupola
            [2] => laane
            [3] => viemero
        )

    [additional] => Array
        (
        )

)
