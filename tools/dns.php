<?php

    echo "#################################\n";
    echo "#          DNS Lookup           #\n";
    echo "#      Create By MarsHall       #\n";
    echo "#################################\n";
    echo "Input URL Not Using HTTP/HTTps : ";
    $target = trim(fgets(STDIN));
 

    $ch = curl_init("https://api.hackertarget.com/dnslookup/?q=$target"); 
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 5.0.2; Redmi Note 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.96 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      

print_r($output);

?>