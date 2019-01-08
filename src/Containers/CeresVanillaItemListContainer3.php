<?php

namespace BermaroTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class BermaroThemeItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('BermaroTheme::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}