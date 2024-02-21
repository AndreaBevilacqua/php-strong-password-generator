<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Password generator</title>
</head>
<body class="container mt-5">
    <h1 class="mb-4">Strong Password Generator</h1>
    <form action="generate_password.php" method="get">
        <div class="form-group">
            <label for="passwordLength">Password Length:</label>
            <input type="number" class="form-control" id="passwordLength" name="passwordLength" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Password</button>
</form>
    
</body>
</html>