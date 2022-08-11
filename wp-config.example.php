<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_study');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'db-wp-study');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=B9Keu[7lRtii4[@m2]fvOK-^W_m!(@Z5{4x1z)tHx~hwR10M<hE6sH1@#?EWNiU');
define('SECURE_AUTH_KEY',  'C}-59@_4!z)?.T^]=X>z)s5>Ps6 bFt]j;`1@$f5/Uv6EsYtbn8<SXM^J|_pa/^*');
define('LOGGED_IN_KEY',    '4pN<Wr=vviwPCF[;qM?i3$=gSVhsF85oO3/Btb%~M5Jx-q:V>9m1Z~..~8fVtJAF');
define('NONCE_KEY',        'FqVOgI4onNUrPRAMH3q}$SSiBB_0^z%a4f}tq 7[Y1hd<U|g+X1=w,JQSkJ($1ZE');
define('AUTH_SALT',        '+i9=}rPU`x|-w[T+C5 (-yHvEa<tBQyw~/4ou2VFAk.4g~9{Fe_t5Kg!tD}wN7xJ');
define('SECURE_AUTH_SALT', '(-{%@9!3TsyX|d-f1KLbK%NC2z9DA8u5`NS0e~&b0,+EyvPkm?QjoRpgH<ujCaN_');
define('LOGGED_IN_SALT',   'QX;7&j?:|EJ}uZk8Rh!Q~T>MeUdTPH+1TsxxGAxd[zfW+ldXC/gFp1AQMcO5tt) ');
define('NONCE_SALT',       'B8~[xC.;$Piv7ZL%sKv4tD~i6iAWNCii;u(KWlPV+bkFl%:dQYlAM@p$N,__[aXR');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
