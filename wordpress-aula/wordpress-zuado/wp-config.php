<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wordpress' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'wordpress' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%y+A1RuKde(i3QPO!d<yOYnBO3,>.>pRL)Xrg|av!JL<^YZ;/hHZ<F&1ay_:(LE ' );
define( 'SECURE_AUTH_KEY',  '+_r9QlPYTY o=&10?ZM9HU}FP=>3wYI^W?BvTtW]1F!M[wb]D:6O^A !Zaemjm2]' );
define( 'LOGGED_IN_KEY',    '[Kt[[@Gu]4,&bn?<b[~T_5Zd<[Qz(fsF<:qtslg^SELUYwbyg:~,HHDMB%jBcVJ$' );
define( 'NONCE_KEY',        'qPy!I=Jw1Ot/B}[Rkd<xMe|qEaF1hGte^gbj>-N{Zge.ms|<QCxICb<G6} ,{LSD' );
define( 'AUTH_SALT',        'Mhl{xu,;#[.QlX$[ oZOiF-3hvB<v}%n%~/%6i+!EG/bDBV7^Y`}#UF,K)t JVct' );
define( 'SECURE_AUTH_SALT', 'oWP8*Z~m8W7VXuCCe((5Zv>Vgr$-;hlN.zgKUg=B3u[l(k@/~sd7<a-MFI63fK>N' );
define( 'LOGGED_IN_SALT',   '^_u;oZeO2Vln47U)QUj*scA:zd-/4[-10g:,Sz(/kwX?;<XI!h^MDI=9Sd`q8r&$' );
define( 'NONCE_SALT',       'x4C;Hh5y])EQ(?H_tM[_^C,/b#[32XyXgP0f;rOIYjUZ<PxD7{r @o:M)$^8}yD1' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
