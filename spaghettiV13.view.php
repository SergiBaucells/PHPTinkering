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

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>

                <!--Mostrar tasques completes i incompletes, les completes, taxar-les-->
                <?php if ($task->completed) : ?>
                    <span class="icon">&#10004</span><strike><?= $task->name ?></strike>
                <?php else : ?>
                    <?= $task->name ?>
                <?php endif ?>

            </li>
        <?php endforeach;?>
    </ul>

</body>
</html>