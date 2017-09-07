//
//
////
//    Das auszulesende Verzeichnis
//    $dir = "/images/gallery/big/classiccars/";
//
//    //Das Ziel-Array
//    $file_array = Array();
//
//    //Wenn das Verzeichnis existiert...
//    if(is_dir($dir))    {
//        //...öffne das Verzeichnis
//        $handle = opendir($dir);
//        //Wenn das Verzeichnis geöffnet werden konnte...
//        if(is_resource($handle))    {
//            //...lese die enthaltenen Dateien aus,...
//            while($file = readdir($handle))    {
//                //...prüfe ob es Directory-Verweise sind...
//                if($file != "." && $file != "..")
//                    //...und schreibe sie in das Ziel-Array
//                    array_push($file_array, $file);
//            }
//        }else{
//            echo "Das &Ouml;ffnen des Verzeichnisses ist fehlgeschlagen";
//        }
//    }else{
//        echo "Das Verzeichnis existiert nicht";
//    }
//    //Zum Schluss wird das Array ausgegeben
//    print_r($file_array);z