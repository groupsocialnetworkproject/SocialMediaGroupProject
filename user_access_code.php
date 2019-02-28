<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 *  Class for logging in, registering and utilising session
 */
class UserAccess
{
	public function __construct()
	{
		include 'database.php';
	}

	public function login($loginArray) {
		session_start();
		$db = new Database();
		$connection = $db->open_connection("groupproject");

		$email = isset($loginArray['email_login']) && !empty($loginArray['email_login']) ? $loginArray['email_login'] : null;
        $password = isset($loginArray['password_login']) && !empty($loginArray['password_login']) ? $loginArray['password_login'] : null;

		$findUsr = "SELECT email FROM accounts WHERE email LIKE '%joe%'";
		
		$result = $db->queryDb($connection, $findUsr);
		if (!$result) {
		    trigger_error('Invalid query: ' . $connection->error);
		}
		if ($result->num_rows > 0) {
			$_SESSION['user_online'] = $email;
			header('Location: index.php');
		} else {
			header('Location: oooo.php');
			//return "Email or password is incorrect!";
		}
	}

	public function register($regArray)  {
		session_start();
		$db = new Database();
		$connection = $db->open_connection("groupproject");

		$first_name = isset($regArray['first_name']) && !empty($regArray['first_name']) ? $regArray['first_name'] : null;
        $last_name = isset($regArray['last_name']) && !empty($regArray['last_name']) ? $regArray['last_name'] : null;
		$email = isset($regArray['email_login']) && !empty($regArray['email_login']) ? $regArray['email_login'] : null;
        $password = isset($regArray['password_login']) && !empty($loginArray['password_login']) ? $regArray['password_login'] : null;
        $emailConf = isset($regArray['confirm_email_register']) && !empty($regArray['confirm_email_register']) ? $regArray['confirm_email_register'] : null;
        $passwordConf = isset($regArray['confirm_password_login']) && !empty($regArray['confirm_password_login']) ? $regArray['confirm_password_login'] : null;

		$checkUnique = "SELECT email FROM accounts WHERE email LIKE '%" . $email . "%'";;

		$result = $db->queryDb($connection, $checkUnique);
		/*if (!$result) {
		    trigger_error('Invalid query: ' . $connection->error);
		}*/
		//if user registration is unique then begin creating
		if ($result->num_rows > 0) {
			if($emailConf == $emailConf && $passwordConf == $password) {
				$regQuery = "INSERT INTO accounts (email, password, first_name, last_name, about_text) VALUES ('" . $email . "', '" . sha1($password) . "', '" . $first_name . "', '" . $last_name  . "', 'About You...')";
				$regResult = $db->queryDb($connection, $regQuery);
				if($regResult) {
					$_SESSION['regSuccess'] = "Succesfully registered. Please, log in.";
					header('Location: login.php'); 
				} else {
					$_SESSION['regFail'] = "Failed to register. Please, try again.";
					header('Location: login.php'); 
				}
			} else {
				$_SESSION['regFail'] = "Passwords or email addresses do not match. Please, try again.";
				header('Location: login.php');
			}
		} else {
			$_SESSION['regFail'] = "Failed to register. Please, try again.";
			header('Location: login.php');
		}
	}

	//logout the user, destroying relevant sessions before redirecting to the login page.
	public function logout() {
		session_start();
		session_destroy();
		session_unset();
		unset($_SESSION['user_online']);
		$_SESSION = array();

		header('location: login.php');
	}
}

$user_code_obj = new UserAccess();
if(isset($_POST['loginAction']) == "login"){
	$user_code_obj->login($_POST);
}
if(isset($_POST['regAction']) == "register"){
	$user_code_obj->register($_POST);
}
if(isset($_GET['logout'])) {
	$user_code_obj->logout();
}