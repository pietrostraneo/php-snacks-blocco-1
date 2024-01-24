<?php

    if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['mail'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        $mail = $_GET['mail'];
    }

    if(str_word_count())
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center text-danger">
                <h1>Log-in Form</h1>
            </div>
            <div class="col-12">
                <form action="index.php" method="GET">
                    <div class="row justify-content-center mt-3">
                        <div class="col-4">
                            <label for="name">Nome:</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="col-2">
                            <label for="age">Età:</label>
                            <input type="number" name="age" id="age" class="form-control">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-2">
                        <div class="col-6">
                            <label for="mail">Inserisci il tuo indirizzo e-mail:</label>
                            <input type="email" name="mail" id="mail" class="form-control">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-success">Log-in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>