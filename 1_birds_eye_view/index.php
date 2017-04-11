<?php 

// Regex 

// http://regexr.com/

// Ex 1
/\$NAME\$/g

$string = "My name is $NAME$";

# PHP
$output = preg_replace('/\$NAME\$/', 'Najibu Nsubuga', $string);

echo $output;

# Anything between the dollar sign
/\$.+\$/g

# Captial letters
/\$[A-Z]+/$\g
# end

// Ex 2
/((?:ht|f)tps?:\/\/([^\s]+))/g

Visit https://najibunsubuga.me to view my work.

# replace
<a href="$1">$2</a>