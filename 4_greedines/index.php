<?php 
 

// Greediness
# @ translates into a link 
# http://regexr.com/

// Ex 1
// Regex
/@(\w+)/g

// Text 
/*
Thanks for the help, @NajibuNsubuga.
@NajibuNsubuga, thanks for the help!
*/

/*
My name is @Quaid.
@Quaid, start the reactor. 
Thank you for using @JohnnyCab.
*/

//Replace 
<a href="https://twitter.com/$1">@$1</a>

// PHP
preg_replace('//', "$1", subject); # Access group
