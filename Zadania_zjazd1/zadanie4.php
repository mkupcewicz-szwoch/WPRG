<?php

$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
galley of type and scrambled it to make a type specimen book. It has survived not only five
centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
and more recently with desktop publishing software like Aldus PageMaker including versions of
Lorem Ipsum.";

$words_array = explode(' ', $text);

$count = count($words_array);
for ($i = 0; $i < $count; $i++) {
    $word = $words_array[$i];
    $last_char = substr($word, -1);
    if (strpos(",.:;!?()[]{}", $last_char) !== false) {
        array_splice($words_array, $i, 1);
        $count--;
        $i--;
    }
}

$assoc_array = array();
$count = count($words_array);
for ($i = 0; $i < $count - 1; $i += 2) {
    $key = $words_array[$i];
    $value = $words_array[$i + 1];
    $assoc_array[$key] = $value;
}

foreach ($assoc_array as $key => $value) {
    echo "$key: $value<br>";
}
?>