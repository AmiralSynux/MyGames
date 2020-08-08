<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<?php
    $file = fopen("data.txt","w");
    fwrite($file,"I am the best");
    fclose($file);
?>

</body>
</html>