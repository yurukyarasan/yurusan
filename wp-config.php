<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA1067970-mgun9n');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA1067970');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 's5vcK68J');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql138.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'WSs^0TMBAQp.O`s:%JI].AB^lRR2ju6Jr-"-VYm#is`F(X+>fbSjsoc.|a5xOV}n');
define('SECURE_AUTH_KEY', '&T*!JLnzf0wK&6CLnQa17je0x,RI8iJ]1.-(W##G@$rvbg:`U/)cM$BTl06*/rpD');
define('LOGGED_IN_KEY', '>lM.Ei]hf?J=vef)JLcSm*1T-9ZM-AsXyo2{bAx1S=+V}bu;rYJe{&k*3avm_GKb');
define('NONCE_KEY', 'PJ/5OU#m@xtJ9E3x5fjm.w$m2G*UU+?NLH.Ms%X!tvY^7`=Z#p8W3xFe^71J{H=q');
define('AUTH_SALT', '[3V`I!l<g$s1Q[r!W,*}_So4KJ6%2dgvqJ?2Wqzr?|Pwuv<>cZy$*V2E2Vkyn>=u');
define('SECURE_AUTH_SALT', 'rU#..*Rj,17To#17;r4wSK,DIf"2b6I.&WNA~-Dxa#Ehs!#qRw/TD@VTnLx?.xZX');
define('LOGGED_IN_SALT', 'cg;Zx"wGtES>KXA+B*4l>;OF,OL#`cjR0b!2x2Sw;Jq}eOJYj[Q;9Pg{Sf#$V8kT');
define('NONCE_SALT', '|h5OX?z)DsM01/WYvS{#UH2#$d&wK=/,m&H?KI$y=E;ma@M6#U6F}3104jfj,z|{');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20200929105638_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
