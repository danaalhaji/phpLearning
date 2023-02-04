<?php
$name = "Dana";
$x = 0;

while($x <=7 ){
  $x++;
}
function func($arg)  {
  $result = 0;
  for($i=0; $i<$arg; $i++) {
    $result = $result + $i;
  }
  return $result;
}
echo $_SERVER['SCRIPT_NAME'];
echo "</br>";
echo $_SERVER['HTTP_HOST'];
echo "</br>";
echo func(5);
echo "</br>";
function sayHello(){
  echo "Hiiiiiiiiiii";
}
sayHello();
echo "</br>";
echo $x;
echo "</br>";
echo "Hello World! $name";
if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
?>
