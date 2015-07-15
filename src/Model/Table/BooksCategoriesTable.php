<?php
namespace App\Model\Table;

use App\Model\Entity\BooksCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BooksCategories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Books
 * @property \Cake\ORM\Association\BelongsTo $Categories
 */
class BooksCategoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('books_categories');
        $this->displayField('book_id');
        $this->primaryKey(['book_id', 'category_id']);
        $this->belongsTo('Books', [
            'foreignKey' => 'book_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['book_id'], 'Books'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        return $rules;
    }
}
