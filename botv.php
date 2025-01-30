<?php
$cyan1 = "\033[36m";
$hijau2 = "\033[32m";
$kuning2 = "\033[33m";
$putih2 = "\033[37m";
$abu1 = "\033[90m";
$yellow = "\033[93m";
$merah2 = "\033[31m";
$blue = "\e[1;34m";
$useragent = "Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36";
// Kunci rahasia untuk dekripsi (harus sama dengan kunci yang digunakan untuk enkripsi)
$key = getenv("keydecode");
include ('cfg.php');
// Fungsi untuk mendekripsi data
function decrypt_data($encrypted_data, $key) {
    $method = 'aes-256-cbc';  // Algoritma enkripsi yang digunakan
    // Decode data dari base64
    $data = base64_decode($encrypted_data);
    // Pisahkan IV dan data terenkripsi
    $iv_length = openssl_cipher_iv_length($method);
    $iv = substr($data, 0, $iv_length);  // Ambil IV dari data
    $encrypted_data = substr($data, $iv_length);  // Ambil data terenkripsi
    // Dekripsi data dan kembalikan ke format aslinya
    $decrypted_data = openssl_decrypt($encrypted_data, $method, $key, 0, $iv);
    // Mengembalikan data dalam format array
    return json_decode($decrypted_data, true);
}
// Membaca data terenkripsi dari file
$file = 'kuncix.txt';
if (file_exists($file)) {
    $encrypted_dataxx = file_get_contents($file); // Membaca isi file
} else {
    die("File $file tidak ditemukan.\n");
}

// Mendekripsi data
$decrypted_dataxx = decrypt_data($encrypted_dataxx, $key);
$dataxx = $decrypted_dataxx;



//"https://firefaucet.win/ref/774689";
//"https://firefaucet.win/internal-api/payout/";
// Definisikan nilai minimum dan maksimum akun
$min = 1;
$max = 37;

goto loncat;

// Definisi warna teks untuk terminal (opsional)
$cyan1 = "\033[36m";
$hijau2 = "\033[32m";
$kuning2 = "\033[33m";
$putih2 = "\033[37m";
$abu1 = "\033[90m";
$yellow = "\033[93m";
$merah2 = "\033[31m";
$blue = "\e[1;34m";


top:
// Iterasi akun
for ($sd1 = $min; $sd1 <= $max; $sd1++) {
    $seddx = $sd1;

    // Ambil data akun dari $dataxx
    $emil = $dataxx[$seddx]['email'];
    $pwp = $dataxx[$seddx]['password'];
    $cookie = $dataxx[$seddx]['cookie'];

    // Header untuk permintaan
    $header = [
        "user-agent: ".$useragent,
        "cookie: " . $cookie,
        "referer: https://firefaucet.win/"
    ];

    // Lakukan permintaan awal untuk mendapatkan csrf_token
    $url = "https://firefaucet.win/";
    $d = Get($url, $header, $emil);

    // Ambil csrf_token dari hasil permintaan awal
    $csrf0 = explode('<input type="hidden" name="csrf_token" value="', $d)[1];
    $csrf = explode('">', $csrf0)[0];

    // Ambil data tambahan lainnya
    $lev0 = explode('Progress to <b style="color:#2ed573">Level', $d)[1];
    $lev = explode('</b>', $lev0)[0];

    $levx0 = explode('<a href="/levels" class="btn waves-effect waves-light', $d)[1];
    $levx = explode('</a>', $levx0)[0];

    $nama0 = explode('<div class="username-text"> ', $d)[1];
    $nama = explode(' <a', $nama0)[0];
    $e0 = explode('10px"> <b>', $d)[1];
    $e = explode('</b>', $e0)[0];
    $xp0 = explode('activity-next-level"> <b style="color:#90b8f8">',$d)[1];
$xp = explode('</b>',$xp0)[0];
    
     // Lakukan permintaan tambahan untuk mendapatkan data balance
    $data = 'csrf_token=' . $csrf;
    $link = "https://firefaucet.win/api/additional-details-dashboard/?sidebar=true";
    $d = Post($link, $header, $data, $emil);

    // Ambil balance dari hasil permintaan
    $bal0 = explode('usd_balance":"$', $d)[1];
    $bal = explode('"', $bal0)[0];

    // Cetak informasi akun
    echo $putih2 . "$hijau2 B-NOL Message 👇\n";
    echo $cyan1 . "Akun ke-$seddx:\n";
    echo $cyan1 . "Nama        : $hijau2$nama\n";
    echo $cyan1 . "Email       : $yellow$emil\n";
    echo $cyan1 . "Level       : $hijau2$lev | $xp\n";
    echo $cyan1 . "Password    : $yellow$pwp\n";
    echo $cyan1 . "Balance     : $hijau2$bal USD\n";
    echo $cyan1 . "Energy      : $hijau2$e\n";

    // Logika tambahan untuk Claim Rewards atau View Rewards
    if (preg_match('/(Claim Rewards|View Rewards)/i', $levx, $matches)) {
        $result = $matches[1]; // Ambil hasil yang cocok
        echo $cyan1 . "Your NEX LVL  : " . $hijau2 . $result . " 🤖🤖🤖\n";

        $ddd = $matches[1];

        if ($ddd == "Claim Rewards") {
            $lev = $lev - 1;
            $url = "https://firefaucet.win/levels?claim=" . $lev;
            echo $cyan1 . "Your URL   : " . $hijau2 . $url . "\n";

            // Update header dan kirim request untuk klaim
            $header[] = "referer: https://firefaucet.win/levels";
            $d = Get($url, $header, $emil);
            echo $cyan1 . "Claim response: " . $d . "\n";
        }
    } else {
        echo "Tidak ditemukan teks yang sesuai\n";
    }

    echo $merah2 . "💰💰=================================================💰💰\n";
}


loncat:
//exit();
for ($time123 = 2; $time123 >= 0; $time123--) {
$totwaktu = 0;
$start_time = microtime(true);
echo$blue." 🤣🤣=================================================🤣🤣\n";
for ($seddx = $min; $seddx <= $max; $seddx++){
    // Ambil data akun dari $dataxx
    $emil = $dataxx[$seddx]['email'];
    $pwp = $dataxx[$seddx]['password'];
    $cookie = $dataxx[$seddx]['cookie'];
ulangxx:
$url = "https://firefaucet.win/internal-api/payout/";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$header[] = "referer: https://firefaucet.win/start";
$header[] = "x-requested-with: XMLHttpRequest";

$dpos = Get($url, $header, $emil);
// Memisahkan bagian JSON dan angka
$dat0 = substr($dpos, 0, -1); // Menghapus satu karakter terakhir
$dat1 = $dat0 . '}'; // Tambahkan '}' untuk mengembalikan format JSON
echo$cyan1."Your Akun     : ".$abu1.$seddx." 🚀🚀🚀\n";
//echo$cyan1."Your Mail    : ".$yellow.$emil."\n";
//echo$cyan1."Your PWP     : ".$yellow.$pwp."\n";
$response = json_decode($dpos, true);
// Menentukan warna berdasarkan status "success"
if (isset($response['success']) && $response['success'] === true) {
    $color = "\033[0;32m"; // Warna hijau jika success = true
} else {
    $color = "\033[0;31m"; // Warna merah jika success = false
}
// Tampilkan pesan dengan warna yang sesuai
echo $color . "Status: " . ($response['success'] ? "Success" : "Failed") . "\n";
// Reset warna setelah output
echo "\033[0m";
echo$cyan1."Your Data    : ".$hijau2.$dat1."\n";
if ($dat1 == "null") { 
echo$cyan1."🚧🚧🚧 ERORR CEK SINYAL 🚧🚧🚧 \n";
sleep(7);
timeconfirm($max);
goto ulangxx;
}
echo$abu1." 💰💰=================================================💰💰\n";

}
if ($time123 == 0){goto losdol;}

// Waktu selesai
    $end_time = microtime(true);
    // Menambahkan waktu yang dihabiskan pada tiap iterasi
    $totwaktu += $end_time - $start_time;

$wts = 62 - $totwaktu ;
$wts = number_format($wts,0);
if ($wts <= 0){$wts = 1;}
echo$cyan1."waktu = ".$totwaktu." | ".$wts." ☕🚬\n";
echo$cyan1."🚧🚧🚧 SISAH TOKEN ".$time123." 🚧🚧🚧 \n";
sleep($wts);

}

losdol:
///🇮🇩🇮🇩🇮🇩strat up joko
$token = getenv("JOKO");
$url = getenv("ULRPENDI");
$data = '{"ref": "main"}';
if (!$token) {
    echo "Error: Token atau URL tidak ditemukan dalam environment variables.\n";
    exit;
}

$header = [
    "user-agent: ".$useragent,
    "Authorization: " . $token,
    "X-Requested-With: XMLHttpRequest",
    "Content-Type: application/json"
];

$pos = Post($url, $header, $data, $emil);
echo $cyan1 . "REQ        : $hijau2$pos\n";
echo $merah2 . "💰💰=================================================💰💰\n";

exit();




// Fungsi Get
function Get($url, $header, $emil) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POST, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

// Fungsi Post
function Post($url, $header, $data, $emil) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function timeconfirm($max){
$red = "\e[1;31m";
$yellow = "\e[1;33m";
$gray = "\e[1;30m";
$dt = 59 / $max;
$dt = number_format($dt,0);
for($x=0;$x<$dt;$x++){echo "\r \r";
echo$gray." Waiting for Loading.... ".$red."[".$yellow.$x.$red."] ".$gray."seconds ☕🚬";
echo "\r \r";
sleep(1);}
}
