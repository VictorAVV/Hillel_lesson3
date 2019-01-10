<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Hello message.
    </title>
    <link rel='stylesheet' href='/css/bootstrap.css' type='text/css' media='all'>
    <link rel='stylesheet' href='/css/getuserage.css' type='text/css' media='all'>
</head>

<body>
    <div id="blokForma" class="container">
            <div class="success">
                <?php
                echo "Hello, $name $surname. You are age: ".$age;
                ?>
                </b>
            </div>
            <div class="alert-link">
                <a href="./index.html" class="alert-link">Return and enter new data</a>.
            </div>
    </div>
</body>

</html>