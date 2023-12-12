<?php
    //array con tutti gli hotel
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

<?php
    //array degli hotel senza parcheggio
    $hotels_nopark = []; 
    //array degli hotel con parcheggio
    $hotels_park = [];

    foreach($hotels as $hotel){
        if($hotel['parking']){
            $hotels_park[] = $hotel;
        }else{
            $hotels_nopark[] = $hotel;
        }
    }
    //var_dump($hotels_park);
    //var_dump($hotels_nopark);
?>

<?php 
    //variabile contenente la scelta fatta
    $result =  $_GET['parking'] ;
    //var_dump($result);
    if($result === ''){
        $array = $hotels;
    }elseif($result === 'true'){
        $array = $hotels_park;
    }else{
        $array = $hotels_nopark;
    } 
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
    
    <form action="index.php" method="get">
        <div class="input-group" style="width: 40%">
            <label for="parking" class="input-group-text">Seleziona il tipo di hotel </label>
            <select class="form-select" id="parking" name="parking">
                <option value="" selected>Tutti </option>
                <option value="true">Hotel con parcheggio</option>
                <option value="false">Hotel senza parcheggio</option>
            </select>
            <button class="btn btn-primary" type="submit">Invia</button>
        </div>
    </form>

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
                <?php foreach ($array as $hotel ) { ?>
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