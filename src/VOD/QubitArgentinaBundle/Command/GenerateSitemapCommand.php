<?php

namespace VOD\QubitArgentinaBundle\Command;

use VOD\BaseBundle\Command\GenerateSitemapCommand as BaseGenerateSitemapCommand;

class GenerateSitemapCommand extends BaseGenerateSitemapCommand
{
    protected function getOperatorUrl()
    {
        return 'www.qubit.tv';
    }
}