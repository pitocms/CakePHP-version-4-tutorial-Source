<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentsTable Test Case
 */
class StudentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentsTable
     */
    protected $Students;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Students',
        'app.FootballRagistrations',
        'app.PicnicRagistrations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Students') ? [] : ['className' => StudentsTable::class];
        $this->Students = TableRegistry::getTableLocator()->get('Students', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Students);

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
