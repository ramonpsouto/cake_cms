<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity
{
    //controla quais propriedades podem ser modificadas com atribuição em massa
    protected array $_accessible = [
        'title' => true,
        'body' => true,
        'published' => true,
        'created' => true,
        'modified' => true,
        'users' => true,
    ];
}