
<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8' />

    <!--====== Title ======-->
    <title>eCommerce HTML | Login</title>

    <meta name='description' content='' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />

    <!--====== Favicon Icon ======-->
    <link
      rel='shortcut icon'
      href='assets/images/favicon.png'
      type='image/png'
    />

    <!--====== Tiny Slider CSS ======-->
    <link rel='stylesheet' href='assets/css/tiny-slider.css' />

    <!--====== Line Icons CSS ======-->
    <link rel='stylesheet' href='assets/css/LineIcons.css' />

    <!--====== Material Design Icons CSS ======-->
    <link rel='stylesheet' href='assets/css/materialdesignicons.min.css' />

    <!--====== Bootstrap CSS ======-->
    <link rel='stylesheet' href='assets/css/bootstrap.min.css' />

    <!--====== gLightBox CSS ======-->
    <link rel='stylesheet' href='assets/css/glightbox.min.css' />

    <!--====== nouiSlider CSS ======-->
    <link rel='stylesheet' href='assets/css/nouislider.min.css' />

    <!--====== Default CSS ======-->
    <link rel='stylesheet' href='assets/css/default.css' />

    <!--====== Style CSS ======-->
    <link rel='stylesheet' href='assets/css/style.css' />
  </head>

  <body>
     
  <?php
      if (isset($_REQUEST['email']) )
       {
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        include('connect.php');
        include('basic.php');
        $sql="SELECT email,username,password,role,phone,address From customer where email='$email' and password='$password'";

        $result=$connect->query($sql);
        if($row=$result->fetch_assoc()){
          $email=$row['email'];
          $username=$row['username'];
          $phone=$row['phone'];
          $role=$row['role'];
          $password=$row['password'];
          $address=$row['address'];
          session_start();
  
          $_SESSION['username']=$username;
          $_SESSION['password']=$password;
          $_SESSION['role']=$role;
          $_SESSION['email']=$email;
          $_SESSION['phone']=$phone;
          $_SESSION['address']=$address;
          if ($role==2) {
            switchto('employee.php');
          }else
            switchto('home.php');
         
        }
        else {
          echo"<script>alert('帳號或密碼錯誤');</script>";}
      }
     
    ?>
    <!--====== Page Banner Part Start ======-->
    <div class='row'>
         <div class='col-lg-3'></div>
          <div class='col-lg-6'>
            <div class='login-registration-style-1 text-center mt-200'>
              <h1 class='heading-4 font-weight-500 title'>
                登入您的帳戶
              </h1>
              <div class='login-registration-form pt-10'>
                <form action='index.php' method='post'>
                  <div class='single-form form-default form-border text-left'>
                    <label>電子信箱</label>
                    <div class='form-input'>
                      <input type='email' name=email placeholder='user@email.com' />
                      <i class='mdi mdi-email'></i>
                    </div>
                  </div>
                  <div class='single-form form-default form-border text-left'>
                    <label>密碼</label>
                    <a class='forget' href='#0'>忘記密碼?</a>
                    <div class='form-input'>
                      <input
                        id='password-3'
                        name=password
                        type='password'
                        placeholder='Password'
                      />
                      <i class='mdi mdi-lock'></i>
                      <span
                        toggle='#password-3'
                        class='mdi mdi-eye-outline toggle-password'
                      ></span>
                    </div>
                  </div>
                  <div class='single-checkbox checkbox-style-3'>
                    <input type='checkbox' id='login-333' />
                    <label for='login-333'><span></span> </label>
                    <p>記住密碼</p>
                  </div>
                  <div class='single-form'>
                    <button class='main-btn primary-btn'>登入</button>
                  </div>
                </form>
              </div>
              <p class='login'>
                還沒有帳戶? <a href='resign.php'>註冊</a>
              </p>
            
            </div>
          </div>
    