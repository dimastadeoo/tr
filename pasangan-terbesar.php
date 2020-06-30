<?php
function pasangan_terbesar($angka){
// kode di sini
    
    //convert to string
    $angka = "$angka";
    $angkaPertama = 0;
    $angkaKedua = 0;
    for ($i=0; $i < strlen($angka); $i++) { 
        # code...
        if ($angka[$i] > $angkaPertama){
            $angkaPertama = $angka[$i];
            $angkaKedua = $angka[$i+1];
        
        }
    }
    $hasil = "$angkaPertama"."$angkaKedua";
    return "Pasangan terbesar ($angka) => " . ($hasil) . "<br>";

}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>