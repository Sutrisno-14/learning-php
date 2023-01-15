<?php 
    //array -> sebuah tipe data yang berisikan kosong atau 
    //banyak data dengan jenis data yang sama atau berbeda-beda
    //array di php-> panjang nya dinamis-> bisa menambah data sebanyak"nya di array, tidak dibatasi
    
    $value = array(1,2,3,4,5);
    var_dump($value);
    $name = ["Sutrisno", "Ridho", "Dimas"];
    var_dump($name);
    $bebas = ["kamu","siapa",1,3,4,"ya",true];
    echo "ini isi data array beda jenis data : \n\n";
    var_dump($bebas);

    //operasi di array
    /*
        $array[index] -> Mengakses data di array pada nomor index
        $array[index] = value -> Mengubah data di array pada nomor index dengan value baru
        $array[] = value -> Menambah data di array pada posisi paling belakang
        unset($array[index]) -> Menghapus data di array, index otomatis hilang dari array
        count($array) -> Mengambil total data di array
    */
    echo "operasi array di php :\n";
    $test = [1 , 3 , 4 , 7];
    var_dump($test);
    //ubah index 2 nilai 4 jadi nilai 5
    $test[2]= 5;
    var_dump($test);
    $test[] = 9;
    $test[] = 12;
    var_dump($test);
    echo "mengambil total data array test :\n";
    var_dump(count($test));
    echo "menghapus data di aray dengan index[3]\n";
   unset($test[3]);
   var_dump($test);
?>