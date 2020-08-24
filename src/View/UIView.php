<?php
declare(strict_types=1);

namespace Bootstrap3UI\View;

use Cake\View\View;

/**
 * UIView: the customised Bootstrap3UI View class.
 *
 * It customises the View::$layout to the Bootstrap3UI's layout and loads
 * Bootstrap3UI's helpers.
 *
 * @property \Bootstrap3UI\View\Helper\FlashHelper $Flash
 * @property \Bootstrap3UI\View\Helper\FormHelper $Form
 * @property \Bootstrap3UI\View\Helper\HtmlHelper $Html
 * @property \Bootstrap3UI\View\Helper\PaginatorHelper $Paginator
 * @property \Bootstrap3UI\View\Helper\BreadcrumbsHelper $Breadcrumbs
 */
class UIView extends View
{
    use UIViewTrait;

    /**
     * Initialization hook method.
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->initializeUI();
    }
}
