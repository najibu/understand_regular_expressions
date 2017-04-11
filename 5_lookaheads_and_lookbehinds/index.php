<?php 
 

// Lookaheads and Lookbehinds
# imagine the site.
# http://regexr.com/

// Ex 1
// Lookaheads
/*
/google(?=<)/ig # ?= means a positve lookahead (memorize)

/google(?!<)/ig # negative lookahead
 */


// Text
/*
<a href="https://google.com/">Google</a>

google.com is the best search engine.
 */

// Replace 
/*
Change
 */

// Ex 2 
// Lookbehinds
/*

/(?<=)google/ig # positive lookbehinds

 */

$string = '$name = "Quaid"; My name is Quaid.';

$result = preg_replace('/(?<=\$)name/', 'VARIABLE', $string);

echo $result;

// Recap
/*
Positive lookahead 
(?=string)

Negative lookahead 
(?!string)
 */

/*
Positive lookbehinds
(?<=string)

Negative lookbehinds
(?<!string)
 */


