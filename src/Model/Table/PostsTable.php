<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        
        // Par exemple, si tu as la colonne created/modified, tu peux activer le behavior Timestamp
        $this->addBehavior('Timestamp');
        
        // Relations éventuelles
        $this->belongsTo('Users', ["forreignKey" => "user_id", 'joinType' => "INNER"]);
        $this->hasMany('Comments', ['foreignKey' => 'post_id']);

        // $this->belongsTo('Authors'); // par exemple
    }

    public function validationDefault(Validator $validator): Validator
    {
        // title: requis, 3 à 150 caractères
        $validator
            ->notEmptyString('title', 'Un titre est requis')
            ->minLength('title', 3, 'Le titre doit comporter au moins 3 caractères')
            ->maxLength('title', 150, 'Le titre ne doit pas dépasser 150 caractères')
            ->notEmptyString('content', 'Un contenu est requis')
            ->minLength('content', 3, 'Le contenu doit comporter au moins 3 caractères')
            ->maxLength('content', 20000, 'Le contenu ne doit pas dépasser 20000 caractères');
            
        return $validator;
    }
}
