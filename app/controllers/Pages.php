<?php
class Pages extends Controller{
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function index(){
          // Load View
          $this->view('index');

    }

    public function dashboard(){
        // Load View

        if (!(isset($_SESSION['user_id']))) {
        redirect('index');
        } else {
            $this->view('dashboard');
        }
    }
}