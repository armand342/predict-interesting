<?php

$hitam = "\033[0;30m";
			$merah = "\033[1;31m";
			$biru = "\033[1;34m";
			$hijau = "\033[1;32m";
			$kuning = "\033[1;33m";
			$putih = "\033[1;37m";
			$pink = "\033[1;95m";
			$Cyan2 = "\033[1;36m";

system('clear');
$lin = "$kuning=====================================================================================\n";
echo "$kuning CATATAN :$merah
 Ini hanya Sebuah Prediksi, Utamakan Prediksi Sendiri.
 Creator tidak bertanggung jawab atas segala kerugian.
 Menggunakan script ini berarti setuju untuk menanggung
 segala resiko kerugian tanpa melibatkan Creator\n\n";
echo $lin;
while(true){
//date_default_timezone_set('Asia/jayapura');
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
$tmr = 120;
$timr=time()+$tmr; 
      while(true): 
      echo "\r                       \r"; 
      $res=$timr-time(); 
      if($res < 1){break;} 
      echo " Please Wait : ".date('H:i:s',$res)."\r"; 
      sleep(1); 
      endwhile;
//sleep (120);
}