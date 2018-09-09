

<head>
  <title>Editar usuário</title>
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
            <h1>Editar usuário</h1>
            <?php
            echo $this->Form->create($user);
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->button(__('Salvar'),['class'=>'btn btn-success']);
            echo $this->Form->end();
            ?></div>
        <div class="col-md-4"></div>
    </div>
</div>



</body>
