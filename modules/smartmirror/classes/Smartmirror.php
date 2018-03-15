<?php
/**
 * Created by PhpStorm.
 * User: Michiel
 * Date: 12/06/2017
 * Time: 00:05
 */

namespace Framework\Modules\Smartmirror;


use Framework\Core\Module;
use Framework\Modules\Gentelella\Gentelella;
use Framework\Modules\Gentelella\Menu\Item;
use Framework\Modules\Gentelella\Menu\Link;
use Framework\Modules\Gentelella\Menu\Section;

class Smartmirror extends Module
{
    protected $menu;

    public function load()
    {
        /**
         * @var Gentelella $gentelella
         */
        $gentelella = module("gentelella");

        $menu = new Section();
        $menu->setName(__("Website beheer"));

        $item = new Item(__("Spiegel"), "fa-file-o");
        $item->addLink(new Link(__("Spiegel bekijken"), route("mirrorView")));
        $menu->addItem($item);


        $gentelella->addMenu($menu);
    }
}