<?php
require_once "index.php";
$input_str = $_GET ['address'];
$str_word_count = str_word_count($input_str);
$str_length = strlen($input_str);
echo "Your word is: <br/><b>" .$input_str . ". Count word: ".$str_word_count .". Length: ". $str_length. "</b>";