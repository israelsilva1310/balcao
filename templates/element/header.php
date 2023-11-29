<nav class="navbar navbar-expand-xxl navbar-dark">
    <div class="container">
        <a class="navbar-brand py-md-2" href="./">
            <?= $this->Html->image('Logo-PM-Inconfidentes-2021-2024.png', [
                'class' => 'align-text-top d-inline-block ms-',
                'height' => 80,

            ]) ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="menu" class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                       href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Projeto
                    </a>
                    <ul class="dropdown-menu" style="z-index: 10000!important;">
                        <li><a class="dropdown-item subtitulo-menu" href="/parceiros">Empregadores</a></li>
                        <li><a class="dropdown-item subtitulo-menu" href="/mesa-diretora">Curriculos</a></li>

                        <li><a class="dropdown-item subtitulo-menu" href="/mapalegislativo">Mapa Regional</a>
                        </li>
                        <li><a class="dropdown-item subtitulo-menu" href="/historia">Sobre</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                       href="/noticias">Notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                       href="/materias">Matérias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                       href="./vagas">Vagas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                       href="/licitacoes">Licitações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                       href="/ouvidoria">Ouvidoria</a>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link('Sair', [
                        'controller' => 'Users',
                        'action' => 'logout'], [
                        'class' => 'nav-link px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase'
                    ]) ?>
                </li>
                s
            </ul>
        </div>
    </div>
</nav>
