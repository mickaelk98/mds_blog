<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        
        // Par exemple, si tu as la colonne created/modified, tu peux activer le behavior Timestamp
        $this->addBehavior('Timestamp');
        
        // Relations éventuelles
        
        $this->hasMany('Posts', ['foreignKey' => 'user_id']);
        $this->hasMany('Comments', ['foreignKey' => 'user_id']);

        // $this->belongsTo('Authors'); // par exemple
    }

    public function validationDefault(Validator $validator): Validator
    {
        // title: requis, 3 à 150 caractères
        $validator
            ->notEmptyString('username', 'Un username est requis')
            ->minLength('username', 3, 'Le titre doit comporter au moins 3 caractères')
            ->maxLength('title', 150, 'Le titre ne doit pas dépasser 150 caractères')
            ->notEmptyString('password', 'Un contenu est requis')
            ->minLength('password', 5, 'Le contenu doit comporter au moins 3 caractères')
            ->maxLength('title', 128, 'Le titre ne doit pas dépasser 128 caractères');

            
        return $validator;
    }
}
