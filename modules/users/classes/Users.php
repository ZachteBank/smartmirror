<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 1-2-2018
 * Time: 13:08
 */

namespace Framework\Modules\Users;

use Framework\Core\Module;
use Framework\Modules\Gentelella\Menu\Item;
use Framework\Modules\Gentelella\Menu\Link;
use Framework\Modules\Gentelella\Menu\Section;
use Framework\Modules\Gentelella\Gentelella;

class Users extends Module{
    protected $menu;

    public function load()
    {
        /**
         * @var Gentelella $gentelella
         */
        $gentelella = module("gentelella");

        $menu = new Section();
        $menu->setName(_("Gebruikers beheer"));

        $item = new Item(_("Groepen"), "fa-users");
        $item->addLink(new Link(_("Groep toevoegen"), route("users.group.add")))
            ->addLink(new Link("Overzicht groepen", route("users.group.all")));
        $menu->addItem($item);

        $item = new Item(_("Gebruikers"), "fa-address-book-o");
        $item->addLink(new Link(_("Gebruiker toevoegen"), route("users.user.add")))
            ->addLink(new Link("Overzicht gebruikers", route("users.user.all")));
        $menu->addItem($item);

        $gentelella->addMenu($menu);
    }
}
