<!--Author: mr_maksis, 2022 -->

<?php
$filename = __DIR__ . '/DateBaseChareter.json';         //Link to the Json file, from the current directory
$FULLNAME = "";                                         //The requested element to search for

ReadFileDB($filename);

function ReadFileDB($a){
    $obj = file_get_contents($a);                       //Read File Json
    $arr = json_decode($obj, true);                     //Converting Json to String

    foreach($arr as $key=>$value){                      //Iterating through Json elements
        if ($key == $_GET["FULLNAME"]){                 //Searching for a Json element by a get request
            echo $value;                                //Print result
        }
    }
}
?>
