<?php
    class Menu {
        private $name;
        private $price;
        private $image;
        private $orderCount;
        public static $count = 4;
    
        public function __construct($name, $price, $image) {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
        }
        
        //税込価格にする関数
        public function getTaxIncludedPrice() {
            return floor($this->price * 1.08);
        }

        //カプセル化
        public function getName(){
            return $this->name;
        }
        public function getImage(){
            return $this->image;
        }

        //セッター化
        public function getOrderCount(){
            return $this->orderCount;
        }
        public function setOrderCount($orderCount){
            $this->orderCount = $orderCount;
        }

        //トータル金額をする関数
        public function getTotalPrice(){
            return $this->getTaxIncludedPrice() * $this->getOrderCount();
        }
    }
?>