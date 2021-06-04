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
    $posts=[
        '10-05-2020' => [
            [
                'TITOLO' => 'Post1',
                'AUTORE' => 'Giuseppe Verdi',
                'TESTO' => 'Ciao!'
            ],
            [
                'TITOLO' => 'Post2',
                'AUTORE' => 'Giuseppe Verdi',
                'TESTO' => 'Tutto bene?'      
            ],
            [
                'TITOLO' => 'Post3',
                'AUTORE' => 'Giuseppe Verdi',
                'TESTO' => 'Io tutto ok'      
            ]
        ],
        '23-11-2020' => [
            [
                'TITOLO' => 'Post4',
                'AUTORE' => 'Giuseppe Verdi',
                'TESTO' => 'Allora per il calcetto?'
            ],
            [
                'TITOLO' => 'Post5',
                'AUTORE' => 'Giuseppe Verdi',
                'TESTO' => 'Ok! ci vediamo li!'
            ]
        ],
        '01-01-2021' =>[
            
            [
                'TITOLO' => 'Post6',
                'AUTORE' => 'Giuseppe Verdi',
                'TESTO' => 'Buon anno!!!'
            ],
            [
                'TITOLO' => 'Post7',
                'AUTORE' => 'Giuseppe Verdi',
                'TESTO' => 'Ci vediamo lunedi a lavoro!'
            ]
            
        ]
        
    ];
?>



<ul>
    <?php foreach($posts as $date => $post){ ?>
        <li><?php echo $date ?>
            <ul>

            <?php foreach($post as $messagges) {?>
                <?php foreach($messagges as $key => $message) {?>
                    <li><?php echo $key ?> : <?php echo $message ?></li>
                <?php } ?>
                <br>
            <?php } ?>

            </ul>
        </li>
        <hr>
    <?php } ?>
</ul>






</body>
</html>