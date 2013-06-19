<?php
/**
 * �᭮��� ��ࠬ���� WordPress.
 *
 * ��� 䠩� ᮤ�ন� ᫥���騥 ��ࠬ����: ����ன�� MySQL, ��䨪� ⠡���,
 * ᥪ��� ����, �� WordPress � ABSPATH. �������⥫��� ���ଠ�� ����� ����
 * �� ��࠭�� {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} ������. ����ன�� MySQL ����� 㧭��� � ��⨭�-�஢�����.
 *
 * ��� 䠩� �ᯮ������ �業�ਥ� ᮧ����� wp-config.php � ����� ��⠭����.
 * ����易⥫쭮 �ᯮ�짮���� ���-����䥩�, ����� ᪮��஢��� ��� 䠩�
 * � ������ "wp-config.php" � ��������� ���祭��.
 *
 * @package WordPress
 */

// ** ��ࠬ���� MySQL: ��� ���ଠ�� ����� ������� � ��襣� ��⨭�-�஢����� ** //
/** ��� ���� ������ ��� WordPress */
define('DB_NAME', 'idu');

/** ��� ���짮��⥫� MySQL */
define('DB_USER', 'u_idu');

/** ��஫� � ���� ������ MySQL */
define('DB_PASSWORD', 'uGJmd6TO');

/** ��� �ࢥ� MySQL */
define('DB_HOST', 'localhost');

/** ����஢�� ���� ������ ��� ᮧ����� ⠡���. */
define('DB_CHARSET', 'utf8');

/** �奬� ᮯ��⠢�����. �� �����, �᫨ �� 㢥७�. */
define('DB_COLLATE', '');

/**#@+
 * �������� ���� � ᮫� ��� ��⥭�䨪�樨.
 *
 * ������ ���祭�� ������ ����⠭�� �� 㭨������ �ࠧ�.
 * ����� ᣥ���஢��� �� � ������� {@link https://api.wordpress.org/secret-key/1.1/salt/ �ࢨ� ���祩 �� WordPress.org}
 * ����� �������� ��, �⮡� ᤥ���� �������騥 䠩�� cookies ������⢨⥫�묨. ���짮��⥫� ���ॡ���� ᭮�� ���ਧ�������.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iCb|<Q*+}QQ&QG5@O9u%4_KcHMrl+|+Kw+-Xs:<|)1.~MT65TAuTA A% +yv{{vW');
define('SECURE_AUTH_KEY',  'eLP$.Su{E9]BiT%|9yx#Eav|hQsqbg5Ng|8v/]kzl;fR$Mxw%bw;|J|uHk}UGV<h');
define('LOGGED_IN_KEY',    '1[j.|kQ,ekx nxe~+9h3Ru)CLC>env#!@PE4=|- Y|^EjbZ9v+$Og6iPI5l;Kd<H');
define('NONCE_KEY',        '^E5eu}[)]cZWjVl.:3.&heS+ZIl&P^pB.;D>18(Bbq%}M_<Tq]!+Q4Zk* m]jXK;');
define('AUTH_SALT',        '`FKJq<+<&a6NSXNMS!SyDCMz%ikJ]o:cOSHm7ExNEhAU1?%;gQ8Ja@dNEm8<@&-R');
define('SECURE_AUTH_SALT', 'zX+|)332q2?5`lWYt0k8UQ-7=8bwZc-L}/Cz/<BETT>`Zw)Xc]}RPbS)6[L2=DBZ');
define('LOGGED_IN_SALT',   's7_Ti3}N#GC#(|VJxzNa$q!w/N{[T8c.Z ) }HY/^|%,lJCs{i`T-;%}WGi}mqAR');
define('NONCE_SALT',       '{6 leHke,p>8Q5@0J_K?gCa+7?k?q=vCmi%+-)#ExIbtVXaZk&:_{?`r:.|A7APC');

/**#@-*/

/**
 * ��䨪� ⠡��� � ���� ������ WordPress.
 *
 * ����� ��⠭����� ��᪮�쪮 ������ � ���� ���� ������, �᫨ �� �㤥� �ᯮ�짮����
 * ࠧ�� ��䨪��. ��������, 㪠�뢠�� ⮫쪮 ����, �㪢� � ���� ����ન�����.
 */
$table_prefix  = 'wp_';

/**
 * ��� ��������樨 WordPress, �� 㬮�砭�� ������᪨�.
 *
 * ������� ��� ��ࠬ���, �⮡� ����ந�� ����������. ���⢥�����騩 MO-䠩�
 * ��� ��࠭���� �몠 ������ ���� ��⠭����� � wp-content/languages. ���ਬ��,
 * �⮡� ������� �����প� ���᪮�� �몠, ᪮����� ru_RU.mo � wp-content/languages
 * � ��᢮�� WPLANG ���祭�� 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * ��� ࠧࠡ��稪��: ����� �⫠��� WordPress.
 *
 * ������� �� ���祭�� �� true, �⮡� ������� �⮡ࠦ���� 㢥�������� �� ࠧࠡ�⪥.
 * �����⥫쭮 ४���������, �⮡� ࠧࠡ��稪� �������� � ⥬ �ᯮ�짮���� WP_DEBUG
 * � ᢮� ࠡ�祬 ���㦥���.
 */
define('WP_DEBUG', false);

/* �� ���, ����� �� ।����㥬. �ᯥ客! */

/** ��᮫��� ���� � ��४�ਨ WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ���樠������� ��६���� WordPress � ������砥� 䠩��. */
require_once(ABSPATH . 'wp-settings.php');
