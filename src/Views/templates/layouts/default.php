<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= asset("/css/global.css") ?>">
    <?= $this->section('links_css') ?>
</head>

<body>
    <header>
        <a href="#" class="header-title">
            <span>Crudzinho básico</span>
        </a>
        <nav class="header-nav-bar">
            <ul>
                <a href="<?= $router->route('product.home') ?>">
                    <li class="item-nav-bar">Início</li>
                </a>
                <a href="<?= $router->route('product.list') ?>">
                    <li class="item-nav-bar">(crud exemplo) Produtos</li>
                </a>
            </ul>
        </nav>
    </header>
    <main>
        <?= $this->section('content') ?>
    </main>
    <footer></footer>
</body>
<?= $this->section('scripts') ?>

</html>