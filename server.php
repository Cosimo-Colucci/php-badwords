<?php
    $userBadword = $_GET['user'];
    $text = $_GET['textarea'];

    $bannedText = str_replace($userBadword, '***', $text)
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
            <?php echo $bannedText; ?>
        </p>
        <p>
            <?php echo $text; ?>
        </p>
    </body>
</html>