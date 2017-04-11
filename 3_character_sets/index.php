<?php 

// Character sets 
# Imagine that you need to match any of these words ['Born, Torn, Corn']. 
# http://regexr.com/

// Ex 1
// Regex
 /[BTC]orn/ig

// Text 
#Born
#Torn
#Corn
#Worn -> not the above 3 characters /[^BTC]orn/ig


// Ex 2
// Matching 3 www or max 5
#Regex
 /[w]{3, 5}/ig
 /[w]*/ig match 0 or more characters
 /[w]+/ig match 1 or more characters
 /[w]?/ig match 0 or 1 character

// Text 
# www


// Ex 3 
// Regex
// . matches anything except line break
 /www\.([^\.]+)/ig 

// Text 
# www.najibunsubuga.me