<?php

namespace Bermaro\Containers;

use Plenty\Plugin\Templates\Twig;

class BermaroItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Bermaro::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}