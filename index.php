<?php

$presentTime = new DateTime('2013-08-15 14:00:00');
$destinationTime = new DateTime('2023-10-31 22:21:00');

$formattedPresentTime = $presentTime->format('M-d-Y A g:i');
$formattedDestinationTime = $destinationTime->format('M-d-Y A g:i');
$interval = $presentTime->diff($destinationTime);

 echo "Date de départ :" . $formattedPresentTime ;
 echo "Date de destination : " . $formattedDestinationTime;
