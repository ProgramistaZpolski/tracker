<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analitiks Dashboard</title>
    <style>
        body {
            font-family: Ubuntu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>
<body>
    <h1>List of visited websites:</h1>
    <?php
    echo file_get_contents("history.txt");
    ?>
</body>
</html>