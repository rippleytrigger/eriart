<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'eriart');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'OdN~@k{.x9;Zy;Eq3m& 1vV>T :8{P%pmf=o9/QDyt&Ay&k%>iHqWRrab>j=wrRF');
define('SECURE_AUTH_KEY', 'Na%lsUU_s:NDD/<PMrP.;6oChb*ImZFE<Zl+&6L:u].#3<D1.fzw:QWN@kzzX::#');
define('LOGGED_IN_KEY', '4$Ix56)(On03`Z1q,%(L$@*DsJ+1o6rzn5.CgZt;GU8GRun`J,Cwz #$5Os |Yg*');
define('NONCE_KEY', 'TpcNSzt/KX|35In/A(Lg:Fbc%A5z^F5egOt8@JIK?2[W&RO{+8kKF~H8VlGwaZVu');
define('AUTH_SALT', '97J|fz@]%1n>4YmG=OKu<5o24KV{g+7zEe(<_ZKU*>?g+(Gy@*B.pGDpXaXf@^03');
define('SECURE_AUTH_SALT', 'q]>>mIa4bMl1A,QK{UzS</>G`(w/.O<!&Nlr v?<=0f#gx)46W8Wh$T*R-IL+.Am');
define('LOGGED_IN_SALT', '/?M{X`D(ppns93LcSR>f%:jvIFRAM=RnQ=HXP9I]h>k^%?|mIQ(]ymGTp69NA D^');
define('NONCE_SALT', 'vjgKk/6(hHozb#x>xj1eZw5s:7_MEuS[#Nc0c.R^D&mUA8v|Nde2<+M=)u1xi4GM');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_p_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

