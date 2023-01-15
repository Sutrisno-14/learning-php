function test() {
    var a = 30;
    var b = 2;

    console.log("nilai awal a =", a);
    console.log("nilai awal b = ", b)

    //code
    //gimana caranya supaya nilai a = b dan b = a
    // tanpa menambah variabel baru

    //algoritma
    // buat dulu gimana supaya nilai b itu = a
    a = a - b  // a = 1 - 2 = -1 atau a -= b
    b = b + a  // untuk dapat b = 1/a , maka b = b + a => b = 2 + -1 = 1  atau b+= a
    // sekrang gimana supaya a = nilai dari b, ingat b sekarang = 1 
    //jadi a = b -a => a = 1 - -1 => 2
    // ini akan menjadi dinamis, misal angka di ubah maka akan tetap tertukar/sesuai fungsi nya
    a = b - a   

    console.log("nilai akhir a = ", a);
    console.log("nilai akhir b =", b);
}
test()