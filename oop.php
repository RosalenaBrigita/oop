<?php
    class product {
        public $name, $price, $discount, $total;

        function getPrice() {
            return $this->price;
        }
        function setPrice($price){
            $this->price=$price;
        }
        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        function getDiscount(){
            return $this->discount;
        }
        function setDiscount($discount){
            $this->discount = $discount;
        }
        function total() {
            $price = $this->price;
            $discount = $this->discount;
            $total=($discount/100) *$price;
            
            return $price - $total;
        }

    }
  
    class CDMusic extends product {
        public $artist;
        public $genre;
        
        function __construct($name="nama", $price="harga", $discount="diskon") {}

        function getArtist() {
            return $this->artist;
        }
        function setArtist($artist) {
            $this->artist = $artist;
        }
        function getGenre() {
            return $this->genre;
        }
        function setGenre($genre) {
            $this->genre = $genre;
        }
        function total() {
            $price = $this->price;
            $discount = $this->discount;
            $additional = ((10/100) * $price);
            $discount=($discount/100) *$price;
            
            return $price + $additional - $discount;
        }
    }
  
    class CDRack extends product {
        public $capacity;
        public $model;
        
        function getCapacity() {
            return $this->capacity;
        }
        function setCapacity($capacity) {
            $this->capacity = $capacity;
        }
        function getModel() {
            return $this->model;
        }
        function setModel($model) {
            $this->model = $model;
        }
        function total() {
            $price = $this->price;
            $additional = ((15/100) * $this->price);
            
            return $price + $additional;
        }
    }

    
    $beli = new product();
    $beli_cdm = new CDMusic();
    $beli_cdr = new CDRack();

    $beli->setName("Photo Card");
    $beli->setPrice(200000);
    $beli->setDiscount(10);

    $beli_cdm->setName("The New Chapter: TEMPTATION");
    $beli_cdm->setArtist("Tomorrow by Together");
    $beli_cdm->setGenre("K-Pop");
    $beli_cdm->setDiscount(5);
    $beli_cdm->setPrice(300000);

    $beli_cdr->setName("Way Basic");
    $beli_cdr->setCapacity("40 CDs");
    $beli_cdr->setModel("Vintage Vinyl");
    $beli_cdr->setDiscount(0);
    $beli_cdr->setPrice(500000);
    
    echo "<table border=3px cellpadding=30px > <td>";
    echo "<big><strong><center><u>PURCHASED ITEMS</u></center></strong></big><br>";

    echo "<i>PRODUCT</i><br>";
    echo "Nama Product &ensp;: " . $beli->getName() . "<br>";
    echo "Harga Product &ensp;: Rp. " . $beli->getPrice() . ",- <br>";
    echo "Diskon Product : Rp. " . $beli->getDiscount() . "% <br>";
    echo "Total Harga &emsp;&ensp;: Rp. " . $beli->total() . ",- (inc. diskon)<br>";
    echo "<hr size=3px noshade>";

    
    echo "<i>CDMUSIC</i><br>";
    echo "Nama&emsp;&emsp;&emsp;: " . $beli_cdm->getName() . "<br>";
    echo "Artis &emsp;&emsp;&emsp; : " . $beli_cdm->getArtist() . "<br>";
    echo "Genre &emsp;&emsp;&ensp; : " . $beli_cdm->getGenre() . "<br>";
    echo "Harga &emsp;&emsp;&ensp; : Rp. " . $beli_cdm->getPrice() . ",- <br>";
    echo "Diskon &emsp;&emsp; : " . $beli_cdm->getDiscount() . "%<br>";
    echo "Total Harga &nbsp; : Rp." . $beli_cdm->total() . ",- (inc. pajak 10%, diskon)<br>";
    echo "<hr size=3px noshade>";

    
    echo "<i>CDRACK</i><br>";
    echo "Nama&emsp;&emsp;&emsp;&nbsp;: " . $beli_cdr->getName() . "<br>";
    echo "Kapasitas &emsp;&ensp;: " . $beli_cdr->getCapacity() . "<br>";
    echo "Model &emsp;&emsp;&ensp; : " . $beli_cdr->getModel() . "<br>";
    echo "Harga &emsp;&emsp;&ensp;&ensp;: Rp. " . $beli_cdr->getPrice() . ",- <br>";
    echo "Diskon &emsp;&emsp;&ensp;: " . $beli_cdr->getDiscount() . "%<br>";
    echo "Total Harga &ensp;&nbsp;: Rp." . $beli_cdr->total() . ",- (inc. pajak 15%, diskon) <br>";

    echo "</td></table>";
?>