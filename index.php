<?php

require __DIR__ . '/functions.php';

$length = $_GET['length'] ?? '';

if(!empty($length)){
    $password = generate_password($length);
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

    <?php if(isset($password)): ?>
        <div class="alert alert-info">
            La password generata é : <strong><?= $password ?></strong>
        </div>
    <?php endif; ?>
    <form action="index.php" method="get">
        <div class="form-group">
            <label for="length">Password Length:</label>
            <input type="number" class="form-control" id="length" name="length" min="5" value="<?= $length ?? 5?>" step="1">
        </div>
        <button type="submit" class="btn btn-primary my-4">Generate Password</button>
    </form>

</body>

</html>