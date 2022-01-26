<?php
// Magic constants
echo __DIR__;
echo __FILE__;
echo __LINE__;

// Create directory
mkdir('test');

// Rename directory
rename('test', 'test2');

// Delete directory
rmdir( 'test2');

// Read files and folders inside directory
$files = scandir('./');
echo $files;

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', 'some content');

// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.com/users');
echo $usersJson;
$users = json_decode($usersJson);

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file