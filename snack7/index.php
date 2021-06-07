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
    
        $students=[
            [
                'name' => 'Giuseppe',
                'lastname' => 'Verdi',
                'voti' => [6,8,5,8,9]
            ],
            [
                'name' => 'Michele',
                'lastname' => 'Papagni',
                'voti' => [3,4,8,2,7]
            ],
            [
                'name' => 'John',
                'lastname' => 'Doe',
                'voti' => [6,9,2,4,5]
            ],
            [
                'name' => 'Fabrizio',
                'lastname' => 'Rossi',
                'voti' => [2,9,3,5,6]
            ],
            [
                'name' => 'Valerio',
                'lastname' => 'De Santis',
                'voti' => [3,5,5,7,9]
            ],
            [
                'name' => 'Marco',
                'lastname' => 'Trombetta',
                'voti' => [4,4,5,8,2]
            ],
        ];

    ?>

    <ul>
        <?php foreach($students as $student){ ?>
            <li>Nome: <?php echo $student['name'] ?></li>
            <li>Cognome: <?php echo $student['lastname'] ?></li>
            <li>Media voti: <?php echo number_format(array_sum($student['voti']) / count($student['voti']),2,",",".") ?></li> <!-- number format permette di formattare i numeri dandogli delle regole,mentre invece array_sum somma un array di numeri  -->
            <br>
        <?php } ?>
    </ul>

</body>
</html>