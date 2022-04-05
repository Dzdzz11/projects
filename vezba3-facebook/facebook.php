<?php
$s_select_month = "";
$s_select_day = "";
$s_select_year = "";

$i_start_year = 1905;
$i_end_year = date ("Y");

echo('<select name="birth_year">'."\n");
echo('<option value="-1" selected> please select </option>');

for($i = $i_start_year; $i < $i_end_year + 1; $i++)
{
  echo('<option value="'. $i .'">' . $i . '</option>' ."\n");
} 
// for_end
echo('</select>' . "\n");

// Vezbanje

echo('<p>Georgi' . ' ' . 'Trajkovski</p>');

$s_name = "Georgi";
$s_last_name = "Trajkovski";

echo('<h1>');

echo($s_name . ' ' . $s_last_name);

echo('</h1>');

$s_full_name = $s_name . ' ' . $s_last_name;

echo('<h2>' . $s_name . ' ' . $s_last_name . '</h2>');

echo('<h3>' . $s_full_name . '</h3>');

$s_full_name = $s_full_name . ' Car!';

echo('<h4>' . $s_full_name . '</h4>');

exit ();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facebook - Log In or Sign Up</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/facebook.css" rel="stylesheet">
  <script>
function myShowOverlay(){
  document.getElementById('account').style.display='block';
}






  </script>
</head>
<div id="page">
  <div id="cntEnv">
  <div id="cnt" class="page-box">
    <!-- LFT START -->
    <div id="cntLft" class="p50">
      <p><img id="faceLogo" src="img/dF5SId3UHWd.svg" title="Welcome to Facebook" alt="facebook"></p>
      <p class="intro-text">Connect with friends and the world around you on Facebook.</p>
    </div>
    <!-- LFT END -->
  <!-- RGT START -->
  <div id="cntRgt" class="p50">
    <div id="formBoxEnv">
      <div id="formBox" class="form-box">
        <form
        id="frmContact"
        name="frmContact"
        method="post"
        action="services.php"
        >
          <input
          id="email"
          type="text"
          value=""
          placeholder="Email or phone number"
          />
          <input
          id="password"
          type="text"
          value=""
          placeholder="Password"
          />
          <br>
          <input type="submit" id="submit" name="submit" value="Log In" class="facebook-box">
          <br>
          <p class="forgot-password"><a href="#">Forgot password?</a></p>

          <p class="create-account"><a href="" title="Create New Account">Create new account</a></p>
        </form>
      </div>
      <p class="create-page"><strong>Create a Page</strong> for a celebrity, brand or business.</p>

    </div>
  </div>
  <!-- RGT END -->
  <br class="bf">
</div>
<!-- CNT END -->
</div> <!-- CNT ENV END -->
<div id="ftr" class="page-box">
  <p class="lang-box">
    <a href="#">English (US)</a>
    <a href="#">Македонски</a>
    <a href="#">Shqip</a>
    <a href="#">Türkçe</a>
    <a href="#">Српски</a>
    <a href="#">Deutsch</a>
    <a href="#">Italiano</a>
    <a href="#">Hrvatski</a>
    <a href="#">Bosanski</a>
    <a href="#">Español</a>
    <a href="#">Português (Brasil)</a>
    <a class="plus" href="#" title="Show more languages">+</a>
</p>
  <p class="lang-boxes1">
    <a href="#">Sign Up</a>
    <a href="#">Log In</a>
    <a href="#">Messenger</a>
    <a href="#">Facebook Lite</a>
    <a href="#">Watch</a>
    <a href="#">Places</a>
    <a href="#">Games</a>
    <a href="#">Marketplace</a>
    <a href="#">Facebook Pay</a>
    <a href="#">Jobs</a>
    <a href="#">Oculus</a>
    <a href="#">Portal </a>
    <a href="#">Instagram </a>
    <a href="#">Bulletin </a>
    <a href="#">Local </a>
    <a href="#">Fundraisers </a>
    <a href="#">Services </a>
    <a href="#">Voting Information Center </a>
    <a href="#">Groups </a>
    <a href="#">About </a>
    <a href="#"> Create Ad</a>
    <a href="#">Create Page </a>
    <a href="#">Developers</a>
    <a href="#">Careers </a>
    <a href="#">Privacy </a>
    <a href="#">Cookies </a>
    <a href="#">Ad choices </a>
    <a href="#">Terms </a>
    <a href="#">Help </a>
</p>
<p class="copy"> Meta &copy; 2021</p>
</div>

</div> 
<!-- PAGE END -->

<!--POPUP CODE START -->
<div id="account">
  <p><a href="javascript:myShowerOverlay()" title="Show Overlay"></a></p>
  <div id="signUpAccount" class="sign-up">
    <p ><strong>Sign Up</strong> <br> It's quick and easy.
    <div id="signUpBox" class="form-boxes">
  <form
        id="frmAccount"
        name="frmAccount"
        method="post"
        action="services.php"
        >
        <div id="firstNameBox">
          <div id="firstNameBoxIn">
        <input
          id="firstNameOne"
          type="text"
          value=""
          placeholder="First name"
          />
        </div>
        </div>
        <div id="lastNameBox">
          <div id="lastNameBoxIn">
          <input
          id="lastNameOne"
          type="text"
          value=""
          placeholder="Last name"
          />
        </div>
        </div>
        <br class="bf" />
        <div id="mobileNameBox">
          <input
          id="mobileOne"
          type="text"
          value=""
          placeholder="Mobile number or email"
          />
        </div>
        <div id="passNewBox">
          <input
          id="passwordOne"
          type="text"
          value=""
          placeholder="New password"
          />
        </div>
      </div>
      <div id="selBox" class="select-boxes">
      <p class="birthday">Birthday <i class="fa fa-question-circle" style="font-size:24px"></i>  </p>
     <div id="selectBox" class="select-box">
      <form
      id="frmSelect"
        name="frmSelect"
        method="select"
        action="select.php"
        >
  <select name="months" id="monthId">
  <option value="months">January</>
  </select>
  <select name="days" id="dayID">
    <option value="days">24</option>
  </select>
  <select name="years" id="yearId">
  <option value="years">1997</>
  </select>
    </div>
    </div>
      </form>
      <div id="selBoxOne" class="select-boxes">
      <p class="gender">Gender <i class="fa fa-question-circle" style="font-size:24px"></i>  </p>
     <div id="selectBoxGender" class="select-box">
      <form
      id="frmSelect"
        name="frmSelect"
        method="select"
        action="select.php"
        >
  <select name="months1" id="monthId1">
  <option value="months">Female</option>
  </select>
  <select name="days1" id="dayID">
    <option value="days">Male</option>
  </select>
  <select name="years1" id="yearId">
  <option value="years">Custom</option>
  </select>
  <p class="text-select">By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Data Policy</a> and <a href="#">Cookies Policy</a>. You may receive SMS Notifications from us and can opt out any time.</p>
  <div id="signUpText">
  <p class="text-signup"><a href="#">Sign Up</a></p>
  </div>
    </div>
    
      </div>
  </div>
 
</div>
<!--POPUP CODE END -->
<body>
  
</body>
</html>