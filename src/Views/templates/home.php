<?php $this->layout("layouts/default", ["title" => "Home"]) ?>

<?php $this->start('links_css') ?>
<link rel="stylesheet" href="<?= asset("/css/inicio.css") ?>">
<?php $this->stop() ?>

<main>
    <section>
        <h1 class="title">Coffeecode/Router</h1>
        <div class="content">
            <h2 class="title-second">Sobre Router</h2>
            <p>
                Pequeno, simples e descomplicado. O <strong>Router</strong> é um componente de rotas PHP com abstração MVC. Preparado com verbos Restfull (GET,POST,PUT,PATCH e DELETE), trabalha em sua própria camada de forma isolada e pode ser integrado sem segredos a sua aplicação.
            </p>
        </div>
        <div class="content">
            <h2 class="title-second">Sobre CoffeeCode</h2>
            <p>
                CoffeeCode é um conjunto de pequenos e otimizados componentes PHP para tarefas comuns. Mantido por Robson V. Leite e a equipe UpInside. Com eles você executa tarefas rotineiras com poucas linhas, escrevendo menos e fazendo muito mais.
            </p>
        </div>
        <nav class="list">
            <h2 class="title-second">Pontos fortes</h2>
            <ul>
                <li>Classe router com todos os verbos RESTful</li>
                <li>Despacho otimizado com controle total de decisões</li>
                <li>Falsificador (Spoofing) de requisição para verbalização local)</li>
                <li>É muito simples criar rotas para sua aplicação ou API</li>
                <li>Gatilho e transportador de dados para o controloador</li>
                <li>Pronto para o composer e compatível com PSR-2</li>
            </ul>
        </nav>
        <div class="content">
            <h2 class="title-second">Instalação</h2>
            <code>
                composer require coffeecode/router
            </code>
        </div>
        <div class="content">
            <h2 class="title-second">Documentação</h2>
            <p>
                Para mais informações clique <a href="https://packagist.org/packages/coffeecode/router" target="_blank">aqui</a>.
            </p>
        </div>
    </section>
    <section>
        <h1 class="title">Coffeecode/DataLayer</h1>
        <div class="content">
            <h2 class="title-second">Sobre DataLayer</h2>
            <p>
                O <strong>Data Layer</strong> é um componente para abstração de persistência no seu banco de dados que usa PDO com prepared statements para executar rotinar comuns como cadastrar, ler editar e remover dados.
            </p>
        </div>
        <div class="content">
            <h2 class="title-second">Sobre CoffeeCode</h2>
            <p>
                CoffeeCode é um conjunto de pequenos e otimizados componentes PHP para tarefas comuns. Mantido por Robson V. Leite e a equipe UpInside. Com eles você executa tarefas rotineiras com poucas linhas, escrevendo menos e fazendo muito mais. </p>
        </div>
        <nav class="list">
            <h2 class="title-second">Pontos fortes</h2>
            <ul>
                <li>Fácil de configurar</li>
                <li>Asbtração total do CRUD</li>
                <li>Crie de modelos seguros</li>
                <li>Pronto para o composer</li>
                <li>Compatível com PSR-2</li>
            </ul>
        </nav>
        <div class="content">
            <h2 class="title-second">Instalação</h2>
            <code>
                composer require coffeecode/datalayer
            </code>
        </div>
        <div class="content">
            <h2 class="title-second">Documentação</h2>
            <p>
                Para mais informações clique <a href="https://packagist.org/packages/coffeecode/datalayer" target="_blank">aqui</a>.
            </p>
        </div>
    </section>
</main>
<footer></footer>