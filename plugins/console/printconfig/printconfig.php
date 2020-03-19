<?php

use Joomla\CMS\Plugin\CMSPlugin;
use Symfony\Component\Console\Application;

defined('_JEXEC') or die;

require_once __DIR__ .'/commands/GetConfigCommand.php';

class PlgConsolePrintconfig extends CMSPlugin
{
    protected $app;
    protected $autoloadLanguage = true;

    public function onGetConsoleCommands(Application $console)
    {
        $console->addCommands([
            new GetConfigCommand()
        ]);
    }
}
