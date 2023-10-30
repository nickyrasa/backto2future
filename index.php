<?php

$presentTime = new DateTime();
$destinationTime = DateTime::createFromFormat('m-d-Y H:i A', '10-21-2015 04:06 PM');
$format = 'M-d-Y A g:i';

$diff = $presentTime->diff($destinationTime, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>back2thefuture</title>
</head>

<body>

    <p>Present time = <?= $presentTime->format($format) ?><br>
        Destination time = <?= $destinationTime->format($format) ?>
    </p>
    <p>
        <?= $diff->format("%y years %m months %d days %H hours %I minutes") ?>
    </p>
</body>

</html>
