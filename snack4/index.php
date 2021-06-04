<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

    $numbers=[];
    $i=0;
    while($i < 15){
        $numRan= rand(1,100);
        if(!in_array($numRan,$numbers)){
            array_push($numbers,$numRan);
            $i++;
        }
    };

    var_dump($numbers);

?>

</body>
</html>