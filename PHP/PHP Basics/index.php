<?php

define("USE_FULL_NAME", TRUE);
define("MAX_BADGES", "150000");

$first_name = "Jeffrey";
$last_name = "Davidson"
$location = "Orlando, FL";
$role = "Student";

if( USE_FULL_NAME == TRUE ){
    $name = $first_name . ' ' . $last_name;
} else {
    $name = $first_name;
}

if( $role == "student"){
    $info = "I am a Student at Treehouse";
} elseif( $role == "Tutor"){
    $info = "I am a Tutor at Treehouse";
} else {
    $info = "I am just visiting";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title><?php echo $name; ?> | Treehouse Profile</title>
        <link href="css/style.css" rel="stylesheet"/>
    </head>

    <body>
        <section class="sidebar text-center">
            <div class="avatar">
                <img src="img/avatar.png" alt="<?php echo $name; ?>">
            </div>
            <h1><?php echo $name; ?></h1>
            <p><?php  echo $location; ?></p>
            <hr/>
            <p><?php echo $info ?></p>
            <hr/>
            <ul class="social">
                <li><a href=""><span class="icon twitter"></span></a></li>
            </ul>
        </section>
        <section class="main">
            <pre>
                <?php



                ?>
            </pre>
        </section>
    </body>
</html>
