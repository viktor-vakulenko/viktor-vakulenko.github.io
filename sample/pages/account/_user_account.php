<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Профиль";
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users WHERE id = '$user_id'");
$prof_data = $db->FetchArray();
$db->Query("SELECT * FROM db_users WHERE refer = '$user_id'");
$col = $db->NumRows();
?>

<div class="my_acc">Аккаунт</div>

<center>

<div class="my_acc"><p><center>Добро пожаловать <b><?=$prof_data['login']; ?>!  <a href="/account/sup">Обращение в тех. поддержку</a></b></center></p></div>

   <div class="acco">
<div class="red_item">Ваш ID
            <p class="mony"><?=$prof_data["id"]; ?></p>
        </div>

        <div class="red_item">Ваш логин
            <p class="mony"><?=$prof_data["login"]; ?></p>
        </div>

        <div class="red_item">Ваш баланс
            <p class="mony">{!BALANCE_OUT!}</p>
        </div>

        <div class="red_item last">Всего рефералов
            <p class="mony"><?php echo $col; ?></p>
        </div>
 </div>
								

<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">


  
  <tr>
    <td align="left" style="padding:3px;">E-Mail</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["email"]; ?></font></td>
  </tr>
  
  <tr>
    <td align="left" style="padding:3px;">Qiwi кошелек</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["qiwi"]; ?></font></td>
  </tr>
  

  <tr>
    <td align="left" style="padding:3px;">Вас пригласил:</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["referer"]; ?> его ID <?=$prof_data["refer"]; ?></font></td>
  </tr>
  
</table>

<BR /><BR />


<center><div class="my_acc">Смена пароля</div></center>


<?PHP
	if(isset($_POST["old"])){
	
		$old = $func->IsPassword($_POST["old"]);
		$oldd = $func->md5Password($old);
		$new = $func->IsPassword($_POST["new"]);
		$pass = $func->md5Password($new);
		
			if($old !== false AND strtolower($oldd) == strtolower($user_data["pass"])){
			
				if($new !== false){
				
					if( strtolower($new) == strtolower($_POST["re_new"])){
					
						$db->Query("UPDATE db_users SET pass = '$pass' WHERE id = '$usid'");
						
						echo "<center><font color = 'green'><b>Новый пароль успешно установлен</b></font></center><BR />";
					
					}else echo "<center><font color = 'red'><b>Пароль и повтор пароля не совпадают</b></font></center><BR />";
				
				}else echo "<center><font color = 'red'><b>Новый пароль имеет неверный формат</b></font></center><BR />";
			
			}else echo "<center><font color = 'red'><b>Старый паполь заполнен неверно</b></font></center><BR />";
		
	}
?>


<form action="" method="post">
<table width="330" border="0" align="center">
  <tr>
    <td><b>Старый пароль:</b></td>
    <td align="center"><input type="password" name="old" /></td>
  </tr>
  <tr>
    <td><b>Новый пароль:</b></td>
    <td align="center"><input type="password" name="new" /></td>
  </tr>
  <tr>
    <td><b>Повтор пароля:</b></td>
    <td align="center"><input type="password" name="re_new" /></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><BR /><input type="submit" value="Сменить пароль" /></td>
  </tr>
</table>
</form>
<BR />
Поле Пароль должно иметь от 6 до 20 символов (только англ. символы)




<br>





</center>