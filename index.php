<?php

$is_form_submitted= isset($_GET['password-length']);

$password_length ="";
$password_generated = '';



if ($is_form_submitted) {
    $password_length = (int)$_GET['password-length'] ?? '';


    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    for ($i=0; $i <$password_length ; $i++) { 
        $random_password = substr($characters, rand(0,strlen($characters)-1), 1 );
        $password_generated .=  $random_password;
        

    }
    
    
};
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP-Password</title>

    <!-- FOGLIO DI STILE CSS -->
    <link rel="stylesheet" href="./style.css" />

    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
    <div class="container my-5">
        <h1>Password Generator</h1>

        <form method="get">
            <div class="mb-3">
                <label for="password-length">Lunghezza Password</label>
                <input type="number" class="form-control w-25 mt-4" name="password-length" id="password-length" min="5"
                    max="20" value="<?= $password_length?>">
            </div>

            <div class="mb-3 w-25">
                <button class="btn btn-primary">Genera</button>
            </div>

            <div class="form-control w-25">
                <?php echo $password_generated ?>

            </div>
        </form>
    </div>

</body>

</html>