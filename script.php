<?php

require 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

use Carbon\Carbon;


if (empty($_GET["title"])) {

    require("apology.php");
}
else {

    $title = htmlspecialchars($_GET["title"]);

    echo "<h3> Your Post Title: </h3>" . $title . "<br>";



    $date = Carbon::now();

    $string = $title . "-" . $date;

    $slugify = new Slugify();

    echo "<h3> Your Slug: </h3>" . $slugify->slugify($string);

}




