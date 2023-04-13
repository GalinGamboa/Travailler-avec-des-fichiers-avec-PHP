<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar - bootstrap5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark  ">
            <div class="container-fluid">
                <a href="../index.php "class="navbar-brand" >GaloDEV</a>
                <button type = "button" class ="navbar-toggler" data-bs-toggle = "collapse" data-bs-target="#menuNavigation">
                    <span class = "navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menuNavigation">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../programs/create.php">Créer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../programs/read.php">Lire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../programs/modify.php">Modifier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../programs/increase.php">Augmenter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../programs/delete.php">Supprimer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    

