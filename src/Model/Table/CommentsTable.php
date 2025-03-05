<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CommentsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        
        // Par exemple, si tu as la colonne created/modified, tu peux activer le behavior Timestamp
        $this->addBehavior('Timestamp');
        
        // Relations éventuelles
        $this->belongsTo('Users', ["forreignKey" => "user_id", 'joinType' => "INNER"]);
        $this->belongsTo('Posts', ["forreignKey" => "user_id", 'joinType' => "INNER"]);

        // $this->belongsTo('Authors'); // par exemple
    }

    public function validationDefault(Validator $validator): Validator
    {
        // title: requis, 3 à 150 caractères
        $validator
            ->notEmptyString('content', 'Un contenu est requis')
            ->minLength('content', 3, 'Le contenu doit comporter au moins 3 caractères')
            ->maxLength('content', 1000, 'Le contenu ne doit pas dépasser 1000 caractères');
            
        return $validator;
    }
}
