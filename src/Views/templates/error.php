<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="<?= asset("/css/error.css") ?>">
</head>

<body>
    <main class="container-error">
        <?php if ($message) : ?>
            <h1 class="title-error"><?= $message ?></h1>
        <?php endif; ?>
        <div class="container-image">
            <img src="<?= asset("/imgs/error.jpg") ?>" alt="Error image">
        </div>
    </main>
    <footer>
        <span>Images from Freepik</span>
    </footer>
</body>

</html>