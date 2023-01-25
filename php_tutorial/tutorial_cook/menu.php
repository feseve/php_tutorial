<?php
    class Menu {
        public $name;
        public $price;
        public $image;
    
        public function __construct($name, $price, $image) {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
        }
        
        //税込価格にする関数
        public function getTaxIncludedPrice() {
            return floor($this->price * 1.08);
        }
    }
?>