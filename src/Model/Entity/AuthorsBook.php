<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AuthorsBook Entity.
 */
class AuthorsBook extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'book' => true,
        'author' => true,
    ];
}
