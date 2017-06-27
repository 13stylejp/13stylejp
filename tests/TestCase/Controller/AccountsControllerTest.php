<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AccountsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AccountsController Test Case
 */
class AccountsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.accounts'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('/accounts/index');
        $this->assertResponseOk();
	//$this->get('/accounts');
        //$this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/accounts/view/1');
        $this->assertResponseOk();
        //$this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->get('/accounts/add');
        $this->assertResponseOk();
        //$this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
