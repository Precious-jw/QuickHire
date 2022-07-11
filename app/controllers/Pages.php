<?php
class Pages extends Controller{
    public function __construct(){

    }

    public function index(){
          // Load View
          $this->view('index');

    }

    public function dashboard(){
        // Load View
        $this->view('dashboard');
    }
}