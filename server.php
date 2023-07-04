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
        <h1>
            Text:
        </h1>
        <p>
            <?php echo $text; ?><br>
            <?php echo strlen ($text); ?>
        </p>
        <h1>
            ban:
        </h1>
        <p>
            <?php echo $bannedText; ?><br>
            <?php echo strlen ($bannedText); ?>
        </p>
    </body>
</html>