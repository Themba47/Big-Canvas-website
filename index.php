<?php
	session_start();
	require("globalvariables.php");
	echo $msg;
?>
<!DOCTYPE html>
<html>
<head>
    
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108740911-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108740911-1');
</script>


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2085627779889164"
     crossorigin="anonymous"></script>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Create an audio visualiser for your music and podcast.">
  <meta name="keywords" content="web design, web development, website Johannesburg">
   <meta property="og:title" content="Big Canvas is an audio visualiser creation platform">
  <meta property="og:image" content="https://www.bigcanvas.co.za/img/banner.jpg">
  <meta property="og:url" content="https://www.bigcanvas.co.za/">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#111f3b"/>
	<title>Web development agency from Johannesburg | SA web agency</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
	<style>
	    @font-face{font-family:SF-Pro-Display-Regular;src:url("../fonts/SF-Pro-Display-Regular.otf")}body{font-family:"SF-Pro-Display-Regular",sans-serif;padding:0;margin:0;overflow-x:hidden}html{scroll-behavior:smooth}.page-loader{width:100%;height:100%;position:fixed;z-index:1500;top:0;left:0;background-color:#1e1f31;display:flex;justify-content:center;align-items:center}.loader{filter:invert(100%);animation:loader ease 1.5s infinite}@keyframes loader{0%{transform:rotateZ(0deg)}100%{transform:rotateZ(360deg)}}nav ul{padding:0;margin:0}#logo{margin-left:5%}#user-on-head{display:none}#side-menu{height:100%;width:0;position:fixed;z-index:999;top:0;left:0;background-color:#111111d9;overflow-x:hidden;padding-top:60px}#header{position:fixed;top:0;right:0;left:0;z-index:1030;height:50px;display:grid;grid-template-columns:5% 40% 55%}#title h1{color:#000;margin:0;padding:0;font-size:16pt}#header div a{text-decoration:none;font-size:25px;color:white}#brand{float:left}nav{text-align:right}nav ul .nav-item{display:inline-block;padding:0 3%}nav ul .nav-item a{text-decoration:none;font-size:18px;color:#000000}#welcome-page{background-image:url(../img/pattern_welcome_img.jpg);background-color:#1e1f31;overflow:hidden;background-size:cover;background-position:center;filter:brightness(100%);height:100vh;width:100%}#welcome-page-color{background:linear-gradient(90deg,#3a4aff52,#ff00f252);position:absolute;z-index:90;top:0;left:0;width:100%;opacity:1;background-size:cover;background-position:center;filter:brightness(100%);height:100vh;mix-blend-mode:hard-light}#views-span{text-decoration:none;background-color:#ff00f2;top:50%;left:5%;padding:1%;border-radius:15px;margin:0;opacity:0;position:absolute;font-size:20pt;color:white;transform:translate(0%,50%);box-shadow:0 0 0 0 rgba(0,0,0,1);animation:showbtn 0.5s ease-out 0.4s 1 forwards}@keyframes showbtn{100%{opacity:1}}#thiza{background-image:url(../img/pulse_welcome_img2.png);background-repeat:no-repeat;background-position:right;background-size:contain;left:0;display:block;position:absolute;overflow:hidden;z-index:98;width:100%;height:100vh;animation:ngena linear 0.5s 1}@keyframes ngena{0%{opacity:0;transform:translateX(-10%)}100%{opacity:1;transform:translateX(0)}}.content h1{text-align:left;top:40%;left:50%;margin:0;position:absolute;width:90%;transform:translate(-50%,-50%);font-size:50pt;color:#fff;animation:molo ease-out 0.8s 1}@keyframes molo{0%{top:45%;opacity:0}100%{top:40%;opacity:1}}.content{text-align:center;margin:0 30%;padding:2.5% 0}.section a{text-decoration:none}@media (max-width:768px){nav{display:none}#user-on-head{display:block;margin-right:10%}#welcome-page{background-image:linear-gradient(135deg,#b6bcff,#c6c6c6,#c6c6c6,#ff74f8)}#welcome-page{background-size:cover;background-position:center;height:100vh;width:100vw}#title h1{text-align:center}#header{grid-template-columns:30% 40% 30%;width:100vw;border-bottom-right-radius:15px;border-bottom-left-radius:15px}#header div a{text-decoration:none;font-size:32px;color:white}#loginbtn{float:right;border:1px solid #000;padding:5%;color:#000;border-radius:5px;margin:2% 0;font-size:12pt}.sdeNav{padding:10px 10px 10px 30px;text-decoration:none;font-size:32px;color:#ffffff;opacity:0;display:block;margin-top:15px;border-radius:30px}#brand img{height:35px;width:35px}.content{text-align:center;margin:0;padding:2.5% 0}.content h1{display:block;width:100%;font-size:35px;text-align:center;position:absolute;z-index:100;top:60vw;left:0;transform:translateY(50%)}#thiza{background-image:url(../img/pulse-mobile-img.png);background-size:cover}#views-span{background-color:#3a4aff;left:25%;width:45%;margin:5% 0}}
	</style>
</head>
<body>
	<?php include('head.php') ?>

	<div id="lakers"><?php include('home.php') ?></div>
	
	<?php include('bottom.php') ?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/stylelist.css">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>	
<script src="js/main.js" defer></script>
<script src="js/loader.js" defer></script>
</body>
</html>
