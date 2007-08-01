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

$fh = new File_HtAccess(dirname(__FILE__) . '/htaccess01');
$fh->load();
$data = print_r($fh,1);
$data = str_replace(dirname(__FILE__) . "/", "", $data);
$data = str_replace("File_HtAccess", "file_htaccess", $data);
print $data;
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
