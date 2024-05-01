<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wp_user');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY', 'to`9jRmSZi+`r0;qJE=k_4}rn{ex]~)Q?]3X&!EV%B=+#yMFdql`SEL￾zHJBW>+t');
define('SECURE_AUTH_KEY', 'gB8-=n!5eBf3Ua>Fhsuiu l1/F;Ow6nFo<.-
;bc;|qMDEz1etC}9;xg.5dbJ+[e;');
define('LOGGED_IN_KEY', 'S<FvJ|pIYJiS*u)Gx31:p+buO[R-
=S4|_)#vo)M(HT8`Q8PVtru$-csYpa|-a{j|');
define('NONCE_KEY', 'G~IdZ%_DV#`(#-
ROc|Q|H+&o${YgPcZ<GE:r)6Xim^+|%t1In8`#ehAfV9>XR3C');
define('AUTH_SALT', '1wgW`5LjVQM|2BZeBTP K_)!Pa8yVfRwCliz*=;*V:iG:Sgt}B-
20]pY%GyWn+x');
define('SECURE_AUTH_SALT', ':uKK2-W2KXvghv|gszdEq,=Q2y4QSY|7Lx{3Wy|NaMya 
S?mc0|6pNXH,k!x?+vS');
define('LOGGED_IN_SALT', 
'.,L@;VjZJ;!gohAV/GRp*4]k&U+qs(IeFtHE`gd%_osl}({SrID0c)M@|Mg/C2]L');
define('NONCE_SALT', 'dR7s4b8N9<hyhG;z_>FWt1Ah)q|gKIXH?|`C -
l7(H21AkGT&b4OhK|NE)n$$G{u');
$table_prefix = 'wp_';
define('WP_DEBUG', false);
if (!defined('ABSPATH')) {
 define('ABSPATH', __DIR__ . '/');
}
require_once ABSPATH . 'wp-settings.php';
