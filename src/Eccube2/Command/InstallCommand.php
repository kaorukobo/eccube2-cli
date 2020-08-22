<?php

/*
 * This file is part of EC-CUBE2 CLI.
 *
 * (C) Tsuyoshi Tsurushima.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube2\Command;

use Eccube2\Init;
use Eccube2\Util\System;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class InstallCommand extends Command
{
    protected static $defaultName = 'install';

    /** @var System */
    protected $system;

    protected function configure()
    {
        $this
            ->setName(static::$defaultName)
            ->setDescription('インストール')
        ;
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        Init::init();

        $this->system = new System();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $io->newLine();
    }
}