<?php

namespace Bootstrap3UI\View;

use Bootstrap3UI\TestSuite\TestCase;
use Cake\Core\Configure;

class UIViewTraitTest extends TestCase
{
    use UIViewTrait;

    /**
     * @var UIView
     */
    public $View;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        Configure::write('App.namespace', 'TestApp');
        $this->View = new UIView();
        $this->View->setLayout('default');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        parent::tearDown();
        unset($this->View);
    }

    /**
     * testInitializeUI method
     *
     * @return void
     */
    public function testInitializeUI()
    {
        $this->View->initializeUI();
        $this->assertEquals('Bootstrap3UI.default', $this->View->getLayout());

        $this->View->initializeUI([
            'layout' => true
        ]);
        $this->assertEquals('Bootstrap3UI.default', $this->View->getLayout());

        $this->View->initializeUI([
            'layout' => 'myLayout'
        ]);
        $this->assertEquals('myLayout', $this->View->getLayout());

        $this->View->setLayout('other_layout');
        $this->View->initializeUI([
            'layout' => false
        ]);
        $this->assertEquals('other_layout', $this->View->getLayout());

        $this->View->initializeUI([
            'layout' => ''
        ]);
        $this->assertSame('', $this->View->getLayout());
    }

    public function testCellRendering()
    {
        $cell = $this->View->cell('Articles');

        $this->deprecated(function () use ($cell) {
            $this->assertEquals('display', $cell->template);
        });
        // 2016-03-28: used trim() to remove LF. assert was failing on Windows.
        $this->assertEquals("articles cell display", trim($cell));
    }
}
