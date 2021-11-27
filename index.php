
<!DOCTYPE html>
<html lang="uk">
<head>

    <meta charset="utf-8">
    <title>TestWork</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- RESET -->
    <style>html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}</style>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
    <div class="container">
        <div class="logo">
            <h1><a class="logo_a" href="/">LOGO</a></h1>
        </div>
        <div class="button_div">
            <a class="auth_button" href="register.php">Регистрация</a>
            <a class="enter_button" href="login.php">Вход</a>
        </div>
    </div>
</header>

<?

require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=vlad_users', 'root', '' );

$data = $_POST;

session_start();



?>
    <section class="section section_logo">
        <div class="container">
            <h2>
                <?
                if(isset($_SESSION['logged_user'])){
                    echo "Привет, ";
                    echo $_SESSION['logged_user']->login;
                ?>
                    <br><a class="exit" href="/logout.php">выйти</a>
                <?
                } else {
                    echo 'Войдите на сайт';
                }
                ?>
            </h2>
        </div>
    </section>



</body>

</html>