<?php

namespace BermaroTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class BermaroThemeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('BermaroTheme::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}