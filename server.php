<?php
    $response = file_get_contents("https://flynn.boolean.careers/exercises/api/array/music");
    $response = json_decode($response,true);
    
    $posters = $response['response'];
    
?>