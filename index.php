<?php

$presentTime = new DateTime('2015-10-21 04:29:00');
$destinationTime = new DateTime('2023-10-31 12:00:00');

$formattedPresentTime = $presentTime->format('M-d-Y A g:i');
$formattedDestinationTime = $destinationTime->format('M-d-Y A g:i');
$interval = $presentTime->diff($destinationTime);
