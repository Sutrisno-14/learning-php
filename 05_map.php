<?php 
      echo "\n\n===========Array sebagai map==============\n\n";
      echo <<<map
         - Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map,
          yaitu asosiasi antara key dan value
         - Secara default Array akan menggunakan index (number) sebagai key dan value nya 
          kita bisa bebas memasukkan data ke dalam Array
         - amun jika kita ingin, kita juga bisa mengubah index nya tidak harus menggunakan number, 
         bisa gunakan tipe data lain, seperti string misal nya
      map;
  
      $ridho = array (
          "name" => "Ridho",
          "address" => "Cilegon",
          "age" => 23
      );
      $trisno = [
          "name" => "sutrisno",
          "address" => "Belitang",
          "age" => 23,
          "hoby" => [
              "olahraga" => "badminton",
              "traveling" => "nature"
          ]
      ];
  
      echo "\n\nmy name is ".$ridho["name"]. " and I am ". $ridho["age"]. " years old\n";
      echo "my name is ".$trisno["name"]. " and I am ". $trisno["age"]. " years old and my hobby is ". $trisno["hoby"]."\n\n";
?>