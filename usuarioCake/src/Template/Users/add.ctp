<h1>Cadastre seu usuário</h1>
<?php

        echo $this->Form->create($user);
        echo $this->Form->input('email');
        echo $this->Form->input('password');
        echo $this->Form->button(__('Salvar'));
        echo $this->Form->end();


?>