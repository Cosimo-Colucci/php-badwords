<?php

    $user = $_GET'username';
    $text = $_GET'textarea';
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Server</title>
    </head>
    <body>
        <p>
            <?php echo $user; ?>
        </p>
        <p>
            <?php echo $text; ?>
        </p>
    </body>
</html>