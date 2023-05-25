<?php
class Hero
{
    /**
    * access modifier oop pada php ada 3;
    * 1. public
    * 2. private
    * 3.protected
    */

// attribut / property
    public $nama ;
    public $health ;
    public $damage ;
    public $level = 1;

    // contruct adalah method yg jalan otomatis saat object dibuat 
    public function __construct($nama, $health, $damage){
            $this->nama = $nama;
            $this->health = $health;
            $this->damage = $damage;
    }

    // method
    public function getInfo()
    {
        echo "<hr>nama: " . $this->nama;
        echo "<br>HP: " . $this->health;
        echo "<br>damage: " . $this->damage;
        echo "<br>level: " . $this->level;
    }

    // method untuk naik 1 level
    public function levelUp(){
        $this->level = $this->level + 1;
    }

    // method untuk menyerang: kurangi hp target berdasarkan damage dari penyerang
    public function attack($target){
        /**
         * lagoritma;
         * 1.kurangi hp target berdasarkan damage dari penyerang
         */
        $target->health = $target->health - $this->damage;
    }
}

//membuat object / instansiasi
$hero1 = new Hero("alucard",3200,250);
$hero2 = new Hero("franco",5000,50);

$hero1->levelUp();

$hero1->attack($hero2);

// echo "nama: " ,  /* 
$hero1->getInfo();
$hero2->getInfo();