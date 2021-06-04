<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'db_hoastore' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$= 5g=Y5H-?HL b71EZ1clUnCezZE:,b2|??FnawGRksS_uc1~UwJV58.Q2V(+ %' );
define( 'SECURE_AUTH_KEY',  'oPc*Dc!9I;leF4KVS_o(%gq.N_k<CNFxp79m% s&Ki?_S:K$1TPwK YHM7s,S9%:' );
define( 'LOGGED_IN_KEY',    'lkH#+5}1X}u){t)rHy~}8&6_IZmdoBY~2 O][RHn:I:;G<V<YocGBz&Z9 @(g^Oq' );
define( 'NONCE_KEY',        '&<uQz*]/|`2wfW=.@yCS5F)g|2< =0)@{6J)_UaaxJ=6q;;og{l+V4;n%e<e2$CP' );
define( 'AUTH_SALT',        'RaTb=CZzS ]*S-$BJ`Cv*ej@+=]T1B,|,W/hvJXNk}_GCg:QObGzgs1Vi|lpb[t<' );
define( 'SECURE_AUTH_SALT', 'qoj[27vG1bp@Fm{&XOO-vIP8zo}VW{zbU$|#Wy`XfgCCErW&fh?tn}{ T[2b=wOw' );
define( 'LOGGED_IN_SALT',   'W<WL!1BvP^WfnK>Rf|8*al>p[l-aBhK;HW?!i:9nu>GS7JgJ>J2SDrk}N([=p+<^' );
define( 'NONCE_SALT',       '20-td}IWc~z>{2>$zp ~)-q@vN9hy]kF4Lg$*IXOsQk5p]0>kZ)oNFJSo==|=4=[' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
