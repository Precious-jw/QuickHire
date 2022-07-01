<?php
use PHPMailer\PHPMailer\PHPMailer;
class Users extends Controller
{
  public function __construct(){
    $this->accountModel = $this->model('Account');
    $this->userModel = $this->model('User');
  }
 
  public function index(){

    $data = [
      'accountid' => '',
      'password' => '',
      'accountid_err' => '',
      'password_err' => '',
    ];

    // Load View
    $this->view('users/login', $data);
      
  }

  public function apply()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'fullname' => trim($_POST['fullname']),
        'email' => trim($_POST['email']),
        'gender' => trim($_POST['gender']),
        'password' => trim($_POST['password']),
        'confirm_pass' => trim($_POST['confirm_pass']),
        'dob' => trim($_POST['dob']),
        'type' => trim($_POST['type']),
        'fullname_err' =>'',
        'email_err' =>'',
        'password_err' =>'',
        'confirm_pass_err' => '',
        'gender_err' =>'',
        'dob_err' =>'',
        'type_err' =>'',
      ];

      // Validate name and email
      if (empty($data['fullname'])) {
        $data['fullname_err'] = 'Please enter Full Name';
      }
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter an email';
        
      } else {
        // Check Email
        if ($this->userModel->findUserByEmail($data['email'])) {
          $data['email_err'] = 'Email is already taken.';
        }
      }

      // Validate password
      if (empty($data['password'])) {
        $password_err = 'Please enter a password.';
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must have atleast 6 characters.';
      }

      //Check if confirm password matches with password
      if($data['confirm_pass'] != $data['password']){
        $data['confirm_pass_err'] = 'Passwords do not match.';
      }

      // Validate confirm password
      if (empty($data['mobile'])) {
        $data['mobile_err'] = 'Please enter phone number.';
      }
      
      if ($data['gender'] == '-- Select Gender --') {
        $data['gender_err'] = 'Please Select your Gender.';
      }
      if (empty($data['dob'])) {
        $data['dob_err'] = 'Select Date of Birth';
      }
      if ($data['type'] == '-- Select Account Type --') {
        $data['type_err'] = 'Please Select Account type.';
      }

      // Make sure errors are empty
      if (empty($data['fullname_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_pass_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['type_err'])) {
        // SUCCESS - Proceed to insert

        // Hash Password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        //Execute
        if ($this->userModel->register($data)) {
          flash('register_success', 'You are now registered, please log in');
          
          /*
          $email = $data['email'];
          $mail = new PHPMailer;
          $mail->isSMTP();
          $mail->SMTPDebug = 0;
          $mail->Host = 'smtp.hostinger.com';
          $mail->Port = 587;
          $mail->SMTPAuth = true;
          $mail->Username = 'info@bitecript.com';
          $mail->Password = 'Muyi@1994';
          $mail->setFrom('info@bitecript.com', 'bitecript.com');
          $mail->addReplyTo('info@bitecript.com/', 'bitecript.com');
          $mail->addAddress("$email", "Successful Registration");
          $mail->Subject = 'bitecript.com Registration';
          $mail->msgHTML(file_get_contents('tt.html'), __DIR__);
          $mail->Body = '<h2>bitecript.com</h2><p> We are so happy to have you on board. Don\'t wait too long before you activate your first investment. </p>';
          if (!$mail->send()) {
          }
          
          redirect('users/login');
          */
        } else {
          die('Something went wrong');
        }
      } else {
        // Load View with errors
        flash('register_success', 'Please Fix Errors', 'alert alert-danger');
        $this->view('users/register', $data);
      }
    } else {
      // IF NOT A POST REQUEST

      // Init data
      $data = [
        'fullname' =>'',
        'email' =>'',
        'password' =>'',
        'confirm_pass' => '',
        'gender' =>'',
        'dob' =>'',
        'type' =>'',
        'fullname_err' =>'',
        'email_err' =>'',
        'password_err' =>'',
        'confirm_pass_err' => '',
        'gender_err' =>'',
        'dob_err' =>'',
        'type_err' =>'',
      ];

      // Load View
      $this->view('users/register', $data);
    }
  }


  
  public function login()
  {
      // Load View
      $this->view('users/login', $data);
  }
  
}
