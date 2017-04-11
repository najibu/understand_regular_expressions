<?php 

// Alternation 
# Imagine a site like youtube and we want to replace mean words. 
# http://regexr.com/

# Regex
# /stupid|idiot(?:ic)?|crap/g

# Text 
# This website is stupid. Your speaking style is idiotic. Your knowledge is crap. This is so stupid. Youre an idiot.

# Replace 
# amazing

#PHP 
$string = "This website is stupid. Your speaking style is idiotic. Your knowledge is crap. This is so stupid. You're an IDIOT.";

$string = preg_replace('/stupid|idiot(?:ic)?|crap/i', 'amazing', $string);

echo $string;

// Save to the database 

# To select all in PHP use preg_match simulates => preg_match_all()