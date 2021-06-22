<?php

namespace Morse;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MorseCommand extends Command
{
    protected function configure()
    {
        $this->setName('morse')
            ->setDescription('Translate text to morse code.')
            ->addArgument('message', InputArgument::REQUIRED, 'What message should I translate?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $translated = (new Dictionary)
            ->translate($input->getArgument('message'));

        $output->writeln(
            '<info>'.$translated.'</info>'
        );

        exec('echo "'. $translated.'" | pbcopy');

        return Command::SUCCESS;
    }
}
