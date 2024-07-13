<?php
/*

how to add data to get request

example 1
http://localhost/php1/index.php?key=value&key=value

example 1
http://localhost/php1/index.php?email=snen@sdas.com&password=value

*/

print_r($_SERVER);

$msg = "";


if($msg == ""){
    echo "Welcome to our home page";
}else{
    echo "you need to login";
}


?>