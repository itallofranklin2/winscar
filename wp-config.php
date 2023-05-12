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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'winscar');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '%}+o&:M,V9n/Ydf!#d]07n!GqXX0cQ8x[,-4q7k{g<V$DGV*0~Q.g!sBu8Y>*?,i');
define('SECURE_AUTH_KEY',  'Xc7EDbnGT,G>,?Tyy/Xkh*s1!hF}fbKl1TW;P.PZAul@;t8f5IO[MD)Xu_Dyw8w.');
define('LOGGED_IN_KEY',    '*MHD+JfBZI64gNm&5f*#_B-cJ``yptpV`R{YTsYI_@(b5GEjEpb+PMr-B2``E*ea');
define('NONCE_KEY',        'u1o~~u+e$U!&wX^`D.CBl|0/!;m+xRY#s_?-}rI7.e/Upy3/HC<..$C!)dyTRYbe');
define('AUTH_SALT',        'm[gQUua?vHmWdu;&3wIGyO`|PbaTH#-<lI#l%Cq`F8DE6=W><=zI@%Bv=;SkPw{t');
define('SECURE_AUTH_SALT', 'I4YWANQLZUqm*`udaGE&B=cLms29)p}<}&6~Ra`>wRTiNJivtM_Z9*JCjVeuw,0P');
define('LOGGED_IN_SALT',   '%xc<c},x.DU7{)(I(BspNp||5xI?IP#QA2mOI0)t;Fg)j<bEE^..D,RNU{4wNmkd');
define('NONCE_SALT',       'oPb; nKW6(pxFg`FF$. V/fk%>{h8g;m#*CP%!xur`)2*]4V8VDXjSK,uhFK,g<F');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_winscar';

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
define(�WP_MEMORY_LIMIT�,�64m�);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
