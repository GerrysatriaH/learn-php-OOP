<?php
    //Class
    class Produk{
        public $judul = "judul",
               $penulis = "penulis",
               $penerbit = "penerbit",
               $harga = 0;

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
    }

//Object
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// var_dump($produk2->judul);

// echo "Komik : $produk3->judul, $produk3->penulis";
// echo "<br>";
// echo $produk3->getLabel();

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "komik : ".$produk3->getLabel();
echo "<br>";
echo "Game : ".$produk4->getLabel();