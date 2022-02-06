<?php
declare(strict_types=1);

namespace Bootstrap3UI;

use Bootstrap3UI\Command\BootstrapCommand;
use Bootstrap3UI\Command\CopyLayoutsCommand;
use Bootstrap3UI\Command\InstallCommand;
use Bootstrap3UI\Command\ModifyViewCommand;
use Cake\Console\CommandCollection;
use Cake\Core\BasePlugin;

class Plugin extends BasePlugin
{
    /**
     * Plugin name.
     *
     * @var string
     */
    protected $name = 'Bootstrap3UI';

    /**
     * Do bootstrapping or not
     *
     * @var bool
     */
    protected $bootstrapEnabled = false;

    /**
     * Load routes or not
     *
     * @var bool
     */
    protected $routesEnabled = false;

    /**
     * @inheritDoc
     */
    public function console(CommandCollection $commands): CommandCollection
    {
        return $commands
            ->add('bootstrap', BootstrapCommand::class)
            ->add('bootstrap install', InstallCommand::class)
            ->add('bootstrap modify_view', ModifyViewCommand::class)
            ->add('bootstrap copy_layouts', CopyLayoutsCommand::class);
    }
}
