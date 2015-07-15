<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthorsBooksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthorsBooksTable Test Case
 */
class AuthorsBooksTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.authors_books',
        'app.books',
        'app.authors',
        'app.categories',
        'app.books_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AuthorsBooks') ? [] : ['className' => 'App\Model\Table\AuthorsBooksTable'];
        $this->AuthorsBooks = TableRegistry::get('AuthorsBooks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AuthorsBooks);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
