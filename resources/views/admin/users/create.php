<?php

$session = new \Source\App\Core\Session();

?>
<?= $this->layout('admin/__theme') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lista de Usuários
        </h1>
        <ol class="breadcrumb">
            <li><a href="/ecommerce-php/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/ecommerce-php/admin/users">Usuários</a></li>
            <li class="active"><a href="/ecommerce-php/admin/users/create">Cadastrar</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Novo Usuário</h3>
                    </div>

                    <?php if($session->has('exception')) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $session->exception ?>
                            </div>
                    <?php
                        $session->unset('exception');
                        }
                    ?>

                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="/ecommerce-php/admin/users/store" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="desperson">Nome</label>
                                <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome">
                            </div>
                            <div class="form-group">
                                <label for="deslogin">Login</label>
                                <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Digite o login">
                            </div>
                            <div class="form-group">
                                <label for="nrphone">Telefone</label>
                                <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone">
                            </div>
                            <div class="form-group">
                                <label for="desemail">E-mail</label>
                                <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Digite o e-mail">
                            </div>
                            <div class="form-group">
                                <label for="despassword">Senha</label>
                                <input type="password" class="form-control" id="despassword" name="despassword" placeholder="Digite a senha">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="inadmin" value="1"> Acesso de Administrador
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->