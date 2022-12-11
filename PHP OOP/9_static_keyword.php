<?php
    class ContohStatic{
        public static $angka = 1;

        public static function halo(){
            return "Halo ". self::$angka++. " kali. <br> <br>";
        }
    }

    echo ContohStatic::$angka;
    echo "<br>";
    echo ContohStatic::halo();
    echo "<hr>";
    echo ContohStatic::halo();

    class ContohObject{
        public static $angka = 1;

        public function halo(){
            return "Halo ". self::$angka++. " kali. <br>";
        }
    }

    $obj = new ContohObject();
    echo $obj->halo();
    echo $obj->halo();
    echo $obj->halo();

    echo "<hr>";

    $obj1 = new ContohObject();
    echo $obj1->halo();
    echo $obj1->halo();
    echo $obj1->halo();