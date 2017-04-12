<?php 

// PHP Regex

$message = "Listen, Centauri. I'm not any of those guys, I'm a kid from a trailer park. Okay, Centauri?";

// NB: Only use regex if you can't do it with php
# One way
if (strpos($message, 'Centauri') !== false) {
  var_dump('We found it');
}

# 2 way
if (strstr($message, 'Centauri')) {
  var_dump('We found it');
}

# 3 way ignorecase 
if (stristr($message, 'Centauri')) {
  var_dump('We found it');
}

# Use regex when 'Centauri' is spelt like Cenatari, centauri
$message2 = "Listen, Centari. I'm not any of those guys, I'm a kid from a trailer park. Okay, Centauri?";
if (preg_match('/Centau?ri/', $message2)) {
  var_dump('We found it');
}

# Set matches, stops after first match
preg_match('/Centau?ri/', $message2, $matches);

var_dump($matches);

# Set matches, for all matches
preg_match_all('/Centau?ri/', $message2, $matches);

var_dump($matches);

# Replace
$message3 = "Listen, Centari. I'm not any of those guys, I'm a kid from a trailer park. Okay, Centauri?";

$repalced = preg_replace('/Centau?ri/', 'Najibu', $message3);

var_dump($repalced);

# Split, use regex to remove extra spaces
$string = 'foo    ,bar, baz';

$array = preg_split('/\s*,\s*/', $string);

var_dump($array);

# filter 
$comments = [
 'Lorem ipsum dolor sit Centauri',
 'consectetur adipisicing elit.', 
 'Aut adipisci excepturi cumque pariatur',
 'quis consectetur Centari voluptatibus dolorem sequi'
];

# Hard way
$comments_filter = array_filter($comments, function($comment){
  return preg_match('/Centau?ri/i', $comment);
});

var_dump($comments_filter);

# Easy way
$comments_grep = preg_grep('/Centau?ri/i', $comments);

var_dump($comments_grep);


