<?php
    $response = file_get_contents("https://flynn.boolean.careers/exercises/api/array/music");
    $response = json_decode($response,true);
    
    $posters = $response['response'];
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Dischi</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header class="d-flex justify-content-between">
        <img src="img/Spotify_logo.png" alt="icon">
        
        
    </header>
    <main class="wrapper">
        <div class="container">
            <div class="row my-row">
                <?php foreach($posters as $key => $poster){?>
                    
                    <div class="col-2 my-card ">
                        <img src="<?php echo $poster['poster'] ?>" alt="<?php echo $poster['title'] ?>">
                        <h3><?php echo $poster['title'] ?></h3>
                        <h5><?php echo $poster['author'] ?></h5>
                        <p><?php echo$poster['year'] ?></p>
                    </div>
                <?php }?>
                                               
            </div>
        </div>
    </main>
    

    
</body>
</html>