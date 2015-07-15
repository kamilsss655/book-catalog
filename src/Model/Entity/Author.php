<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Author Entity.
 */
class Author extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'birthdate' => true,
        'active' => true,
        'books' => true,
    ];
    
    protected function _getFullName()
    {
        return $this->_properties['first_name'] . '  ' .
            $this->_properties['last_name'];
    }
    
}
