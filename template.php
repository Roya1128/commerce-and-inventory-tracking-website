<?php

function menu($num){
    
    echo"
        <!DOCTYPE html>
        <html lang='en'>
            <head >
                <meta charset='utf-8' />
                <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
                <meta name='description' content='' />
                <meta name='author' content='' />
                <title>Business Casual - Start Bootstrap Theme</title>
                <link rel='icon' type='image/x-icon' href='assets/favicon.ico' />
                <!-- Font Awesome icons (free version)-->
                <script src='https://use.fontawesome.com/releases/v5.15.4/js/all.js' crossorigin='anonymous'></script>
                <!-- Google fonts-->
                <link href='https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' rel='stylesheet' />
                <link href='https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i' rel='stylesheet' />
                <!-- Core theme CSS (includes Bootstrap)-->
                <link href='css/styles.css' rel='stylesheet' >
                
         
            </head>
            <body class='body$num' >
                <header>
                <h1 class='site-heading text-center text-faded d-none d-lg-block'>
            
            <span class='site-heading-lower text-primary mb-3'>Roya's final program project</span>
        </h1>
                </header>
                <!-- Navigation-->
                <nav class='navbar navbar-expand-lg navbar-dark py-lg-4' id='mainNav'>
                    <div class='container' style='z-index:2;'>
                        <a class='navbar-brand text-uppercase fw-bold d-lg-none' href='home.php'>Start Bootstrap</a>
                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                        <div class='collapse navbar-collapse' id='navbarSupportedContent'  >
                            <ul class='navbar-nav mx-auto'>
                                <li class='nav-item px-lg-4'><a class='nav-link text-uppercase' href='home.php'>首頁</a></li>
                                <li class='nav-item px-lg-4'><a class='nav-link text-uppercase' href='about.php'>關於</a></li>
                                <li class='nav-item px-lg-4'><a class='nav-link text-uppercase' >產品</a>
                                    <ul>
                                        <li class='nav-item px-lg-4'><a class='nav-link text-uppercase' href='chocolate.php'>巧克力棒</a></li>
                                        <li class='nav-item px-lg-4'><a class='nav-link text-uppercase' href='ice.php'>甜筒</a></li>
                                        <li class='nav-item px-lg-4'><a class='nav-link text-uppercase' href='cookie.php'>餅乾</a></li>
                                    </ul>
                                </li>
                                <li class='nav-item px-lg-4'><a class='nav-link text-uppercase' href='store.php'>時段</a></li>
                            </ul>
                            <a href='shopcar.php'><img src='./car.png'  style='width:100px; height:60px'></a>
                             <a style='display: block;
                             padding: 0.5rem 1rem;
                             color: #FFF;
                             text-decoration: none;
                             transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;color: rgba(255, 255, 255, 0.7);
                             font-weight: 800;font-size:30px' href='index.php'>登出</a>
                        </div>
                        
                    </div>";
                    include('login.php');
                    session_start();
                   
                        $username=$_SESSION['username'];             
                 
                    echo "
                </nav><h1>歡迎$username</h1>
                ";
            
}

function content($page){
    switch ($page) {
        case 'home':
            echo "
            <section class='page-section clearfix'>
            <div style='padding:100px'>
            <div class='container' >
                <div class='intro'>
                    <div style='padding:20px;'><img class='intro-img img-fluid mb-3 mb-lg-0 rounded' src='./image/111.png' alt='...' /></div>
                    <div class='intro-text left-0 text-center bg-faded p-5 rounded'>
                        <h2 class='section-heading mb-4'>
                            <span class='section-heading-upper'>Brand Spirit</span>
                            <span class='a'>每個女人，心裡都住著一個小女孩</span>
                        </h2>
                        <p class='mb-3'> 深夜裡她啜飲一口紅酒， 在整個城市睡去之際獨醒著，
                            玻璃窗映出她的臉龐有些許疲憊，整日的奔波勞碌終於卸下偽裝，
                            眼前燈火輝煌的城市是那麼的美，抬頭望見滿天星辰，但是心中卻掛念著一道彩虹!
                        </p>
                        <div class='intro-button mx-auto'><a class='btn btn-primary btn-xl' href='#!'>祝各位期末all pass!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class='page-section cta'>
            <div class='container'>
                <div class='row'>
                    <div class='col-xl-9 mx-auto'>
                        <div class='cta-inner bg-faded text-center rounded'>
                            <h2 class='section-heading mb-4'>
                          
                            </h2>
                            <p class='b'>不論身在何處，不論什麼身分年齡，都要保有最純真的自己    
                                        </p>
                                      <p class='b'>外表看似堅強的我們，其實心裡都藏著一個渴望被愛的小孩!</p>
                            <p class='b'>我想要放假ಥ_ಥ
</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>        
            ";
            break;
        

        case 'about':
            echo "<section class='page-section about-heading'>
            <div style='padding:100px'>
            <div class='container'>
            <div style='padding:20px;'><img class='img-fluid rounded about-heading-img mb-3 mb-lg-0' src='assets/img/about.jpg' alt='...' /></div>
                <div class='about-heading-content'>
                    <div class='row'>
                        <div class='col-xl-9 col-lg-10 mx-auto'>
                            <div class='bg-faded rounded p-5'>
                                <h2 class='section-heading mb-4'>
                        
                                    <span class='section-heading-lower'>幸福的愛情也是要共同進步，才有收穫</span>
                                </h2>
                                <p>沒有人能讓甜蜜的時光永遠停留，因為它隨時都以優美的節奏行進，
                                只有跟上它，才能一起感受那細水長流的甜蜜。</p>
                                <p class='mb-0'>
                                    We guarantee that you will fall in
                                    <em>lust</em>
                                    with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>";
            break;

        case 'products':
            echo "
          ";
            break;
    

        case 'store':
            echo "";
            break;
    







        

        default:
            # code...
            break;
    }

    
}
function footer(){
    echo"
    <footer class='footer text-faded text-center py-5'>
    <div class='container'><p class='m-0 small'>祝大家2022新年快樂</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
<!-- Core theme JS-->

<script src='js/scripts.js'></script>
</body>
</html>

";
}

function products($kind,$num){
    $chocolate=array('夜空流星','心心相印','粉紅芭比','悠遊小鴨','海洋珍珠','滿滿的愛'); 
    $cookie=array('杏仁可可','熊熊軟糖','&m&巧克力','木馬','兔子小姐','熊熊先生');
    $ice=array('可可森林','愛戀草莓','地中海藍');
    $chocolatep=array('30','30','30','65','55','65');
    $cookiep=array('25','30','30','65','100','100');
    $icep=array('85','85','85');
switch ($kind) {
    case 'chocolate':
        $name=$chocolate;
        $price=$chocolatep;
        break;
    case 'cookie':
        $name=$cookie;
        $price=$cookiep;
        break;
    case 'ice':
        $name=$ice;
        $price=$icep;
        break; 
    default:
        # code...
        break;
}
   
if ($num<5) {
    $a='center';
}else{$a='left';}
echo "

<div style='padding:100px'>
        <section class='py-5'>
            <div class='container px-4 px-lg-5 mt-5'>
                <div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-$a'>";
               
for ($i=1; $i <$num ; $i++) { 
    $j=$i-1;
   echo"
   <form action=a.php method=post>
    <div class='col mb-5'>
    <div class='pic div'>
                        <input type=hidden name=op value=1>
                        <input type=hidden name=name value=$name[$j]>
                        <input type=hidden name=price value=$price[$j]>
                        <input type=hidden name=kind value=$kind>
                        <input type=hidden name=src value=$i>
                        <div class='card h-100'>
                            <!-- Product image-->
                            <img class='card-img-top' src='./image/$kind/$i.jpg' alt='...' />
                            <!-- Product details-->
                            <div class='card-body p-4'>
                                <div class='text-center'>
                                    <!-- Product name-->
                                    <h5 class='fw-bolder'>$name[$j]  </h5>
                                    <!-- Product price-->
                                    $price[$j]NT
                                    <input type=number id=numb name=numb style='text-align:center'>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                <div class='text-center'><input type=submit class='btn btn-outline-dark mt-auto' href='' value=加入購物車></div>
                            </div>
                        </div>
                    </div></div></form>";
}
                    
                  
echo "                 
                    </div>
                </div>
            </div>
        </section>
</div>";
    
}
?>