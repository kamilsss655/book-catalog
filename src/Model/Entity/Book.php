<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity.
 */
class Book extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'isbn' => true,
        'pages' => true,
        'description' => true,
        'net_price' => true,
        'gross_price' => true,
        'active' => true,
        'authors' => true,
        'categories' => true,
    ];
}
