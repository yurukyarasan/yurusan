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
define('AUTH_KEY', '7jA[ow)oyZ]b`AVjiho_|Uld@u{^M&`B?ooYn]qd2rk|7GRJ^Ei+s<|~1kqX(gpV');
define('SECURE_AUTH_KEY', 'vz<Sn5~Bn(YK^453vpl9P<q(u7#P]pf{gqAq7T_<9nm$&kJ=D=>evl!s.m/>%<l{');
define('LOGGED_IN_KEY', '."3FU5)Tem1vI45]u<nnFj%Em1j*8GoE1+/6yQz3&*~V+`}qs.fz;"vy^{""kx2o');
define('NONCE_KEY', '+G+=z&}r"Le)+tu0om&kO4(4(,vZIQN>ZiIxjg-6;COWbkO`Q039v~y26{P/X,d7');
define('AUTH_SALT', 'Fx"Mu`7/#8g(4xm;fLAI]~|#F;HwNp[:6:L/<wjQf/`VJ@RA`b-J4A.33}Az!_|D');
define('SECURE_AUTH_SALT', 'H7w9VXL=g1&{h+B%-*%+7?mQV:OuEg~QM/oes};7oCUhjc6YbrM~"M%=L#Q&vrX!');
define('LOGGED_IN_SALT', '~8p!2p"7&K9.m3=!cugG$,@p4Kt~eAe<_OF)ds."i+HnDIvvZ9}j;S<i8p)5CD%M');
define('NONCE_SALT', 'XBpC~S1*rwz66;KRMYF|v;@!TOGHW0TC:SO0vMSSEc0PK4Nw;}HbU^6F{tv4B:BC');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp2_';

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
