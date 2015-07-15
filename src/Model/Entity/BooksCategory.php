<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BooksCategory Entity.
 */
class BooksCategory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'book' => true,
        'category' => true,
    ];
}
