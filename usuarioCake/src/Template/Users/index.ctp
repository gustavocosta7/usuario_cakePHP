

<head>
    <?= $this->Html->css('bootstrap-l'); ?>
    <?= $this->Html->css('estilo_login'); ?>
    <?= $this->Html->script('bootstrap'); ?>
    <?= $this->Html->script('jquery-3.3.1'); ?>


</head>
<body>



</body>

<div class="container">
    <br><br>
    <div class="row">
            <div class="col-md-2"><h1>Usuários</h1></div>
            <div class="col-md-8">
                <table class="table table-hover">
                    <tr class="table-active">
                        <th>Email</th>
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>

                    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <?= $this->Html->link($user->email, ['action' => 'view', $user->id], ['class'=>'']) ?>
                            </td>
                            <td>
                                <?= $user->created->format('d/M/y') ?>
                            </td>
                            <td>
                                <?= $this->Form->postLink(
                                    'Deletar',
                                    ['action' => 'delete', $user->id],
                                    ['confirm' => 'Tem certeza?'])
                                ?>

                                <?=
                                    $this->Html->image("resume.png", array(
                                    "alt" => "cake",
                                    'url' => array('controller' => 'Users', 'action' => 'edit', $user->id)
                                    ));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>


                </table>


            </div>
            <div class="col-md-2">
                <?= $this->Html->link('Cadastrar usuário +',['action'=>'add'],['class'=>'btn btn-primary'])?>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <?= $this->Html->link('Logout',['action'=>'logout'],['class'=>'btn btn-warning'])?>
            </div>

    </div>

</div>


