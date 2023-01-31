<?php
    class Menu {
        //個々のインスタンスが持つプロパティ protected:クラス内、子クラス内のアクセス可
        protected $name;
        protected $price;
        protected $image;
        private $orderCount;
        //個々のインスタンスのデータに関係ないMenuクラスが持つデータ(statics)
        protected static $count = 0;
    
        public function __construct($name, $price, $image) {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            //インスタンスが生成されるたびにcountを増やす(selfはMenuクラスのこと)
            self::$count++;
        }
        
        //税込価格にする関数
        public function getTaxIncludedPrice() {
            return floor($this->price * 1.08);
        }

        //クラス外から$nameを操作
        public function getName(){
            return $this->name;
        }
        //クラス外から$imageを操作
        public function getImage(){
            return $this->image;
        }
        //クラス外から$orderCountを操作
        public function getOrderCount(){
            return $this->orderCount;
        }
        //セッター化
        public function setOrderCount($orderCount){
            $this->orderCount = $orderCount;
        }

        //トータル金額をする関数
        public function getTotalPrice(){
            return $this->getTaxIncludedPrice() * $this->getOrderCount();
        }

        //クラスの外から$countを操作するためのゲッター
        public static function getCount(){
            return self::$count;
        }

        //メニューの配列から特定の名前を持つメニューを取り出す
        public static function findByName($menus, $name){
            foreach($menus as $menu){
                if($menu->getName() == $name){
                    return $menu;
                }
            }
        }

        //メニューに対するレビューを取り出す
        public function getReviews($reviews){
            $reviewsForMenu = array();
            foreach($reviews as $review){
                if($menu->getMenuName() == $this->name){
                    $reviewsForMenu[] = $review;
                }
            }
            return reviewsForMenu;
        }
    }
?>