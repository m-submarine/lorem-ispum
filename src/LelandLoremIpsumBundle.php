<?php
namespace Leland\LoremIpsumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Leland\LoremIpsumBundle\DependencyInjection\LelandLoremIpsumExtension;

class LelandLoremIpsumBundle extends Bundle
{

    public function getContainerExtension () {
        return new LelandLoremIpsumExtension();
    }
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}