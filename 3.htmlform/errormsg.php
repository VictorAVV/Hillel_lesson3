<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Error message.
    </title>
    <link rel='stylesheet' href='/css/bootstrap.css' type='text/css' media='all'>
    <link rel='stylesheet' href='/css/getuserage.css' type='text/css' media='all'>
</head>

<body>
    <div id="blokForma" class="container">
        <h3 class="errorh3">Error.</h3>
            <div class="alert">
            You entered incorrect <b>
                <?php
                if ($nameErr && $surnameErr ) {
                    echo "name and surname!";
                } elseif ($nameErr)  {
                    echo "name!";
                } elseif ($surnameErr)  {
                    echo "surname!";
                } 
                ?>
                </b>
            </div>
            <?php 
            if ($ageErr) {
            ?>
            <div class="alert">
                You entered incorrect date of birthday!
            </div>
            <?php
            }
            ?>
            <div class="alert-link">
                <a href="./index.html" class="alert-link">Go back and enter data again</a>.
            </div>
    </div>
</body>

</html>