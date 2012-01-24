<?php
//this file must be put on a server
$result = 'noresponce';
//$said is what ever you said to siri - but it has extra spacing around it so the trim command is used
$said = trim($_GET['responce']);
function sirisaid($check) {
global $said;
$pattern = '/'.$check.'/i';
preg_match($pattern, $said, $matches);
//echo $pattern.'>>'.$said;
if (isset($matches[0][1])) { return TRUE; } else { return FALSE; }
}
//start intercept code - i have left some examples of how it can detect what you say

//the sirisaid function just runs preg match on what ever was said and returns true or false
if (sirisaid('hello'))
{
$result = 'Why hello there';
}

if (sirisaid('bored'))
{
$result = 'I think i can fix that';

// I use the exec command a lot in PHP to make it interact with the system
exec('open -a firefox http://m.youtube.com');
}

//This checks if the file "stories.txt" exists and if it does it picks a story seperated by >>>>> at random and says it
if (sirisaid('tell me a story'))
{
if (file_exists('stories.txt'))
{
$stories = explode("\n>>>>>\n", file_get_contents('stories.txt'));
shuffle($stories);
$result = $stories[1];
} else {
$result = 'I\'m sorry but I couldn\'t think of any good stories';
}
}

//this is a test to extract what the input was and save it to a varible - to test this say number followed by a number and it will return the number
//eg. "Number 12" - "your number is 12"
if (sirisaid('number'))
{
$result = 'Your number is '.substr($said, 7);
}

//this just makes the clasic whale that you can do while txting on the iphone
if (sirisaid('whale'))
{
$result = "\n\n\n\n\n".'•_________________________•';
}

//this again uses the exec command and opens transmition when the word torrent is found
// the system() command is the same as exec but it returns what the command returned
if (sirisaid('torrent'))
{
exec('open /applications/Transmission.app');
$result = 'ok, I opened Transmition ';
}

//this lists all the files in the root of the server computers HDD
// the system() command is the same as exec but it returns what the command returned
if (sirisaid('root files'))
{
$result = system('ls /');
}

//this executes the command said after run and then returns the result
//if there is no return from the command it just returns "Done!"
//e.g "run echo hello" - "hello"
if (sirisaid('run'))
{
$responce = system(substr($said, 4));
if ($responce == '') { $result = 'Done!'; } else {
$result = ''; }
}

//This kills the prosess that is said after kill - using killall
//e.g "kill Finder" - "Done!" (Finder will be relaunched on the server computer)
if (sirisaid('kill'))
{
if (ucwords(strtolower(substr($said, 5))) == 'Doc')
{
$responce = system('killall Dock');
} else {
$responce = system('killall '.ucwords(strtolower(substr($said, 5)))); }
if ($responce == '') { $result = 'Done!'; } else {
$result = ''; }
}



//end intercept code
//result is initally set to "noresponce" but this is changed between the start and end of the code
//the ruby script will return what ever $result is set to other wise it will just use the default apple responce
echo $result;
?>