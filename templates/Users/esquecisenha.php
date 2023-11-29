<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<div class="container-fluid" style="height: max-content; width: max-content">

    <form>

        <div class="aw-simple-panel">
            <h1 class="h3 mb-3 font-weight-normal">Esqueci a senha</h1>
            <?= $this->Html->image('Logo-PMI.png', [
                'class' => 'mb-3',
                'alt' => 'Logo',
                'width' => '300',
                'height' => '100'
            ]) ?>
            <div class="aw-simple-panel__message">
                Informe o seu e-mail abaixo para receber as instruções de como criar uma nova senha.
            </div>

            <div class="aw-simple-panel__box">
                <div class="form-group  has-feedback">
                    <input type="text" class="form-control  input-lg" placeholder="Seu e-mail" required>
                    <span class="glyphicon  glyphicon-envelope  form-control-feedback" aria-hidden="true"></span>
                </div>
                <br>

                <div class="form-group">
                    <button type="submit" class="btn  btn-primary  btn-lg  aw-btn-full-width">Criar nova senha</button>
                    <?= $this->Html->link('Voltar', [
                        'controller' => 'Dashboard'], [
                        'class' => 'btn  btn-danger  btn-lg  aw-btn-full-width'
                    ]) ?>

                </div>
            </div>
        </div>

    </form>
</div>
