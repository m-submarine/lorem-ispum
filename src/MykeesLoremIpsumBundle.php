<?php
namespace Mykees\LoremIpsumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Mykees\LoremIpsumBundle\DependencyInjection\MykeesLoremIpsumExtension;

class MykeesLoremIpsumBundle extends Bundle
{

    public function getContainerExtension () {
        return new MykeesLoremIpsumExtension();
    }
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}