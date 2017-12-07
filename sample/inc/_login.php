<div class="osnova_title">Вход в аккаунт</div>

<table class="osnova_vhod" cellpadding="0px" cellspacing="0px">
<tr>
<td colspan="2">
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
						
					
				
				}else echo "<center><font color = 'red'><b>Login и/или Пароль указан неверно</b></font></center><BR />";
			
			}else echo "<center><font color = 'red'><b>Указанный Login не зарегистрирован в системе</b></font></center><BR />";
			
		
	
	}

?>




<form id="enter" action="" method="POST" style="margin:0;padding:0">
<input class="osnova_vhod_input_login" type="text" name="login" placeholder="Логин" maxlength="20">
<input class="osnova_vhod_input_qiwi" type="password" name="qiwi" placeholder="Пароль" maxlength="30">
</form>
</td>
</tr>
<tr>
<td><a class="osnova_vhod_registration" href="/signup">Регистрация</a></td>
<td align="right"><a class="osnova_vhod_enter" href="javascript:with(document.getElementById('enter')){ submit(); }">Войти</a></td>
</tr>
<tr><td colspan="2"><br></td></tr>
</table>