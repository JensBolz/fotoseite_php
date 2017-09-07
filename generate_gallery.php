<?php

//Das Ziel-Array
$file_array = Array();

//Wenn das Verzeichnis existiert...
if (is_dir($dir_bigfiles)) {
    //...öffne das Verzeichnis
    $handle = opendir($dir_bigfiles);
    //Wenn das Verzeichnis geöffnet werden konnte...
    if (is_resource($handle)) {
        //...lese die enthaltenen Dateien aus,...
        while ($file = readdir($handle)) {
            //...prüfe ob es Directory-Verweise sind...
            if ($file != "." && $file != "..")
            //...und schreibe sie in das Ziel-Array
                array_push($file_array, $file);
        }
    }else {
        echo "Das &Ouml;ffnen des Verzeichnisses ist fehlgeschlagen";
    }
} else {
    echo "Das Verzeichnis für die Images existiert nicht";
}

//Das Ziel-Array
$thumbnail_array = Array();

//Wenn das Verzeichnis existiert...
if (is_dir($dir_thumbs)) {
    //...öffne das Verzeichnis
    $handle = opendir($dir_thumbs);
    //Wenn das Verzeichnis geöffnet werden konnte...
    if (is_resource($handle)) {
        //...lese die enthaltenen Dateien aus,...
        while ($file = readdir($handle)) {
            //...prüfe ob es Directory-Verweise sind...
            if ($file != "." && $file != "..")
            //...und schreibe sie in das Ziel-Array
                array_push($thumbnail_array, $file);
        }
    }else {
        echo "Das &Ouml;ffnen des Verzeichnisses ist fehlgeschlagen";
    }
} else {
    echo "Das Verzeichnis für die Thumbnails existiert nicht";
}


sort($thumbnail_array);
sort($file_array);


$counter = count($file_array);

for ($i = $counter-1; $i >= 0; $i--) {
    $path_bigfiles = $dir_bigfiles . $file_array[$i]; //Verzeichnis mit Filename verbunden
    $path_thumbnails = $dir_thumbs . $thumbnail_array[$i];


    echo "<div class=\"grid_4\"> \n";
    echo "\t\t\t\t\t\t<a href=\"$path_bigfiles\" class=\"gal_item\"> \n";
    echo "\t\t\t\t\t\t\t<img src=\"$path_thumbnails\">\n";
    echo "\t\t\t\t\t\t\t<div class=\"gal_caption\">\n";
   // echo "\t\t\t\t\t\t\t\t<time datetime=\"2014-01-01\">30 Jul 2016</time>\n";
    echo "\t\t\t\t\t\t\t</div>\n";
    echo "\t\t\t\t\t\t\t<span class=\"gal_magnify\"></span>\n";
    echo "\t\t\t\t\t\t</a>\n";
    echo "\t\t\t\t</div>\n";
    echo "\t\t\t\t";
}
?>