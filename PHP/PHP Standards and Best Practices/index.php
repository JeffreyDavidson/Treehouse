<?php

$utcDateTime = new DateTime('2016-07-10 09:05', new DateTimeZone('UTC'));

$localDateTime = clone $utcDateTime;

$localDateTime->setTimezone(new DateTimeZone('America/New_York'));

?>

<p>The UTC date/time is <?php echo $utcDateTime->format("Y-m-d H:i:s"); ?></p>
<p>The New York date/time is <?php echo $localDateTime->format("Y-m-d H:i:s"); ?></p>


<?php

// $publishDate = $_POST['publish_date'];
$publishDate = '2016-07-10 12:00:00';

$localDateTime = new DateTime($publishDate, new DateTimeZone('America/New_York'));

$utcDateTime = clone $localDateTime;

$utcDateTime->setTimezone(new DateTimeZone('UTC'));

?>

<p>The UTC date/time is <?php echo $utcDateTime->format("Y-m-d H:i:s"); ?></p>
<p>The New York date/time is <?php echo $localDateTime->format("Y-m-d H:i:s"); ?></p>
