<?php
class Produk {
    public string $kode;
    public string $nama;
    public  int $harga;
    public int $stock;

    //constant
    public const PAJAK = 0.11;

}

$produk = new Produk();
$produk->kode = 'F0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak 
$pajak = Produk::PAJAK * 100; //115
$jumlahpajak = $produk->harga * Produk::PAJAK;

//total
$total = $produk->harga + $jumlahpajak;

//hasil 
echo "Produk: ". $produk->nama . "<br>";
echo "Produk: ". $produk->harga . "<br>";
echo "Produk: ". $produk->stok . "<br>";
echo "Produk: ". $pajak . "<br>";
echo "<br>";
echo "Total harga setelah pajak Rp." . $total;


?>

