<?php
class Home extends Controller {

    public function index($param1= '', $param2= '', $param3= '') {
        $this->view('home/index');
    } 
}
?>