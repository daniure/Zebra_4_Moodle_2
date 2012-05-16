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
 * zebra theme library functions
 *
 * @package    theme_zebra
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

//The path to the logo
define('ZEBRA_LOGOURL', 'logo/logo' );
//The minimum header height
define('ZEBRA_LOGOURLHEIGHT', '100px' );
//The path to the background url
define('ZEBRA_BACKGROUNDURL', 'core/background' );
//The color scheme type
define('ZEBRA_COLORSCHEME', 'transparent' );
//The menu color scheme type
define('ZEBRA_MENUCOLORSCHEME', 'transparent' );
//The homeiconcolor
define('ZEBRA_HOMEICONCOLOR', 'menu/home-icon-light');

//The hmenuiconcolor
define('ZEBRA_HMENUICONCOLOR', 'menu/horizontal-menu-submenu-indicator-light');
define('ZEBRA_HMENUICONCOLOR_BLACK', 'menu/horizontal-menu-submenu-indicator');

//The vmenuiconcolor
define('ZEBRA_VMENUICONCOLOR', 'menu/vertical-menu-submenu-indicator-light');
define('ZEBRA_VMENUICONCOLOR_BLACK', 'menu/vertical-menu-submenu-indicator');

//The body background color
define('ZEBRA_BODYBGCOLOR', '#DDD');

//The link color value
define('ZEBRA_LINKCOLOR', '#234B6F');

//The hover color value
define('ZEBRA_HOVERCOLOR', '#4E7BAE');

//The font color value 
define('ZEBRA_FONTCOLOR', '#2F2F2F');

//The content background color value 
define('ZEBRA_CONTENTBGCOLOR', '#F4F6F8');

//The column background color value
define('ZEBRA_COLUMNBGCOLOR', '#F4F6F8');

/*

//The header background color value
headerbgcolor
define('ZEBRA_', '');

//The footer background color value
footerbgcolor

define('ZEBRA_', '');
//The calendar course events color
calcourse
define('ZEBRA_', '');

//The calendar global events color
calglobal
define('ZEBRA_', '');

//The calendar group events color
calgroup
define('ZEBRA_', '');

//The calendar user events color
caluser
define('ZEBRA_', '');

//The calendar weekend font color
calweekend
define('ZEBRA_', '');

//The ok font color
okfontcolor
define('ZEBRA_', '');

//The warning font color
warningfontcolor
define('ZEBRA_', '');

//The serious font color
seriousfontcolor
define('ZEBRA_', '');

//The critical font color
criticalfontcolor
define('ZEBRA_', '');

//The min width for two column page layout
twocolmin
define('ZEBRA_', '');

//The min width for three column page layout
threecolmin
define('ZEBRA_', '');

//The max width for page content
pagemaxwidth
define('ZEBRA_', '');

//The width of the columns
colwidth
define('ZEBRA_', '');

    //Get double the width of the colums
doublecolwidth
define('ZEBRA_', '');

//The autohide value
useautohide
define('ZEBRA_', '');

//The editingnotify value 
editingnotify
define('ZEBRA_', '');

    //Get any extra css the user adds
customcss
define('ZEBRA_', '');

 
 
 
 */
 
/**
 * This is the postprocess function for the theme
 *
 * @param string $css Incoming CSS to process
 * @param stdClass $theme The theme object
 * @return string The processed CSS
 */
function zebra_process_css($css, $theme) {

    //Get the path to the logo
    $css = zebra_set_logourl($css, $theme);

    //Get the minimum header height
    $css = zebra_set_logourlheight($css, $theme);

    //Get the path to the background url
    $css = zebra_set_backgroundurl($css, $theme);

    //Get color scheme type
    $css = zebra_set_colorscheme($css, $theme);

    //Get menu color scheme type
    $css = zebra_set_menucolorscheme($css, $theme);

    //Get the homeiconcolor
    $css = zebra_set_homeiconcolor($css, $theme);

    //Get the hmenuiconcolor
    $css = zebra_set_hmenuiconcolor($css, $theme);

    //Get the vmenuiconcolor
    $css = zebra_set_vmenuiconcolor($css, $theme);

    //Get the body background color
    $css = zebra_set_bodybgcolor($css, $theme);

    //Get the link color value
    $css = zebra_set_linkcolor($css, $theme);

    //Get the hover color value
    $css = zebra_set_hovercolor($css, $theme);

    //Get the font color value 
    $css = zebra_set_fontcolor($css, $theme);

    //Get the content background color value 
    $css = zebra_set_contentbgcolor($css, $theme);

    //Get the column background color value
    $css = zebra_set_columnbgcolor($css, $theme);

    //Get the header background color value
    $css = zebra_set_headerbgcolor($css, $theme);

    //Get the footer background color value
    $css = zebra_set_footerbgcolor($css, $theme);

    //Get the calendar course events color
    $css = zebra_set_calcourse($css, $theme);

    //Get the calendar global events color
    $css = zebra_set_calglobal($css, $theme);

    //Get the calendar group events color
    $css = zebra_set_calgroup($css, $theme);

    //Get the calendar user events color
    $css = zebra_set_caluser($css, $theme);

    //Get the calendar weekend font color
    $css = zebra_set_calweekend($css, $theme);

    //Get the ok font color
    $css = zebra_set_okfontcolor($css, $theme);

    //Get the warning font color
    $css = zebra_set_warningfontcolor($css, $theme);

    //Get the serious font color
    $css = zebra_set_seriousfontcolor($css, $theme);

    //Get the critical font color
    $css = zebra_set_criticalfontcolor($css, $theme);

    //Get the min width for two column page layout
    $css = zebra_set_twocolmin($css, $theme);

    //Get the min width for three column page layout
    $css = zebra_set_threecolmin($css, $theme);

    //Get the max width for page content
    $css = zebra_set_pagemaxwidth($css, $theme);

    //Get the width of the columns
    $css = zebra_set_colwidth($css, $theme);

    //Get double the width of the colums
    $css = zebra_set_doublecolwidth($css, $theme);

    //Get the autohide value
    $css = zebra_set_useautohide($css, $theme);

    //Get the editingnotify value 
    $css = zebra_set_editingnotify($css, $theme);

    //Get any extra css the user adds
    $css = zebra_set_customcss($css, $theme);

    return $css;
};

/**
 * Sets the logo url for the header
 *
 * @param string $css
 * @param mixed $logourl
 * @return string
 */
function zebra_set_logourl($css, $theme) {
    global $OUTPUT;

    $tag = '[[setting:logourl]]';
    if (!empty($theme->settings->logourl)) {
        $logourl = $theme->settings->logourl;
        $protocol = '://';
        $ntp = strpos($logourl, $protocol); // Check to see if a networking protocol is used
        if($ntp === false) { // No networking protocol used
            $relative = '/';
            $rel = strpos($logourl, $relative); // Check to see if a relative path is used
            if($rel !== 0) { // Doesn't start with a slash
                $replacement = $OUTPUT->pix_url("$logourl", 'theme'); // Using Moodle output
            } else {
                $replacement = $logourl;
            }
        } else {
            $replacement = $logourl;
        }
    }else{
        $replacement = $OUTPUT->pix_url(ZEBRA_LOGOURL, 'theme'); //Default image
    }

    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the minimum height for the header
 *
 * @param string $css
 * @param mixed $logourlheight
 * @return string
 */
function zebra_set_logourlheight($css, $theme) {
    
    //Get the minimum header height from settings

    $tag = '[[setting:logourlheight]]';
    $replacement = ZEBRA_LOGOURLHEIGHT; //Default height

    if (!empty($theme->settings->logourlheight)) {
        $replacement = $theme->settings->logourlheight;
    }

    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the body background image url
 *
 * @param string $css
 * @param mixed $backgroundurl
 * @return string
 */
function zebra_set_backgroundurl($css, $theme) {
    global $OUTPUT;

    //Get the path to the background url from settings
    $tag = '[[setting:backgroundurl]]';
    if (!empty($theme->settings->backgroundurl)) {
        $backgroundurl = $theme->settings->backgroundurl;
        $protocol = '://';
        $ntp = strpos($backgroundurl, $protocol); // Check to see if a networking protocol is used
        if($ntp === false) { // No networking protocol used
            $relative = '/';
            $rel = strpos($backgroundurl, $relative); // Check to see if a relative path is used
            if($rel !== 0) { // Doesn't start with a slash
                $replacement = $OUTPUT->pix_url("$backgroundurl", 'theme'); // Using Moodle output
            } else {
                $replacement = $backgroundurl;
            }
        } else {
            $replacement = $backgroundurl;
        }
    }else{
        $replacement = $OUTPUT->pix_url(ZEBRA_BACKGROUNDURL, 'theme'); //Default image
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the primary background color used for body
 *
 * @param string $css
 * @param mixed $bodybgcolor
 * @return string
 */
function zebra_set_bodybgcolor($css, $theme) {

    //Get the body background color from settings
    $tag = '[[setting:bodybgcolor]]';
    $replacement = ZEBRA_BODYBGCOLOR; //Default color
    if (!empty($theme->settings->bodybgcolor)) {
        $replacement = $theme->settings->bodybgcolor;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for custommenu and links
 *
 * @param string $css
 * @param mixed $linkcolor
 * @return string
 */
function zebra_set_linkcolor($css, $theme) {

    //Get the link color value from settings
    $tag = '[[setting:linkcolor]]';
    $replacement = ZEBRA_LINKCOLOR; //Default color
    if (!empty($theme->settings->linkcolor)) {
        $replacement = $theme->settings->linkcolor;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for hovering
 *
 * @param string $css
 * @param mixed $hovercolor
 * @return string
 */
function zebra_set_hovercolor($css, $theme) {

    //Get the hover color value from settings
    $tag = '[[setting:hovercolor]]';
    $replacement = ZEBRA_HOVERCOLOR; //Default color
    if (!empty($theme->settings->hovercolor)) {
        $replacement = $theme->settings->hovercolor;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for font color
 *
 * @param string $css
 * @param mixed $fontcolor
 * @return string
 */
function zebra_set_fontcolor($css, $theme) {

    //Get the font color value from settings
    $tag = '[[setting:fontcolor]]';
    $replacement = ZEBRA_FONTCOLOR; //Default color
    if (!empty($theme->settings->fontcolor)) {
        $replacement = $theme->settings->fontcolor;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for main content background
 *
 * @param string $css
 * @param mixed $contentbgcolor
 * @return string
 */
function zebra_set_contentbgcolor($css, $theme) {

    //Get the content background color value from settings
    $tag = '[[setting:contentbgcolor]]';
    $replacement = ZEBRA_CONTENTBGCOLOR; //Default color
    if (!empty($theme->settings->contentbgcolor)) {
        $replacement = $theme->settings->contentbgcolor;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for columns (region-pre, region-post) background
 *
 * @param string $css
 * @param mixed $columnbgcolor
 * @return string
 */
function zebra_set_columnbgcolor($css, $theme) {

    //Get the column background color value from settings
    $tag = '[[setting:columnbgcolor]]';
    $replacement = ZEBRA_COLUMNBGCOLOR; //Default color
    if (!empty($theme->settings->columnbgcolor)) {
        $replacement = $theme->settings->columnbgcolor;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for the page-header background
 *
 * @param string $css
 * @param mixed $headerbgcolor
 * @return string
 */
function zebra_set_headerbgcolor($css, $theme) {
    
    //Get the header background color value from settings
    $headerbgcolor = null;
    if (!empty($theme->settings->headerbgcolor)) {
        $headerbgcolor = $theme->settings->headerbgcolor;
    }
    
    $tag = '[[setting:headerbgcolor]]';
    if (is_null($headerbgcolor)) {
        $replacement = 'transparent'; //Default color
    } else {
        $replacement = $headerbgcolor; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for the page-footer background
 *
 * @param string $css
 * @param mixed $footerbgcolor
 * @return string
 */
function zebra_set_footerbgcolor($css, $theme) {

    //Get the footer background color value from settings
    $footerbgcolor = null;
    if (!empty($theme->settings->footerbgcolor)) {
        $footerbgcolor = $theme->settings->footerbgcolor;
    }

    $tag = '[[setting:footerbgcolor]]';
    if (is_null($footerbgcolor)) {
        $replacement = '#DDD'; //Default color
    } else {
        $replacement = $footerbgcolor; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for course calendar events
 *
 * @param string $css
 * @param mixed $calcourse
 * @return string
 */
function zebra_set_calcourse($css, $theme) {

    //Get the calendar course events color
    $calcourse = null;
    if (!empty($theme->settings->calcourse)) {
        $calcourse = $theme->settings->calcourse;
    }

    $tag = '[[setting:calcourse]]';
    if (is_null($calcourse)) {
        $replacement = '#FFD3BD'; //Default color
    } else {
        $replacement = $calcourse; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for global calendar events
 *
 * @param string $css
 * @param mixed $calglobal
 * @return string
 */
function zebra_set_calglobal($css, $theme) {

    //Get the calendar global events color
    $calglobal = null;
    if (!empty($theme->settings->calglobal)) {
        $calglobal = $theme->settings->calglobal;
    }

    $tag = '[[setting:calglobal]]';
    if (is_null($calglobal)) {
        $replacement = '#D6F8CD'; //Default color
    } else {
        $replacement = $calglobal; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for group calendar events
 *
 * @param string $css
 * @param mixed $calgroup
 * @return string
 */
function zebra_set_calgroup($css, $theme) {

    //Get the calendar group events color
    $calgroup = null;
    if (!empty($theme->settings->calgroup)) {
        $calgroup = $theme->settings->calgroup;
    }

    $tag = '[[setting:calgroup]]';
    if (is_null($calgroup)) {
        $replacement = '#FEE7AE'; //Default color
    } else {
        $replacement = $calgroup; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for user calendar events
 *
 * @param string $css
 * @param mixed $caluser
 * @return string
 */
function zebra_set_caluser($css, $theme) {
    
    //Get the calendar user events color
    $caluser = null;
    if (!empty($theme->settings->caluser)) {
        $caluser = $theme->settings->caluser;
    }
    
    $tag = '[[setting:caluser]]';
    if (is_null($caluser)) {
        $replacement = '#DCE7EC'; //Default Color
    } else {
        $replacement = $caluser; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for weekends on the calendar
 *
 * @param string $css
 * @param mixed $calweekend
 * @return string
 */
function zebra_set_calweekend($css, $theme) {

    //Get the calendar weekend font color
    $calweekend = null;
    if (!empty($theme->settings->calweekend)) {
        $calweekend = $theme->settings->calweekend;
    }

    $tag = '[[setting:calweekend]]';
    if (is_null($calweekend)) {
        $replacement = '#A00'; //Default color
    } else {
        $replacement = $calweekend; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for ok/good scenarios
 *
 * @param string $css
 * @param mixed $okfontcolor
 * @return string
 */
function zebra_set_okfontcolor($css, $theme) {

    //Get the ok font color
    $okfontcolor = null;
    if (!empty($theme->settings->okfontcolor)) {
        $okfontcolor = $theme->settings->okfontcolor;
    }

    $tag = '[[setting:okfontcolor]]';
    if (is_null($okfontcolor)) {
        $replacement = '#060'; //Default color
    } else {
        $replacement = $okfontcolor; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for warning scenarios
 *
 * @param string $css
 * @param mixed $warningfontcolor
 * @return string
 */
function zebra_set_warningfontcolor($css, $theme) {

    //Get the warning font color
    $warningfontcolor = null;
    if (!empty($theme->settings->warningfontcolor)) {
        $warningfontcolor = $theme->settings->warningfontcolor;
    }

    $tag = '[[setting:warningfontcolor]]';
    if (is_null($warningfontcolor)) {
        $replacement = '#F0E000'; //Default color
    } else {
        $replacement = $warningfontcolor; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for serious scenarios
 *
 * @param string $css
 * @param mixed $seriousfontcolor
 * @return string
 */
function zebra_set_seriousfontcolor($css, $theme) {

    //Get the serious font color
    $seriousfontcolor = null;
    if (!empty($theme->settings->seriousfontcolor)) {
        $seriousfontcolor = $theme->settings->seriousfontcolor;
    }

    $tag = '[[setting:seriousfontcolor]]';
    if (is_null($seriousfontcolor)) {
        $replacement = '#F07000'; //Default color
    } else {
        $replacement = $seriousfontcolor; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for critical scenarios
 *
 * @param string $css
 * @param mixed $criticalfontcolor
 * @return string
 */
function zebra_set_criticalfontcolor($css, $theme) {

    //Get the critical font color
    $criticalfontcolor = null;
    if (!empty($theme->settings->criticalfontcolor)) {
        $criticalfontcolor = $theme->settings->criticalfontcolor;
    }

    $tag = '[[setting:criticalfontcolor]]';
    if (is_null($criticalfontcolor)) {
        $replacement = '#F00000'; //Default color
    } else {
        $replacement = $criticalfontcolor; //Color from settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the gradient background color for blocks, navbar, etc.
 *
 * @param string $css
 * @param mixed $colorscheme
 * @return string
 */
function zebra_set_colorscheme($css, $theme) {
    
    //Get color scheme type from settings
    $colorscheme = null;
    if (!empty($theme->settings->colorscheme)) {
        $colorscheme = $theme->settings->colorscheme;
    }

    $tag = '[[setting:colorscheme]]';
    switch($colorscheme) { //Get value from Settings Page
        default:
            $replacement = ZEBRA_COLORSCHEME; //Default value
            break;

        case 'none':
            $replacement = ZEBRA_COLORSCHEME; //Default value
            break;

        case 'dark':
            $replacement = 'rgba(0, 0, 0, 0.08)'; //Black
            break;

        case 'light':
            $replacement = 'rgba(255, 255, 255, 0.2)'; //White
            break;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the gradient background color for custommenu
 *
 * @param string $css
 * @param mixed $menucolorscheme
 * @return string
 */
function zebra_set_menucolorscheme($css, $theme) {

    //Get menu color scheme type from settings
    $menucolorscheme = null;
    if (!empty($theme->settings->menucolorscheme)) {
        $menucolorscheme = $theme->settings->menucolorscheme;
    }

    $tag = '[[setting:menucolorscheme]]';
    switch($menucolorscheme) { //Get value from settings page
        default:
            $replacement = ZEBRA_MENUCOLORSCHEME; //Default value
            break;

        case 'none':
            $replacement = ZEBRA_MENUCOLORSCHEME; //Default value
            break;

        case 'dark':
            $replacement = 'rgba(0, 0, 0, 0.4)'; //Black
            break;

        case 'light':
            $replacement = 'rgba(255, 255, 255, 0.3)'; //White
            break;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color of the homeicon in the custommenu based on the
 * settings value of menucolorscheme
 *
 * @param string $css
 * @param mixed $menucolorscheme
 * @return string
 */
function zebra_set_homeiconcolor($css, $menucolorscheme) {
    global $OUTPUT;

    //Get the homeiconcolor from menucolorscheme
    $menucolorscheme = null;
    if (!empty($theme->settings->menucolorscheme)) {
        $menucolorscheme = $theme->settings->menucolorscheme;
    }

    $tag = '[[setting:homeiconcolor]]';
    switch($menucolorscheme) { //Get value from settings page
        default:
            $replacement = $OUTPUT->pix_url('menu/home-icon-light', 'theme'); //Default value
            break;

        case 'none':
            $replacement = $OUTPUT->pix_url('menu/home-icon-light', 'theme');
            break;

        case 'dark':
            $replacement = $OUTPUT->pix_url('menu/home-icon', 'theme'); //Black
            break;

        case 'light':
            $replacement = $OUTPUT->pix_url('menu/home-icon-light', 'theme'); //White
            break;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


/**
 * Sets the color of the horizontal menu indicator in the custommenu based on the
 * settings value of menucolorscheme
 *
 * @param string $css
 * @param mixed $menucolorscheme
 * @return string
 */
function zebra_set_hmenuiconcolor($css, $theme) {
    global $OUTPUT;

    //Get the hmenuiconcolor from menucolorscheme
    $menucolorscheme = null;
    if (!empty($theme->settings->menucolorscheme)) {
        $menucolorscheme = $theme->settings->menucolorscheme;
    }

    $tag = '[[setting:hmenuiconcolor]]';
    switch($menucolorscheme) { //Get value from settings page
        default:
            $replacement = $OUTPUT->pix_url(ZEBRA_HMENUICONCOLOR, 'theme'); //Default value
            break;

        case 'none':
            $replacement = $OUTPUT->pix_url(ZEBRA_HMENUICONCOLOR, 'theme');
            break;

        case 'dark':
            $replacement = $OUTPUT->pix_url(ZEBRA_HMENUICONCOLOR_BLACK, 'theme'); //Black
            break;

        case 'light':
            $replacement = $OUTPUT->pix_url(ZEBRA_HMENUICONCOLOR, 'theme'); //White
            break;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color of the vertical menu indicator in the custommenu based on the
 * settings value of menucolorscheme
 *
 * @param string $css
 * @param mixed $menucolorscheme
 * @return string
 */
function zebra_set_vmenuiconcolor($css, $theme) {
    global $OUTPUT;

    $menucolorscheme = null;
    //Get the vmenuiconcolor from menucolorscheme
    if (!empty($theme->settings->menucolorscheme)) {
        $menucolorscheme = $theme->settings->menucolorscheme;
    }

    $tag = '[[setting:vmenuiconcolor]]';
    switch($menucolorscheme) { //Get value from settings page
        default:
            $replacement = $OUTPUT->pix_url(ZEBRA_VMENUICONCOLOR, 'theme'); //Default value
            break;

        case 'none':
            $replacement = $OUTPUT->pix_url(ZEBRA_VMENUICONCOLOR, 'theme');
            break;

        case 'dark':
            $replacement = $OUTPUT->pix_url(ZEBRA_VMENUICONCOLOR_BLACK, 'theme'); //Black
            break;

        case 'light':
            $replacement = $OUTPUT->pix_url(ZEBRA_VMENUICONCOLOR, 'theme'); //White
            break;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the minimum width for two column page layout.
 * Should be the returned value of {@link zebra_set_onecolmax()}
 * plus 1. Default value should fit:
 * Smartphone landscape
 * Tablet portrait
 * SDTV
 *
 * @param string $css
 * @param mixed $twocolmin
 * @return string
 */
function zebra_set_twocolmin($css, $theme) {

    //Get the min width for two column page layout
    $twocolmin = null;
    if (!empty($theme->settings->twocolmin)) {
        $twocolmin = $theme->settings->twocolmin;
    }

    $tag = '[[setting:twocolmin]]';
    if (is_null($twocolmin)) {
        $replacement = '481px'; //Default width: 1px wider than a "smart phone" in portrait (generally)
    } else {
        $replacement = $twocolmin; //Get the value from the settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets the minimum width for three column page layout.
 * Should be the returned value of {@link zebra_set_twocolmax()}
 * plus 1. Default value should fit:
 * Tablet landscape
 * HDTV
 * Monitor
 *
 * @param string $css
 * @param mixed $threecolmin
 * @return string
 */
function zebra_set_threecolmin($css, $theme) {

    //Get the min width for three column page layout from settings
    $threecolmin = null;
    if (!empty($theme->settings->threecolmin)) {
        $threecolmin = $theme->settings->threecolmin;
    }

    $tag = '[[setting:threecolmin]]';
    if (is_null($threecolmin)) {
        $replacement = '769px'; //Default width: 1px wider than a "tablet" in portrait (generally)
    } else {
        $replacement = $threecolmin; //Get the value from the settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets the maximum width for three column page layout.
 * This is the max-width of #page, not body
 *
 * @param string $css
 * @param mixed $pagemaxwidth
 * @return string
 */
function zebra_set_pagemaxwidth($css, $theme) {

    //Get the max width for page content from settings
    $pagemaxwidth = null;
    if (!empty($theme->settings->pagemaxwidth)) {
        $pagemaxwidth = $theme->settings->pagemaxwidth;
    }

    $tag = '[[setting:pagemaxwidth]]';
    if (is_null($pagemaxwidth)) {
        $replacement = '100%'; //Default width
    } else {
        $replacement = $pagemaxwidth; //Get the value from the settings page
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets the width of the columns.
 * This affects region-pre and region-post
 *
 * @param string $css
 * @param mixed $colwidth
 * @return string
 */
function zebra_set_colwidth($css, $theme) {

    //Get the width of the columns from settings
    $colwidth = null;
    if (!empty($theme->settings->colwidth)) {
        $colwidth = $theme->settings->colwidth;
    }

    $tag = '[[setting:colwidth]]';
    if (is_null($colwidth)) {
        $replacement = '200px'; //Default width
    } else {
        $replacement = $colwidth; //Settings page value
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Calculates double the column width based on $colwidth
 *
 * @param string $css
 * @param mixed $colwidth
 * @return string
 */
function zebra_set_doublecolwidth($css, $theme) {

    //Get double the width of the colums from colwidth
    $colwidth = null;
    if (!empty($theme->settings->colwidth)) {
        $colwidth = $theme->settings->colwidth; //Integrate colwidth in this function
    }

    $tag = '[[setting:doublecolwidth]]';
    if (is_null($colwidth)) { //Get the value from the settings page
        $colwidth = '200px'; //Default width
    }
    preg_match('/(?P<int>\d+)(?P<type>\w+)/', $colwidth, $matches); //Divide the value from the type
    $replacement = $matches['int'] * 2 . $matches['type']; //Multiply it by two
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Displays the Autohide CSS based on settings value
 *
 * @param string $css
 * @param mixed $useautohide
 * @return string
 */
function zebra_set_useautohide($css, $theme) {

    //Get the autohide value from settings
    $useautohide = null;
    $hovercolor = null;
    if (!empty($theme->settings->useautohide)) {
        $useautohide = $theme->settings->useautohide;
    }
    if (!empty($theme->settings->hovercolor)) { //Integrate hovercolor in this function
        $hovercolor = $theme->settings->hovercolor;
    }

    $tag = '[[setting:useautohide]]';
    if (is_null($hovercolor)) { //Get hovercolor from settings
        $hovercolor = '#4E7BA3'; //Default color
    }
    $rules = '
        .editing h3.sectionname {
            margin: 0; /* Swap the margin for padding for the hover rules below */
            padding: 1em 0;
        }

        .editing .block_site_main_menu .urlselect select {
            max-width: 86%; /* Keep the "Add Resources and Add Activity" Dropdowns in the block */
        }

        .editing .block .title .commands, /* Block Title Controls */
        .editing .block .content li .commands, /* Command in block content */
        .editing .block .editbutton,
        .editing .block .section_add_menus, /* Add Resource/Activity dropdowns in blocks */
        .editing .section .left a, /* Move Controls */
        .editing .section .right a, /* Right Side Visibility Controls */
        .editing .section .right div,
        .editing .section .summary a, /* Edit Section Summary */
        .editing .section .section_add_menus, /* Add Resource/Activity dropdowns */
        .editing .section .activity .commands, /* Individual activity and resource controls */
        .editing .sitetopic > .no-overflow + a,
        .editing .sitetopic .section_add_menus /* Front Page Site Topic Add resource/activity dropdowns */ {
            visibility: hidden;
            filter: alpha(opacity=0);
            opacity: 0;
            -webkit-transition: opacity 0.5s linear 0s;
            -moz-transition: opacity 0.5s linear 0s;
            -ms-transition: opacity 0.5s linear 0s;
            -o-transition: opacity 0.5s linear 0s;
            transition: opacity 0.5s linear 0s; /* half-second fade in */
        }

        .editing .block:hover .title .commands,
        .editing .block .content li:hover .commands,
        .editing .block:hover .editbutton,
        .editing .block:hover .section_add_menus,
        .editing .section:hover .left a,
        .editing .section:hover .right a,
        .editing .section:hover .right div,
        .editing .section .summary:hover a,
        .editing .section .sectionname:hover + .summary a,
        .editing .section:hover .section_add_menus,
        .editing .section .activity:hover .commands,
        .editing .sitetopic:hover > .no-overflow + a,
        .editing .sitetopic:hover .section_add_menus {
            visibility: visible;
            filter: none;
            opacity: 1;
        }

        .editing .block_site_main_menu .content .r0, /* Site Main Menu Resources/Activities */
        .editing .block_site_main_menu .content .r1,
        .editing .section .activity,
        .editing .section .summary,
        .editing .sitetopic > .no-overflow {
            padding: 4px!important; /* Add some padding for the hover rules below, !important is necessary to override a rule from "Base" */
            border: 1px dashed transparent; /* Transparent border to prevent items from moving when showing border */
        }

        .editing .block_site_main_menu .content .r0:hover,
        .editing .block_site_main_menu .content .r1:hover,
        .editing .section .activity:hover,
        .editing .section .summary:hover,
        .editing .section .sectionname:hover + .summary,
        .editing .sitetopic > .no-overflow:hover {
            border-color: ' . $hovercolor . '; /* Change the border color around individual activities/resource/summaries */
        }
    ';
    if ($useautohide) { //Setting is "YES"
        $replacement = $rules;
    } else { //Setting is "NO"
        $replacement = null; //NULL so we don't actually output anything to the stylesheet
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Displays the Editing Mode CSS based on settings value
 *
 * @param string $css
 * @param mixed $editingnotify
 * @return string
 */
function zebra_set_editingnotify($css, $theme) {
    
    //Get the editingnotify value from settings
    $editingnotify = null;
    $hovercolor = null;
    $colorscheme = null;
    if (!empty($theme->settings->editingnotify)) {
        $editingnotify = $theme->settings->editingnotify;
    }
    if (!empty($theme->settings->hovercolor)) { //Integrate hovercolor in this function
        $hovercolor = $theme->settings->hovercolor;
    }
    if (!empty($theme->settings->colorscheme)) { //Integrate colorscheme in this function
        $colorscheme = $theme->settings->colorscheme;
    }

    $tag = '[[setting:editingnotify]]';
    if (is_null($hovercolor)) { //Get hovercolor from settings
        $hovercolor = '#4E7BA3'; //Default color
    }
    switch($colorscheme) { //Check the colorscheme value from settings
        case 'dark':
            $colorscheme = 'rgba(0, 0, 0, 0.08)'; //Black
            break;

        case 'light':
            $colorscheme = 'rgba(255, 255, 255, 0.2)'; //White
            break;

        default:
            $colorscheme = 'transparent';
            break;
    }
    $rules = '
        #add_block .select {
            max-width: 100%; /* Keep the "Add Block" Select in the border */
        }

        .editing.path-course-view .content,
        .editing.path-site .sitetopic,
        .editing.path-site .content {
            border: 2px dashed ' . $hovercolor . '; /* Add a border around the editable content */
            box-shadow: 0 0 2px 2px ' . $colorscheme . '; /* Add a box-shadow around editable content */
            padding: 4px;margin:4px;
        }

        .editing.path-course-view .section .content .section_add_menus,
        .editing.path-site .sitetopic .section_add_menus,
        .editing.path-site .block_site_main_menu .content .section_add_menus {
            background-color: ' . $hovercolor . '; /* Add a background color the the "Add New..." Menus */
            margin:0 -4px -4px;
            padding:4px 4px 0 0;
        }
    ';
    if ($editingnotify) { //Setting is "YES"
        $replacement = $rules;
    } else { //Setting is "NO"
        $replacement = null; //NULL so we don't actually output anything to the stylesheet
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets any extra css the user wants to display
 * This is the absolutely last piece of CSS loaded
 *
 * @param string $css
 * @param mixed $customcss
 * @return string
 */
function zebra_set_customcss($css, $theme) {

    //Get any extra css the user adds from settings
    $customcss = null;
    if(!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    }

    $tag = '[[setting:customcss]]';
    $replacement = $customcss; //All the rules in the CSS box on the settings page
    $css = str_replace($tag, $replacement, $css);
    return $css;
}