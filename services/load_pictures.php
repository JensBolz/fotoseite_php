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
?>