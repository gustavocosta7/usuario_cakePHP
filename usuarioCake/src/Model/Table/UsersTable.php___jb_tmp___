<?php
/**
 * Created by PhpStorm.
 * User: gustav0
 * Date: 07/09/2018
 * Time: 20:20
 */

namespace App\Model\Table;

use Cake\Validation\Validator;
use Cake\ORM\Table;

class UsersTable extends Table
{
    public function initialize(array $config){
        $this->addBehavior('Timestamp');
    }


    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('email')
            ->notEmpty('password');

        return $validator;
    }
}