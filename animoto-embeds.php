<?php /*
Plugin Name:  Animoto Embeds
Version:      1.0.0
Description:  Add support for easily embedding Animoto videos.
Author:       Chris Korhonen, Animoto Inc
Author URI:   http://animoto.com
*/

wp_oembed_add_provider( 'http://animoto.com/play/*', 'http://animoto.com/services/oembed' );

?>