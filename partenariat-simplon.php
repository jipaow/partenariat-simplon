
<?php
/*
Plugin Name:  WordPress.org Plugin
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Basic WordPress Plugin Header Comment
Version:      20160911
Author:       WordPress.org
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/
function Shortcode() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire 
<a href="https://simplon.co>simplon.co</a>
 - une entreprise de 
l’économie sociale et solidaire et un
réseau de « fabriques » (écoles) qui propose 
des
formations
GRATUITES
pour devenir développeur
 web</p>';
}
add_shortcode('simplon','Shortcode');
?>
