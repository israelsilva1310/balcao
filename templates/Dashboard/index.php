<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
//pr($this);
?>
<div class="row">
    <div class="col-md-8">
        <h4 class="display-6 titulo-sessao fw-bold">Balcão de Empregos</h4>

        <p>Bem-vindo ao <b>Balcão de Empregos</b>, uma iniciativa da <b>Câmara Municipal de Ouro Fino</b> para conectar
            candidatos a empregos e empresas em busca de talentos. Aqui, oferecemos uma plataforma simples e eficiente
            para facilitar o processo de busca por empregos e o recrutamento de profissionais qualificados.</p>

        <p>Para os candidatos, o Balcão de Empregos é o seu ponto de partida para encontrar as melhores oportunidades de
            emprego na região. Basta cadastrar o seu currículo, destacando suas habilidades e experiências, e terá
            acesso a um amplo banco de vagas disponíveis.</p>

        <p>Para as empresas, o Balcão de Empregos é a ferramenta ideal para divulgar suas vagas e encontrar os
            candidatos ideais. Cadastre suas vagas de forma simples e rápida, descrevendo os requisitos e benefícios
            oferecidos e isso irá te ajudar a encontrar o profissional mais adequado para a vaga.</p>

        <p>O Balcão de Empregos não realiza nenhum filtro ou seleção dos candidatos. O processo de seleção fica a cargo
            das empresas, que entrarão em contato diretamente com os candidatos para as etapas subsequentes.</p>

        <p>Aproveite todas as vantagens que o <b>Balcão de Empregos</b> oferece e faça parte desse processo de
            transformação e crescimento profissional. Cadastre seu currículo e encontre a oportunidade que você tanto
            deseja ou divulgue suas vagas e encontre os melhores talentos disponíveis.</p>

        <p><b>Conte conosco!</b></p>
        <div class="text-center my-3">
            <div class="btn-group btn-group-lg mx-auto" role="group" aria-label="Large button group">
                <a data-bs-toggle="modal" data-bs-target="#modalajuda" class="btn btn-outline-primary"><i
                        class="bi bi-patch-question"></i> Como Usar?</a>

                <?= $this->Html->link('<i class="bi bi-file-earmark-person"></i>Cadastrar Curriculo', [
                    'controller' => 'Users',
                    'action' => 'cadpf',
                ], [
                    'class' => 'btn btn-outline-primary',
                    'escape' => false]) ?>

                <?= $this->Html->link('<i class="bi bi-file-earmark-person"></i>Cadastrar Empresa', [
                    'controller' => 'Users',
                    'action' => 'cadpj',
                ], [
                    'class' => 'btn btn-outline-primary',
                    'escape' => false]) ?>

                <a href="/balcao/entrar" class="btn btn-outline-primary"><i class="bi bi-door-open"></i> Entrar no
                    Sistema</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 text-center">
        <div class="card text-bg-primary mb-3 bg-topo">
            <div class="card-body">
                <h5 class="card-title">Curriculos Cadastrados</h5>
                <p class="card-text fs-1"><span id="contadorCurriculos" class="contador">0</span></p>
            </div>
        </div>
        <div class="card text-bg-primary mb-3 bg-topo">
            <div class="card-body">
                <h5 class="card-title">Empresas Cadastradas</h5>
                <p class="card-text fs-1"><span id="contadorEmpresas" class="contador">0</span></p>
            </div>
        </div>
        <div class="card text-bg-primary mb-3 bg-topo">
            <div class="card-body">
                <h5 class="card-title">Vagas Disponíveis</h5>
                <p class="card-text fs-1"><span id="contadorVagas" class="contador">0</span></p>
            </div>
        </div>
        <div class="card text-bg-primary mb-3 bg-topo">
            <div class="card-body">
                <h5 class="card-title">Pessoas Contratadas</h5>
                <p class="card-text fs-1"><span id="contadorContratos" class="contador">0</span></p>
            </div>
        </div>
    </div>
</div>
<div class="mt-5">
    <h4 class="display-6 titulo-sessao fw-bold text-center">Vagas Disponíveis</h4>

    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">ADMINISTRATIVO DE OBRAS</h5>
                    <p><b>Número de Vagas:</b> 1</br>
                        <b>Salário:</b> R$ 2405 </p>
                    <div class="text-center">
                        <a type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#info63"><i
                                class="bi bi-info-circle"></i> Informações</a>
                        <a href="/balcao/sistema/candidatar/63" class="btn btn-success mb-2"><i
                                class="bi bi-check-square"></i> Quero me Candidatar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Novo Modal -->
        <div class="modal fade" id="info63" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="">Descrição da Vaga</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="card-title text-center">ADMINISTRATIVO DE OBRAS</h5>
                        <p><b>Número de Vagas:</b> 1</br>
                            <b>Salário:</b> R$ 2405</br>
                            <b>Descrição da Vaga:</b></br>
                            CONHECIMENTO EM LANÇAMENTO DE NOTAS FISCAIS
                            Auxilia nas rotinas administrativas da obra, envolvendo processos de rh, financeiro.
                            Apontamento de cartões de ponto, lançamento de notas fiscais. Compras de suprimentos para
                            obra. </br>
                            <b>Benefícios: </b></br>
                            Alimentação no local -VT/Vale combustivel - Seguro de vida. </p>
                        <h5>Requisitos Mínimos</h5>
                        <p><b>Escolaridade: </b> Ensino Médio Completo</br>
                            <b>Informática: </b> Intermediário</br>
                            <b>Pacote Office: </b> Intermediário</br>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <a href="/balcao/sistema/candidatar/63" class="btn btn-success"><i
                                class="bi bi-check-square"></i> Quero me Candidatar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Operador de Logística I</h5>
                    <p><b>Número de Vagas:</b> 10</br>
                        <b>Salário:</b> R$ 1506 </p>
                    <div class="text-center">
                        <a type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#info55"><i
                                class="bi bi-info-circle"></i> Informações</a>
                        <a href="/balcao/sistema/candidatar/55" class="btn btn-success mb-2"><i
                                class="bi bi-check-square"></i> Quero me Candidatar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Novo Modal -->
        <div class="modal fade" id="info55" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="">Descrição da Vaga</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="card-title text-center">Operador de Logística I</h5>
                        <p><b>Número de Vagas:</b> 10</br>
                            <b>Salário:</b> R$ 1506</br>
                            <b>Descrição da Vaga:</b></br>
                            Realizar a separação de pedidos, conferência de itens e manuseio de mercadorias.</br>
                            <b>Benefícios: </b></br>
                            Assistência Médica
                            Assistência Odontológica
                            Alimentação
                            Transporte
                            Cesta básica </p>
                        <h5>Requisitos Mínimos</h5>
                        <p><b>Escolaridade: </b> Ensino Fundamental Completo</br>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <a href="/balcao/sistema/candidatar/55" class="btn btn-success"><i
                                class="bi bi-check-square"></i> Quero me Candidatar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">CAIXA </h5>
                    <p><b>Número de Vagas:</b> 1</br>
                        <b>Salário:</b> A Combinar </p>
                    <div class="text-center">
                        <a type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#info51"><i
                                class="bi bi-info-circle"></i> Informações</a>
                        <a href="/balcao/sistema/candidatar/51" class="btn btn-success mb-2"><i
                                class="bi bi-check-square"></i> Quero me Candidatar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Novo Modal -->
        <div class="modal fade" id="info51" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="">Descrição da Vaga</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="card-title text-center">CAIXA </h5>
                        <p><b>Número de Vagas:</b> 1</br>
                            <b>Salário:</b> A Combinar </br>
                            <b>Descrição da Vaga:</b></br>
                            Precisa de uma pessoa do sexo feminino para trabalhar no caixa do estabelecimento</br>
                        </p>
                        <h5>Requisitos Mínimos</h5>
                        <p><b>Escolaridade: </b> Ensino Fundamendal Incompleto</br>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <a href="/balcao/sistema/candidatar/51" class="btn btn-success"><i
                                class="bi bi-check-square"></i> Quero me Candidatar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Operador de Caixa (intermitente)</h5>
                    <p><b>Número de Vagas:</b> 4</br>
                        <b>Salário:</b> A Combinar </p>
                    <div class="text-center">
                        <a type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#info39"><i
                                class="bi bi-info-circle"></i> Informações</a>
                        <a href="/balcao/sistema/candidatar/39" class="btn btn-success mb-2"><i
                                class="bi bi-check-square"></i> Quero me Candidatar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Novo Modal -->
        <div class="modal fade" id="info39" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="">Descrição da Vaga</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="card-title text-center">Operador de Caixa (intermitente)</h5>
                        <p><b>Número de Vagas:</b> 4</br>
                            <b>Salário:</b> A Combinar </br>
                            <b>Descrição da Vaga:</b></br>
                            Não precisa de experiência. Salário R$ 7,00 por hora</br>
                            <b>Benefícios: </b></br>
                            Oportunidade de aprendizado e crescimento profissional
                            Ambiente dinâmico e colaborativo
                            Plano de saúde e odontológico
                            Bônus mensal </p>
                        <h5>Requisitos Mínimos</h5>
                        <p><b>Escolaridade: </b> Ensino Fundamendal Incompleto</br>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <a href="/balcao/sistema/candidatar/39" class="btn btn-success"><i
                                class="bi bi-check-square"></i> Quero me Candidatar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">

            <nav aria-label="Navegação de páginas">
                <ul class="pagination justify-content-center">

                    <li class="active page-item">
                        <a class="page-link" href="">
                            1 </a>
                    </li>

                </ul>
            </nav>
        </div>

    </div>
</div>

<div class="modal fade" id="modalajuda" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Ajuda Balcão de Empregos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Clique em uma das opções abaixo para assitir um tutorial de uso do nosso portal.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#modalajudausuario" data-bs-toggle="modal"><i
                        class="bi bi-file-earmark-person"></i> Para Currículo
                </button>
                <button class="btn btn-primary" data-bs-target="#modalajudaempresa" data-bs-toggle="modal"><i
                        class="bi bi-buildings"></i> Para Empresa
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalajudaempresa" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Ajuda para Empresas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/VjqCURfYheM?controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#modalajudausuario" data-bs-toggle="modal"><i
                        class="bi bi-file-earmark-person"></i> Para Currículo
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalajudausuario" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Ajuda para Cadastrar Currículo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/slO45uUNEKU?controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#modalajudaempresa" data-bs-toggle="modal"><i
                        class="bi bi-buildings"></i> Para Empresa
                </button>
            </div>
        </div>
    </div>
</div>


