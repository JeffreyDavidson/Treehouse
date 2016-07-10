<?php

$dvone = new DateTime('August 1, 1972');
$spike = new DateTime('August 13, 1970');

// Who is older?

if ($dvone < $spike) {
    echo '<p>D-Von is older thann Spike</p>';
} else {
    echo '<p>Spike is older thann D-Von</p>';
}

// Age Difference

$diff = $dvone->diff($spike);

echo $diff->format("<p>There is %y years, and %m months and %d days between Spike and D-Von</p>");
