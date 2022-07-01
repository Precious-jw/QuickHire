<?php
    class Transfer {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // Add Transfer
        public function fundTransfer($data){
            // Prepare Query
            $this->db->query('INSERT INTO transfer (username, accountno, beneficiary_bank_name, beneficiary_accountno, beneficiary_account_name, beneficiary_name, beneficiary_bank_address, country, amount, options, iban, swift_code, description, status) 
            VALUES (:username, :accountno, :beneficiary_bank_name, :beneficiary_accountno, :beneficiary_account_name, :beneficiary_name, :beneficiary_bank_address, :country, :amount, :options, :iban, :swift_code, :description, :status)');

            // Bind Values
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':accountno', $data['accountno']);
            $this->db->bind(':beneficiary_bank_name', $data['beneficiary_bank_name']);
            $this->db->bind(':beneficiary_accountno', $data['beneficiary_accountno']);
            $this->db->bind(':beneficiary_account_name', $data['beneficiary_account_name']);
            $this->db->bind(':beneficiary_name', $data['beneficiary_name']);
            $this->db->bind(':beneficiary_bank_address', $data['beneficiary_bank_address']);
            $this->db->bind(':country', $data['country']);
            $this->db->bind(':amount', $data['amount']);
            $this->db->bind(':options', $data['options']);
            $this->db->bind(':iban', $data['iban']);
            $this->db->bind(':swift_code', $data['swift_code']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':status', $data['status']);
            
            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }

        }

        public function getTransfers()
        {
            $this->db->query("SELECT id as id, username as username, accountno as accountno, beneficiary_bank_name as beneficiary_bank_name, beneficiary_accountno as beneficiary_accountno, beneficiary_account_name as beneficiary_account_name, beneficiary_name as beneficiary_name, beneficiary_bank_address as beneficiary_bank_address, country as country, amount as amount, options as options, iban as iban, swift_code as swift_code, description as description, status as status, date as date FROM transfer");

            $results = $this->db->resultset();

            return $results;
        }

        public function getFewTransfers()
        {
            $this->db->query("SELECT id as id, username as username, accountno as accountno, beneficiary_bank_name as beneficiary_bank_name, beneficiary_accountno as beneficiary_accountno, beneficiary_account_name as beneficiary_account_name, beneficiary_name as beneficiary_name, beneficiary_bank_address as beneficiary_bank_address, country as country, amount as amount, options as options, iban as iban, swift_code as swift_code, description as description, status as status, date as date FROM transfer ORDER BY id DESC LIMIT 3");

            $results = $this->db->resultset();

            return $results;
        }

        public function getAmount()
        {
            $this->db->query("SELECT sum(amount) as amount FROM transfer");        
                $results = $this->db->resultset();
                return $results;            
        }

    }