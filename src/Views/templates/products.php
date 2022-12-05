<?= $this->layout('/layouts/default', ['title' => "Produtos"]) ?>

<?= $this->start('links_css') ?>
<link rel="stylesheet" href="<?= asset("/css/products.css") ?>">
<?= $this->stop() ?>

<main class="content">
    <div class="container">
        <div class="header-container">
            <h1 class="title-container">Produtos </h1>
            <a class="novo" href="<?= $router->route('product.create') ?>">Novo produto +</a>
        </div>

        <table class="table-container-products">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Criado</th>
                    <th>Ultima vez alterado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($products)) : foreach ($products as $prod) : ?>
                        <tr>
                            <td><?= $prod->name ?></td>
                            <td><?= $prod->price ?></td>
                            <td><?= $dateFormat->dateFormat($prod->created_at) ?></td>
                            <td><?= $dateFormat->dateFormat($prod->updated_at) ?></td>
                            <td>
                                <div class="container-buttosn">
                                    <button class="editar">Editar</button>
                                    <button class="excluir">Excluir</button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <div class="without-products-container">
                        Sem produtos cadastrados
                    </div>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</main>