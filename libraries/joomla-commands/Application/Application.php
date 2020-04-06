<?php

namespace Weble\JoomlaCommands\Application;

use Joomla\CMS\Application\CliApplication;
use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Application extends \Symfony\Component\Console\Application
{
    /**
     * @var InputInterface
     */
    protected $input;
    /**
     * @var OutputInterface
     */
    protected $output;
    /**
     * @var CliApplication
     */
    protected $joomlaCliApplication;

    public function doRun(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;

        $this->configureJoomlaApplication();
        $this->loadCommandsFromPlugins();


        return parent::doRun($input, $output); // TODO: Change the autogenerated stub
    }

    public function setJoomlaCliApplication(CliApplication $app): self
    {
        $this->joomlaCliApplication = $app;
        return $this;
    }

    protected function configureJoomlaApplication()
    {
        $clientId = $this->input->hasParameterOption(['--ansi'], true) ?: 'site';
        $application = CMSApplication::getInstance($clientId);

        Factory::$application = $application;
    }

    protected function loadCommandsFromPlugins()
    {
        PluginHelper::importPlugin('console', null, true);
        $this->joomlaCliApplication->triggerEvent('onGetConsoleCommands', [$this]);
    }
}