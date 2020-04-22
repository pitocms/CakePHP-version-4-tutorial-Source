<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MenusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MenusTable Test Case
 */
class MenusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MenusTable
     */
    protected $Menus;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Menus',
        'app.Submenus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Menus') ? [] : ['className' => MenusTable::class];
        $this->Menus = TableRegistry::getTableLocator()->get('Menus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Menus);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
