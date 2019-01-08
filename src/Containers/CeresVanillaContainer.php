<?php

namespace BermaroTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class BermaroThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('BermaroTheme::Stylesheet');
    }
}