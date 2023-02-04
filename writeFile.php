<?php
if(isset($_POST['text'])) {
    $name = $_POST['text'];
    $handle = fopen('names.txt', 'a');
    fwrite($handle, $name."\n");
    fclose($handle); 
}
$myfile = fopen("names.txt", "a");

$txt = "John\n";
fwrite($myfile, $txt);
$txt = "David\n";
fwrite($myfile, $txt);



$read = file('names.txt');
    foreach ($read as $line) {
        echo $line .", ";
    }
?>
<form method="post">
    Name: <input type="text" name="text" /> 
    <input type="submit" name="submit" />
</form>


