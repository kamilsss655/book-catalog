<?php
namespace App\Model\Table;

use App\Model\Entity\AuthorsBook;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AuthorsBooks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Books
 * @property \Cake\ORM\Association\BelongsTo $Authors
 */
class AuthorsBooksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('authors_books');
        $this->displayField('book_id');
        $this->primaryKey(['book_id', 'author_id']);
        $this->belongsTo('Books', [
            'foreignKey' => 'book_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Authors', [
            'foreignKey' => 'author_id',
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
        $rules->add($rules->existsIn(['author_id'], 'Authors'));
        return $rules;
    }
}
