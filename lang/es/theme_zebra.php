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
 * zebra theme English language strings
 *
 * @package    theme_zebra
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Zebra';
$string['choosereadme'] = '<div class="clearfix">
	<h1>zebra</h1>
        <hr>
	<div style="float:right;margin-left:4px;">
		<img src="zebra/pix/screenshot.jpg" />
	</div>
	<div>
	    <p><span class="warning">Warning:</span> zebra 2.0+ relies heavily on CSS3 and is <u>NOT recommended</u> for IE6 or below, but then, neither is Moodle 2.0+.</p>
	    <br />
		<h2>About</h2>
		<p>zebra uses CSS3 <code>@media</code> queries to dynamically reflow the page layout based on screen width.  This custom 2-1-3 (middle, left, right) page layout can display 1, 2, or 3 columns depending on screen width.  It is also compatible with <code>.side-pre-only</code>, <code>.side-post-only</code>, and <code>.content-only</code> body classes in all 3 layouts.</p>
        <br />
        <p>zebra also provides extensive customization via its settings page, including colors, logos, reflow settings, mobile settings, and a custom CSS field.</p>
		<h2>Parents</h2>
		<p>This theme is built upon Base and integrates the pagelayout and dock from Rebase.</p>
		<h2>Credits</h2>
		<p>zebra 2.0 is based off of the original Aardvark 1.2 (1.9) by Shaun Daubney @ Newbury-College, zebra 1.4 (1.9) by me (Danny Wahl) @ iyWare, Aardvark_makeover (2.0) by Mary Evans @ Visible-Expressions, and whatever themes those themes are based off of.</p>
		<h2>License</h2>
		<p>This, and all other themes included in the Moodle core, are licensed under the <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>.</p>
		<br />
		<p>The underlying page layout, designed independently of Moodle 2.0 by me (Danny Wahl) @ iyWare, and capable of being used standalone, is also licensed under the GNU General Public License.</p>
		<h2>Theme Discussion Forum:</h2>
		<p><a href="http://moodle.org/mod/forum/discuss.php?d=199367">http://moodle.org/mod/forum/discuss.php?d=199367</a></p>
		<h2>Theme Plugin URL:</h2>
                <p><a href="http://moodle.org/plugins/view.php?plugin=theme_zebra">http://moodle.org/plugins/view.php?plugin=theme_zebra</a></p>
                <h2>Theme Credits</h2>
		<p><a href="http://iyware.com">Danny Wahl</a></p>
                <h2>Don\'t forget to customize your settings!</h2>
                <a href="../admin/settings.php?section=themesettingzebra">zebra Theme Settings</a>
	</div>
</div>
';

$string['region-side-post'] = 'Derecha';
$string['region-side-pre'] = 'Izquierda';

$string['notes'] = 'Notas del tema';
$string['notesdesc'] = '<p>Para aplicar las configuraciones no olvides clicar el botón "Guardar cambios" situado al final de ésta página</p><p> Si no tienes el "Modo de Diseño de temas" habilitado necesitarás ir a <a href="purgecaches.php">y clicar "Borrar caché de temas"</a> situado en el menú de administrador y refrescar.</p>';

$string['headerinfo'] = 'Ajustes de la cabecera';
$string['headerinfodesc'] = '<p>Cambia los ajustes de la región de cabecera.</p>';

$string['logourl'] = 'Logo URL';
$string['logourldesc'] = '<p>Introduce la URL dónde esté la imagen de tu logo.</p><p>Puede ser usado con uno de éstos tres protocolos:<ul><li><p>Salida de Moodle (en relación con el tema):</p><p><code>logo/companylogo</code></p></li><li><p>Ruta completa:</p><p><code>http://domain.com/theme/image.php?theme=zebra&image=logo&rev=1&component=theme</code><br /><code>http://domain.com/path/to/image.jpg</code></p></li><li><p>Ruta relativa:</p><p><code>/path/to/file/companylogo.png</code></p></li></ul></p>';
$string['logourlheight'] = 'Altura del logo';
$string['logourlheightdesc'] = '<p>Altura mínima para el logo de cabecera.</p><p>Si no dispones de logo todavía mantén la altura por defecto para dejar espacio al bloque de perfil.</p>';
$string['backgroundurl'] = 'URL de la imagen de fondo';
$string['backgroundurldesc'] = '<p>Introduce la URL de la imagen que quieras poner como fondo en la parte central del Campus.</p><p>Dispones de las opciones Salida de Moodle, Ruta de acceso completa o Ruta relativa.</p>';

$string['headeralt'] = 'Texto alternativo';
$string['headeraltdesc'] = '<p>Texto que se usará en lugar del logo en la Página de inicio del Campus.</p><p>Sugerencia: Utilice un espacio (<code>&amp;nbsp;</code>) si no se ha de mostrar nada.</p>';

$string['homeicon'] = 'Mostrar icono de página de Inicio (Home)';
$string['homeicondesc'] = '<p>Muestra el icono de página de Inicio (Home) al principio del Menú personalizado (Custom Menu).</p>';
$string['callink'] = 'Enlace a Calendario';
$string['callinkdesc'] = '<p>Muestra la fecha con un enlace al Calendario al final del Menú personalizado (Cuestom Menu).</p>';
$string['dateformat'] = 'Formato de fecha';
$string['dateformatdesc'] = '<p>Nota: Requiere que el <a href="#admin-callink"><code>Enlace a Calendario</code></a> esté habilitado.</p><p>Establece un formato para visualizar la fecha en el Menú personalizado (Custom Menu). Para más información acerca de la función "date()" por favor consulta la documentación de php.net<a href="http://php.net/manual/en/function.date.php" title="PHP: Manual fecha">here</a>.</p>';

$string['userpic'] = 'Muestra imágen del perfil de usuario';
$string['userpicdesc'] = '<p>Muestra la fotografía de los usuarios en la cabecera</p>';

$string['colorsinfo'] = 'Ajustes generales de color';
$string['colorsinfodesc'] = '<p>Cambia los ajustes de los colores de la página.</p><p>Puedes introducir el color en los siguientes formatos <code>red</code>, <code>#FF0000</code>, <code>rgb(0, 255, 255)</code>, o <code>rgba(0, 255, 255, 1.0)</code>.</p>';

$string['bodybgcolor'] = 'Color de fondo central';
$string['bodybgcolordesc'] = '<p>Color de fondo de la página, a excepción de la cabecera y el pie.</p><p>Se aplica con la etiqueta <code>&lt;body&gt;</code> tag.</p>';
$string['linkcolor'] = 'Color de los enlaces';
$string['linkcolordesc'] = '<p>Color de los enlaces y los menús.</p><p>Se aplica en todos los enlaces (dentro y fuera de los contenidos de las páginas) excepto en el Menú personalizado y el fondo del Menú personalizado (Custom menu) con excepción de la fecha.</p>';
$string['hovercolor'] = 'Color al pasar por encima el ratón (Hover)';
$string['hovercolordesc'] = '<p>Color al pasar por encima el ratón (Hover).</p><p>Se aplica en todos los enlaces (dentro y fuera de la página de contenidos) y el Menú personalizado (Custom menu).</p>';
$string['fontcolor'] = 'Color del texto';
$string['fontcolordesc'] = '<p>Color primario del texto y las etiquetas.</p><p>Se aplica en todas la etiquetas y textos que no tengan un color específico definido como <code>.warning</code> or <code>.notifysuccess</code>. También se aplica en el color de fondo de la fecha del Menú personalizado (Custom menu).</p>';
$string['contentbgcolor'] = 'Color de fondo de la página';
$string['contentbgcolordesc'] = '<p>Color de fondo de la página.</p><p>Se aplica a diferentes elementos dependiendo de la vista donde te encuentres (visita la CSS pagelayout.css para más detalles) pero generalmente se refiere a las páginas de contenidos. También se aplica en los enlaces del Menú personalizado (Custom menu).</p>';
$string['columnbgcolor'] = 'Color de fondo de las columnas';
$string['columnbgcolordesc'] = '<p>Color de fondo de las columnas.</p><p>Se aplica a diferentes elementos dependiendo de la vista donde te encuentres (visita la CSS pagelayout.css para más detalles) pero generalmente es la region-pre y la region-post (block areas).</p>';
$string['headerbgcolor'] = 'Color de fondo de la cabecera';
$string['headerbgcolordesc'] = '<p>Color de fondo de la cabecera.</p>';
$string['footerbgcolor'] = 'Color de fondo del pie';
$string['footerbgcolordesc'] = '<p>Color de fondo del pie.</p><p>Usando <code>transparent</code> puedes hacer que muestre el mismo color que el definido en el color de fondo de la parte central. Si usas <code>contentbgcolor</code> no verás el <code>bodybgcolor</code>.  Se debe establecer el mismo valor en <code>bodybgcolor</code> para conseguir un efecto transparente.</p>';

$string['moodlecolorsinfo'] = 'Otros ajustes de color Moodle';
$string['moodlecolorsinfodesc'] = '<p>Cambia todos aquellos colores no incluídos en los ajustes específicos definidos anteriormente. Incluye aspectos como <code>.notifysuccess</code> y los colores de los evento de calendario. Probablemente no necesitarás ajustarlo salvo que tengas alguna incompatibilidad por el uso de algún color específico definido anteriormente.</p>';

$string['calcourse'] = 'Calendario: Eventos de curso';
$string['calcoursedesc'] = '<p>Establece el color en los eventos de curso.</p>';
$string['calglobal'] = 'Calendario: Eventos globales';
$string['calglobaldesc'] = '<p>Establece el color en los eventos globales.</p>';
$string['calgroup'] = 'Calendario: Eventos de grupo';
$string['calgroupdesc'] = '<p>Establece el color en los eventos de grupo.</p>';
$string['caluser'] = 'Calendario: Eventos de usuario';
$string['caluserdesc'] = '<p>Establece el color en los eventos de usuario.</p>';
$string['calweekend'] = 'Calendario: Fin de semana';
$string['calweekenddesc'] = '<p>Establece el color usado en los fines de semana del Calendario.</p>';
$string['okfontcolor'] = 'OK/Good font color';
$string['okfontcolordesc'] = '<p>Sets the font color used for things that worked like saving settings, etc...  Specific examples are <code>.green</code> and <code>.notifysuccess</code>.</p>';
$string['warningfontcolor'] = 'Warning font color';
$string['warningfontcolordesc'] = '<p>Sets the font color used for things that generate a warning.  Generally this is <code>.statuswarning</code>.</p>';
$string['seriousfontcolor'] = 'Serious font color';
$string['seriousfontcolordesc'] = '<p>Sets the font color used for things that generate a serious notice.  Generally this is <code>.statusserious</code>.</p>';
$string['criticalfontcolor'] = 'Critical font color';
$string['criticalfontcolordesc'] = '<p>Sets the font color used for things that generate a critical notice.  Generally this is <code>.statuscritical</code>, <code>.red</code>, and <code>.notifyproblem</code>.</p>';

$string['schemeinfo'] = 'Color scheme settings';
$string['schemeinfodesc'] = '<p>Change the settings for the color scheme of the page.</p>';

$string['colorscheme'] = 'Color scheme';
$string['colorschemedesc'] = '<p>Gradients and highlights.</p><p>Note: Safari 4 does not accept a fixed height gradient so it will always display as "none".</p>';
$string['menucolorscheme'] = 'Menu color scheme';
$string['menucolorschemedesc'] = '<p>Gradient of menu.</p>';

$string['columninfo'] = 'Layout Settings';
$string['columninfodesc'] = '<p>Change the settings for the layout of the page.  To test your settings simply resize your browser window or rotate the orientation of your phone/tablet.</p><figure style="float: left;"><img src="../theme/image.php?theme=zebra&image=core/one_column&component=theme"/><figcaption><ul><li>top: <code>region-main</code></li><li>middle: <code>region-pre</code></li><li>bottom: <code>region-post</code></li></ul></figcaption></figure><figure style="float: left;"><img src="../theme/image.php?theme=zebra&image=core/two_columns&component=theme"/><figcaption><ul><li>top left: <code>region-pre</code></li><li>bottom left: <code>region-post</code></li><li>right: <code>region-main</code></li></ul></figcaption></figure><figure style="float: left;"><img src="../theme/image.php?theme=zebra&image=core/three_columns&component=theme"/><figcaption><ul><li>left: <code>region-pre</code></li><li>center: <code>region-main</code></li><li>right: <code>region-post</code></li></ul></figcaption></figure><br style="clear: left;" />';

$string['twocolmin'] = 'Two column min width';
$string['twocolmindesc'] = '<p>Min width for two column layout.</p>';
$string['threecolmin'] = 'Three column min width';
$string['threecolmindesc'] = '<p>Min width for three column layout.  Display order is:</p>';
$string['pagemaxwidth'] = 'Page max width';
$string['pagemaxwidthdesc'] = '<p>Max width for page content.</p>';
$string['colwidth'] = 'Column width';
$string['colwidthdesc'] = '<p>Width of columns.  This is <code>region-pre</code> and <code>region-post</code>.</p>';

$string['simplelogin'] = 'Use a basic login form';
$string['simplelogindesc'] = '<p>Enabling this option will simply the login page layout by not displaying the header, footer, navbar, lang menu, or custommenu.  This option can be use for sites that require authentication before access to those items is granted.</p>';

$string['compatinfo'] = 'Browser compatibility settings';
$string['compatinfodesc'] = '<p>Various settings to attempt to improve browser compatibility with this theme for a more consistent user experience.</p>';

$string['userespond'] = 'Include respond.js in footer';
$string['useresponddesc'] = '<p><a href="https://github.com/scottjehl/Respond#readme">Respond.js</a> will attempt to parse the <code>@media</code> queries in the CSS and serve the proper one to browsers that do not natively support them (like IE8 and below).</p>';

$string['usecf'] = 'Prompt users to install Google Chrome Frame';
$string['usecfdesc'] = '<p>Google <a href="http://code.google.com/chrome/chromeframe/">Chrome Frame</a> is an Internet Explorer plugin that installs the Chromium Rendering engine on older browsers and enables them to use modern web technologies.</p>';

$string['cfmaxversion'] = 'Maximum IE version';
$string['cfmaxversiondesc'] = '<p>Note: <a href="#admin-usecf"><code>usecf</code></a> must be enabled for this to work.</p><p>This is the maximum version of Internet Explorer to prompt users to install Chrome Frame.  Versions above this will not be prompted.</p>';

$string['miscinfo'] = 'Misc. settings';
$string['miscinfodesc'] = '<p>Change the settings for miscellaneous things.</p>';

$string['useautohide'] = 'Include Autohide CSS';
$string['useautohidedesc'] = '<p>Include the Autohide rules for users in Edit Mode.</p><p>Read more about this feature <a href="http://moodle.org/mod/forum/discuss.php?d=197470">here</a> or <a href="http://www.moodlenews.com/2012/a-moodle-administrators-dream-come-true-autohide-for-moodle-2-2/">here</a>.</p>';

$string['editingnotify'] = 'Include Editing Mode CSS';
$string['editingnotifydesc'] = '<p>This is a complementary series of rules for <a href="#admin-useautohide"><code>Autohide</code></a> that provides a visual indicator that the user is in Edit Mode.</p>';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = '<p>Input any custom CSS here.</p><p>CSS input here is the very last thing called on the page and should not be overwritten by any other rules.  If your rules are not displaying please try the following:<ol><li>check your syntax</li><li>add <code>!important</code> to your rule</li><li>manually append the rule to extra.css</li></ol></p>';

$string['enablezoom'] = 'Habilitar página de zoom';
$string['enablezoomdesc'] = '<p>Habilitar página de zooming para dispósitivos.</p>';

$string['branding'] = 'Mostrar logos en el pie';
$string['brandingdesc'] = '<p>Ocultar los ^branded^ logos en el pie.</p><p>Son enlaces a los sitios que han contribuido o patrocinado directamente en el desarollo de este tema gráfico. Los créditos completos pueden encontrarse al seleccionar este tema gráfico.</p>';

$string['menuhome'] = 'Página principal';
$string['menumyhome'] = 'Mi página de inicio';
$string['menutoday'] = 'Fecha de hoy';

// nsotelo
$string['nosettings'] = 'Este tema gráfico no tiene ajustes';
$string['nosettingsdesc'] = '<p>Este tema gráfico no tiene opciones específicas.</p>';

$string['access'] = 'Texto para permitir cambios';
$string['accessdesc'] = '<p>Parámetro creado para poder acceder y guardar los cambios de esta seeción "secreta".</p>';


