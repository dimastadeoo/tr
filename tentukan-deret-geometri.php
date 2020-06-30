<?php
function tentukan_deret_geometri($arr) {
// kode di sini
    
    echo "Deret ("; 
	foreach ($arr as $value) {
        # code...
      
		echo "$value, ";
	}	
    $selisih = $arr[1] / $arr[0];
    for ($i=0; $i < count($arr)-1; $i++) { 
        # code...
		
		if(count($arr)<2){
        return ") Apakah Geometri = True<br>";
		}
        else if($selisih !== ($arr[$i+1] / $arr[$i])){
            return ") Apakah Geometri = False<br>";
        }
    }
    return ") Apakah Geometri = True<br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>