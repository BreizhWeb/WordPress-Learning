<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'portailthl');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'portailthl');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'portail');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?{Avq[u%[X;FLiO3A+nl3 +vEuy=NW!>_n=J,? FyX&nn2O!fWq9Ow@I 8IrG=3(');
define('SECURE_AUTH_KEY',  's8!Q;1,HdAB`SWf.gA;!nn*?l-X;0;)sHxqmv#t|1IvA$G-zlQUR=Fv$L?@&p4pA');
define('LOGGED_IN_KEY',    'RGT7NTi-D@U]GYPh_.7y)Y6`Y>,jm*zJvZ(2=RSGZmAw;3fqp(D;jqy8.)J6sq9X');
define('NONCE_KEY',        'H_$|c4:|V-AE%7=i{{QL,R@x$!?&v`zSy#5kpD_ oX9I;TRxM*;z8i-NnH)tFjmR');
define('AUTH_SALT',        ':mW}s#crH4+FElY[Opf7>XZZr^CJrm-w8O_wmS6]%mZ!Y?FTxNwp36ucp}ITlH!=');
define('SECURE_AUTH_SALT', '<jk0wD;$Cw9?.fH~M97}W8*Wsy~tq<m+R>F0CXoCt~R%4HH]{ov`Fy#I:%Mzlp30');
define('LOGGED_IN_SALT',   'z+xL28$D:v5T,^,@H&*QRXW53Iq{=^bvJCQhaUKev;C?A}).FG*E/~Y4}TWs=yiR');
define('NONCE_SALT',       'y+;Z$m%D1xt]Rt0%vNgS<K1!Cuqbm.H;Jx|T[eTqfuP q$a7wn:`cli#b^K3%Fr[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');