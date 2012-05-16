<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * zebra theme config page
 *
 * @package    theme_zebra
 * @copyright  2012 Dani Ureña
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG, $DB;
$dbman = $DB->get_manager();


//SOLO DEFINIREMOS LAS DEFAUTS NECESARIAS PARA NO TENER ERRORES EN EL SISTEMA

$currentsetting = get_config('theme_zebra');

if(empty($currentsetting->simplelogin)){
    // Create simplelogin
    set_config('simplelogin', '', 'theme_zebra');
}
if(empty($currentsetting->homeicon)){
    // Create homeicon
    set_config('homeicon', 1, 'theme_zebra');
}
if(empty($currentsetting->callink)){
    // Create callink
    set_config('callink', 1, 'theme_zebra');
}
if(empty($currentsetting->dateformat)){
    // Create dateformat
    set_config('dateformat', 'F j, Y', 'theme_zebra');
}
if(empty($currentsetting->userpic)){
    // Create userpic
    set_config('userpic', 1, 'theme_zebra');
}
if(empty($currentsetting->branding)){
    // Create branding
    set_config('branding', 0, 'theme_zebra');
}
if(empty($currentsetting->userespond)){
    // Create userespond
    set_config('userespond', 0, 'theme_zebra');
}
if(empty($currentsetting->usecf)){
    // Create usecf
    set_config('usecf', 0, 'theme_zebra');
}
if(empty($currentsetting->cfmaxversion)){
    // Create cfmaxversion
    set_config('cfmaxversion', 1, 'theme_zebra');
}


