<!DOCTYPE html>
<html>
<head>
	<meta charset="windows-1251" />
	<!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Fiarello-group.com | Умные инвестиции </title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/pages.css" rel="stylesheet">
	<link href="/css/cabinet.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/js.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>
    <script>
    $(document).ready(function(){
      $("#logo").hover(function() {
         $("#bukv").animate({ top: -17 }, '700');
         $("#bukv").css({transition:'all 1s',transform:'rotate(360deg)'});

    }, function() {
         $("#bukv").animate({ top: 0 }, '700');
         $("#bukv").css({transition:'all 1s',transform:'rotate(0deg)'});
  });

    })



    </script>





		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script type="text/javascript" src="/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="/js/jquery.themepunch.revolution.min.js"></script>
        <script src="/js/jquery.colorbox.js"></script>
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="/css/settings.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/css/editor.css" media="screen" />

    <script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});


				$(".menu_r a, .colo, .dfdsf4545").colorbox({inline:true, width:"618px"});

			});
		</script>
</head>
<body>
<div class="wrapper">


	<header class="header">


        <a href="/" id="logo">
            <i id="bukv"></i>
         </a>

       <div class="top_r_men">

	   
	   
	   
	      <?PHP
if(!isset($_SESSION['user_id'])) {  ?>
            <ul class="menu_r">
			<li><a class="reg" id="reg_btn" href="#rega">Регистрация <?=$refer_id; ?></a></li>
                <li><a class="inter" id="dfgvb78157" href="#vxod">Вход</a></li>            </ul>
				<?PHP } else { ?>
				
				
				<ul class="menu_r2">
			    <li><a class="reg" href="/account">В аккаунт</li></a>
                <li><a class="inter" href="/account/exit">Выход</li></a>           
				</ul>
				
				
					<?PHP } ?>
				
            <ul class="menu_l">
                <li><a class="" href="/about">О проекте</a></li>
                <li><a class="" href="index.php?a=save">Мониторы</a></li>
                <li><a class="" href="index.php?a=agreement">Соглашение</a></li>
            </ul>

         </div>


         <ul class="maim_m">
            <li><a class="temp act" href="/">Главная</a></li>
            <li><a class="" href="/news">Новости</a></li>
            <li><a class="" href="/rules">Правила</a></li>
            <li><a class="" href="/otziv">Отзывы</a></li>
            <li class="last"><a class="" href="/contacts">Контакты</a></li>

         </ul>



	</header><!-- .header-->
	
	   <?php
if (isset($_GET["menu"]) OR strtolower($_GET["menu"]) == "account") {
?>
	      <?PHP
if(isset($_SESSION['user_id'])) {  ?>

<main class="content">


    <section class="kabinet">

     <div class="ov">
       <div class="bigh1">
        <h1>Мой кабинет</h1>
        <h4>ВАША ЛИЧНАЯ И ФИНАНСОВАЯ ИНФОРМАЦИЯ</h4>
       </div>
       <ul class="icons">
            <li class="my"><a href="/account">Мой аккаунт</a></li>
            <li class="vklad"><a href="/account/deposits">Вклады</a></li>
            <li class="viplat"><a href="/account/pay_qiwi">Вывести</a></li>
            <li class="ref"><a href="/account/ref">Рефералы</a></li>
            <li class="rekl"><a href="/account/insert_qiwi">Баланс</a></li>
       </ul>
     </div>

     

<div style="clear:both;"></div>

<?PHP } } ?>
	  
 <?php
if (isset($_GET["menu"]) OR strtolower($_GET["menu"]) == "admin") {
?>
 <?
if (isset($_SESSION['admin'])) {
?>

 <div class="members">
          <h2><font color="FF0000">Админка</font></h2>
          <div class="links">

<table>
<tr>
<td><a href="/admin/insert"><div class="baton mr">Пополнения</div></a></td>
<td><a href="/admin/pay"><span class="baton mr">Выплаты</span></a></td>
<td><a href="/admin/news"><span class="baton mr">Новости</span></a></td>
<td><a href="/admin/fake"><span class="baton mr">Фейки</span></a></td>
<td><a href="/admin/otziv"><span class="baton mr">Отзывы</span></a></td>
<td><a href="/admin/sup"><span class="baton mr">Тех.Поддержка</span></a></td>
</div>
</div>
</table>
</tr>
<br>
<?PHP } } ?>

		   <?php
if (!isset($_GET["menu"]) OR strtolower($_GET["menu"]) == "index") {
?>
	
	<main class="content">
	<article class="spectaculus">


<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->

	<div class="fullwidthbanner-container">
		<div class="fullwidthbanner" >
			<ul>
				<!-- SLIDE  -->
				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->
				   <!--	<img src="images/bg1.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" data-bgcolor="#fff"> -->


					<!-- LAYERS -->
					<div class="tp-caption mediumlarge_light_white_center customin customout start"
						data-x="0"
						data-hoffset="0"
						data-y="50"

						data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="1000"
						data-start="500"
						data-easing="Back.easeInOut"
						data-endspeed="300"><h1>FIARELLO GROUP LTD </h1>
					</div>








					<!-- LAYER NR. 3 -->
					<div class="tp-caption  skewfromleft"
						data-x="3"
						data-y="100"
						data-speed="800"
						data-start="1900"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"><h2>ЗАРАБАТЫВАТЬ С НАМИ ЛЕГКО</h2>
					</div>



						<!-- LAYER NR. 5 -->
					<div class="tp-caption  skewfromleft"
						data-x="4"

						data-y="160"
						data-speed="800"
						data-start="1500"
						data-easing="Elastic.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
                        <p class="bigtext">Наш маркетинг позволяет зарабатывать как крупному бизнесу, так<br>
                            и начинающим инвесторам. <br>Все что вам нужно сделать, это зарегистрироваться и 
							<br>принять участие в нашем проекте.
                           </p>
					</div>


                    	<div class="tp-caption  zareg sfl"
						data-x="0"
						data-y="267"
						data-speed="500"
						data-start="1200"
						data-easing="Back.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
					</div>



                    	<div class="tp-caption  sfl"
						data-x="452"
						data-y="7"
						data-speed="500"
						data-start="1600"
						data-easing="Back.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"> <img src="/images/slide1.png" width="510" height="324" alt="">
					</div>



                    	<div class="tp-caption sft"
						data-x="910"
						data-hoffset="0"
						data-y="65"
						data-speed="800"
						data-start="1800"
					   	data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"> <img src="/images/balon.png" width="80" height="93" alt="">
					</div>




				</li>



                	<!-- SLIDE  -->
				<li data-transition="zoomin" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->
				   <!--	<img src="images/bg1.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" data-bgcolor="#fff"> -->


					<!-- LAYERS -->


                      <div class="tp-caption  randomrotate"
						data-x="0"
						data-hoffset="-50"
						data-y="50"
						data-speed="800"
						data-start="1100"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"><h1>FIARELLO GROUP LTD </h1>
					</div>





					<!-- LAYER NR. 3 -->
					<div class="tp-caption  skewfromleft"
						data-x="3"
						data-y="100"
						data-speed="800"
						data-start="1900"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"><h2>ЗАРАБАТЫВАТЬ С НАМИ ЛЕГКО</h2>
					</div>



						<!-- LAYER NR. 5 -->
					<div class="tp-caption  sfb"
						data-x="4"

						data-y="160"
						data-speed="800"
						data-start="1500"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
                        <p class="bigtext">Наш проект поможет заработать даже новичку,<br> который не имеет опыта и знаний, но 
						зато имеет желание разобраться с тем,<br>  как можно 
						зарабатывать деньги с минимальными вложениями.<br>
                            </p>
					</div>



                    	<div class="tp-caption  zareg sfl"
						data-x="0"
						data-y="267"
						data-speed="500"
						data-start="1200"
						data-easing="Back.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
					</div>



                    	<div class="tp-caption  sfl"
						data-x="612"
						data-y="103"
						data-speed="500"
						data-start="1600"
						data-easing="Back.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"> <img src="/images/money.png" width="384" height="189" alt="">
					</div>


                    	<div class="tp-caption sft"
						data-x="563"
						data-hoffset="0"
						data-y="36"
						data-speed="800"
						data-start="1800"
					   	data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"> <img src="/images/balon.png" width="80" height="93" alt="">
					</div>




				</li>




              	<!-- SLIDE  -->
				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->



					<!-- LAYERS -->


                      <div class="tp-caption  randomrotate"
						data-x="0"
						data-hoffset="-50"
						data-y="50"
						data-speed="800"
						data-start="1100"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"><h1 style="font-size: 36px">РЕФЕРАЛЬНАЯ СИСТЕМА <span class="rred">5%</span> </h1>
					</div>





					<!-- LAYER NR. 3 -->
					<div class="tp-caption  skewfromleft"
						data-x="3"
						data-y="100"
						data-speed="800"
						data-start="1900"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"><h2 style="font-size: 22px">ЗАРАБАТЫВАЙ ПРИГЛАШАЯ НОВЫХ ИНВЕСТОРОВ</h2>
					</div>



						<!-- LAYER NR. 5 -->
					<div class="tp-caption  sfb"
						data-x="4"

						data-y="160"
						data-speed="800"
						data-start="1500"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
                        <p class="bigtext">Приглашаем всех желающих к участию в нашей реферальной программе.<br> 
						Не упустите свой шанс заработать 5% за каждого приглашенного пользователя!<br>
						Даже без вложений Вы будете получать прибыль от вкладов привлеченных Вами пользователей.
                            </p>
					</div>



                    	<div class="tp-caption  zareg sfl"
						data-x="0"
						data-y="267"
						data-speed="500"
						data-start="1200"
						data-easing="Back.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
					</div>



                    	<div class="tp-caption  randomrotate"
						data-x="561"
						data-y="12"
						data-speed="500"
						data-start="1600"
						data-easing="Back.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"> <img src="/images/baba.png" width="334" height="318" alt="">
					</div>


                      	<div class="tp-caption randomrotate"
						data-x="910"
						data-hoffset="0"
						data-y="65"
						data-speed="800"
						data-start="1800"
					   	data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6"> <img src="/images/balon.png" width="80" height="93" alt="">
					</div>




				</li>





			</ul>
			<div class="tp-bannertimer tp-bottom"></div>
		</div>
	</div> <br><br>
		   <script type="text/javascript">
				jQuery(document).ready(function() {
					   jQuery('.fullwidthbanner ').revolution(
						{
							delay:15000,
							startwidth:1000,
							startheight:330,
							hideThumbs:10,

                            soloArrowLeftHOffset:-50,
                            soloArrowRightHOffset:-40,
						});
				});
			</script>

			<!-- END REVOLUTION SLIDER -->

	<!-- Content End -->
<?
$db->Query("SELECT * FROM db_stats WHERE id = 1");
$stats = $db->FetchArray();


$db->Query("SELECT * FROM db_fake WHERE id = 1"); 
   $fake = $db->FetchArray();   
   $ball = ($stats['popol'] + $fake['pay']) - ($stats['vivod']  + $fake['vivod']);
?>

		</article> <!-- END OF SPECTACULUS -->
<table cellpadding="0" width="100%" cellspacing="0" class="fgr6_stat"><tr>
<td>Пользователей: <span style="color:#e41715;font-size:16px;padding-left:20px;"><?php echo $stats['user'] + $fake['user']; ?> чел.</span></td>
<td>Резерв проекта: <span style="color:#e41715;font-size:16px;padding-left:20px;"><?php echo $stats['popol'] + $fake['pay']; ?> РУБ</span></td>
<td>Баланс: <span style="color:#e41715;font-size:16px;padding-left:20px;"><?php echo $ball; ?> РУБ</span></td>
<td>Выплачено: <span style="color:#e41715;font-size:16px;padding-left:20px;"><?php echo $stats['vivod'] + $fake['vivod']; ?> РУБ</span></td>
</tr></table>


    <section>
        <br><br>
	   <center>
<table cellpadding="0" cellspacing="0"><tr><td>
<table cellpadding="0" cellspacing="0" class="fgr6_stat">
<tr><td colspan=4 style="padding:0px;"><div class="fgddde3445"><span style="font-size:20px;">ПОСЛЕДНИЕ ВКЛАДЫ</span>
<table cellpadding="0" cellspacing="0" class="fgr6_stat1" style="margin-top:25px;">
<tr>
<td width="120px" style="border-left:0px;">Логин</td><td width="100px">Дата</td><td width="90px" class="last08">Сумма</td>
</tr>
</table>
</div>
</td></tr>
<?
$db->Query("SELECT * FROM db_deposit WHERE status = 0 ORDER BY id DESC LIMIT 5");
while($a = $db->FetchArray()) {
?>
<tr>
<td class="t_1"><?=$a['login']; ?></td>
<td class="t_2"><?=date("d.m.Y H:i", $a['date_start']); ?></td>
<td class="t_3"><?=$a['summa']; ?></td>
</tr>  
<? } ?>

</table>	   
</td>
<td style="padding-left:30px;padding-right:30px;">
<table cellpadding="0" cellspacing="0" class="fgr6_stat">
<tr><td colspan=4 style="padding:0px;"><div class="fgddde3445"><span style="font-size:20px;">ПОСЛЕДНИЕ ВЫПЛАТЫ</span>
<table cellpadding="0" cellspacing="0" class="fgr6_stat1" style="margin-top:25px;">
<tr>
<td width="120px" style="border-left:0px;">Логин</td><td width="100px">Дата</td><td width="90px" class="last08">Сумма</td>
</tr>
</table>
</div>
</td></tr>
<?
$db->Query("SELECT * FROM db_vivod WHERE status = 0 ORDER BY id DESC LIMIT 5");
while($a = $db->FetchArray()) {
?>
<tr>
<td class="t_1"><?=$a['login']; ?></td>
<td class="t_2"><?=date("d.m.Y H:i", $a['date']); ?></td>
<td class="t_3"><?=$a['summa']; ?></td>
</tr>  
<? } ?> 
  </table>	   
</td>
<td>
<table cellpadding="0" cellspacing="0" class="fgr6_stat">
<tr><td colspan=4 style="padding:0px;"><div class="fgddde3445"><span style="font-size:20px;">ТОП РЕФЕРЕРОВ</span>
<table cellpadding="0" cellspacing="0" class="fgr6_stat1" style="margin-top:25px;">
<tr>
<td width="120px" style="border-left:0px;">Логин</td><td width="100px">Дата рег.</td><td width="90px" class="last08">Кол-во</td>
</tr>
</table>
</div>
</td></tr>
<?
$db->Query("SELECT * FROM db_users ORDER BY kol_ref DESC LIMIT 5");
while($s = $db->FetchArray()) {
?>
<tr>
<td class="t_1"><?=$s['login']; ?></td>
<td class="t_2"><?=date("d.m.Y H:i", $s['date_reg']); ?></td>
<td class="t_3"><?=$s['kol_ref']; ?></td>
</tr> 
<? } ?> 
</table>	   
</td>


</tr></table>	  </center> 
	   
    </section>
	


<?PHP
$db->Query("SELECT * FROM db_news ORDER BY id DESC LIMIT 1");
$news = $db->FetchArray();
?>

    <section class="news">

  <div class="item " style="font-size:12px">
            <img src="images/newsimg.png" width="320" height="80" alt="">
            <div class="nw_titl">
                <h3><?=$news["title"]; ?></h3>
                 <p class="date"><span class="icn_date"><?=date("d.m.Y",$news["date"]); ?></span> </p>
            </div>
            <div class="nw_body">
                <p><strong><?=$news["text"]; ?></strong></p>
                <a class="more" href="/news">Читать подробнее</a>
            </div>
        </div>	
    </section>
	</main><!-- .content -->



	   <?php
}
?>





    <div style='display:none'>
			<div id='vxod' class="regist" style=' background: transparent;'>
			
			
			
			

			    <p class="big"><strong>вход для пользователей</strong></p>
			    <p class="min">Введите ваш логин и пароль, используемые при регистрации</p>

                <div class="form min_fo">
				<div id="result4526"></div>
				
				<?PHP

	if(isset($_POST["login"])){
	$login = $func->IsLogin($_POST["login"]);
	$pass = $func->IsPassword($_POST["qiwi"]);
	$passmd = $func->md5Password($pass);
	
			$db->Query("SELECT * FROM db_users WHERE login = '$login'");
			if($db->NumRows() == 1){
			
			$log_data = $db->FetchArray();
			
				if(strtolower($log_data["pass"]) == strtolower($passmd)){
				
					
						$_SESSION["user_id"] = $log_data['id'];
						$_SESSION['login'] = $log_data['login'];
						
						Header("Location: /account");
						
					
				
				}else echo "<center><font color = 'red'><b>Ошибка авторизации</b></font></center><BR />";
			
			}else echo "<center><font color = 'red'><b>Ошибка авторизации</b></font></center><BR />";
			
		
	
	}

?>
<br>
				
                    <form id="enter" action="" method="POST" style="margin:0;padding:0">
                        <fieldset>
                         <input type="text" name="login" class="inp_t" placeholder="Логин" maxlength="20" />
                            <input type="password" name="qiwi" class="inp_t" placeholder="Пароль" maxlength="30">

                             <span id="btn_26"><a class="baton" href="javascript:with(document.getElementById('enter')){ submit(); }">Войти</a>

                        </fieldset>
                    </form>
                </div>
              

			</div>
		</div>


    <div style='display:none'>
			<div id='vost' class="regist" style=' background: transparent;'>
			<div class="botom_wt">Вернуться на  <a class="colo" href="#vxod">форму входа</a></div>
			<div id="dfd4354">
			    <p class="big"><strong>Восстановление пароля</strong></p>
			    <p class="min">Новый пароль будет выслан на ваш e-mail</p>

                <div class="form min_fo">
				
				
				<div id="result4525"></div>
                    <form action="#">
                        <fieldset>
                         <input type="text" id="login_f" class="inp_t" placeholder="Введите логин" />
                            <input type="text" id="email_f" class="inp_t" placeholder="Введите E-mail" />

                           <span id="btn_25"><input onclick="foggot()" type="button" value="Восстановить" class="baton" /></span>

                        </fieldset>
                    </form>
					</div></div>
				 <div style='display:none' id="rega_okkk22">
			<div id='uspex' class="regist" style=' background: transparent;padding-top:0px;'>
			    <p class="big"><strong>ВОССТАНОВЛЕНИЕ</strong></p>
			    <p class="min">Новый пароль установлен!<br/>Новый пароль выслан на E-mail</p>

                  <img  class="okk" src="images/ок.png" alt="">
           

			</div>
		</div>	
                
               

			</div>
		</div>

      <div style='display:none'>
			<div id='rega' class="regist" style=' background: transparent;'>
			<div id="ddfssaewew">
			<?PHP
	
	# Регистрация

	if(isset($_POST["u_login"])){
	
	$login = $func->IsLogin($_POST["u_login"]);
	$pass = $func->IsPassword($_POST["u_qiwi"]);
	$passmd = $func->md5Password($pass);
	$time = time();
	$ip = $_SERVER["REMOTE_ADDR"];
	$bonus = 30;
	$email = $func->IsMail($_POST["u_email"]);     
  function ViewPurse($purse){
		
		if( substr($purse,0,1) != "+" ) return false;
		if( !preg_match("/^[0-9]{8-15}$/", substr($purse,1)) ) return false;	
		return $purse;
	}
  
  $purse  = $db->RealEscape($_POST['u_kosh']);
	
	
	
	
	
		
		
			if($login !== false){
			
				if($pass !== false){  
          if(!empty($purse)) {  
          if($email !== false) {
			
					
						$db->Query("SELECT COUNT(*) FROM db_users WHERE ip = '$ip'");
						if($db->FetchRow() == 0){
						$db->Query("SELECT COUNT(*) FROM db_users WHERE login = '$login'");
						if($db->FetchRow() == 0){
						
						# Регаем пользователя
						$db->Query("INSERT INTO db_users (login, pass, date_reg, money_in, refer, ip, email, qiwi) 
						VALUES ('$login','$passmd', '$time', '$bonus', '$referer_id','$ip', '$email', '$purse')");
						
						$db->Query("UPDATE db_stats SET user = user + 1 WHERE id = 1");
						$db->Query("UPDATE db_users SET kol_ref = kol_ref + 1 WHERE id = '$referer_id'");
						
						$lid = $db->LastInsert();
						
						
						echo "<center><b><font color = 'green'>Поздравляем с успешной регистрацией, вы можете авторизоваться в форме справа вверху!</font></b></center><BR />";
						?>
						<div class="clr"></div>	
						<?PHP
						return;
						
						
						}else echo "<center><b><font color = 'red'>Указанный логин уже используется</font></b></center><BR />";
						
					}else echo "<center><b><font color = 'red'>Регистрация с данного IP уже была!</font></b></center><BR />";
          
              
            } else echo "<center><b><font color = 'red'>Не верный формат E-Mail</font></b></center><BR />";
          
            }else echo "<center><b><font color = 'red'>Не верный формат Qiwi кошелька! Пример +79378026688</font></b></center><BR />";
			
				}else echo "<center><b><font color = 'red'>Пароль заполнен неверно</font></b></center><BR />";
			
			}else echo "<center><b><font color = 'red'>Логин заполнен неверно</font></b></center><BR />";
		
		
	
	}
	
	
?>
<br>
			    <p class="big"><strong>Регистрация на проекте</strong></p>
			    <p class="min">Регистрируйся и получай прибыль уже сегодня!</p>

                <div class="form big_fo"><div id="result45"></div>
                   <center>

<form id="registration" method="POST" action="" style="margin:0;padding:0">
                        <fieldset  class="ll">
                            <input type="text" name="u_login" class="inp_t" placeholder="Введите логин" />
                            <input type="password" name="u_qiwi" class="inp_t" placeholder="Введите пароль" />
                            <span id="btn_"><input type="button" onclick="javascript:with(document.getElementById('registration')){ submit(); }" value="РЕГИСТРАЦИЯ" class="baton mr" /></span>
                        </fieldset>


                        <fieldset  class="rr">
                            <input type="text" name="u_email" type="email" class="inp_t red" placeholder="Введите E-mail" />
                            <input type="text" name="u_kosh" class="inp_t" placeholder="Введите qiwi" />
                            <input type="text"  readonly class="inp_t prigl" placeholder="Вас пригласил:  <?=$ref_name; ?>" />

                            <div class="cell mr"></div>
                        
                             
                        </fieldset>
                    </form>   </center>
                </div>
				</div>
 

			</div>
		</div>
		
		
<script>
(function(){
var ht = $(window).width();
var fgr=$("span.erddghtyu").width();
var newh3=((ht-1000)/2)+50+fgr;
if ((ht-1000)<0){
newh3=50+fgr;
}
document.getElementById('poloska45').style.width= newh3+"px";
setTimeout(arguments.callee, 100);
})();
</script>



