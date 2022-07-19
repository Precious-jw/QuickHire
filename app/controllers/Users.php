<?php
use PHPMailer\PHPMailer\PHPMailer;
class Users extends Controller
{
  public function __construct(){
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

  public function apply(){

    //Check if the user is logged in
    
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
        'status' => 0,
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
          $data['email_err'] = 'Email is already taken. Please login if this email belongs to you or click on "Forgot password".';
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
          $email = $data['email'];
          $password = $data['password'];

          flash('register_success', 'Your account has been created sucessfully. To verify your account, please click on the link sent to the email address you provided.');
          
          /*$to = $data['email'];
          $password = $data['password'];
          $user_name = $data['fullname'];
          $subject = 'QuickHire | Sign Up Verification';
          $message = "

          <p> Hello ".$user_name.". We're happy to have you on board at QuickHire! </p>
          <p> Please click on the link below to activate your account: \n 
          https://localhost/quickhire/users/apply?email=".$to."&password=".$password." </p>\n\n

          <p> If you did not send this request, please ignore this message. </p>

          ";

          $headers = 'From:noreply@quickhire.com' . "\r\n";

          mail($to, $subject, $message, $headers);
          */

          // Init data
          $data = [
            'fullname' =>'',
            'email' =>'',
            'password' =>'',
            'confirm_pass' => '',
            'gender' =>'',
            'dob' =>'',
            'type' =>'',
            'status' =>'',
            'fullname_err' =>'',
            'email_err' =>'',
            'password_err' =>'',
            'confirm_pass_err' => '',
            'gender_err' =>'',
            'dob_err' =>'',
            'type_err' =>'',
          ];
          
          $this->view('users/login', $data);
          
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
        'status' =>'',
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
    if ($this->isLoggedIn()) {
      redirect('pages/dashboard');
    }
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' =>'',
        'password_err' =>''
      ];

      // Check for email
      if (empty($data['email'])) {
        $data['accountid_err'] = 'Please enter name.';
      }

      // Check for password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password.';
      }

      // Check for user
      if ($this->userModel->findUserByEmail($data['email'])) {
        // User Found

        // Make sure errors are empty
        if (empty($data['email_err']) && empty($data['password_err'])) {

          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['email'], $data['password']);

          if ($loggedInUser) {
            //Check if user has activated account
            if($this->userModel->checkUserStatus($data['email'])){

              // User Authenticated! Create session variable
              $this->createUserSession($loggedInUser);
              flash('register_success', 'Your account has been activated successfully and you are now logged in');
            } else {
              $user = $this->userModel->getUserByEmail($data['email']);
              flash('register_success', 'Hi ' .$user->fullname. '. Please your email for an activation link we sent you to activate your account');
              // Load View
              $this->view('users/login', $data);
            }
          } else {
            flash('register_success', 'Invalid username or password', 'alert alert-danger');
            // Load View
            $this->view('users/login', $data);
          }
          
          
        } else {
          // Load View
          $this->view('users/login', $data);
        }

      } else {
        // No User
        flash('register_success', 'Invalid username or password', 'alert alert-danger');
        // Load View
        $this->view('users/login', $data);
      }

    } else {
      // If NOT a POST

      // Init data
      $data = [
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',
      ];

      // Load View
      $this->view('users/login', $data);
    }
  }

  public function createUserSession($user){
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_name'] = $user->fullname;
    $_SESSION['user_email'] = $user->email;

    redirect('users/login');
  }

  public function isLoggedIn(){
    if(isset($_SESSION['user_id'])){
      return true;
    } else {
      return false;
    }
  }

  public function profile(){
    $this->view('users/profile');
  }

  public function logout(){
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_email']);

    session_destroy();

    redirect('users/login');
  }

  
  
}
