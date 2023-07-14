<?php 
    $file = 'extras/users.txt';

    if(file_exists($file)){
        $handle = fopen($file, 'r');
        $contents = fread($handle, filesize($file));
        
        fclose($handle);
        echo $contents;
    } else {
        $handle = fopen($file, 'w');
        $content = 'Minh' . PHP_EOL . "Elen" . PHP_EOL . "David";
        fwrite($handle,$content );
        fclose($handle);
        
    }
?>