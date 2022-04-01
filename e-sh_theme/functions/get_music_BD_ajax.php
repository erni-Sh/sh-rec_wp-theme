<?php
header('Content-Type: text/html; charset=utf-8');

include "music_BD.php";

$finded_BD = search($music_BD, 'container', $_POST['release_slug']);

function search($array, $key, $value) {
  $results = array();

  if (is_array($array))
  {
    if (isset($array[0][$key]) && $array[0][$key] == $value)
      $results[] = $array;

    foreach ($array as $subarray)
     	$results = array_merge($results, search($subarray, $key, $value));
  }

  return $results;
}

echo json_encode($finded_BD[0]);

// echo json_encode([$_POST['release_slug']]);
?>