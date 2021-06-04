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
        $partite= [
            [
                'casa'=> 'Roma',
                'ospite'=> 'Milano',
                'puntiCasa'=> 60,
                'puntiOspite'=> 33
            ],
            [
                'casa'=> 'Torino',
                'ospite'=> 'Bologna',
                'puntiCasa'=> 43,
                'puntiOspite'=> 48
            ],
            [
                'casa'=> 'Genova',
                'ospite'=> 'Napoli',
                'puntiCasa'=> 32,
                'puntiOspite'=> 15
            ],
            [
                'casa'=> 'Sassuolo',
                'ospite'=> 'Cagliari',
                'puntiCasa'=> 22,
                'puntiOspite'=> 38
            ]
        ];
        var_dump($partite);
    ?>
    
    <ul>
        <?php  
            foreach($partite as $partita){ ?>
                <li><?php echo $partita['casa'] ?> - <?php echo $partita['ospite'] ?> | <?php echo $partita['puntiCasa'] ?> - <?php echo $partita['puntiOspite'] ?></li>
            <?php } ?> 
       
    </ul>
</body>
</html>