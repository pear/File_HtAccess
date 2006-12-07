--TEST--
File_HtAccess::load() 
--SKIPIF--
<?php 
/* first one for cvs */
if (@include(dirname(__FILE__)."/../HtAccess.php")) {
    $status = ''; 
} else if (@include('DB/HtAccess.php')) {
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
} else if (@include('DB/HtAccess.php')) {
    $status = ''; 
} else {
    $status = 'skip';
}
print $status; 

$fh = new File_HtAccess('htaccess01');
$fh->load();
print_r($fh);
?>
--GET--
--POST--
--EXPECT--
file_htaccess Object
(
    [file] => htaccess01
    [authname] => "Protected"
    [authtype] => Basic
    [authuserfile] => /usr/local/apache/conf/users.dat
    [authgroupfile] => 
    [authdigestfile] => 
    [authdigestgroupfile] => 
    [require] => Array
        (
            [0] => valid-user
        )

    [additional] => Array
        (
        )

)