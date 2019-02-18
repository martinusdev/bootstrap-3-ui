<?php

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
     *
     * @return void
     */
    public function initializeUI(array $options = [])
    {
        if ((!isset($options['layout']) || $options['layout'] === true) &&
            $this->layout === 'default'
        ) {
            $this->layout = 'Bootstrap3UI.default';
        } elseif (isset($options['layout']) && is_string($options['layout'])) {
            $this->layout = $options['layout'];
        }

        $this->loadHelper('Html', ['className' => 'Bootstrap3UI.Html']);
        $this->loadHelper('Form', ['className' => 'Bootstrap3UI.Form']);
        $this->loadHelper('Flash', ['className' => 'Bootstrap3UI.Flash']);
        $this->loadHelper('Paginator', ['className' => 'Bootstrap3UI.Paginator']);
        if (class_exists('\Cake\View\Helper\BreadcrumbsHelper')) {
            $this->loadHelper('Breadcrumbs', ['className' => 'Bootstrap3UI.Breadcrumbs']);
        }
    }
}
