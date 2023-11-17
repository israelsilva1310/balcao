<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Curriculo> $curriculos
 */
?>
<div>
    <div>
        <a href="/balcao/sair" class="float-end text-decoration-none mx-2"><i class="bi bi-door-open-fill"></i> Sair do
            Sistema</a>
        <a href="/balcao/sistema/participei" class="float-end text-decoration-none mx-2"><i
                class="bi bi-card-checklist"></i> Vagas que Participei</a>
        <h4 class="display-6 titulo-sessao fw-bold">Balcão de Empregos</h4>
    </div>
    <div class="row justify-content-center my-3">
        <div class="col-md-9">
            Olá, <b>Israel da Cruz Alves da Silva</b> bem vindo(a) ao Sistema de Balcão de Empregos da Câmara Municipal
            de
            Ouro Fino, aqui você pode cadastrar e atualizar seu curriculo, imprimir e se canditar a vagas de empregos,
            lembre-se de sempre manter seu curriculo atualizado e também de periodicamente acessar o sistema para
            verificar
            se tem novas vagas disponíveis!
        </div>
        <div class="col-md-3 text-end">
            <a href="/balcao/sistema/curriculo" class="btn btn-primary btn-lg my-1"><i class="bi bi-pencil-square"></i>
                Criar um Curriculo</a>
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
                            <a type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                               data-bs-target="#info63"><i
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
                                Apontamento de cartões de ponto, lançamento de notas fiscais. Compras de suprimentos
                                para
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
                            <a type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                               data-bs-target="#info55"><i
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
                            <a type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                               data-bs-target="#info51"><i
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
                            <a type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                               data-bs-target="#info39"><i
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
                            <a class="page-link"
                               href="https://camaraourofino.mg.gov.br/index.php/balcao/sistema?page=1">
                                1 </a>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
<div class="curriculos index content">
    <?= $this->Html->link(__('New Curriculo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Curriculos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('candidate_id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('dt_nasc') ?></th>
                <th><?= $this->Paginator->sort('estado_civil') ?></th>
                <th><?= $this->Paginator->sort('cnh_a') ?></th>
                <th><?= $this->Paginator->sort('cnh_outros') ?></th>
                <th><?= $this->Paginator->sort('celular') ?></th>
                <th><?= $this->Paginator->sort('contato_tipo') ?></th>
                <th><?= $this->Paginator->sort('cep') ?></th>
                <th><?= $this->Paginator->sort('logradouro') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th><?= $this->Paginator->sort('complemento') ?></th>
                <th><?= $this->Paginator->sort('bairro') ?></th>
                <th><?= $this->Paginator->sort('municipio') ?></th>
                <th><?= $this->Paginator->sort('uf') ?></th>
                <th><?= $this->Paginator->sort('grau_instrucao') ?></th>
                <th><?= $this->Paginator->sort('curso_formacao') ?></th>
                <th><?= $this->Paginator->sort('instituicao_ensino') ?></th>
                <th><?= $this->Paginator->sort('inicio_formacao') ?></th>
                <th><?= $this->Paginator->sort('fim_formacao') ?></th>
                <th><?= $this->Paginator->sort('outros_cursos_formacao') ?></th>
                <th><?= $this->Paginator->sort('ingles') ?></th>
                <th><?= $this->Paginator->sort('espanhol') ?></th>
                <th><?= $this->Paginator->sort('informatica') ?></th>
                <th><?= $this->Paginator->sort('office') ?></th>
                <th><?= $this->Paginator->sort('outras_habilidades') ?></th>
                <th><?= $this->Paginator->sort('obj_area_atuation') ?></th>
                <th><?= $this->Paginator->sort('Conhecimento_geral') ?></th>
                <th><?= $this->Paginator->sort('conhecimento_informatica') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($curriculos as $curriculo): ?>
                <tr>
                    <td><?= $this->Number->format($curriculo->id) ?></td>
                    <td><?= $curriculo->candidate_id === null ? '' : $this->Number->format($curriculo->candidate_id) ?></td>
                    <td><?= h($curriculo->nome) ?></td>
                    <td><?= h($curriculo->dt_nasc) ?></td>
                    <td><?= h($curriculo->estado_civil) ?></td>
                    <td><?= h($curriculo->cnh_a) ?></td>
                    <td><?= h($curriculo->cnh_outros) ?></td>
                    <td><?= h($curriculo->celular) ?></td>
                    <td><?= h($curriculo->contato_tipo) ?></td>
                    <td><?= h($curriculo->cep) ?></td>
                    <td><?= h($curriculo->logradouro) ?></td>
                    <td><?= h($curriculo->numero) ?></td>
                    <td><?= h($curriculo->complemento) ?></td>
                    <td><?= h($curriculo->bairro) ?></td>
                    <td><?= h($curriculo->municipio) ?></td>
                    <td><?= h($curriculo->uf) ?></td>
                    <td><?= h($curriculo->grau_instrucao) ?></td>
                    <td><?= h($curriculo->curso_formacao) ?></td>
                    <td><?= h($curriculo->instituicao_ensino) ?></td>
                    <td><?= h($curriculo->inicio_formacao) ?></td>
                    <td><?= h($curriculo->fim_formacao) ?></td>
                    <td><?= h($curriculo->outros_cursos_formacao) ?></td>
                    <td><?= h($curriculo->ingles) ?></td>
                    <td><?= h($curriculo->espanhol) ?></td>
                    <td><?= h($curriculo->informatica) ?></td>
                    <td><?= h($curriculo->office) ?></td>
                    <td><?= h($curriculo->outras_habilidades) ?></td>
                    <td><?= h($curriculo->obj_area_atuation) ?></td>
                    <td><?= h($curriculo->Conhecimento_geral) ?></td>
                    <td><?= h($curriculo->conhecimento_informatica) ?></td>
                    <td><?= h($curriculo->created) ?></td>
                    <td><?= h($curriculo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $curriculo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curriculo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curriculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curriculo->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
