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
define( 'DB_NAME', 'cine' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'cine' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'cine' );

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
define( 'AUTH_KEY',         '=IASzeZ!bO~;pu0}O!hg!w9j0w*r2_$|d`j5hMs5YL~8@[O09ncyc6#o$~_XxwO`' );
define( 'SECURE_AUTH_KEY',  '~gaD`eW`CO0n55D|7Q=p30O`xFRbNG;=eb86245c78]MGdQ-YJlq|-|2c a$0+o2' );
define( 'LOGGED_IN_KEY',    ',,fHIY@Y+ff(ReTvg9Fnuh|~FL|f6];jk:53ssLyk|dlC> -,ua]I=(JH=7xoux4' );
define( 'NONCE_KEY',        '/GJk8iJoA7vZ4[`}JR>`/Ukv0c^{uFQqhX$x2hAS_V=`fP1$Za2+y?K<Czih2@*W' );
define( 'AUTH_SALT',        '2TkrvJ[*Q%:M8=)t|1l>:Gh~m^p;8lhkImG@Bz_VmxR=6}YW/c&q:;m_KxfH9/( ' );
define( 'SECURE_AUTH_SALT', '7fI5wP 3-|8i|)a?9}wgNRdGI$A(H]<7o~.V~$qwe%s VJF43`8D;Nj(a>;;+fps' );
define( 'LOGGED_IN_SALT',   'jkr56fodC>YI4FjJr=_-mY<t=yr}8T7wb]5*rVmBMMF5Sr:F{Ycr6C-eIjK$PaOA' );
define( 'NONCE_SALT',       'kQ:,^&IhR`@o0$_,aCh%8uZCUlq*,/^>n>J<4Dd{wPBwhoo9Y*t)[662Z}6mcuAk' );

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
