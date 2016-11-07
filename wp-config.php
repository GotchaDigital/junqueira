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
define('DB_NAME', 'gotchacomu_3');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'duREryv]=-bZN#|9Vh8}+vG|0vU![*:5M2[~U1-`V<:zf?WdxIR+?nfq=!gGTaHD');
define('SECURE_AUTH_KEY',  'e/+.6!39DR-yr/C34!+@5Dd4pRyUGN,)svl>#x[`8O;d0roPEMvwk.`-|U,^YPif');
define('LOGGED_IN_KEY',    '-&gWZ>5[ax&OP_|6oh:q-+:N=Gg>wX8/*Yc>i^xlzNj_$s=H6FQgg)UJ-]Z)l?*{');
define('NONCE_KEY',        'c&>C[LS,New)MH?Z:Zk1Zzb#,a{lf{all$].ffWeg+*jTr?|9`BXv=,Uer,=+|_2');
define('AUTH_SALT',        ' 0;p1LFH]vS{_-4Nf8h<b95By*c,zGZ.<rM+|)wEu#9s f=v^%gAUa8PwXHz J-6');
define('SECURE_AUTH_SALT', 'ljvbzOCli/R| @guib)zS[QN[vZXV&|B6[:;~}==Q%:@ Pb`u3bb=}qI$IF-E{|)');
define('LOGGED_IN_SALT',   'm(#fTR57DDX^JH/Oi_Jy -.v6X?17LI31x{`-=Jcxz^ykkS|>6Im$~p,-FqbBL:*');
define('NONCE_SALT',       '(MpGX;NbtcfF@Q_P|;=wltw+Cd_dwg*+FX}>`X*+@NKMkO2RT2G,yVqw.-Cy_MX,');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'jqr_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
