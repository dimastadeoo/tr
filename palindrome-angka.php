<?php

function is_palindrome($num){
    $numString = "$num";
    $len = strlen($numString);
        for ($i=0; $i < $len/2; $i++) { 
            # code...
            if($numString[$i] != $numString[$len-$i-1]){
                return false;
            }
        }
        return true;
}

function palindrome_angka($angka) {
	// tulis kode di sini
	
	$angka1 = $angka;
    while(!is_palindrome($angka1)){
        $angka1++;
    }
	
	if ($angka == $angka1) {
				echo "palindrome(".$angka.") adalah palindrome, palindrome selanjutnya => $angka1";
				echo "<br>";
			}else {
				echo "palindrome(".$angka.") bukan palindrome, palindrome selanjutnya => $angka1";
				echo "<br>";
			}
		}
    

echo "Output: <br>";
// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>