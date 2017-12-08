
<?php
/*
Plugin Name:  simplon
Plugin URI:   https://github.com/jipaow/partenariat-simplon/edit/master/partenariat-simplon.php
Description:  Basic WordPress Plugin message partenariat et lien
Version:      1.0
Author:       JipPres
Author URI:   https://github.com/jipaow/partenariat-simplon
License:      LPS2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/
function Shortcode() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire 
<a href="https://simplon.co">simplon.co</a>
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
