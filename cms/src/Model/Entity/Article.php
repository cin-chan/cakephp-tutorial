<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity
{
    // Entities represent a single record in the database, and provide row level behavior for our data. 
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}