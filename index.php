<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>

    <?php //foreach ($hotels as $hotel ) { ?>
        <!-- <section>
            <h2>Nome Hotel: <?php //echo $hotel['name'] ?></h2>
            <p>Descrizione Hotel: <?php // echo $hotel['description'] ?></p>

            <?php //if($hotel['parking']){ ?>
                <p>Parcheggio disponibile</p>
            <?php //} else { ?>
                <p>Parcheggio non presente </p>
                <?php // } ?>

            <p>Voto Hotel: <?php // echo $hotel['vote'] ?></p>
            <p>Distanza dal centro: <?php //echo $hotel['distance_to_center'] ?></p>
        </section>
        <hr> -->
    <?php //} ?>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome Hotel</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel ) { ?>
                    <tr>
                    <th scope="row"><?php echo $hotel['name'] ?></th>
                    <td><?php echo $hotel['description'] ?></td>
                    <?php if($hotel['parking']){ ?>
                        <td class="table-success"><p>Parcheggio disponibile</p></td>
                    <?php } else { ?>
                        <td class="table-danger"><p>Parcheggio non presente </p></td>
                        <?php } ?>
                    <td><?php echo $hotel['vote'] ?></td>
                    <td><?php echo $hotel['distance_to_center'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>