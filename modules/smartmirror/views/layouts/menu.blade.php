<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 27-12-2017
 * Time: 14:46
 */


use Framework\Modules\Gentelella\Menu\Item;
use Framework\Modules\Gentelella\Menu\Link;
use Framework\Modules\Gentelella\Menu\Section;

$menuAll = [];


$menuAll[] = $menu;

/*
 * ["menu" =>
                                [
                                    "" =>
                                                [
                                                    "Facturen" =>
                                                             [
                                                                "Overzicht" => route("home"),
                                                                //"Allemaal" => route("home"),
                                                                "Factuurnummer" => route("home"),
                                                             ],
                                                    "Leerlingen" =>
                                                             [
                                                                "Huidige" => route("students"),
                                                                "Allemaal" => route("allstudents"),
                                                                "Nieuwe leerling" => route("addstudent"),
                                                             ],
                                                    "Overige" =>
                                                             [
                                                                "Statistieken" => route("home")
                                                             ]
                                                ]
                                ]
                            ]
 */
?>

@extends('%smartmirror.layouts.default', ["menu" => $menuAll])
