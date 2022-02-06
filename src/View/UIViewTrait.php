<?php
declare(strict_types=1);

namespace Bootstrap3UI\View;

/**
 * UIViewTrait: Trait that loads the custom UIBootstrap helpers and sets View
 * layout to the UIBootstrap's one.
 */
trait UIViewTrait
{
    /**
     * Initialization hook method.
     *
     * @param array $options Associative array with valid keys:
     *   - `layout`:
     *      - If not set or true will use the plugin's layout
     *      - If a layout name passed it will be used
     *      - If false do nothing (will keep your layout)
     * @return void
     */
    public function initializeUI(array $options = []): void
    {
        if (
            (!isset($options['layout']) || $options['layout'] === true) &&
            $this->layout === 'default'
        ) {
            $this->layout = 'Bootstrap3UI.default';
        } elseif (isset($options['layout']) && is_string($options['layout'])) {
            $this->layout = $options['layout'];
        }

        $helpers = [
            'Html' => ['className' => 'Bootstrap3UI.Html'],
            'Form' => ['className' => 'Bootstrap3UI.Form'],
            'Flash' => ['className' => 'Bootstrap3UI.Flash'],
            'Paginator' => ['className' => 'Bootstrap3UI.Paginator'],
            'Breadcrumbs' => ['className' => 'Bootstrap3UI.Breadcrumbs'],
        ];

        $this->helpers = array_merge($helpers, $this->helpers);
    }
}
