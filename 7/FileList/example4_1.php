<LINK REL="stylesheet" TYPE="text/css" HREF="example.css">
<?php
if ($handle = opendir('./images')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
		echo "<img src='./images/$file'>  <p> \n";        }
    }
    closedir($handle);
}
?> 