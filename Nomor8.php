<?php
function cariJurusan(...$jurusan) {
   
    $arrayUnik = array_unique($jurusan);
    
   
    return $arrayUnik;
    // mengembalikan arrayUnik
}


$result = cariJurusan("PPLG", "HTL", "KLN", "PMN", "PPLG", "HTL");


print_r($result); 
?>