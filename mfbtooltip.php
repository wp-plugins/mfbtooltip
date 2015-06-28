<?php
/*
Plugin Name: mfbTooltip
Plugin URI: http://daily.madeforbrowser.com/
Description: simple tooltip, add class mfbtooltip  and data-tooltip="tooltipcontent" to all links. to show tooltip at bottom of link use class mfbtooltiprev instead of mfbtooltip
Version: 1.0 
Author: Bjoern Zschernack
Author URI: http://daily.madeforbrowser.com/
License:GPL2
Text Domain:mfbtooltip

mfbTooltip is based on this tutorial: http://pixelbar.be/blog/css-profi-tip-tooltip-attributen/

mfbTooltip is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
mfbTooltip is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with mfbTooltip. If not, see http://www.gnu.org/licenses/gpl.html.

*/
/*
 * enqueue style
 */
function tooltip_styles() {
   wp_enqueue_style( 'mfbtooltip', plugins_url().'/mfbTooltip/mfbtooltip.css' );
}
add_action( 'wp_enqueue_scripts', 'tooltip_styles' ); 
?>