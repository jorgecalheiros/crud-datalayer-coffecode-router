<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="<?= asset("/css/home.css") ?>">
</head>

<body>
    <header>
        <h2 class="title-header">CRUD</h2>

        <nav class="nav-header">
            <ul>
                <li>Produtos</li>
            </ul>
        </nav>
    </header>
    </aside>
    <main class="content">
        <div class="container">
            <div class="header-container">
                <h1 class="title-container">Produtos </h1>
                <a class="novo" href="<?= $router->route('product.home') ?>">Voltar</a>
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

</body>

</html>