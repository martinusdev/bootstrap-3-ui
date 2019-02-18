<?php

namespace Bootstrap3UI\View;

use Cake\TestSuite\TestCase;

class UIViewTest extends TestCase
{
    /**
     * @var UIView
     */
    public $View;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        $this->View = new UIView();
        $this->View->setLayout('default');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        parent::tearDown();
        unset($this->View);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->View->initialize();
        $this->assertEquals('Bootstrap3UI.default', $this->View->getLayout());
    }
}
