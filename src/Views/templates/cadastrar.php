<?php $this->layout("layouts/default", ["title" => $title ?? ""]) ?>

<?php $this->start('links_css') ?>
<link rel="stylesheet" href="<?= asset("/css/products.css") ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="<?= asset("/js/jquery.maskMoney.min.js") ?>" type="text/javascript"></script>
<?php $this->stop() ?>

<main class="content">
    <div class="container">
        <div class="header-container">
            <h1 class="title-container"><?= $title ?> </h1>
            <a class="novo" href="<?= $router->route('product.list') ?>">Voltar</a>
        </div>

        <form class="form-container" action="<?= $nameRoute ?>" method="<?= $method  ?>" id="form">
            <div class="container-input">
                <label>Nome: </label><br />
                <input name="name" placeholder="Digite o nome do produto" value="<?= $name ?? '' ?>" />
            </div>
            <div class="container-input">
                <label>Preço: </label><br />
                <input name="price" id="price" placeholder="Digite o preço do produto" value="<?= $price ?? '' ?>" />
            </div>
            <button class="cadastrar">
                <?= $textButton ?>
            </button>
        </form>

    </div>
</main>