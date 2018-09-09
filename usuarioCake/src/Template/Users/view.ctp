<head>
    <title>Visualizar</title>
    <?= $this->Html->css('bootstrap-l'); ?>
    <?= $this->Html->css('estilo_login'); ?>
    <?= $this->Html->script('bootstrap'); ?>
    <?= $this->Html->script('jquery-3.3.1'); ?>
</head>
<body>
    <div class="container">

        <div class="row">

            <div class="col-md-4"></div>
            <div class="col-md-4">

                <fieldset>
                    <legend class="text-center">Usuário</legend>
                    <label>Email</label>
                    <input type="text"  class="form-control" value="<?= h($user->email) ?>" disabled>
                    <label>Senha</label>
                    <input type="text"  class="form-control" value="<?= h($user->password) ?>" disabled>
                    <label>Criado:</label>
                    <input type="text"  class="form-control" value="<?= $user->created->format('d/m/Y') ?>" disabled>
                </fieldset>

                <?= $this->Html->link(
                    'Voltar',
                    ['controller' => 'Users', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning btn-block']
                ); ?>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>