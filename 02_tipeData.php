<?php 
    // Jenis tipe data
    /*
        - tipe data number -> tipe data berupa angka. ada 2 tipe data number :
                - int (integer) -> Bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2)
                - float -> Bilangan pecahan
        - tipe data boolean -> Tipe data dengan nilai true atau false
        - tipe data string -> TIpe data representasi dari teks
        
        Di PHP kita bisa menambahkan _ (garis bawah) di angka, ini hanya untuk agar mudah dibaca, 
        saat dijalankan, _ (garis bawah) tersebut akan di ignore Untuk angka negatif, kita bisa 
        menggunakan tanda - (minus) di depan angka

    */

    # Fungsi var_dump pada PHP yakni digunakan untuk mencetak output pada browser sehingga mengetahui 
    #informasi pada suatu nilai variabel,

    //integer
    echo "desimal :";
    var_dump(12345);
    echo "Octal :";
    var_dump(01234);
    echo "Hexadesimal :";
    var_dump(0x1A);
    echo "Binariy :";
    var_dump(011111);
    echo "Underscore number :";
    var_dump(1_2_3_4_5);

    //Float
    echo "=============\n";
    echo "Floating point :";
    var_dump(1.234);
    echo "Floating point dengan  E notasion plus:";
    var_dump(1.2e3);

    // string
    echo "nama kamu siapa\n";
    /*
        multi line string
        Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan itu sebenarnya kita bisa menggunakan \n sebagai ENTER
Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc
    */
    echo <<<sutrisno
        "NAREDOC" -> FITUR untuk membuat string panjang. ini adalah contoh dari string yang sangat panjang,
        dan juga nggak perlu mengetik enter secara manual
        , bisa "juga quote gini lo".\n
    sutrisno;
    echo <<<trisno
            nowdoc->Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki
             kemampuan parsing seperti di Heredoc atau Double Quote. Masalah parsing akan kita bahas 
             di materi Manipulasi String. "ini gak bisa\n"
    trisno;

?>