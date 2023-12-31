<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<div>
    <h4 class="display-6 titulo-sessao fw-bold">Cadastro Empresa</h4>

    <p>Para iniciar o seu cadastro, por favor, preencha o formulário abaixo e clique em "Enviar". Em seguida, você
        receberá um email de confirmação no email fornecido.</p>

    <form action="./users/cadastrar/" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" value="" required="">
            <spam class="text-danger"></spam>
        </div>
        <div class="mb-3">
            <label for="txt-email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="" required="">
            <spam class="text-danger"></spam>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" minlength="8" required="">
            <div class="form-text">
                Tamanho mínimo de 8 digitos.
            </div>
            <spam class="text-danger"></spam>
        </div>
        <div class="mb-3">
            <label for="senha_c" class="form-label">Confirmar Senha</label>
            <input type="password" class="form-control" id="senha_c" name="senha_c" minlength="8" required="">
            <spam class="text-danger"></spam>
        </div>
        <input type="hidden" name="csrf_test_name" value="84bbada7f18157cc7d1b644632b7060f"> <input type="submit"
                                                                                                    class="btn btn-primary btn-busca mb-3"
                                                                                                    value="Enviar">
        <div style="display:none"><label>Preencha este campo para continuar</label><input type="text" name="campo1"
                                                                                          value=""></div>
    </form>
    <div style="display:none"><label>Preencha este campo para continuar</label><input type="text" name="campo1"
                                                                                      value=""></div>
</div>

