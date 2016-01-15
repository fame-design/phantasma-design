<?php

namespace Shopware\Themes\Phantasma;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
theme für pahtasma desing
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
happy selling
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
melchior
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;

    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}