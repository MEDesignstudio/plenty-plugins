<?php

namespace Bermaro\Containers;

use Plenty\Plugin\Templates\Twig;

class BermaroItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Bermaro::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}