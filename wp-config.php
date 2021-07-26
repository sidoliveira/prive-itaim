<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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
define('DB_NAME', 'prive');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'priveitaim');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'itaim321');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql746.umbler.com');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GGZDW?{{,-0XY<*HB1#<)n~*&?zSy]JNsc|O}3|_HQ-e7=6|$y8J.M8<9w*-mDEc');
define('SECURE_AUTH_KEY',  'SWtF:v@]32)gA0(R]*D#bIX[QOA#BCo~@k,K^MJ0%_m]?&6HykgZ_8cx3epkM]?J');
define('LOGGED_IN_KEY',    'yqi<ERx W.w$E,T:hW?+6yaVM0Z1k3t&74Gv2D_^`sJVW91w0%}@#t!w1QB%}Xjp');
define('NONCE_KEY',        'xp+!SRgCm;T;+=P7e~K,T7=Lir?kzhP~0CjqVB;gaEaT1=AaliJc[N84_z*-udPn');
define('AUTH_SALT',        'r@Lcc5J>SVI3;M/w$0-I!v#6(;%C8vJr<iQmnkZ3>J)r(=tCluF><,9jKtorbz:0');
define('SECURE_AUTH_SALT', 'C$O(r(8(@XGX4s=(Fg9k1`jk8jrr.le=U`Y%xcLGDvffWB0Tg{oOK4)ZWw4uz&[ ');
define('LOGGED_IN_SALT',   '!.>x[Vm7gvU3Tr{RE[~is-YG(xWNfGq@p47w$gCQRXHtBYQL0G=8mtL(+L(?nPcE');
define('NONCE_SALT',       '8]`sg&R* OnnTeI?QZpr(eQQ;quXf=8Nwy5$khxPX)ne V)Kc;A;=|9uXnIdwxn}');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
