<?php

namespace Bermaro\Containers;

use Plenty\Plugin\Templates\Twig;

class BermaroContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Bermaro::Stylesheet');
    }
}