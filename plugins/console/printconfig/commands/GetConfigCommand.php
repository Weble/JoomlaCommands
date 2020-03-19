<?php

namespace Weble\JoomlaCommands\Commands;

use Joomla\CMS\Factory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetConfigCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'config';

    protected function configure()
    {

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $rows = [];
        foreach (Factory::getConfig() as $key => $value) {
            $rows[] = [
                $key,
                $value
            ];
        }

        $table = new Table($output);
        $table
            ->setHeaders([
                'Key',
                'Value'
            ])
            ->setRows($rows);
        $table->render();

        return 0;
    }
}
