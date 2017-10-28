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
define('DB_NAME', 'bulk');

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
define('AUTH_KEY',         '-/iRS#K:I-7LFf2D/!Dp.<Zko{xh2fQ>_Z6S]#l]Qy^Rh6V+<q/>)Ia3Sm%Vy?Qk');
define('SECURE_AUTH_KEY',  'ccb T+`s]MiZTG#40rYf$A2w%.*x>1^FYf,QxY5BsTq{2HI<Bp<>ed#&tAI)+`|6');
define('LOGGED_IN_KEY',    'W#{m#!{ZVLBTX*Oep9:k: lucId6xq#1vjDIi:UdLcAY~e3#Fc{`f`I&mFWW)j@&');
define('NONCE_KEY',        '=`z 0hrjeIA2@c?)9aD}=;fy)@O0{htU@;SpR?M1~M:nSx-.#6w4-QH<bMMv~@xc');
define('AUTH_SALT',        't!iaAp|/H[*wt;t-q,*z+.djVzc]qA9P53f[E[3fYLS8KH+?-N83N^eH#O^SJQe)');
define('SECURE_AUTH_SALT', 'M=bq|No5D##,|_27.7h3MKiQneD=!,5OYD}_%pK>ur_|RX(.Ys##%0f3]F!9XS2N');
define('LOGGED_IN_SALT',   '}Pjv(2B]#b=@>b_V/Z*Js-k0}QkV(FX(i759O?8}]FE=S[uOssRhvd}iBir=&V98');
define('NONCE_SALT',       '5mYQ kg$Gd8Z:wGTm#R4:2,HD~xfa<1+]?K}ZYI4&lYY Xzj),J $#[{(hW&hROv');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
