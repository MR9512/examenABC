<?php
class homeController{
    public function __construct(){
      session_Start();
    }
    public function dashboard(){
        echo "Hi";
    }
}
?>