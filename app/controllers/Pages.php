<?php
class Pages extends Controller{
    public function __construct(){

        $this->accountModel = $this->model('Account');
        $this->transferModel = $this->model('Transfer');
        $this->cardModel = $this->model('Card');
    }

    public function index(){
          // Load View
          $this->view('index');

    }

}