<?php
session_start();

if (!isset($_SESSION['noun']) || !isset($_SESSION['verb']) || !isset($_SESSION['adjective'])) {
    header("Location: form.php");
    exit();
}

$noun = $_SESSION['noun'];
$verb = $_SESSION['verb'];
$adjective = $_SESSION['adjective'];

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Silly Story</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <div class="card text-center">
        <div class="card-header">
            <h2>Here is Your Story!</h2>
        </div>
        <div class="card-body">
            <p class="card-text fs-4">
                "Once upon a time, a very <strong><?php echo $adjective; ?></strong> <strong><?php echo $noun; ?></strong> decided it wanted to <strong><?php echo $verb; ?></strong> on the moon."
            </p>
        </div>
        <div class="card-footer text-muted">
            <a href="form.php" class="btn btn-secondary">Create Another Story</a>
        </div>
    </div>
</body>
</html>