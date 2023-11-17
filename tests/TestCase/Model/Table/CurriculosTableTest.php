<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CurriculosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CurriculosTable Test Case
 */
class CurriculosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CurriculosTable
     */
    protected $Curriculos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Curriculos',
        'app.Experiencias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Curriculos') ? [] : ['className' => CurriculosTable::class];
        $this->Curriculos = $this->getTableLocator()->get('Curriculos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Curriculos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CurriculosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
