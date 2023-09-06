<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeLocation\Communication\Console;

use Spryker\Zed\Kernel\Communication\Console\Console;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @method \Pyz\Zed\AntelopeLocation\Business\AntelopeLocationFacadeInterface getFacade()
 */
class AntelopeLocationConsole extends Console
{
    protected const COMMAND_NAME = 'antelopelocation:action';

    /**
     * @return void
     */
    protected function configure(): void
    {
        $this
            ->setName(static::COMMAND_NAME)
            ->setDescription('ADD DESCRIPTION HERE');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $result = false; // execute facade call here

        if ($result) {
            return static::CODE_SUCCESS;
        }

        return static::CODE_ERROR;
    }
}
