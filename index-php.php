<?php include 'database.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dischi</title>
</head>
<body>

    <header class="d-flex align-items-center">
        <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="Spotify logo">
    </header>

    <main>
        <div class="row justify-content-center">
            <?php foreach ($dischi as $disco) { ?>    
                <div class="col-3">
       
                    <div class="card">
                        
                        <img class="disco-img" src="<?php echo $disco['poster']; ?>" alt="IMG Album">    
                        <h2 class="text-uppercase text-center"><?php echo $disco['title']; ?></h2>
                        <span class="text-center"><?php echo $disco['author']; ?></span>
                        <span class="text-center"><?php echo $disco['year']; ?></span>    

                    </div>
                

                </div>
            <?php } ?>


        </div>
    </main>
    
</body>
</html>