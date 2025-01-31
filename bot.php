<?php
$reset = "\033[0m";
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
system('clear');


sleep(1);
echo $banner = "
$merah2  ______        _        _______  _       
$merah2 (  ___ \      ( (    /|(  ___  )( \      
$merah2 | (   ) )     |  \  ( || (   ) || (      
$merah2 | (__/ /_____ |   \ | || |   | || |      
$putih2 |  __ ((_____)| (\ \) || |   | || |      
$putih2 | (  \ \      | | \   || |   | || |      
$putih2 | )___) )     | )  \  || (___) || (____/\
$putih2 |/ \___/      |/    )_)(_______)(_______/
                                         
";
sleep(1);
echo$kuning2." NEK MBOK ARANI TURA TURU KAREP2 MU 🤣🤣🤣\n";
sleep(1);
system('clear');

//banner
sleep(1);
	
echo $banner2 = "

$merah2  ______        _        _______  _       
$merah2 (  ___ \      ( (    /|(  ___  )( \      
$merah2 | (   ) )     |  \  ( || (   ) || (      
$merah2 | (__/ /_____ |   \ | || |   | || |      
$putih2 |  __ ((_____)| (\ \) || |   | || |      
$putih2 | (  \ \      | | \   || |   | || |      
$putih2 | )___) )     | )  \  || (___) || (____/\
$putih2 |/ \___/      |/    )_)(_______)(_______/
                                         
$cyan1         <[ NGOPI SEK LUR! ☕🚬]>
$merah2 🤣🤣=================================================🤣🤣\n";

$useragent = "Mozilla/5.0 (Linux; Android 6.0.1; NEO-U9-H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Safari/537.36 OPR/63.3.3216.58675";
$authorization = getenv("keydice");
include ('data.php');
include ('cfg.php');

// Include file arry.php
include ('arry.php');
// Fungsi untuk menghasilkan huruf acak kecil
function randomHuruf() {
    return chr(rand(97, 122)); // ASCII a-z
}

// Fungsi untuk menghasilkan angka acak 0-9
function randomAngka() {
    return strval(rand(0, 9));
}


function generateRandomString2($length = 14) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

///Fungsi untuk mengecek apakah nilai berkurang 10%
function cekPenurunan($nilai_awal, $nilai_sekarang) {
    $penurunan = (($nilai_awal - $nilai_sekarang) / $nilai_awal) * 100;
    return $penurunan >= 10;
}


// Fungsi untuk mencari satuan yang paling sering muncul
function satuanPalingSeringKeluar($array) {
    // Tentukan batas maksimal satuan (misalnya angka 99.79 akan masuk ke rentang 98-99.99)
    $maksSatuan = 50; // Karena 0-1.99, 2-3.99, dst.
    $frekuensi = array_fill(0, $maksSatuan, 0); // Array untuk menghitung frekuensi
    $indeksTerakhir = array_fill(0, $maksSatuan, -1); // Array untuk menyimpan indeks terakhir kemunculan

    // Iterasi untuk menghitung frekuensi dan mencatat indeks terakhir
    foreach ($array as $i => $angka) {
        $satuan = floor(floatval($angka) / 2); // Menentukan satuan (0-1.99, 2-3.99, dst.)
        if ($satuan < $maksSatuan) {
            $frekuensi[$satuan]++;
            $indeksTerakhir[$satuan] = $i; // Simpan indeks terakhir kemunculannya
        }
    }

    // Cari satuan dengan frekuensi tertinggi, jika frekuensi sama, pilih yang paling baru
    $satuanPalingSering = -1;
    $frekuensiTerbesar = 0;
    foreach ($frekuensi as $satuan => $jumlah) {
        if ($jumlah > $frekuensiTerbesar || 
           ($jumlah == $frekuensiTerbesar && $indeksTerakhir[$satuan] > $indeksTerakhir[$satuanPalingSering])) {
            $satuanPalingSering = $satuan;
            $frekuensiTerbesar = $jumlah;
        }
    }

    return array('satuan' => $satuanPalingSering, 'frekuensi' => $frekuensiTerbesar);
}

function simpanArrayKeFile($array, $filename) {
    $data = '<?php
    $alldice = ' . var_export($array, true) . ';';
    file_put_contents($filename, $data);
}

$alldice = [17];

// Fungsi untuk menghitung puluhan yang belum keluar beserta informasi terakhir kali munculnya
function hitungPuluhanBelumKeluar($array) {
    $puluhanKeluar = array_fill(0, 10, false); // Array untuk menandai puluhan yang sudah keluar
    $totalPuluhan = 10;
    $result = [];

    // Iterasi dari data terbaru ke terlama
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $angka = floatval($array[$i]);
        $puluhan = intval($angka / 10) * 10; // Mendapatkan nilai puluhan
        
        if ($puluhan == 100) { // Jika nilai adalah 100, anggap sebagai 0
            $puluhan = 0;
        }

        $index = $puluhan / 10; // Dapatkan indeks untuk array puluhanKeluar

        // Update arrays
        $puluhanKeluar[$index] = true;

        // Cek jika hanya ada satu puluhan yang belum keluar
        $belumKeluar = array_keys($puluhanKeluar, false);
        if (count($belumKeluar) == 1) {
            $puluhanYangBelumKeluar = $belumKeluar[0] * 10;
            return array(
                'puluhan' => $puluhanYangBelumKeluar,
            );
        }
    }

    return null; // Jika semua puluhan sudah keluar
}

// Fungsi untuk mencari indeks terakhir kali puluhan tertentu muncul
function cariIndeksTerakhir($array, $puluhanDicari) {
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $angka = floatval($array[$i]);
        $puluhan = intval($angka / 10) * 10;

        if ($puluhan == 100) { // Jika nilai adalah 100, anggap sebagai 0
            $puluhan = 0;
        }

        if ($puluhan == $puluhanDicari) {
            return array(
                'index' => $i,
                'angka' => $angka
            );
        }
    }

    return null;
}

// Fungsi untuk menghitung satuan yang belum keluar beserta informasi terakhir kali munculnya
function hitungSatuanBelumKeluar($array) {
    $satuanKeluar = array_fill(0, 100, false); // Array untuk menandai satuan yang sudah keluar

    // Iterasi dari data terbaru ke terlama
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $angka = intval(floatval($array[$i]));

        // Update arrays
        $satuanKeluar[$angka] = true;

        // Cek jika hanya ada satu satuan yang belum keluar
        $belumKeluar = array_keys($satuanKeluar, false);
        if (count($belumKeluar) == 1) {
            $satuanYangBelumKeluar = $belumKeluar[0];
            return array(
                'satuan' => $satuanYangBelumKeluar,
            );
        }
    }

    return null; // Jika semua satuan sudah keluar
}

// Fungsi untuk mencari indeks terakhir kali satuan tertentu muncul
function cariIndeksTerakhirSatuan($array, $satuanDicari) {
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $angka = intval(floatval($array[$i]));

        if ($angka == $satuanDicari) {
            return array(
                'index' => $i,
                'angka' => $angka
            );
        }
    }

    return null;
}



function tambahKeArrayDanHapusElemenPertama($array, $elemenBaru) {
    array_push($array, $elemenBaru);
    if (count($array) > 1500) {
        array_shift($array);
    }
    return $array;
}

function hitungPuluhanSeringKeluar($array) {
    $frekuensiPuluhan = [];
    $indexPuluhan = [];
    
    // Hitung frekuensi puluhan dan simpan indeks terakhir
    foreach ($array as $index => $angka) {
        $puluhan = intval($angka / 10);
        if (isset($frekuensiPuluhan[$puluhan])) {
            $frekuensiPuluhan[$puluhan]++;
        } else {
            $frekuensiPuluhan[$puluhan] = 1;
        }
        $indexPuluhan[$puluhan] = $index; // Simpan indeks terakhir
    }

    // Cari frekuensi maksimal
    $maxFrekuensi = max($frekuensiPuluhan);

    // Cari puluhan dengan frekuensi maksimal dan indeks terakhir terbesar
    $puluhanSeringKeluar = null;
    $maxIndex = -1;
    foreach ($frekuensiPuluhan as $puluhan => $frekuensi) {
        if ($frekuensi == $maxFrekuensi && $indexPuluhan[$puluhan] > $maxIndex) {
            $puluhanSeringKeluar = $puluhan;
            $maxIndex = $indexPuluhan[$puluhan];
        }
    }

    return $puluhanSeringKeluar;
}

function hitungPuluhanJarangKeluar($array) {
    $frekuensiPuluhan = [];
    $indexPuluhan = [];
    
    // Hitung frekuensi puluhan dan simpan indeks pertama
    foreach ($array as $index => $angka) {
        $puluhan = intval($angka / 10);
        if (isset($frekuensiPuluhan[$puluhan])) {
            $frekuensiPuluhan[$puluhan]++;
        } else {
            $frekuensiPuluhan[$puluhan] = 1;
        }
        if (!isset($indexPuluhan[$puluhan])) {
            $indexPuluhan[$puluhan] = $index; // Simpan indeks pertama
        }
    }

    // Cari frekuensi minimal
    $minFrekuensi = min($frekuensiPuluhan);

    // Cari puluhan dengan frekuensi minimal dan indeks pertama terkecil
    $puluhanJarangKeluar = null;
    $minIndex = PHP_INT_MAX;
    foreach ($frekuensiPuluhan as $puluhan => $frekuensi) {
        if ($frekuensi == $minFrekuensi && $indexPuluhan[$puluhan] < $minIndex) {
            $puluhanJarangKeluar = $puluhan;
            $minIndex = $indexPuluhan[$puluhan];
        }
    }

    return $puluhanJarangKeluar;
}

// Fungsi untuk menghitung duapuluhan yang belum keluar beserta informasi terakhir kali munculnya
function hitungDuapuluhanBelumKeluar($array) {
    $duapuluhanKeluar = array_fill(0, 5, false); // Array untuk menandai duapuluhan yang sudah keluar
    $totalDuapuluhan = 5;
    $result = [];

    // Iterasi dari data terbaru ke terlama
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $angka = floatval($array[$i]);
        $duapuluhan = intval($angka / 20) * 20; // Mendapatkan nilai duapuluhan

        if ($duapuluhan == 100) { // Jika nilai adalah 100, anggap sebagai 0
            $duapuluhan = 0;
        }

        $index = $duapuluhan / 20; // Dapatkan indeks untuk array duapuluhanKeluar

        // Update arrays
        $duapuluhanKeluar[$index] = true;

        // Cek jika hanya ada satu duapuluhan yang belum keluar
        $belumKeluar = array_keys($duapuluhanKeluar, false);
        if (count($belumKeluar) == 1) {
            $duapuluhanYangBelumKeluar = $belumKeluar[0] * 20;
            return array(
                'duapuluhan' => $duapuluhanYangBelumKeluar,
            );
        }
    }

    return null; // Jika semua duapuluhan sudah keluar
}

// Fungsi untuk mencari indeks terakhir kali duapuluhan tertentu muncul
function cariIndeksTerakhirDuapuluhan($array, $duapuluhanDicari) {
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $angka = floatval($array[$i]);
        $duapuluhan = intval($angka / 20) * 20;

        if ($duapuluhan == 100) { // Jika nilai adalah 100, anggap sebagai 0
            $duapuluhan = 0;
        }

        if ($duapuluhan == $duapuluhanDicari) {
            return array(
                'index' => $i,
                'angka' => $angka
            );
        }
    }

    return null;
}



function timer(){
$red = "\e[1;31m";
$yellow = "\e[1;33m";
$gray = "\e[1;30m";
for($x=60;$x>0;$x--){echo "\r \r";
echo$gray." Processing 📶 in ".$red."[".$yellow.$x.$red."] ".$gray."seconds ☕🚬";
echo "\r \r";
sleep(1);}
}
function timeconfirm(){
$red = "\e[1;31m";
$yellow = "\e[1;33m";
$gray = "\e[1;30m";
for($x=0;$x<20;$x++){echo "\r \r";
echo$gray." Waiting for Loading.... ".$red."[".$yellow.$x.$red."] ".$gray."seconds ☕🚬";
echo "\r \r";
sleep(1);}
}

$dns ="8.8.8.8,8.8.4.4";

//Copyright©2021-YzZzTvOfficial Youtube Channel
function Get($url, $header){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
sleep(1);
}
//Copyright©2021-YzZzTvOfficial Youtube Channel
function Post($link, $header, $data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

//🟧page1
$url = "https://wolfbet.com/api/v1/user/bets?page=1";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "authorization:".$authorization;
$gest= Get($url, $header);

$data = json_decode($gest, true); // Mengonversi JSON menjadi array asosiatif
// Ambil data
$items = $data['data'];
// Urutkan data berdasarkan nonce (dari kecil ke besar)
usort($items, function ($a, $b) {
    return $a['nonce'] <=> $b['nonce'];
});
////♥️♥️♥️♥️
// Tampilkan hasilnya
foreach ($items as $item) {
    echo $cyan1 . " nonce : " . $item['nonce'] . $abu2 . " Angka : " . $item['result_value'] . PHP_EOL;
}

$nonce = $item['nonce'];
$profit = $item['profit'];
$hsl = $item['state'];
$rollh = $item['result_value'];
echo$cyan1."nonce  : ".$kuning2.$nonce."\n";
echo$cyan1."hsl  : ".$kuning2.$hsl."\n";
echo$cyan1."profit  : ".$kuning2.$profit."\n";
echo$cyan1."rollh  : ".$kuning2.$rollh."\n";


//get🖥️🖥️🖥️🌈🌈🌈🌈🌈🌈🌈
$url = "https://wolfbet.com/api/v1/user/balances";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "authorization:".$authorization;
$gett= Get($url, $header);
$trx0 = explode('shib"},{"amount":"',$gett)[1];
$trx = explode('"',$trx0)[0];
$usdt0 = explode('trx"},{"amount":"',$gett)[1];
$usdt = explode('"',$usdt0)[0];
$ltc0 = explode('doge"},{"amount":"',$gett)[1];
$ltc = explode('"',$ltc0)[0];
$xlm0 = explode('usdt"},{"amount":"',$gett)[1];
$xlm = explode('"',$xlm0)[0];
$matic0 = explode('ltc"},{"amount":"',$gett)[1];
$matic = explode('"',$matic0)[0];
$opt0 = explode('matic"},{"amount":"',$gett)[1];
$optim = explode('"',$opt0)[0];
$doge0 = explode('btc"},{"amount":"',$gett)[1];
$doge = explode('"',$doge0)[0];
echo$cyan1."INFO  : ".$kuning2.$gett."\n";
$data = json_decode($gett, true);
// Menentukan panjang maksimal untuk nama koin
$maxLength = 8; // Panjang maksimal kolom untuk nama koin
foreach ($data['balances'] as $balance) {
    $currency = $balance['currency'];
    $amount = $balance['amount'];
// Menyusun nama koin agar rapi dengan str_pad
    $coin = str_pad($currency, $maxLength, " ", STR_PAD_RIGHT);
    // Menampilkan hasil dengan format yang rapi
    echo $cyan1." --- ".$coin . " : " . $kuning2 . $amount . "\n";
$$currency = $amount;
}



echo$cyan1."GANTI SEDD: ".$yellow;
$seddx= trim(fgets(STDIN));
$seddx = "yes";

if ($seddx == "yes"){
$url = "https://wolfbet.com/api/v1/game/seed/refresh";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "authorization:".$authorization;
$gett= Get($url, $header);
echo$cyan1."SEDD  : ".$kuning2.$gett."\n";
}
$url = "https://wolfbet.com/api/v1/user/provably-fair";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "authorization:".$authorization;
$gett= Get($url, $header);
$cek0 = explode('server_seed_hashed":"',$gett)[1];
$ceky = explode('"',$cek0)[0];
echo$cyan1."GEDD  : ".$kuning2.$gett."\n";
echo$cyan1."HASH  : ".$kuning2.$ceky."\n";

echo $cyan1."Pilih mode:\n";
echo "0 untuk AUTO, 1 untuk MANUAL, 2auto, atau tekan Enter untuk skip: ".$yellow;
$mode = trim(fgets(STDIN));
$mode = "2";

if ($mode == "0") {
    echo $cyan1."GANTI BENIH AUTO: ".$yellow;
    $link = "https://wolfbet.com/api/v1/user/seed/refresh";
    $tes_encode = hash('sha256', $ceky, true);
    $predik0 = base64_encode($tes_encode);
    $predik0 = preg_replace('/[+\/=]/', '', $predik0);
    $client_seed = $predik0;
    $jumlah_client_seed = strlen($client_seed);
// Mengubah karakter pertama menjadi huruf acak kecil jika bukan huruf kecil
if (!ctype_alpha($client_seed[0]) || ctype_upper($client_seed[0])) {
    $client_seed[0] = randomHuruf();
}
// Mengubah karakter kedua menjadi angka acak jika bukan angka
if (!ctype_digit($client_seed[1])) {
    $client_seed[1] = randomAngka();
}
// Mengubah karakter ketiga menjadi huruf acak kecil jika bukan huruf kecil
if (!ctype_alpha($client_seed[2]) || ctype_upper($client_seed[2])) {
    $client_seed[2] = randomHuruf();
}
// Mengubah karakter tengah menjadi angka acak
$tengah_index = round($jumlah_client_seed / 2) + 1;
$tengah_index = number_format($tengah_index,0);
echo $cyan1."Acak tengah ".$tengah_index."\n";
if (!ctype_digit($client_seed[$tengah_index])) {
    $client_seed[$tengah_index] = randomAngka();
}
// Mengubah karakter terakhir menjadi huruf acak kecil jika bukan huruf kecil
if (!ctype_alpha($client_seed[$jumlah_client_seed - 1]) || ctype_upper($client_seed[$jumlah_client_seed - 1])) {
    $client_seed[$jumlah_client_seed - 1] = randomHuruf();
}
// Mengubah karakter terakhir ke-2 menjadi angka acak jika bukan angka
if (!ctype_digit($client_seed[$jumlah_client_seed - 2])) {
    $client_seed[$jumlah_client_seed - 2] = randomAngka();
}
// Mengubah karakter terakhir ke-3 menjadi huruf acak kecil jika bukan huruf kecil
if (!ctype_alpha($client_seed[$jumlah_client_seed - 3]) || ctype_upper($client_seed[$jumlah_client_seed - 3])) {
    $client_seed[$jumlah_client_seed - 3] = randomHuruf();
}

    $data = '{"client_seed":"'.$client_seed.'"}';
    echo $cyan1."SEDD  : ".$kuning2.$data." | ".$jumlah_client_seed." \n";
    $header = array(
        "user-agent:".$useragent,
        "authorization:".$authorization,
        "content-type: application/json"
    );
    $gettx = Post($link, $header, $data);
    echo $cyan1."SEDD  : ".$kuning2.$gettx."\n";

} elseif ($mode == "1") {
    echo $cyan1."GANTI BENIH MANUAL: ".$yellow;
    echo $cyan1."MASUKAN SEED: ".$yellow;
    $client_seed = trim(fgets(STDIN));
    $link = "https://wolfbet.com/api/v1/user/seed/refresh";
    $data = '{"client_seed":"'.$client_seed.'"}';
    echo $cyan1."SEDD  : ".$kuning2.$data."\n";
    $header = array(
        "user-agent:".$useragent,
        "authorization:".$authorization,
        "content-type: application/json"
    );
    $gettx = Post($link, $header, $data);
    echo $cyan1."SEDD  : ".$kuning2.$gettx."\n";
} 
elseif ($mode == "2") {
    $link = "https://wolfbet.com/api/v1/user/seed/refresh";
  $client_seed = generateRandomString2($length = 16);
    $data = '{"client_seed":"'.$client_seed.'"}';
    echo $cyan1."SEDD  : ".$kuning2.$data."\n";
    $header = array(
        "user-agent:".$useragent,
        "authorization:".$authorization,
        "content-type: application/json"
    );
    $gettx = Post($link, $header, $data);
    echo $cyan1."SEDD  : ".$kuning2.$gettx."\n";
} 
else {
    echo $cyan1."Tidak ada aksi yang dipilih. Program dihentikan.\n";
}

///get🖥️🖥️🖥️🌈🌈🌈🌈🌈🌈🌈
$url = "https://wolfbet.com/api/v1/user/provably-fair";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "authorization:".$authorization;
$gext= Get($url, $header);
echo$cyan1."INFO : ".$abu2.$gext."\n";
$cek0 = explode('last_nonce":',$gext)[1];
$cek = explode('}',$cek0)[0];
// Ekstraksi nilai
$gext = json_decode($gext, true);
$serverseed = $gext['provablyFair']['server_seed_hashed'];
$userseed = $gext['provablyFair']['user_seed'];
$nonce = $gext['provablyFair']['last_nonce'];
$cek = $nonce;

// Tampilkan hasil dengan warna
echo $cyan . "Server Seed: " . $kuning . $serverseed . $reset . "\n";
echo $cyan . "User Seed: " . $kuning . $userseed . $reset . "\n";
echo $cyan . "Nonce: " . $kuning . $nonce . $reset . "\n";

echo$cyan1."PILIH COIN: ".$yellow;
$coin= trim(fgets(STDIN));
$coin = "xlm";

include ('data.php');
$makulang = 0;


///🟧🟧🟧🟧🟧
$kalibet0 = 170; //tambah setiap roll
$batasroll = 1000000;
$btsulti = 1;
$bagi0 = 777777;
$bagi = $bagi0;
$bet0 = $tpxxx / $bagi0;
$bet0fix = $tpxxx / $bagi0;
$bet0fix0 = $tpxxx / $bagi0;
$SL = $coinxx / 1.2;
$SL = -$SL;
$SL = number_format($SL,8);
$peluang00 = 98;
$peluang = $peluang00;
$awalboster = 0;
$boster = $awalboster;
$kalibet = $kalibet0;
$kalibetboster = $kalibet * 2;
$untungrugibet = 0;
$hslx = 0;
$maetiagel = 0;
$wegerbet = 0;
$ultixxx0max = 0;
$hendel = 0;
$ultixxx0 = 0;
$satuanBelumKeluar1 = 1;
$puluhanBelumKeluar = 10;
$roll = $satuanBelumKeluar1;
$rollcek = 98;
$roll = 70.00;
$rollbackup = 00.00;
$balbackup = $tpxxx;
$menangxxx = 0;
$untungrugixxxmx = 0;
$ultimx0 = 0;
$bet0fix = $bet0;
$kalahxxx = 0;
$betmax = 0;
$ganda = 0;
$totrugiamax = 0;
$totrugi1 = 0;
$ultimax = 0;
$menangmax = 0;
$kalahmax = 0;
$kbstr = "proses";
$menang = 0;
$kalah = 0;
$duaputaranTidakKeluarmax = 0;
$DuapuluhanputaranTidakKeluar = 1;
$satputaranTidakKeluarmax = 0;
$putaranTidakKeluarmax = 1;
$btssatputaranTidakKeluarmax = 1000;
$putaranTidakKeluar = 1;
$bet = 0.0000001;
$totrugiawal = $bet;
$bet = number_format($bet,8);
$bet_value_first = 00.00;
$bet_value_second = 33.77;
$bet_value_third = 43.77;
$bet_value_fourth = 100;
$CHANCE = (($bet_value_second - $bet_value_first) + ($bet_value_fourth - $bet_value_third) - 0.02);
$payout = 99 / $CHANCE;
$payout = substr($payout, 0, strpos($payout, ".") + 5);

//echo$cyan1."BET CHANCE : ".$kuning2.$CHANCE."\n";
//echo$cyan1."BET payout : ".$kuning2.$payout."\n";

///🤑🤑🤑🤑

$link = "https://wolfbet.com/api/v2/range-dice/manual/play";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "authorization:".$authorization;
$header[] = "content-type: application/json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


for ($time123 = 0; $time123 < 111117; $time123++) {

ulang:
///🟧🟧🟧🟧🟧
include ('arry.php');
if ($peluang < 0.01){$peluang = 0.02;}
if ($peluang > 98){$peluang = 98;}
$roll = $rollbackup;
$bal = $balbackup;
$peluang0 = ((100 - $peluang) / 2);
if ($bet < 0.00000001){$bet = 0.00000001;}
$bet = number_format($bet,8);
$bet = str_replace(",", "", $bet);
$bet0 = number_format($bet0,8);
$wegerbet = $wegerbet + $bet;
$wegerbet = number_format($wegerbet,8);
$totrugi1 = number_format($totrugi1,10);
$bet_value_second = $roll - $peluang0;
if ($bet_value_second < 0.02){$bet_value_second = 00.02;}
if ($bet_value_second > 99.97){$bet_value_second = 99.97;}
$bet_value_first = $bet_value_second - $peluang;
if ($bet_value_first < 0){$bet_value_first = 00.00;}
if ($bet_value_first > 99.95){$bet_value_first = 99.95;}
$bet_value_third = $roll + $peluang0;
if ($bet_value_third > 99.98){$bet_value_third = 99.98;}
if ($bet_value_third < 00.03){$bet_value_third = 00.03;}
$bet_value_fourth = $bet_value_third + $peluang;
if ($bet_value_fourth > 100){$bet_value_fourth = 100;}
if ($bet_value_fourth < 00.05){$bet_value_fourth = 00.05;}
$CHANCE = (($bet_value_second - $bet_value_first) + ($bet_value_fourth - $bet_value_third) - 0.02);
$CHANCE = number_format($CHANCE,2);
$CHANCE = str_replace(",", "", $CHANCE);
$payout = 99 / $CHANCE;
$payout = number_format($payout,4);
$payout = str_replace(",", "", $payout);
//echo$cyan1."BET bet_value_first : ".$kuning2.$bet_value_first."\n";
//echo$cyan1."BET bet_value_second : ".$kuning2.$bet_value_second."\n";
//echo$cyan1."BET bet_value_third : ".$kuning2.$bet_value_third."\n";
//echo$cyan1."BET bet_value_fourth : ".$kuning2.$bet_value_fourth."\n";
//echo$cyan1."BET CHANCE : ".$kuning2.$CHANCE."\n";
//echo$cyan1."BET payout : ".$kuning2.$payout."\n";


    
$data = '{"currency":"'.$coin.'","game":"dice","amount":"'.$bet.'","multiplier":"'.$payout.'","rule":"two_ranges","bet_value_first":"'.$bet_value_first.'","bet_value_second":"'.$bet_value_second.'","bet_value_third":"'.$bet_value_third.'","bet_value_fourth":"'.$bet_value_fourth.'","auto":1}';


//kirimpesan 🚬💰💦🎉
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$pos = curl_exec($ch);


//echo$cyan1."Pos : ".$kuning2.$pos."\n";
$hsl0 = explode('"state":"',$pos)[1];
$hsl = explode('"',$hsl0)[0];
$nonce0 = explode('"nonce":',$pos)[1];
$nonce = explode(',',$nonce0)[0];
$profit0 = explode('"profit":"',$pos)[1];
$profit = explode('"',$profit0)[0];
$roll0 = explode('"result_value":"',$pos)[1];
$rollh = explode('"',$roll0)[0];
$bal0 = explode('userBalance":{"amount":"',$pos)[1];
$bal = explode('"',$bal0)[0];
if ($hsl == null) {echo$cyan1."  :  EROOOOOR 🚧🚧🚧🚧\n";
timeconfirm();
for ($cektime = 0; $cektime < 10; $cektime++){
lanjut0:
//🟧page1
$url = "https://wolfbet.com/api/v1/user/bets?page=1";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "authorization:".$authorization;
$gest= Get($url, $header);
if ($gest == null) {echo$cyan1."  :  EROOOOOR 🚧🚧🚧🚧\n";
timeconfirm();
goto lanjut0;}
$data = json_decode($gest, true); // Mengonversi JSON menjadi array asosiatif
// Ambil data
$items = $data['data'];
// Urutkan data berdasarkan nonce (dari kecil ke besar)
usort($items, function ($a, $b) {
    return $a['nonce'] <=> $b['nonce'];
});
////♥️♥️♥️♥️
// Tampilkan hasilnya
foreach ($items as $item) {
    echo $cyan1 . " nonce : " . $item['nonce'] . $abu2 . " Angka : " . $item['result_value'] . PHP_EOL;
}
$nonce = $item['nonce'];
$profit = $item['profit'];
$hsl = $item['state'];
$rollh = $item['result_value'];
$bal = $balbackup;
echo$cyan1."nonce  : ".$kuning2.$nonce."\n";
echo$cyan1."hsl  : ".$kuning2.$hsl."\n";
echo$cyan1."profit  : ".$kuning2.$profit."\n";
echo$cyan1."rollh  : ".$kuning2.$rollh."\n";
if ($nonce == null) {echo$cyan1."  :  EROOOOOR 🚧🚧🚧🚧\n";
timeconfirm();
goto lanjut0;}
if ($nonce == $cek + 1) {echo$merah." LANJUT ".($cek+1)." | ".$nonce." \n";
goto lanjut1;}
if ($nonce <= $cek) {echo$merah." LANJUT ULANG ".($cek)." | ".$nonce." \n";
goto ulang;}
timeconfirm();
}

}

lanjut1:


$puluhanBelumKeluarff = $puluhanBelumKeluar;

//predikc📊📊📊
$elemenBaru = $rollh;
$alldice = tambahKeArrayDanHapusElemenPertama($alldice, $elemenBaru);
////tulis 🎃🎃🎃
// Simpan array yang telah dimodifikasi ke dalam file arry.php lagi
simpanArrayKeFile($alldice, 'arry.php');
$puluhanSeringKeluar = hitungPuluhanSeringKeluar($alldice);
$puluhanJarangKeluar = hitungPuluhanJarangKeluar($alldice);

///nilai20
$DuapuluhanBelumKeluarx = hitungDuaPuluhanBelumKeluar($alldice);
//index terakhir
$indeksTerakhirDuapuluhan = cariIndeksTerakhirDuapuluhan($alldice, $DuapuluhanBelumKeluarx['duapuluhan']);
//puluhan
$DuapuluhanBelumKeluar = $DuapuluhanBelumKeluarx['duapuluhan'];
//index no urut
$duapuluhanindex = $indeksTerakhirDuapuluhan['index'];
// angkaa
$duapuluhanangkaa = $indeksTerakhirDuapuluhan['angka'];
$duapuluhindeksTerbesar = count($alldice) - 1;
$DuapuluhanputaranTidakKeluar = $duapuluhindeksTerbesar - $duapuluhanindex;
///echo$cyan."2PULUHAN  = ".$green.$DuapuluhanBelumKeluar."\n";
///echo$cyan."INDEX  = ".$green.$indeksTerakhirDuapuluhan."\n";
///echo$cyan."angka  = ".$green.$duapuluhanangkaa."\n";
///echo$cyan."selisih  = ".$green.$DuapuluhanputaranTidakKeluar."\n";
    
///nilai 10
$puluhanBelumKeluarx = hitungPuluhanBelumKeluar($alldice);
//index terakhir
$indeksTerakhir = cariIndeksTerakhir($alldice, $puluhanBelumKeluarx['puluhan']);
//puluhan
$puluhanBelumKeluar = $puluhanBelumKeluarx['puluhan'];
//index no urut
$indexxx = $indeksTerakhir['index'];
// angkaa
$angkaa = $indeksTerakhir['angka'];
$indeksTerbesar = count($alldice) - 1;
$putaranTidakKeluar = $indeksTerbesar - $indexxx;
///echo$cyan."PULUHAN  = ".$green.$puluhanBelumKeluar."\n";
///echo$cyan."INDEX  = ".$green.$indexxx."\n";
///echo$cyan."angka  = ".$green.$angkaa."\n";
///echo$cyan."selisih  = ".$green.$putaranTidakKeluar."\n";
    
 /// nilai 1
$satuanBelumKeluarx = hitungSatuanBelumKeluar($alldice);
//index
$indeksTerakhirSatuan = cariIndeksTerakhirSatuan($alldice, $satuanBelumKeluarx['satuan']);
//satuan
$satuanBelumKeluar = $satuanBelumKeluarx['satuan'];
//index no urut
$satuanindex = $indeksTerakhirSatuan['index'];
// angkaa
$satuanangkaa = $indeksTerakhirSatuan['angka'];
$satindeksTerbesar = count($alldice) - 1;
$satputaranTidakKeluar = $satindeksTerbesar - $satuanindex;
///echo$cyan."SATUAN  = ".$green.$satuanBelumKeluar."\n";
///echo$cyan."INDEX  = ".$green.$satuanindex."\n";
///echo$cyan."angka  = ".$green.$satuanangkaa."\n";
///echo$cyan."selisih  = ".$green.$satputaranTidakKeluar."\n";

    

///bet edit 🟧🟧🟧🟧💵💵💵💵
if ($putaranTidakKeluarmax < $putaranTidakKeluar){$putaranTidakKeluarmax = $putaranTidakKeluar;}
if ($satputaranTidakKeluarmax < $satputaranTidakKeluar){$satputaranTidakKeluarmax = $satputaranTidakKeluar;}
if ($duaputaranTidakKeluarmax < $DuapuluhanputaranTidakKeluar){$duaputaranTidakKeluarmax = $DuapuluhanputaranTidakKeluar;}
    
    
///print_r($alldice);
///echo$cyan."PULUHAN  = ".$green.$puluhanSeringKeluar."\n";
$puluhanSeringKeluar0 = $puluhanSeringKeluar."0";
$puluhanSeringKeluar11 = $puluhanSeringKeluar0;
if ($puluhanSeringKeluar0 < 50){$puluhanSeringKeluar1 = $puluhanSeringKeluar11 + 55;}
if ($puluhanSeringKeluar0 >= 50){$puluhanSeringKeluar1 = $puluhanSeringKeluar11 - 45;}

if ($puluhanSeringKeluar0 < 50){$puluhanSeringKeluar1L = $puluhanSeringKeluar11 + 5;}
if ($puluhanSeringKeluar0 >= 50){$puluhanSeringKeluar1L = $puluhanSeringKeluar11 - -5;}

///echo$cyan."PULUHAN LK  = ".$green.$puluhanJarangKeluar."\n";
$puluhanJarangKeluar0 = $puluhanJarangKeluar."0";
$puluhanJarangKeluar1 = $puluhanJarangKeluar0;
if ($puluhanJarangKeluar0 < 50){$puluhanJarangKeluar1 = $puluhanJarangKeluar1 + 55;}
if ($puluhanJarangKeluar0 >= 50){$puluhanJarangKeluar1 = $puluhanJarangKeluar1 - 45;}
    
//echo$cyan."BELUM KELUAR  = ".$green.$puluhanBelumKeluar."\n";
$puluhanBelumKeluar1 = $puluhanBelumKeluar;
if ($puluhanBelumKeluar < 50){$puluhanBelumKeluar1 = $puluhanBelumKeluar1 + 55;}
if ($puluhanBelumKeluar >= 50){$puluhanBelumKeluar1 = $puluhanBelumKeluar1 - 45;}
    
//echo$cyan."SAT BELUM KELUAR  = ".$green.$satuanBelumKeluar."\n";
$satuanBelumKeluar1 = $satuanBelumKeluar;
if ($satuanBelumKeluar < 50){$satuanBelumKeluar1 = $satuanBelumKeluar1 + 50.5;}
if ($satuanBelumKeluar >= 50){$satuanBelumKeluar1 = $satuanBelumKeluar1 - 49.5;}
$satuanBelumKeluar0 = $satuanBelumKeluar + 0.5;


//echo$cyan."DUA PUL BELUM KELUAR  = ".$green.$DuapuluhanBelumKeluar."\n";
$DuapuluhanBelumKeluar1 = $DuapuluhanBelumKeluar;
if ($DuapuluhanBelumKeluar < 50){$DuapuluhanBelumKeluar1 = $DuapuluhanBelumKeluar1 + 60;}
if ($DuapuluhanBelumKeluar >= 50){$DuapuluhanBelumKeluar1 = $DuapuluhanBelumKeluar1 - 40;}

///dibet
$rollh1 = $rollh;
if ($rollh < 50){$rollh1 = $rollh1 + 50;}
if ($rollh >= 50){$rollh1 = $rollh1 - 50;}



// Nilai maksimal dari masing-masing variabel
$maxSatuanr = 1200; //asli1500
$maxPuluhanr = 200; //asli200
$maxDuaPuluhanr = 110;
$persentaseSatuanr = ($satputaranTidakKeluar / $maxSatuanr) * 100;
$persentasePuluhanr = ($putaranTidakKeluar / $maxPuluhanr) * 100;
$persentaseDuaPuluhanr = ($DuapuluhanputaranTidakKeluar / $maxDuaPuluhanr) * 100;
// Mencari persentase terbesar
$persentaseTerbesar = max($persentaseSatuanr, $persentasePuluhanr, $persentaseDuaPuluhanr);
if ($persentaseTerbesar == $persentaseSatuanr) {$pasrol = $satuanBelumKeluar1;
$peluang = $peluang;}
if ($persentaseTerbesar == $persentasePuluhanr) {$pasrol = $puluhanBelumKeluar1;
$peluang = $peluang;}
if ($persentaseTerbesar == $persentaseDuaPuluhanr) {$pasrol = $DuapuluhanBelumKeluar1;
$peluang = $peluang;}
$totrugi1 = number_format($totrugi1,8);
// Menampilkan hasil
//echo "Nilai Satuan: $satputaranTidakKeluar <br>";
//echo "Nilai Puluhan: $putaranTidakKeluar <br>";
//echo "Nilai 2 Puluhan: $DuapuluhanputaranTidakKeluar <br><br>";
//echo "Persentase Satuan: " . round($persentaseSatuanr, 2) . "% (dari maksimal $maxSatuanr)<br>";
//echo "Persentase Puluhan: " . round($persentasePuluhanr, 2) . "% (dari maksimal $maxPuluhanr)<br>";
//echo "Persentase 2 Puluhan: " . round($persentaseDuaPuluhanr, 2) . "% (dari maksimal $maxDuaPuluhanr)<br><br>";
//echo "Persentase Terbesar: " . round($persentaseTerbesar, 2) . "% \n";
//echo$yellow."Prediksi  : ".$cyan1.$pasrol." \n";

// Cari satuan yang paling sering keluar dari $alldice
$hasil = satuanPalingSeringKeluar($alldice);
// Ambil nilai hasil
$duasatuanseringkeluar = $hasil['satuan'] * 2; // Satuan yang sering keluar
$duasatuanseringkeluar = $duasatuanseringkeluar + 1;
$jumlahkeluar = $hasil['frekuensi']; // Jumlah frekuensi keluar
// Tampilkan hasil
echo $gray."== Duasatuan yang paling sering keluar: " . $duasatuanseringkeluar ." | ".$jumlahkeluar." kali \n";
//echo "sering keluar = $duasatuanseringkeluar\n";
//echo "jumlah keluar = $jumlahkeluar\n";

// Menghitung frekuensi kemunculan setiap angka
$frekuensi = array_count_values($alldice);
// Mencari frekuensi tertinggi
$max_frekuensi = max($frekuensi);
// Menyaring angka-angka yang memiliki frekuensi tertinggi
$angka_tertinggi = array_keys($frekuensi, $max_frekuensi);
// Jika hanya ada satu angka dengan frekuensi tertinggi, ambil angka tersebut
if (count($angka_tertinggi) == 1) {
    $angka_tersering = $angka_tertinggi[0];
} else {
    // Jika lebih dari satu angka memiliki frekuensi yang sama, pilih yang paling baru muncul
    foreach (array_reverse($alldice) as $dice) {
        if (in_array($dice, $angka_tertinggi)) {
            $angka_tersering = $dice;
            break;
        }
    }
}

// Menampilkan hasil
echo $gray."===== Angka yang paling sering keluar: " . $angka_tersering ." | ".$max_frekuensi." kali \n";
//echo "Jumlah kemunculan: " . $max_frekuensi . " kali\n";

// Variabel untuk menyimpan status rumus yang sedang aktif
if (!isset($aktifRumus)) {
    // Inisialisasi dengan rumus1 (misalnya kita mulai dengan rumus1)
    $aktifRumus = 1;
}

// Cek kondisi untuk mengubah rumus jika $kalahxxx > $menangxxx
if ($menang > 0) {
    // Lakukan sesuatu
    if ($aktifRumus == 1) {
        $aktifRumus = 2;  // Beralih ke rumus2
    } else {
        $aktifRumus = 1;  // Beralih ke rumus1
    }
}

// Tampilkan informasi tentang rumus yang aktif
echo $hijau . "Saat ini kita gunakan rumus " . $aktifRumus . "\n";

// Terapkan rumus sesuai dengan rumus yang aktif
if ($aktifRumus == 1) {
    // rumus1
    $predictedCategory = "besar";  // Gunakan = untuk penugasan
    $botia = 25;
} elseif ($aktifRumus == 2) {
    // rumus2
    $predictedCategory = "kecil";  // Gunakan = untuk penugasan
    $botia = 75;
}

// Tampilkan nilai botia
echo "Nilai botia saat ini: " . $botia . " | ".$predictedCategory."\n";


//predikc📊📊📊

	
	
//echo$cyan1."BET pos : ".$kuning2.$pos."\n";
//👾👾👾
$balbackup = $bal;
echo$yellow."SETING  : ".$cyan1."CANC ".$putih2.$CHANCE.$cyan1." BG ".$putih2.$bagi0.$cyan1." CO ".$putih2.$coin.$cyan1." NCE ".$putih2.$nonce." | ".$cek."\n";
echo$cyan1."BET     : ".$putih2.$bet." ".$kuning.$totrugi1.$cyan1." BETMAX : ".$putih1.$betmax."\n";
if ($hsl == "win"){$hslrr = $hijau1.$hsl;}
if ($hsl == "loss"){$hslrr = $merah.$hsl;}
echo$cyan1."HASIL   : ".$putih2.$hslrr." ".$hijau1.$menang." ".$cyan1.$kalah." ".$hijau1.$menangmax." ".$cyan1.$kalahmax.$hijau1." BATAS BET ".$putih2.$btsbetx." ⚡\n";
//echo$cyan1."nonce   : ".$putih2.$nonce."\n";
//echo$cyan1."profit  : ".$putih2.$profit."\n";
if ($boster > 0){$kalibet = $kalibetboster;
$kbstr = $hijau1."BOSTER  : ".$boster." 🤩🤩🤩";}
if ($boster < 0){$kalibet = $bal / 100000000;
$kbstr = $merah."BOSTER  : ".$boster." 😎😎😎";}
echo$cyan1."roll    : ".$putih2.$rollh.$red." [ ".$yellow.$time123.$red." ] ".$kbstr." | ".$putih2.$makulang."\n";
echo$cyan1."bal     : ".$putih2.$bal.$cyan1." Payout : ".$kuning2.$payout.$cyan1." CHANCE : ".$kuning2.$CHANCE."\n";
$untungrugixxx = $bal - $tpxxx ;
$untungrugixxx = number_format($untungrugixxx,8);
if ($untungrugixxxmx > $untungrugixxx){
$untungrugixxxmx = $untungrugixxx;}
$untungrugixxxmx = number_format($untungrugixxxmx,8);
$untungrugi= $bal - $coinxx ;
$untungrugi = number_format($untungrugi,8);
if ($untungrugi > 0) {
$hslx = $hijau1."UNTUNG  : ".$untungrugi." 💎 ".$hijau1.$menangxxx." | ".$merah.$kalahxxx." | ".$abu.$totrugiamax." 🛑🛑🛑\n";}
if ($untungrugi < 0) {
$hslx = $merah."RUGI   :".$untungrugi." 💎 ".$hijau1.$menangxxx." | ".$merah.$kalahxxx." | ".$abu.$totrugiamax." 🛑🛑🛑\n";}
echo$hslx;
echo$cyan1."Profit  : ".$putih2.$untungrugixxx." | ".$ganda." 😡 | ".$maetiagel." 😁 SL ".$SL." 💰\n";
$untungrugibet = $untungrugibet + $profit;
$untungrugibet = number_format($untungrugibet,8);
if($untungrugibet < 0) {$untungrugibet = 0;}
$untungrugibet = number_format($untungrugibet,8);
echo$cyan1."untungrugibet  : ".$yellow.$untungrugibet." | ".$biru.$untungrugixxxmx." 🌈🚬🍒\n";


if ($hsl == 'win') {
if ($batasroll < $time123) {
system('mpv /storage/emulated/0/termux/dice/wolf/samsung.mp3');
echo$cyan1." ROLL HABIS  🚬🚬🚬☕☕☕ \n";
die();
}
$menang = $menang +1;
$bet = 0.00000001;
if ($untungrugixxx >= 0) {$bet = $bet0fix;
$bet0 = $bet0fix;
}
$kalah = 0;
$btssatputaranTidakKeluarmax = $btssatputaranTidakKeluarmax - 500;
if ($btssatputaranTidakKeluarmax < $satputaranTidakKeluar + 330){$btssatputaranTidakKeluarmax = $satputaranTidakKeluarx + 1;}
$totrugi1 = ($totrugi1 - $profit);
$menangxxx = $menangxxx + 1;
$peluang = 50;
$roll = $botia;
$roll = $rollh;
$roll = rand(1, 99);
$rollbackup = $roll;
$bet = $bet0fix;
}

if ($hsl == 'loss') {
$kalah = $kalah +1;
$satputaranTidakKeluarx = $satputaranTidakKeluar;
$menang = 0;
$totrugi1 = $totrugi1 + $bet;
$kalahxxx = $kalahxxx + 1;
$peluang = 50;
$roll = $botia;
$roll = $rollh1;
$roll = rand(1, 99);
$rollbackup = $roll;
$bet = $bet0fix;
}

if ($totrugi1 <= 0.00000001) {$totrugi1 = 0;}

//🖥️🖥️🖥️🛑🛑🛑♥️tetap

 if ($totrugiamax < $betmax + $totrugi1){$totrugiamax = $betmax + $totrugi1;
 $totrugiamax = number_format($totrugiamax,8);}
if ($menangmax < $menang){
$menangmax = $menang;}
if ($kalahmax < $kalah){
$kalahmax = $kalah;}

if ($ultixxx0 > $ultixxx0max){$ultixxx0max = $ultixxx0;}

$cek++;
if ($nonce != $cek && $cek > 30) {
    echo $merah . "Akses ditolak 😡😡😡 CURANG CEK NONCE " . $cek . " | " . $nonce . " \n";
    system('mpv /storage/emulated/0/termux/dice/wolf/monster.mp3');
    die();
}


 
 
echo$cyan1."ANGKA PASARAN   : ".$putih2.$puluhanSeringKeluar0.$cyan1." Ramalan : ".$yellow." 🎲🎲🎲 ".$puluhanSeringKeluar1." 🎲🎲🎲\n";
echo$cyan1."ANGKA LANGKA    : ".$putih2.$puluhanJarangKeluar0.$cyan1." Ramalan : ".$yellow." 🎲🎲🎲 ".$puluhanJarangKeluar1." 🎲🎲🎲\n";

echo$cyan1."P BELUM KEL   : ".$putih2.$puluhanBelumKeluar.$cyan1." Ram :".$yellow." 🎲 ".$puluhanBelumKeluar1." 🎲 ".$hijau2.$putaranTidakKeluar." 🎲 ".$yellow.$putaranTidakKeluarmax." 🚦".round($persentasePuluhanr, 2)." %\n";

echo$cyan1."SAT B KEL : ".$putih2.$satuanBelumKeluar.$cyan1." RL : ".$merah.$satuanBelumKeluar0.$yellow." | ".$satuanBelumKeluar1." | ".$hijau2.$satputaranTidakKeluar." | ".$yellow.$satputaranTidakKeluarmax." 🚦".round($persentaseSatuanr, 2)." %\n";

echo$cyan1."2PUL BELUM KEL : ".$putih2.$DuapuluhanBelumKeluar.$cyan1." Ram :".$yellow." 🎲 ".$DuapuluhanBelumKeluar1." 🎲 ".$hijau2.$DuapuluhanputaranTidakKeluar." 🎲 ".$yellow.$duaputaranTidakKeluarmax." 🚦".round($persentaseDuaPuluhanr, 2)." %\n";

 
if($roll == $puluhanJarangKeluar1){
echo$yellow."PASANG LANGKA  : ".$putih2.$puluhanJarangKeluar.$cyan1." Ramalan : ".$yellow." 🎲🎲🎲 ".$puluhanJarangKeluar1." 🎲🎲🎲\n";
}
if($roll == $puluhanSeringKeluar1){
echo$yellow."PASANG PASARAN : ".$putih2.$puluhanSeringKeluar.$cyan1." Ramalan : ".$yellow." 🎲🎲🎲 ".$puluhanSeringKeluar1." 🎲🎲🎲\n";
}
if($roll == $puluhanSeringKeluar1L){
echo$yellow."PASANG PASARANL : ".$putih2.$puluhanSeringKeluar0.$cyan1." Ramalan : ".$yellow." 🎲🎲🎲 ".$puluhanSeringKeluar1L." 🎲🎲🎲\n";
}
if($roll == $puluhanBelumKeluar1){
echo$yellow."PASANG BELUM K : ".$putih2.$puluhanBelumKeluar.$cyan1." Ramalan : ".$yellow." 🎲🎲🎲 ".$puluhanBelumKeluar1." 🎲🎲🎲\n";
}
    
 if ($kalah > 950){
system('mpv /storage/emulated/0/termux/dice/wolf/april_fools.m4a');
echo$white."saran :
Enter untuk lanjut
No untuk berhanti
PILIH : ".$yellow;
$xnx17x = trim(fgets(STDIN));
 if ($xnx17x == "yes"){$kalah = 490;
 }}
 
 $peluang = rand(10, 70);

//☢️☢️☢️☢️backup
$peluang0 = ((100 - $peluang) / 2);
$bet = number_format($bet,8);
$bet0 = number_format($bet0,8);
$totrugi1 = number_format($totrugi1,10);
$bet_value_second = $roll - $peluang0;
if ($bet_value_second < 0.02){$bet_value_second = 00.02;}
if ($bet_value_second > 99.97){$bet_value_second = 99.97;}
$bet_value_first = $bet_value_second - $peluang;
if ($bet_value_first < 0){$bet_value_first = 00.00;}
if ($bet_value_first > 99.95){$bet_value_first = 99.95;}
$bet_value_third = $roll + $peluang0;
if ($bet_value_third > 99.98){$bet_value_third = 99.98;}
if ($bet_value_third < 00.03){$bet_value_third = 00.03;}
$bet_value_fourth = $bet_value_third + $peluang;
if ($bet_value_fourth > 100){$bet_value_fourth = 100;}
if ($bet_value_fourth < 00.05){$bet_value_fourth = 00.05;}
$CHANCE = (($bet_value_second - $bet_value_first) + ($bet_value_fourth - $bet_value_third) - 0.02);
$payout = 99 / $CHANCE;
$payout = number_format($payout,4);
$rollbackup = $roll;

if ($btssatputaranTidakKeluarmax == $satputaranTidakKeluar) { }


if ($menang <= 1) {
$untungrugibet = $bet0fix * 2;}
if ($kalah <= 1) {
$totrugi1 = $bet0fix;}

if ($menang >= 1) {
$makulang = $makulang + 1;
$bet = $untungrugibet;
}
if ($menang >= 2) {
$makulang = $makulang + 1;
$bet = $untungrugibet;
}


if ($kalah >= 1) {
$makulang = $makulang + 1;
$bet = $totrugi1 / ($payout - 1);
$bet = $bet0fix;
}
if ($kalah >= 2) {
$makulang = $makulang + 1;
$bet = $totrugi1 / ($payout - 1);
$bet = $bet0fix;
}


$btsbetx = ($bet0fix * $bagi0) / 0.02;
$btsbetx = number_format($btsbetx,8);
if ($bet > $btsbetx){$bet = $btsbetx;}


if ($betmax < $bet){$betmax = $bet;
$betmax = number_format($betmax,8);}

if ($bal - $bet < 0) {echo$cyan1." KALAH BOS 🤣🤣🤣 \n";
system('mpv /storage/emulated/0/termux/dice/wolf/monster.mp3');
die();}

///🎲🎲🍒🍒🍒👍👍👍👍👍👍
if ($kalah == 160){$ganda++;}
if ($kalah >= 160){$bet = $bet0fix;
}

if ($menang == 160){$maetiagel++;}
if ($menang >= 160){$bet = $bet0fix;
$untungrugibet = $bet0fix;
$boster = 12;
$menang = 0;
}

echo$cyan1."ROLL  Bet : ".$putih2.$roll." | ".$cyan1."weger : ".$putih2.$wegerbet." | ".$cyan1."BTSsat : ".$putih2.$btssatputaranTidakKeluarmax."\n";

$rollbackup = $roll;

//🇮🇩🇮🇩🇮🇩
if ($untungrugixxx > ($bet0fix / 2)){
$boster++;
$menang = 0;
$kalah = 0;
$untungrugixxx = 0;
$untungrugibet = $bet0fix;
$totrugi1 = $bet0fix;
$tpxxx = $bal;
$bet0 = ($bal / $bagi0);
$bet0fix = $bet0;
$bet = $bet0fix;
$SL = $bal / 1.2;
$SL = -$SL;
$SL = number_format($SL,8);
}


//🇮🇩🇮🇩🇮🇩
if ($boster > 70000){
$ultimax = $ultimax + 1;
$boster = 1;
echo$cyan1." GANTI SED 🤣🤣🤣 \n";
///system('mpv /storage/emulated/0/termux/dice/wolf/Coin.mp3');
seddulang:
$urlxx = "https://wolfbet.com/api/v1/game/seed/refresh";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "authorization:".$authorization;
$gett= Get($urlxx, $header);
echo$cyan1."SEDD  : ".$kuning2.$gett."\n";
$urlxx = "https://wolfbet.com/api/v1/user/provably-fair";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "authorization:".$authorization;
$gett= Get($urlxx, $header);
$cek0 = explode('server_seed_hashed":"',$gett)[1];
$ceky = explode('"',$cek0)[0];
$cek0x = explode('last_nonce":',$gett)[1];
$cekyx = explode('}',$cek0x)[0];
echo$cyan1."GEDD  : ".$kuning2.$gett."\n";
echo$cyan1."HASH  : ".$kuning2.$ceky."\n";
echo$cyan1."NONCE  : ".$kuning2.$cekyx."\n";
$cek = 0;
if ($cekyx != 0) {
timer();
goto seddulang;
}

$linhhk = "https://wolfbet.com/api/v1/user/seed/refresh";
 $client_seed = generateRandomString2($length = 16);
 $data = '{"client_seed":"'.$client_seed.'"}';
 echo $cyan1."SEDD  : ".$kuning2.$data."\n";
    $header = array(
        "user-agent:".$useragent,
        "authorization:".$authorization,
        "content-type: application/json"
    );
    $gettx = Post($linhhk, $header, $data);
    echo $cyan1."SEDD  : ".$kuning2.$gettx."\n";
    $cek = 0;
}
//🇮🇩🇮🇩🇮🇩

$perscon = $bet0fix - $bet0fix0;
$perscon = number_format($perscon,8);
$bet0fix = number_format($bet0fix,8);

echo$cyan1."MINING : ".$putih2.$ultimax." | ".$cyan1."POWER : ".$putih2.$bet0fix." | ".$cyan1."Hsret : ".$putih2.$perscon." ⚡\n";

if ($ultimax > 400000) {echo$cyan1." MENANG BOS GANTI SEED 🤣🤣🤣 \n";
system('mpv /storage/emulated/0/termux/dice/wolf/samsung.mp3');
die();}

if ($menang == 41) {echo$cyan1." MENANG BOS untung 🌈🌈🌈\n";
system('mpv /storage/emulated/0/termux/dice/wolf/samsung.mp3');
die();}

if ($untungrugixxx < $SL) {echo$cyan1." KALAH BOS UNTUNG RUGI LEDIH DARI BATAS 🤣🤣🤣 \n";
system('mpv /storage/emulated/0/termux/dice/wolf/monster.mp3');
die();}

if ($bal < 0.000001) {echo$cyan1." KALAH BOS LEBIH KECIL DARI SL 🤣🤣🤣 \n";
system('mpv /storage/emulated/0/termux/dice/wolf/monster.mp3');
die();}

if ($nonce > 5100000) {echo$cyan1." GANTI SED 🤣🤣🤣 \n";
system('mpv /storage/emulated/0/termux/dice/wolf/Coin.mp3');
$boster = 3000;
}



echo$gray."🤣🤣=================================================🤣🤣\n";

}



$coinxx = $tpxxx;
// Nama file tempat menyimpan data
$file = 'data.php';
// Isi file PHP dengan kedua variabel
$content = "<?php\n";
$content .= "\$tpxxx = $tpxxx;\n";
$content .= "\$coinxx = $coinxx;\n";


// Simpan ke file
if (file_put_contents($file, $content)) {
    echo "Data berhasil disimpan ke $file";
} else {
    echo "Gagal menyimpan data.";
}

$useragent = "Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36";
$token = getenv("joko"); // Token GitHub dari environment variables
$url = "https://api.github.com/repos/17pendi/coba/contents/data.php"; // Endpoint API untuk file data.php
$branch = "main"; // Branch yang akan diperbarui

if (!$token) {
    echo "Error: Token tidak ditemukan dalam environment variables.\n";
    exit;
}

// Baca isi file data.php
$local_file_path = "data.php";
if (!file_exists($local_file_path)) {
    echo "Error: File $local_file_path tidak ditemukan.\n";
    exit;
}

$isi = file_get_contents($local_file_path);
if ($isi === false) {
    echo "Error: Gagal membaca file $local_file_path.\n";
    exit;
}

// Encode konten baru dalam format base64
$new_content = base64_encode($isi);

// Mendapatkan SHA file yang ada dari GitHub
$get_header = [
    "User-Agent: " . $useragent,
    "Authorization: Bearer " . $token,
    "Content-Type: application/json"
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $get_header);
$response = curl_exec($ch);
curl_close($ch);

$file_info = json_decode($response, true);
if (isset($file_info['sha'])) {
    $sha = $file_info['sha'];
} else {
    echo "Error: File data.php tidak ditemukan di repositori atau gagal mendapatkan SHA.\n";
    exit;
}

// Data untuk update file
$data = json_encode([
    "message" => "Update file data.php",
    "content" => $new_content,
    "sha" => $sha,
    "branch" => $branch
]);

// Header untuk permintaan PUT
$put_header = [
    "User-Agent: " . $useragent,
    "Authorization: Bearer " . $token,
    "Content-Type: application/json"
];

// Permintaan PUT untuk memperbarui file
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $put_header);
$response = curl_exec($ch);
curl_close($ch);

//🇮🇩🇮🇩🇮🇩

$data = '{"bot":"helo word"}';
$url = getenv("webhok");
$header = [
    "user-agent: ".$useragent,
    "Authorization: " . $token,
    "X-Requested-With: XMLHttpRequest",
    "Content-Type: application/json"
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
}
curl_close($ch);
echo $response;



