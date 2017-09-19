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

    <?php foreach ($persons as $person) : ?>

        <h2><?=$person['name']; ?></h2>

        <ul>
            <li><?=$person['city']; ?></li>
            <li><?=$person['gender']; ?></li>
        </ul>

    <?php endforeach;?>

</header>
</body>
</html>