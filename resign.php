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

<div class='row'>
         <div class='col-lg-3'></div>
          <div class='col-lg-6'>
            <div class='login-registration-style-1 text-center mt-200'>
              <h1 class='heading-4 font-weight-500 title' >
               註冊
              </h1>
              <div class='login-registration-form pt-10'>
                <form action='resign.php' method='post'>
                  <div class='single-form form-default form-border text-left'>
                    <label>電子信箱</label>
                    <div class='form-input'>
                      <input type='email' name=resign placeholder='user@email.com' />
                      <i class='mdi mdi-email'></i>
                    </div>
                  </div>
                  <div class='single-form form-default form-border text-left'>
                    <label >密碼</label>
                    <div class='form-input'>
                    <input
                        id='password-3'
                        name=password
                        type='password'
                        placeholder='Password'
                      />
                      <i class='mdi mdi-lock'></i>
                    <div class='single-form form-default form-border text-left'>
                    <label>確認密碼</label>
                    <div class='form-input'>
                      <input
                        id='password-3'
                        name=password1
                        type='password'
                        placeholder='Password'
                      />
                      <i class='mdi mdi-lock'></i>
                     
                    </div>
                  </div>
                  <div class='single-checkbox checkbox-style-3'>
                    <input type='checkbox' id='login-333' />
                    
                  </div>
                  <div class='single-form'>
                    <button class='main-btn primary-btn'>註冊</button>
                  </div>
                </form>
              </div>
             
            </div>
          </div>

<?php
    if(isset($_REQUEST['resign'])){

        $password=$_REQUEST['password'];
        $password1=$_REQUEST['password1'];
            if ($password==$password1){
                $email=$_REQUEST['resign'];
                $sql="insert into customer (email,password,role) 
                values ('$email','$password','1')";
                include("connect.php");
                include("dbutil.php");
                include("basic.php");
                execute_sql($sql);
                echo"<script>alert('註冊成功!');</script>";
                switchto('index.php');
            }
        
          



    }
?>