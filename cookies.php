<?php
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"
?>

<!-- 
    The following example creates a cookie named "user" with the value "John". 
    The cookie will expire after 30 days, which is written as 86,400 * 30,
    in which 86,400 seconds = one day. The '/' means that the cookie is available throughout the entire website.
We then retrieve the value of the cookie "user" (using the global variable $_COOKIE).
We also use the isset() function to find out if the cookie is set:
 -->