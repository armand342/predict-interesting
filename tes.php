<?php

system ('rm tes.php');
//system ('rm cookie.txt');
error_reporting(0);
system('clear');

//include 'cfg.php';
//system('rm key.txt');
system("clear");
//error_reporting(0);
$hitam = "\033[0;30m";
$merah = "\033[1;31m";
$biru = "\033[1;34m";
$hijau = "\033[1;32m";
$kuning = "\033[1;33m";
$putih = "\033[1;37m";
$pink = "\033[1;95m";

//latar
$hitam1 = "\033[0;100m";
$merah1 = "\033[1;101m";
$biru1 = "\033[1;104m";
$hijau1 = "\033[1;102m";
$kuning1 = "\033[1;103m";
$putih1 = "\033[1;107m";
$nc = "\033[0m";

/* START COLOR */
$Black = "\033[0;30m";
$Black2 = "\033[1;30m";
$Red = "\033[0;31m";
$Red2 = "\033[1;31m";
$Green = "\033[0;32m";
$Green2 = "\033[1;32m";
$Yellow = "\033[0;33m";
$Yellow2 = "\033[1;33m";
$Blue = "\033[0;34m";
$Blue2 = "\033[1;34m";
$Purple = "\033[0;35m";
$Purple2 = "\033[1;35m";
$Cyan = "\033[0;36m";
$Cyan2 = "\033[1;36m";
$White = "\033[0;37m";
$White2 = "\033[1;37m";

//date_default_timezone_set("Asia/Jayapura");



//system("rm cookie.txt");

//error_reporting(0);



function url($url) {
	//include 'cfg.php';
	$headers = array();
	$headers[] = "";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$res = curl_exec($ch);
	return $res;
}

$res = url("https://controlc.com/45818017");
//echo $res."\n";exit;
$link1 = explode('content="[tpb]', $res);
$link = explode('Password:', $link1[1]);
//echo $link[0]."\n";
$pw1 = explode('Password: ', $res);
$pw = explode(' [/tpb]', $pw1[1]);
//echo $pass[0]."\n";
$note = $link[0];
$pass = $pw[0];
if ($pass == "off") {
	$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
} else {
	$o = "\033[1;32m[ONLINE]";
}
if ($pass == "update") {
	$o = "\033[1;32m[\033[1;91mUPDATE\033[1;92m]";
}
if ($res == "") {
	$o = "\033[1;37m[\033[1;36mERROR\033[1;37m] ";
}

$del = date("D");
$date = date("m/d/Y");
date_default_timezone_set('Asia/jayapura');
$currenttime = date('h:i:s A l ', time());
$banner = "$Cyan2
                ███████╗ █████╗ ██╗  ██╗██████╗  █████╗  █████╗  █████╗
                ╚══███╔╝██╔══██╗██║  ██║██╔══██╗██╔══██╗██╔══██╗██╔══██╗
                  ███╔╝ ███████║███████║██████╔╝███████║╚██████║╚██████║
                 ███╔╝  ██╔══██║██╔══██║██╔══██╗██╔══██║ ╚═══██║ ╚═══██║
                ███████╗██║  ██║██║  ██║██║  ██║██║  ██║ █████╔╝ █████╔╝
                ╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚════╝  ╚════╝
$Green2=======================================>$kuning$del$Green2<=========================================$kuning
[+] Creator        : Zahra99                                                      [+]
[+] Telegram       : @nisa_zahra99                                                [+]
[+] Whatsapp       : 081240020785                                                 [+]
[+] Donation DOGE  : DNpXWiwZW7YBYNYD892BNi9NUPYA5fEaFt                           [+]
$Green2=====================================================================================$Cyan2
[×] Script         :  CONTYADS                                                   [×]
[×] Script Status  :  $o                                      $Cyan2              [×]
$Green2===============================>$pink $currenttime$hijau<==============================\n\n";

if ($res == "") {
	echo $banner;
	echo "$merah KONEKSI TERPUTUS.\n";
	echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
	echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
	echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
	exit;
}
if ($pass == 'update') {
	system("clear");
	echo $hijau;
	echo $banner;
	sleep(1);
	echo "$Cyan2 Info : $note\n";
	echo "$biru ◼ \033[1;91mAuthor Telah Melakukan Perubahan Terhadap Script \n";
	echo "$biru ◼ \033[1;95mSilahkan Hubungi Author Untuk Informasi Update \n";

	exit;
}

if ($pass == 'off') {
	system("clear");
	echo $banner;

	sleep(1);
	echo "$Cyan2 Info : $note\n";
	echo "$merah Script Telah Dinonaktifkan Oleh Pembuat \n";
	exit;
}
if ($pass == "run") {
if ($del == "Mon"){
	$url1 = "http://controlc.com/1489e53a";
}
if ($del == "Tue"){
	$url1 = "http://controlc.com/a9055f0e";
}
if ($del == "Wed"){
	$url1 = "http://controlc.com/e049e147";
}
if ($del == "Thu"){
	$url1 = "http://controlc.com/6ea2ae8e";
}
if ($del == "Fri"){
	$url = "http://controlc.com/12a91638";
}
if ($del == "Sat"){
	$url1 = "http://controlc.com/3eead964";
}
if ($del == "Sun"){
	$url1 = "http://controlc.com/c2bbaeeb";
}


	$res = url($url1);
	$link1 = explode('Link: ', $res);
	$link = explode(' Password:', $link1[1]);

	$pw1 = explode('[tpcolor=#FF0000]', $res);
	$pw = explode('[', $pw1[1]);
	//	echo $pw[0]."\n";
	//	exit;
	//echo $pass[0]."\n";

	$pass = $pw[0];

	$read = file_get_contents("key.txt");
	if ($read == $pass) {
		echo $banner;
		//echo "$Cyan2 Info : $note\n";
		echo "$hijau UPLOADING PASSWORD •\r";
		sleep(1);
		echo "$hijau UPLOADING PASSWORD • •\r";
		sleep(1);
		echo "$hijau UPLOADING PASSWORD • • •\r";
		sleep(1);
	}
	if ($read !== $pass) {
		system ('clear');
		echo $banner;
		echo "\n $merah Visit This Link To Get Password :$hijau $link[0]\n";
		echo "$kuning  Password :$hitam \n";
		$p = trim(fgets(STDIN));

		system ('clear');
		echo $banner;
		//echo "$Cyan2 Info : $note\n";
		echo "$hijau CHECKING PASSWORD •\r";
		sleep(1);
		echo "$hijau CHECKING PASSWORD • •\r";
		sleep(1);
		echo "$hijau CHECKING PASSWORD • • •\r";
		sleep(1);
		if ($p == "") {
			exit;
		}
		if ($pass == $p) {
			$save = fopen("key.txt", "w");
			fwrite($save, $p);
			fclose($save);
			system('clear');
			echo $banner;
			//echo "$Cyan2 Info : $note\n";
			echo $kuning ." [".$putih."√".$kuning."]".$hijau." OPEN SCRIPT SUCCESS            \r";
			sleep (3);
		} else {
			system('clear');
			echo $banner;
			echo $kuning ." [".$merah."x".$kuning."]".$merah." PASSWORD WRONG \n";
			exit;
		}
	}

system ('rm key.txt');
system('clear');
echo $banner;
		//echo "$Cyan2 Info : $note\n";
$lin = "$kuning=====================================================================================\n";
echo "$kuning CATATAN :$merah
 Ini hanya Sebuah Prediksi, Utamakan Prediksi Sendiri.
 Creator tidak bertanggung jawab atas segala kerugian.
 Menggunakan script ini berarti setuju untuk menanggung
 segala resiko kerugian tanpa melibatkan Creator\n\n";
echo $lin;
while(true){
	
	
	$res = url($url1);
	$link1 = explode('Link: ', $res);
	$link2 = explode(' Password:', $link1[1]);
if($link2[0] !== $link[0]){
	echo "$putih Script Stoped!!\n";
	exit;
}
	
//date_default_timezone_set('UTC');
$a = date('i', time());
$t = $a + 02;
$rand = rand(11,99);
$b = substr($rand,-1,2);
if ($rand == 11 or $rand == 13 or $rand == 15 or $rand == 17 or $rand == 19 or $rand == 21 or $rand == 23 or $rand == 25 or $rand == 27 or $rand == 29 or $rand == 31 or $rand == 33 or $rand == 35 or $rand == 37 or $rand == 39 or $rand == 41 or $rand == 43 or $rand == 45 or $rand == 47 or $rand == 49 or $rand == 51 or $rand == 53 or $rand == 55 or $rand == 57 or $rand == 59 or $rand == 61 or $rand == 63 or $rand == 65 or $rand == 67 or $rand == 69 or $rand == 71 or $rand == 73 or $rand == 75 or $rand == 77 or $rand == 79 or $rand == 81 or $rand == 83 or $rand == 85 or $rand == 87 or $rand == 89 or $rand == 91 or $rand == 93 or $rand == 95 or $rand == 97 or $rand == 99){
	
	echo "$putih Menit$hijau [$Cyan2$t".$hijau."] 🔴";
echo "$putih Prediksi Ekor :$hijau [$merah$b".$hijau."] |";
	echo "$putih Prediksi Angka :$hijau [$merah$rand".$hijau."] \n";
echo $lin;
}else{
//if ($rand == 2 or $rand == 4){
	echo "$putih Menit$hijau [$Cyan2$t".$hijau."] 🔵";
echo "$putih Prediksi Ekor :$hijau [$biru$b".$hijau."] |";
	echo "$putih Prediksi Angka :$hijau [$biru$rand".$hijau."] \n";
echo $lin;
}
//$b = "120";
foreach($b = "120" $b >= "0" $b--) {
sleep(1);
echo "$kuning Menunggu hasil lotrey :$putih $b  \r";

}
}
}
?>
