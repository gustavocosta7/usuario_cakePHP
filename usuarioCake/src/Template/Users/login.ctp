
<head>
    <?= $this->Html->css('bootstrap-l'); ?>
    <?= $this->Html->css('estilo_login'); ?>
    <?= $this->Html->script('bootstrap'); ?>
    <?= $this->Html->script('jquery-3.3.1'); ?>


</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 card shadow-lg">

                    <div class="formulario">
                        <h1>Login</h1>
                        <?= $this->Form->create() ?>
                        <?= $this->Form->input('email') ?>
                        <?= $this->Form->input('password') ?>
                        <?= $this->Form->button('Login',['class'=>'btn btn-primary btn-block']) ?>
                        <?= $this->Form->end() ?>
                    </div>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
</body>

