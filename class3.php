<?php

class Car {

    function MoveWheels()
    {
        echo "Wheels move" ;
        
    }
        
}

if(method_exists("Car","MoveWheels"))
{
    echo "MethodExists" ;
}
else
echo "Does not exist" ;    

$bmw = new Car() ;
$merce = new Car() ;

$bmw->MoveWheels() ;

$merce->MoveWheels() ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>