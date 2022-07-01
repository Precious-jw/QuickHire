<?php

class Transfers extends Controller{
    public function __construct(){
        if(!isset($_SESSION['user_id'])){
            redirect('users/login');
        }

        $this->accountModel = $this->model('Account');
        $this->transferModel = $this->model('Transfer');
    }

    public function index(){
        $userid = $_SESSION['user_id'];
        $user = $this->accountModel->getUser($userid);
        $transfers = $this->transferModel->getTransfers();
        $amount = $this->transferModel->getAmount();
        $data = [
            'user' => $user,
            'transfers' => $transfers,
            'amount' => $amount
        ];

        $this->view('transfers/view_transactions', $data);

    }

    
    public function fund(){

        // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
        $data = [
            'username' => trim($_POST['fullname']),
            'accountno' => trim($_POST['accountno']),
            'beneficiary_bank_name' => trim($_POST['beneficiary_bank_name']),
            'beneficiary_accountno' => trim($_POST['beneficiary_accountno']),
            'beneficiary_account_name' => trim($_POST['beneficiary_account_name']),
            'beneficiary_name' => trim($_POST['beneficiary_name']),
            'beneficiary_bank_address' => trim($_POST['beneficiary_bank_address']),
            'country' => trim($_POST['country']),
            'amount' => trim($_POST['amount']),
            'options' => trim($_POST['options']),
            'iban' => trim($_POST['iban']),
            'swift_code' => trim($_POST['swift_code']),
            'description' => trim($_POST['description']),
            'status' => 0,
            'message' => ''
        ];

          //Execute
          if ($this->transferModel->fundTransfer($data)) {
            flash('register_success', '');
           
            // Init data
            $data = [
                'user' => '',
                'username' => '',
                'accountno' => '',
                'beneficiary_bank_name' => '',
                'beneficiary_accountno' => '',
                'beneficiary_account_name' => '',
                'beneficiary_name' => '',
                'beneficiary_bank_address' => '',
                'country' => '',
                'amount' => '',
                'options' => '',
                'iban' => '',
                'swift_code' => '',
                'description' => '',
                'status' => '',
                'message' => 'Transaction Sent For Approval'
            ];

            Redirect('transfers', $data);
        }

      } else {
        // IF NOT A POST REQUEST
         
        $userid = $_SESSION['user_id'];
  
        // Init data
        $data = [
            'user' => $this->accountModel->getUser($userid),
            'username' => '',
            'accountno' => '',
            'beneficiary_bank_name' => '',
            'beneficiary_accountno' => '',
            'beneficiary_account_name' => '',
            'beneficiary_name' => '',
            'beneficiary_bank_address' => '',
            'country' => '',
            'amount' => '',
            'options' => '',
            'iban' => '',
            'swift_code' => '',
            'description' => '',
            'status' => '',
            'message' => ''
        ];
  
        // Load View
        $this->view('transfers/transfer', $data);
      }

    }

}

