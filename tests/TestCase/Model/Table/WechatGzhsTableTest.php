<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WechatGzhsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WechatGzhsTable Test Case
 */
class WechatGzhsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WechatGzhsTable
     */
    protected $WechatGzhs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.WechatGzhs',
        'app.UserWechatOpenids',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('WechatGzhs') ? [] : ['className' => WechatGzhsTable::class];
        $this->WechatGzhs = $this->getTableLocator()->get('WechatGzhs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->WechatGzhs);

        parent::tearDown();
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
