<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SignsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SignsTable Test Case
 */
class SignsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SignsTable
     */
    public $Signs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.signs',
        'app.proposals',
        'app.comments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Signs') ? [] : ['className' => 'App\Model\Table\SignsTable'];
        $this->Signs = TableRegistry::get('Signs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Signs);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
