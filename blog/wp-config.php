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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'itinenco_blogfabio' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'itinenco_fabio' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '!#fabio!#10' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'premium1.hospedameusite.com.br' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '#rDAAMbRUsQ]-+s5[MqIIIoCBEsC8`Lj9Qy$I-XhBXdf$WIs~!]91l%qcWaUb3/z' );
define( 'SECURE_AUTH_KEY',  ';Es,@+2sl~I0Yp$%_).kB+9Fac<^;ZAG=Ur>gXK<|pdfT?sepsWH${uv}2]##cad' );
define( 'LOGGED_IN_KEY',    '%`lx4g+oco3+azPRI2Vd)ZzojrGS(n~8FuodcjfZ`yC|R]uepMJc4?J9T/kjE(li' );
define( 'NONCE_KEY',        'f)kKeBu{ak,KiGRFCvBM,}<gsO42i,dFbk/28kRF,?e:}~^U)Jt~I@V5KDfy04DY' );
define( 'AUTH_SALT',        '5Cqb<9*LMJ04jzpRmD!X%y):cYf5{`i5&%&%d}}==}o9!ln:~8!2QQGCP,<n;^+u' );
define( 'SECURE_AUTH_SALT', '/X`@qR>?FF%].x74p;Q[0d]WW$rP(e%%#*Q#Z7;,jf@<POP`|n=;z/x8|#tvCp2k' );
define( 'LOGGED_IN_SALT',   'V*?>B`_zSrm70PJ`)*o[wlDo0 NJvOj1fz^HguyI+f~}k=RSn__]<gj^,2wE;tu.' );
define( 'NONCE_SALT',       'SaJ`NYUV+RqR+JK;A-U8nmH5uE-y[x]iCB-v8I.DnPZ:/WryL|x[VyQV&:M9}2YF' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
