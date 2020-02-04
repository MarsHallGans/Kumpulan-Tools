<?php
error_reporting(0);
    echo "#################################\n";
    echo "#         Doujin Hentai         #\n";
    echo "#      Create By MarsHall       #\n";
    echo "#################################\n";
    echo "Kode Nuklir : ";
    $kode = trim(fgets(STDIN));
    
 
function http_request($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 5.0.2; Redmi Note 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.96 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}
$crot = http_request("https://nhopener-api.now.sh/$kode");
$crot = json_decode($crot, TRUE);

$title = $crot['title']['display'];
$img = $crot['images']['pages'][0]['link'];
$artis = $crot['metadata']['artist']['name'];
$tags = $crot['metadata']['tags'];


echo "\n[+] Title : $title\n";
echo "[+] Image : $img\n";
echo "[+] Artist : $artis\n";
for($xy=0;$xy<count($tags);$xy++){
    echo "[+] Tags : $tags[$xy] \n";
}

?>