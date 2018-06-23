<?php
require_once('config.php');
require_once('settings.php');
require_once('google-login-api.php');
session_start();
// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();

		// Get the access token
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);

		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);

		//echo '<pre>';print_r($user_info); echo '</pre>';
		$user_email = $user_info['emails']['0']['value']; //ambil email
		$user_name = $user_info['displayName'];

		$sqlCheck = mysqli_query($db,"SELECT id FROM user WHERE username = '$user_email'");
		$count = mysqli_num_rows($sqlCheck);

		if ($count == 1) {
			$_SESSION['login_user'] = $user_email;

			header('Location: page_user.php');
		}
		else {
			$sql_insert_user = mysqli_query($db,"INSERT INTO user (username,nama) VALUES ('$user_email','$user_name')");

			$_SESSION['login_user'] = $user_email;

			header('Location: page_user.php');
		}

	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}

?>
