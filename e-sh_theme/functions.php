<?php 

if ( ! function_exists( 'mythem_enqueue_style' )) {
	function mythem_enqueue_style() {
		wp_deregister_script( 'jquery' );
	  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/styles.min.css');
	  // wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');  
	};
	add_action( 'wp_enqueue_scripts', 'mythem_enqueue_style' );
};

if ( ! function_exists( 'my_scripts' )) {
	function my_scripts() {
	  // wp_deregister_script( 'jquery' );
	  wp_enqueue_script('main_js' , get_template_directory_uri() . '/js/custom.js', array(), '', true);
	  // wp_enqueue_script('imbaChat' , 'https://api.imbachat.com/imbachat/v1/6024/widget', array(), '', true);
	};
	add_action( 'wp_enqueue_scripts', 'my_scripts' );
};

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_filter( 'show_admin_bar', '__return_false');



// if (is_page(id)){
// wp_enqueue_script('needFullScript'); // В теле функции подключаем нужный скрипт, перед этим его регистрируем с помощью wp_register_script()
// }


// ВЫВОД МУЗЫКИ
include (TEMPLATEPATH . "/functions/music_BD.php");

if ( ! function_exists( 'fastPlayer' )) :
	function fastPlayer($database = null) {
		include (TEMPLATEPATH . "/elements/view-FCH-audio.php");
	};
endif;

if ( ! function_exists( 'getArtistCard' )) :
	function getArtistCard($band_name = null, $band_BD = null, $id = null) {
		include (TEMPLATEPATH . "/elements/artist-card.php");
	};
endif;

if ( ! function_exists( 'getMusicAlbum' )) :
	function getMusicAlbum($album_BD = null) {
		include (TEMPLATEPATH . "/elements/music-album-card.php");
	}
endif;



if ( ! function_exists( 'get_music_BD_ajax' )) :

	add_action('wp_ajax_get_music_BD_ajax', 'get_music_BD_ajax');
	add_action('wp_ajax_nopriv_get_music_BD_ajax', 'get_music_BD_ajax');

	function get_music_BD_ajax() {
		global $music_BD;
		$finded_BD = search($music_BD, 'container', $_POST['release_slug']);
		echo json_encode($finded_BD[0]);
	}
endif;

if ( ! function_exists( 'search' )) :
	function search($array, $key, $value) {
	  $results = array();

	  if (is_array($array)) :
	    if (isset($array[0][$key]) && $array[0][$key] == $value)
	      $results[] = $array;

	    foreach ($array as $subarray)
	     	$results = array_merge($results, search($subarray, $key, $value));
	  endif;

	  return $results;
	}
endif;


// ВЫВОД КАРТОЧЕК БЛОГА
if ( ! function_exists( 'get_max_pages_on_category' ) ) {
	function get_max_pages_on_category($category, $post_on_page, $tag = null) {
		$wp_query = new WP_Query( array(
			'cat'=> $category,
			'tag' => $tag,
		));
		$countcat = $wp_query->found_posts;

		// $countcat = get_term( $category, 'category', false, 'raw' )->count;
		return ceil($countcat / $post_on_page);
	}
}


add_action('wp_ajax_get_new_cards', 'get_new_cards');
add_action('wp_ajax_nopriv_get_new_cards', 'get_new_cards');
// возможно отдельную функцию-оболчку для ajax
if ( ! function_exists( 'get_new_cards' ) ) {
	function get_new_cards($category = null, $tag = null) {
		// ---------- init
		// $category = 7;
		$post_on_page = -1;


		if (isset($_POST["paged"])) {
			$paged = $_POST["paged"];
			$category = $_POST["category"];
			$tag = $_POST["tag"];
			$styles = "style='display: none'";
		} else {
			$paged = 1;
		};

		if ($category == 2) { $template = 'elements/blog_photo-card'; };

		// ------------- логика ----------------
		global $wp_query;
		global $post;

		$html = '';

		$arg = array(
			'category'=> $category,
			'orderby' => 'date',
			'numberposts' => $post_on_page,
			'paged' => $paged,
			'tag' => $tag,
		);

		// $countcat = get_category($category, false);
		// $max_pages = $countcat->count / $post_on_page;
		
		$posts = get_posts($arg);
	 // ----------------- вывод ------------
		if ($posts) :
			echo "<div class='row' id='" . $category . "_paged_" . $paged . "' " . $styles . ">";

			foreach ($posts as $post) :
				// setup_postdata($post);

				set_query_var( 'post', $post );
				get_template_part($template);
					
			endforeach;

			echo "</div>";
		endif;

		// wp_die();
	}
};

require_once('parser/simple_html_dom.php');

?>