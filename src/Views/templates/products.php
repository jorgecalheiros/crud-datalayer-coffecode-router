<?= $this->layout('/layouts/default', ['title' => "Produtos"]) ?>

<?= $this->start('links_css') ?>
<link rel="stylesheet" href="<?= asset("/css/products.css") ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="<?= asset("/js/jquery.maskMoney.min.js") ?>" type="text/javascript"></script>
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
                            <td money='R$'><?= $prod->price ?></td>
                            <td date><?= $prod->created_at ?></td>
                            <td date><?= $prod->updated_at ?></td>
                            <td>
                                <div class="container-buttosn">
                                    <a class="editar" href="<?= $router->route('product.edit', [
                                                                "id" => $prod->id
                                                            ]) ?>">Editar</a>
                                    <a class="excluir" href="">Excluir</a>
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

<?php $this->start('scripts') ?>
<script>
    $(document).ready(function() {
        const precos = $('[money="R$"]')
        const dates = $('[date=""]');

        precos.each((index, p) => {
            p.innerHTML = parseInt(p.innerHTML).toLocaleString('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            });
        })

        dates.each((index, d) => {
            const dataNova = new Date(d.innerHTML);
            const dia = dataNova.getDate() > 10 ? data.getDate() : "0" + dataNova.getDate();
            d.innerHTML = dia + "/" + (dataNova.getMonth() + 1) + "/" + dataNova.getFullYear();
        })
    })
</script>

<?php $this->stop() ?>