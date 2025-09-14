<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Your Words</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Step 1: Enter Your Words</h1>
    <p>Please provide the following words to build your story.</p>
    
    <form action="process.php" method="POST">
        <div class="mb-3">
            <label for="noun" class="form-label">A Noun (e.g., "cat", "piano"):</label>
            <input type="text" class="form-control" id="noun" name="noun" required>
        </div>
        <div class="mb-3">
            <label for="verb" class="form-label">A Verb (e.g., "sing", "jump"):</label>
            <input type="text" class="form-control" id="verb" name="verb" required>
        </div>
        <div class="mb-3">
            <label for="adjective" class="form-label">An Adjective (e.g., "silly", "blue"):</label>
            <input type="text" class="form-control" id="adjective" name="adjective" required>
        </div>
        <button type="submit" class="btn btn-success">Generate Story</button>
    </form>
</body>
</html>