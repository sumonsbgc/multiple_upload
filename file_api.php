<?php

/*
	PHP FILE API
*/
// $path = "index.php";
// echo basename($path); // $suffix optional. if we provide suffix(extension) it will cut form filename
// echo copy("test.txt", "test2.txt"); //copy the file in to destination folder
// echo dirname(__FILE__); // grab the folder name
echo realpath(__FILE__);
echo "<br>";
print_r(pathinfo(__FILE__));
$dirname = explode("\\", pathinfo(__FILE__)['dirname']);
//unlink(); //Remove the file form directory
echo file_get_contents("https://www.google.com/");
//file_put_contents();
pathinfo($fileName, PATHINFO_FILENAME);
pathinfo($fileName, PATHINFO_EXTENSION);

strstr($string, $remove_item, true); // remove Item Sohoo porer ongsho kata jabe
strstr($string, $remove_item, false); // remove Item er ager ongsho ta remove korbe and remove item theke jabe


move_uploaded_file($tmp_name, $destiWithFileName);