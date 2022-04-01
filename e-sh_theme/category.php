<?php

if ( in_category(2)) {
	include (TEMPLATEPATH . '/blog-category.php');
}
// elseif ( in_category(3) || post_is_in_descendant_category(3) ) {
// 	include (TEMPLATEPATH . '/index.php');
// }
// elseif ( in_category(35)) {
// 	include (TEMPLATEPATH . '/category-cases.php');
// }
// elseif ( in_category(2)) {
// 	include (TEMPLATEPATH . '/category-events.php');
// }
else {
	include (TEMPLATEPATH . '/index.php');
}

?>