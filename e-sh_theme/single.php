<?php

if ( in_category(2) || post_is_in_descendant_category(2) ) {
	include (TEMPLATEPATH . '/blog-single.php');
}

// elseif ( in_category(50)) {
// 	include (TEMPLATEPATH . '/template-total-products.php');
// }
// // все, что относится к главной
// elseif ( in_category(3) || post_is_in_descendant_category(3) ) {
// 	include (TEMPLATEPATH . '/404.php');
// }
// // Вакансии отдельно не показываем
// elseif ( in_category(17)) {
// 	include (TEMPLATEPATH . '/404.php');
// }
// else {
// 	include (TEMPLATEPATH . '/single-default.php');
// }

?>