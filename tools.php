<?php 

echo "###########################\n";
echo "#      Tools Apa Aja      #\n";
echo "#   Created By MarsHall   #\n";
echo "###########################\n";
echo "1. Search Repositories Github\n";
echo "2. PHPThumb RCE\n";
echo "3. DNS Lookup\n";
echo "4. Subdomain Finder\n";
echo "5. Search Film\n";
echo "6. Doujin Grabber\n";
sleep(0);
echo "Masukkan Nomor : ";
$no = trim(fgets(STDIN));
if ($no == '1') {
	sleep(2);
	echo "\n";
	include('tools/repo.php');
} 

if ($no == '2') {
	sleep(2);
	echo "\n";
	include('tools/phpthumb.php');
} 

if ($no == '3') {
	sleep(2);
	echo "\n";
	include('tools/dns.php');
} 

if ($no == '4') {
	sleep(2);
	echo "\n";
	include('tools/subdo.php');
} 

if ($no == '5') {
	sleep(2);
	echo "\n";
	include('tools/film.php');
} 

if ($no == '6') {
	sleep(2);
	echo "\n";
	include('tools/doujin.php');

} else {
	echo "\nInput yang anda masukan tidak ada\n";
}

?>