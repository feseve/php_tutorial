<?php
    require_once ('menu.php');

    class Drink extends Menu{
        private $type;
        public function __construct($name, $price, $image, $type) {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->type = $type;
            //インスタンスが生成されるたびにcountを増やす(selfはMenuクラスのこと)
            self::$count++;
        }

        public function getType(){
            return $this->type;
        }

        public function setType($type){
            $this->type = $type;
        }
    }
?>