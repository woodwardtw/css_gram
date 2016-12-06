<?php
/**
 * Plugin Name: Gram Filters
 * Plugin URI: https://github.com/woodwardtw/
 * Description: [cssgram img="" filter=""] add instagram-like filters to your images (filters via https://una.im/CSSgram/)

 * Version: 1.7
 * Author: Tom Woodward
 * Author URI: http://bionicteaching.com
 * License: GPL2
 */
 
 /*   2016 Tom  (email : bionicteaching@gmail.com)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
 

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function cssgram_enqueue_scripts() {
    wp_enqueue_style( 'gramStyles', plugins_url( '/css/cssgram.min.css', __FILE__ )  ); 

}
add_action( 'wp_enqueue_scripts', 'cssgram_enqueue_scripts' );

 
function cssgram_shortcode( $atts, $content = null ) {
    extract(shortcode_atts( array(
         'img' => '', //img url
         'filter' => '', //tag         
    ), $atts));         
    $html = '<figure class="' . $filter . '">' . '<img src="' . $img . '"></figure>';  
 

    return  $html;
}

add_shortcode( 'cssgram', 'cssgram_shortcode' );
