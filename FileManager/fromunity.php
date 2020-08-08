<?php
$text1 = $_POST{"1a"};
$text2 = $_POST{"2a"};
$text3 = $_POST{"3a"};

if($text1 != "")
{
    echo("Message sent succesfully");
    echo($text1);
    echo($text2);
    echo($text3);
    $file = fopen("data.txt","w");
    fwrite($file,$text1);
    fwrite($file,$text2);
    fwrite($file,$text3);
    fclose($file);
}else
{
    echo("Message not delivered");
}
?>