<?php
    /*https://www.copahost.com/blog/login-registration-php-mysql-bootstrap/ */
    /* $link = mysqli_connect("localhost","boris_login",".98vfwL9zpLI","boris_login");
    if (!$link)
    {
        echo "MySQL Error: " . mysqli_connect_error();
    } */
    $link = new mysqli("localhost", "nattanin","Np721220$","npdms"); 
 /* check connection */
    if ($link->connect_errno) {  
    printf("Connect failed: %s\n", $link->connect_error);  
    exit();  
}  
if(!$link->set_charset("utf8")) {  
    printf("Error loading character set utf8: %s\n", $link->error);  
    exit();  
}

?>