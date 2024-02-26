<?php

$length = $_GET['length'] ?? '';

if(!empty($length)){
    $password = generate_password($length);
}

function generate_password($length){

    $password = '';

    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+-={}[]|:;,.?~';
    $characters = $letters . strtoupper($letters) . $numbers . $symbols;

    $total_characters = mb_strlen($characters);

    while (mb_strlen($password) < $length ) {
        $random_index = rand(0, $total_characters - 1);

        $random_character = $characters[$random_index];

        $password .= $random_character;
    }

    return $password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Password generator</title>
</head>

<body class="container mt-5">
    <h1 class="mb-4">Strong Password Generator</h1>
    <form action="index.php" method="get">
        <div class="form-group">
            <label for="length">Password Length:</label>
            <input type="number" class="form-control" id="length" name="length" min="5" value="5" step="1">
        </div>
        <button type="submit" class="btn btn-primary my-4">Generate Password</button>
    </form>

</body>

</html>