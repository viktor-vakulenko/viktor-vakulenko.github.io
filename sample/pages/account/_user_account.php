<?PHP
$_OPTIMIZATION["title"] = "������� - �������";
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users WHERE id = '$user_id'");
$prof_data = $db->FetchArray();
$db->Query("SELECT * FROM db_users WHERE refer = '$user_id'");
$col = $db->NumRows();
?>

<div class="my_acc">�������</div>

<center>

<div class="my_acc"><p><center>����� ���������� <b><?=$prof_data['login']; ?>!  <a href="/account/sup">��������� � ���. ���������</a></b></center></p></div>

   <div class="acco">
<div class="red_item">��� ID
            <p class="mony"><?=$prof_data["id"]; ?></p>
        </div>

        <div class="red_item">��� �����
            <p class="mony"><?=$prof_data["login"]; ?></p>
        </div>

        <div class="red_item">��� ������
            <p class="mony">{!BALANCE_OUT!}</p>
        </div>

        <div class="red_item last">����� ���������
            <p class="mony"><?php echo $col; ?></p>
        </div>
 </div>
								

<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">


  
  <tr>
    <td align="left" style="padding:3px;">E-Mail</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["email"]; ?></font></td>
  </tr>
  
  <tr>
    <td align="left" style="padding:3px;">Qiwi �������</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["qiwi"]; ?></font></td>
  </tr>
  

  <tr>
    <td align="left" style="padding:3px;">��� ���������:</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["referer"]; ?> ��� ID <?=$prof_data["refer"]; ?></font></td>
  </tr>
  
</table>

<BR /><BR />


<center><div class="my_acc">����� ������</div></center>


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
						
						echo "<center><font color = 'green'><b>����� ������ ������� ����������</b></font></center><BR />";
					
					}else echo "<center><font color = 'red'><b>������ � ������ ������ �� ���������</b></font></center><BR />";
				
				}else echo "<center><font color = 'red'><b>����� ������ ����� �������� ������</b></font></center><BR />";
			
			}else echo "<center><font color = 'red'><b>������ ������ �������� �������</b></font></center><BR />";
		
	}
?>


<form action="" method="post">
<table width="330" border="0" align="center">
  <tr>
    <td><b>������ ������:</b></td>
    <td align="center"><input type="password" name="old" /></td>
  </tr>
  <tr>
    <td><b>����� ������:</b></td>
    <td align="center"><input type="password" name="new" /></td>
  </tr>
  <tr>
    <td><b>������ ������:</b></td>
    <td align="center"><input type="password" name="re_new" /></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><BR /><input type="submit" value="������� ������" /></td>
  </tr>
</table>
</form>
<BR />
���� ������ ������ ����� �� 6 �� 20 �������� (������ ����. �������)




<br>





</center>