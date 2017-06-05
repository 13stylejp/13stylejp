<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountsFixture
 *
 */
class AccountsFixture extends TestFixture
{
    // @codingStandardsIgnoreEnd
    public $import = ['table' => 'accounts'];
    
    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'email' => 'test1@example.com',
            'status' => 'enable',
            'password' => 'Lorem ipsum dolor sit amet',
            'created' => '2016-10-16 13:04:32',
            'modified' => '2016-10-16 13:04:32'
        ],
        [
            'id' => 2,
            'email' => 'test2@example.com',
            'status' => 'disable',
            'password' => 'Lorem ipsum dolor sit amet',
            'created' => '2016-10-16 13:04:32',
            'modified' => '2016-10-16 13:04:32'
        ],
        [
            'id' => 3,
            'email' => 'test3@example.com',
            'status' => 'enable',
            'password' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-06-05 04:11:56',
            'modifie' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
