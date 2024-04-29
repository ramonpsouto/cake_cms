<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        //preenche automaticamente os campos created e modified
        $this->addBehavior('Timestamp');
    }
}