<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        box-sizing:border-box;
        padding:0;
        margin:0;
    }
    .grey,.green{
        color:white;
        float:left;
        width:50%;
        padding:40px;

    }
    .grey{
        background-color: grey;
    }
    .green{
        background-color: green;
    }
    </style>
</head>
<body>
    
    <?php 

         $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

    ?>

    <div class="grey">
        <ul>
            <?php foreach($db["teachers"] as $user){ ?>
                <li><?php echo $user["name"] ?> <?php echo $user["lastname"] ?></li>
            <?php } ?>
        </ul>
    </div>

    <div class="green">
        <ul>
            <?php foreach($db["pm"] as $user){ ?>
                <li><?php echo $user["name"] ?> <?php echo $user["lastname"] ?></li>
            <?php } ?>
        </ul>
    </div>

    

   

</body>
</html>