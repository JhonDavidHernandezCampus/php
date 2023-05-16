<?php
//crear la api en php
/*     header("Content-type:application/json");
    
    $nombre = (string) "jhon David";


    $obj = (object)[];

    $obj-> nombre = (string) "jhon";
    $obj-> apellido = (string) "Hernandez";
    $obj -> edad = (integer) 15;

    echo json_encode($obj);
     */
  /*   echo json_encode($_GET); */

//onsumir la api de pokemones en php

$config = (array)[];
$config["http"] = (array) [];
$config["http"]["method"] = (string)"GET";
$config["http"]["header"] = (string) "Content-type:application/json";
$strm = stream_context_create($config);

$res = file_get_contents("http://pokeapi.co/api/v2/nature", false , $strm);


echo $res;

?>
