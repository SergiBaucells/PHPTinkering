<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<header>

    <ul>
        <?php
        // Bucles o Loop
        foreach ($users as $user) {
            echo '<li>' .$user . '</li>';
        }
        ?>
    </ul>

<!---->
<!--    <ul>-->
<!--        <li>Item 1</li>-->
<!--        <li>Item 2</li>-->
<!--        <li>Item 3</li>-->
<!--        <li>Item 4</li>-->
<!--    </ul>-->
</header>
</body>
</html>