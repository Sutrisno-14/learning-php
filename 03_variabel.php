<?php 
    // variabel -> sebuah tempat untuk menyimpan value

    $nama = "Sutrisno";
    $age = 23;

    echo "my name is $nama and i am $age years old\n";

    //constant 
    // variabel di php -> bersifat mutable-> bisa dirubah
    //Jika kita ingin membuat variable yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan di PHP
    /*
            Sebagai gantinya, terdapat fitur yang namanya constant
    Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
    Untuk membuat constant kita bisa menggunakan function define()
    Best practice pembuatan nama constant adalah menggunakan UPPER_CASE
    */

    define("Author", "Sutrisno");
    define("APP_VERSION", 12.0);
        echo Author,"\n";
        echo APP_VERSION,"\n";
    $nama = "Ridho";
    echo $nama;
    // define("Author","ridho");
    echo "============================================\n\n";
     //Data NULL -> variabel tanpa nilai. NULL case insensitive

     $nama = NULL;
     $age = null;
     echo "nama null : $nama\n";
     echo "umur null : $age\n";
 
     // mengecek apakah data null atau tidak
     // dengan function is_null($variabel) -> kalau null-> true, ada isi-> false
     $name = "Dimas";
     $name = NULL;
     $umur = 23;
     $cekNul = is_null($name);
     var_dump($cekNul);
     $cekNul = is_null($umur);
     var_dump($cekNul);
     echo "============================================\n\n";
    // menghapus varibael -> function unset($variabel).
    //Namun hati-hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut, 
    //bahkan function is_null($variable) pun akan menjadi error jika mengakses variable tersebut.

    echo "contoh unset\n";
    $value = "nama";
    echo "sebelum dihapus $value\n";
    unset($value);
    echo "sesudah di hapus $value\n";
    var_dump(isset($value));
    // function isset($variabel)-> untuk mengecek apakah suatu variabel ada dan nilainya tidak null
    // kalau true berarti ada nilainya, seblaiknya / false -> tidak ada nilai nya
    $value = "Sutrisno";
    echo "ini function isset : $value\n";
    var_dump(isset($value));
?>