<?php


    //parent class   
    class Domain
    {
        //static method
        protected static function getWebsiteName()
        {
            return "cseshanewaz.me";
        }
    }

    //child class
    class MyDomain extends Domain
    {
        public $WebsiteName;

        public function __construct()
        {
            $this -> WebsiteName = parent :: getWebsiteName();
        }
    }
    
    $obj1 = new MyDomain();

    echo $obj1 -> WebsiteName;

?>