<?PHP
$_OPTIMIZATION["title"] = "�����������";
$_OPTIMIZATION["description"] = "����������� ������������ � �������";
$_OPTIMIZATION["keywords"] = "����������� ������ ��������� � �������";

if(isset($_SESSION["user_id"])){ Header("Location: /account"); return; }
$referer_id = (isset($_COOKIE["ref"]) AND intval($_COOKIE["ref"]) > 0 AND intval($_COOKIE["ref"]) < 1000000) ? intval($_COOKIE["ref"]) : 1;
$db->Query("SELECT * FROM db_users WHERE id = '$referer_id'");
$ref = $db->FetchArray();
$ref_name = $ref['login'];
?>




<div class="main_news_top"></div>

<div class="main_news_center">
<div class="main_news_title">����������� � �������</div>
<?PHP
	
	# �����������
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
						
						# ������ ������������
						$db->Query("INSERT INTO db_users (login, pass, date_reg, money_in, refer, ip, email, qiwi) 
						VALUES ('$login','$passmd', '$time', '$bonus', '$referer_id','$ip', '$email', '$purse')");
						
						$db->Query("UPDATE db_stats SET user = user + 1 WHERE id = 1");
						$db->Query("UPDATE db_users SET kol_ref = kol_ref + 1 WHERE id = '$referer_id'");
						
						$lid = $db->LastInsert();
						
						
						echo "<center><b><font color = 'green'>�� ������� ������������������. ����������� ����� ����� ��� ����� � �������</font></b></center><BR />";
						?>
						<div class="clr"></div>	
						<?PHP
						return;
						
						
						}else echo "<center><b><font color = 'red'>��������� ����� ��� ������������</font></b></center><BR />";
						
					}else echo "<center><b><font color = 'red'>����������� � ������� IP ��� ����!</font></b></center><BR />";
          
              
            } else echo "<center><b><font color = 'red'>�� ������ ������ E-Mail</font></b></center><BR />";
          
            }else echo "<center><b><font color = 'red'>�� ������ ������ Qiwi ��������! ������ +79378026688</font></b></center><BR />";
			
				}else echo "<center><b><font color = 'red'>������ �������� �������</font></b></center><BR />";
			
			}else echo "<center><b><font color = 'red'>����� �������� �������</font></b></center><BR />";
		
		
	
	}
	
	
?>










<center>

<form id="registration" method="POST" action="" style="margin:0;padding:0">

<table align="center" cellpadding="0px" cellspacing="0px" width="520px">


<input class="reg_login" type="text" name="u_login" placeholder="�����"  maxlength="30" value=""><br><br>

<input class="reg_qiwi" id="u_qiwi" type="password" name="u_qiwi" placeholder="������" maxlength="30" value=""><br><br>

<input class="reg_login" type="text" name="u_email" placeholder="Email" maxlength="30" value=""><br><br>

<input class="reg_login" type="text" name="u_kosh" placeholder=" +79123845622" maxlength="30" value=""><br>




</center>


<br><br>

<tr>

<td colspan="3" class="reg_ref">
��� ���������: <font color="#E17E06"><?=$ref_name; ?></font>
</td>

</td>
</tr>

<tr>
<td colspan="3">
<div class="reg_danger">
��� ����� ������������.
<br>�� ��������� ������� �� ���� ������ ����������� ����������.
<br>���� ������ �������� - ����� ����� �������.
<br>�� ������ �� ���������!
<br>
<br>� ������� ����� ��������� ������� ����, ��������� 18 ���.
<br>������������� �� ����� ������������� ������� ��������� �����.
<br>� ����� ������ �� ������ ������ �� ��������. 
</div>

<div align="center">
<a class="reg_button" href="javascript:with(document.getElementById('registration')){ submit(); }">�����������</a>
</div>

</table>
</form>



</div>

<div class="main_news_bottom"></div>
