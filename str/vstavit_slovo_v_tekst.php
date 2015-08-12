<?php
mb_internal_encoding("UTF-8");
$text = 'aaa bbb cccc ddd';
$string = " <b>xxx</b> ";
$mid_pos = mb_strpos($text, ' ', rand(0,mb_strlen($text)));
echo mb_substr($text, 0,  $mid_pos) , $string  , mb_substr($text, $mid_pos);