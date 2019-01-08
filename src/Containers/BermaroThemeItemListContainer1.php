<?php

namespace BermaroTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class BermaroThemeItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('BermaroTheme::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}