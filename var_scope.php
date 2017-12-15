<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$x="outside" ;

function convert() {
    global $x ;
    $x="inside" ;
}

echo $x."<br>";
convert() ;    
echo $x;
$x="outside" ;    
echo $x;
    
    ?>
</body>
</html>