<? 

/*
$fullString = "ignore everything except this (text)";
$start = strpos('(', $fullString);
$end = strlen($fullString) - strpos(')', $fullString);

$shortString = substr($fullString, $start, $end);
*/

$dir = "/Volumes/www/scripts/";

$dh  = opendir($dir);

while (false !== ($filename = readdir($dh))) {

	// Don't grab the files without a period, or double period. Also not DS_Store - it's an Apple thing.
	if ($filename != "." && $filename != ".." && $filename != ".DS_Store") {
	
		// Store filename's in an array
		$files[] = $filename;
		
		$ofiles[] = $filename;

	}
}
// Loop through the files in the directory
foreach ($ofiles as $ofile) {

	$otext = "$ofile";
	echo $otext;

}

// Loop through the files in the directory
foreach ($files as $file) {

	$text = "$file";

	preg_match('#\((.*?)\)#', $text, $match);
	
	echo $match[1] . "<br />";

}

// Break the reference to $files.
unset($files);

?>