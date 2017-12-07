<?PHP
$_OPTIMIZATION["title"] = "Регистрация";
$_OPTIMIZATION["description"] = "Регистрация пользователя в системе";
$_OPTIMIZATION["keywords"] = "Регистрация нового участника в системе";

if(isset($_SESSION["user_id"])){ Header("Location: /account"); return; }
$referer_id = (isset($_COOKIE["ref"]) AND intval($_COOKIE["ref"]) > 0 AND intval($_COOKIE["ref"]) < 1000000) ? intval($_COOKIE["ref"]) : 1;
$db->Query("SELECT * FROM db_users WHERE id = '$referer_id'");
$ref = $db->FetchArray();
$ref_name = $ref['login'];
?>




<div class="main_news_top"></div>

<div class="main_news_center">
<div class="main_news_title">РЕГИСТРАЦИЯ В ПРОЕКТЕ</div>
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
						
						
						echo "<center><b><font color = 'green'>Вы успешно зарегистрировались. Используйте форму слева для входа в аккаунт</font></b></center><BR />";
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










<center>

<form id="registration" method="POST" action="" style="margin:0;padding:0">

<table align="center" cellpadding="0px" cellspacing="0px" width="520px">


<input class="reg_login" type="text" name="u_login" placeholder="Логин"  maxlength="30" value=""><br><br>

<input class="reg_qiwi" id="u_qiwi" type="password" name="u_qiwi" placeholder="Пароль" maxlength="30" value=""><br><br>

<input class="reg_login" type="text" name="u_email" placeholder="Email" maxlength="30" value=""><br><br>

<input class="reg_login" type="text" name="u_kosh" placeholder=" +79123845622" maxlength="30" value=""><br>




</center>


<br><br>

<tr>

<td colspan="3" class="reg_ref">
Вас пригласил: <font color="#E17E06"><?=$ref_name; ?></font>
</td>

</td>
</tr>

<tr>
<td colspan="3">
<div class="reg_danger">
Это касса взаимопомощи.
<br>Вы получаете прибыль за счёт вклада последующих участников.
<br>Если приток иссякнет - будет нечем платить.
<br>Вы можете всё проиграть!
<br>
<br>В проекте могут принимать участие лица, достигшие 18 лет.
<br>Администрация не может гарантировать возврат вложенных денег.
<br>В любой момент вы можете ничего не получить. 
</div>

<div align="center">
<a class="reg_button" href="javascript:with(document.getElementById('registration')){ submit(); }">РЕГИСТРАЦИЯ</a>
</div>

</table>
</form>



</div>

<div class="main_news_bottom"></div>
