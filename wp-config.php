<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'jcn' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y`mA|<rVnvrvyNJb.%$gUGzKS[Dj=v_;r)$vF$s+([8/qJFboQD%?b V#qGB:mEz' );
define( 'SECURE_AUTH_KEY',  '+m2<ME~>7?./poL}ruaj+zmRX}|3S2&#*iNxm3.bJxPkBKk MAaX+wCmvU*j<ZNV' );
define( 'LOGGED_IN_KEY',    'CC.UWveKx-(d0[ol$)[R$a7&L`> ?Tb78)LwXTvLzD:Vkzc/L.u$)!F) Q*:gjD0' );
define( 'NONCE_KEY',        '7lVkQC$Wb8+HZ^FGwXDfK*_*%9<5m=Yc%0X?]q%N,l`m9EqL-(2p.,p8;IQBW8$m' );
define( 'AUTH_SALT',        '|5 F~f[VM>]O$1#OkrL7^z#|@TL9KobWU*d~LS`t+~II-0J5!2*ZAlDd9Y+]*i_6' );
define( 'SECURE_AUTH_SALT', 'KRo@um!!nK+Xg%@*$lYD</3cWw4)-v+[Uhh5l~|=31 Q~spw6jwx:a8Ga17dR{q]' );
define( 'LOGGED_IN_SALT',   '4!:%^7MrV|k/|qx(>s$<}u1wACr}W`K{5^JW*Wlon|Qygt+9<L3;C<D<q|fOcqkl' );
define( 'NONCE_SALT',       '-43Kx;r_yC8J!E<]+I[1G%<]hb1-(]#{17z5D+ri#hnuz[|6 `G6i2Yn_<N!k4^b' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
