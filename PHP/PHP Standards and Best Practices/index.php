<?php

$date = new DateTime('2016, July 9');

$date2 = new DateTime('2016-07-10');

$date3 = new DateTime('+2 weeks');

$date4 = new DateTime('next week');

$date5 = new DateTime('tomorrow');

$raw = '10. 11. 1968';
$date6 = DateTime::createFromFormat('d. m. Y', $raw);



?>

<p>The output date is: <?php echo $date->format('m/d/Y') ?></p>

<p>The output date is: <?php echo $date2->format('m/d/Y') ?></p>

<p>The output date is: <?php echo $date3->format('m/d/Y') ?></p>

<p>The output date is: <?php echo $date4->format('m/d/Y') ?></p>

<p>The output date is: <?php echo $date5->format('m/d/Y') ?></p>

<p>The output date is: <?php echo $date6->format('m/d/Y') ?></p>

