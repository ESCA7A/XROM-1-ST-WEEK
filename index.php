<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/lead_styles.css">
</head>
<body>
    <div>
        <form action="scripts/send_comment.php" method="POST">
            <input type="text" name="author" placeholder="введите имя"></br></br>
            <input type="text" name="comment" placeholder="введите комментарий" class="mytext"></br>
            <input type="submit" name="sumbit" value="sumbit">
        </form>

    </div>
</body>
</html>
