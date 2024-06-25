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
define( 'DB_NAME', 'PORTWASSIM' );

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
define( 'AUTH_KEY',         'EKaz$g~i-sAH)9]hrydvvsu7LqVc!Mh-=fjAQUc~|Uzs</z[?`,5#+Zs7P}8B!h^' );
define( 'SECURE_AUTH_KEY',  'F;?C4#Qxd#iB| l</8Efg8[4yg+tdT}XD+9Dv,$.KE=D|xIzu4kAN.b~dJKM,gpX' );
define( 'LOGGED_IN_KEY',    'l;8?eJ((u@NTVj4H|l3+N!;9#&O9F7oJv,7%uV{!@0*9X:8t#W@T7`)@OU{sDNuO' );
define( 'NONCE_KEY',        '}]hI9kFtaW!!in0/z^EW8_g+7GkA00}|UK%*p&gUHp;4aPov7@``^;% -irn6n6N' );
define( 'AUTH_SALT',        'e(P +QgkA#{uC=-%~]=Fsdmn0`/<P=Wv1a4y3`_%u<j|Z#.)gXp^t4!c~m< kg*v' );
define( 'SECURE_AUTH_SALT', '.I8xAamk@RSX+p`!zvF.yDe5|gtakD.E=YTCP-^S/0$._NHB;1-@-5YaNu&fRAe4' );
define( 'LOGGED_IN_SALT',   '!{G]b!!0xO.ea4UK#hoxCT_as^o4N~![.Z]Ypdx]pSiYix&<%M}S^#Q)4G@EKzvI' );
define( 'NONCE_SALT',       '{U*3.Ee$NS! PQ*%qrlQ#):5*Hvp(r0XD_6]2pm3V#L)7G,se*j)zJn?J=._GX~$' );
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
