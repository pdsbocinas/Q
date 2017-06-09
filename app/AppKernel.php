<?php

use VOD\BaseBundle\Core\VodBaseKernel;

class AppKernel extends VodBaseKernel
{
    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        $bundles = array(
            new VOD\ItvBaseBundle\VODItvBaseBundle(),
            new VOD\QubitArgentinaBundle\VODQubitArgentinaBundle(),
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
        );
        if (in_array($this->environment, array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }
        return array_merge(parent::registerBundles(), $bundles);
    }
}

