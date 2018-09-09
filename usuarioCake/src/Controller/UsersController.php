<?php
/**
 * Created by PhpStorm.
 * User: gustav0
 * Date: 07/09/2018
 * Time: 20:25
 */


namespace App\Controller;

class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }

    public function index()
    {
        $users = $this->Users->find('all');
        $this->set(compact('users'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }


    public function add(){
        $user = $this->Users->newEntity();
        if($this->request->is('post')){
            $user = $this->Users->patchEntity($user,$this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario salvo com sucesso'));
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Não é possível adicionar o usuário'));
            }


        }
        $this->set('user', $user);
    }

    public function edit($id = null)
    {
       $user = $this->Users->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário atualizado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Seu usuário não pôde ser atualizado.'));
        }

        $this->set('user', $user);
    }


    public function delete($id){
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('O usuário com id: {0} foi deletado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Email ou senha inválidos');
        }
    }

    public function logout()
    {
        $this->Flash->success('Você saiu com sucesso!');
        return $this->redirect($this->Auth->logout());
    }
    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Auth->allow(['add']);
    }
}
