<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SignsFixture
 *
 */
class SignsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'domainid' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nome' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'hash' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'proposal_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'signsproposals' => ['type' => 'index', 'columns' => ['proposal_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'domainid' => ['type' => 'unique', 'columns' => ['domainid', 'proposal_id'], 'length' => []],
            'signsproposals' => ['type' => 'foreign', 'columns' => ['proposal_id'], 'references' => ['proposals', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'domainid' => 'Lorem ipsum dolor sit amet',
            'nome' => 'Lorem ipsum dolor sit amet',
            'created' => '2016-04-28 09:09:27',
            'hash' => 'Lorem ipsum dolor sit amet',
            'proposal_id' => 1,
            'id' => 1
        ],
    ];
}
