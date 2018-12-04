<?php

namespace Bermaro\Containers;

use Plenty\Plugin\Templates\Twig;

class BermaroItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Bermaro::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}