<?php $this->layout("layouts/default", ["title" => "Cadastrar produto"]) ?>

<?php $this->start('links_css') ?>
<link rel="stylesheet" href="<?= asset("/css/products.css") ?>">
<?php $this->stop() ?>

<main class="content">
    <div class="container">
        <div class="header-container">
            <h1 class="title-container">Produtos </h1>
            <a class="novo" href="<?= $router->route('product.list') ?>">Voltar</a>
        </div>

        <form class="form-container" action="/store-product" method="POST">
            <div class="container-input">
                <label>Nome: </label><br />
                <input name="name" placeholder="Digite o nome do produto" value="<?= $name ?? '' ?>" />
            </div>
            <div class="container-input">
                <label>Preço: </label><br />
                <input name="price" placeholder="Digite o preço do produto" value="<?= $price ?? '' ?>" />
            </div>
            <button class="cadastrar">
                Cadastrar
            </button>
        </form>

    </div>
</main>