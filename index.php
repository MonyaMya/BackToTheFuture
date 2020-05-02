<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Fake Tardis</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>



<?php

$presentTime = new DateTime();
$destinationTime = new DateTime('25 March 1941 21:35:00'); 
$difference = $presentTime->diff($destinationTime);



$divTop = 'div class="col-12 text-light d-flex justify-content-center" style="background-color: #990000; padding: 10px; font-size: 20px"';
$divSub = 'div class="col-12 text-light bg-dark d-flex justify-content-center" style="padding: 10px"';
$divTitle = 'div class=" col-12 title bg-warning d-flex justify-content-center" style="margin-top: 20px"';
$meridianTop = 'div class="col-6 text-light d-flex justify-content-center" style="background-color: #990000; font-size: 11px"';


?>

<div class="container col-4 bg-dark "> 

    <<?= $divTitle ?>>PRESENT TIME</div>

     <div class="row col-10 destinationTime text-light d-flex justify-content-between">
        <div class="month">
            <<?= $divTop ?>>MONTH</div> 
            <<?= $divSub ?>><?= strtoupper($presentTime->format('M'))?></div>
        </div>

        <div class="day">
            <<?= $divTop ?>>DAY</div> 
            <<?= $divSub ?>><?= $presentTime->format('d')?></div>
        </div>

        <div class="year">
            <<?= $divTop ?>>YEAR</div> 
            <<?= $divSub ?>><?= $presentTime->format('y')?></div>
        </div>


        <div class="meridian">
            <<?= $meridianTop ?>>AM</div>
            <<?= $divSub ?>>
            <input type="radio" <?php if ($destinationTime->format('H') < 12) : echo 'checked'; endif; ?>>
            </div>
            <<?= $meridianTop ?>>PM</div>
            <<?= $divSub ?>>
            <input type="radio" <?php if ($destinationTime->format('H') > 12) : echo 'checked'; endif; ?>>
            </div>
        </div>



        <div class="hour">
            <<?= $divTop ?>>HOUR</div> 
            <<?= $divSub ?>><?= $destinationTime->format('h')?></div>
        </div>

        <div class="min">
            <<?= $divTop ?>>MIN</div> 
            <<?= $divSub ?>><?= $destinationTime->format('i')?></div>
        </div>

    </div>

    <<?= $divTitle ?>>DESTINATION TIME</div>

    <div class="row col-10 destinationTime text-light d-flex justify-content-between">

        <div class="month">
            <<?= $divTop ?>>MONTH</div> 
            <<?= $divSub ?>><?= strtoupper($destinationTime->format('M'))?></div>
        </div>

        <div class="day">
            <<?= $divTop ?>>DAY</div> 
            <<?= $divSub ?>><?= $destinationTime->format('d')?></div>
        </div>

        <div class="year">
            <<?= $divTop ?>>YEAR</div> 
            <<?= $divSub ?>><?= $destinationTime->format('y')?></div>
        </div>


        <div class="meridian">
            <<?= $meridianTop ?>>AM</div>
            <<?= $divSub ?>>
                        <input type="radio" <?php if ($destinationTime->format('H') < 12) : echo 'checked'; endif; ?>>

            </div>
            <<?= $meridianTop ?>>PM</div>
            <<?= $divSub ?>>
                        <input type="radio" <?php if ($destinationTime->format('H') > 12) : echo 'checked'; endif; ?>>

            </div>
        </div>


        <div class="hour">
            <<?= $divTop ?>>HOUR</div> 
            <<?= $divSub ?>><?= $destinationTime->format('h')?></div>
        </div>

        <div class="min">
            <<?= $divTop ?>>MIN</div> 
            <<?= $divSub ?>><?= $destinationTime->format('i')?></div>
        </div>

    </div>



    <<?= $divTitle ?>>DIFFERENCE</div>

    <div class="row col-10 destinationTime text-light d-flex justify-content-between">


        <div class="month">
            <<?= $divTop ?>>MONTH</div> 
            <<?= $divSub ?>><?= strtoupper($difference->m)?></div>
        </div>

        <div class="day">
            <<?= $divTop ?>>DAY</div> 
            <<?= $divSub ?>><?= $difference->d ?></div>
        </div>

        <div class="year">
            <<?= $divTop ?>>YEAR</div> 
            <<?= $divSub ?>><?= $difference->y ?></div>
        </div>


        <div class="">
            <<?= $divSub ?>></div> 
            <<?= $divSub ?>></div>
        </div>

        <div class="hour">
            <<?= $divTop ?>>HOUR</div> 
            <<?= $divSub ?>><?= $difference->h ?></div>
        </div>

        <div class="min">
            <<?= $divTop ?>>MIN</div> 
            <<?= $divSub ?>><?= $difference->i ?></div>
        </div>

    </div>



</div>