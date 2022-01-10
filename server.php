<?php
    $response = file_get_contents("https://flynn.boolean.careers/exercises/api/array/music");
    $response = json_decode($response,true);
    
    $posters = [];
    $genre = $_GET['genre'];
    if($genre == 'all'){
        $posters = $response['response'];
    }else{
        foreach($response['response'] as $poster){
            if($genre === $poster['genre']){
                $posters[] = $poster;
            }
        }
    }

    echo json_encode($posters);
?>