
<div class="main_news_title">Наркутка статы :)</div>

<center>
<table align="center">

 <?    
 if(isset($_POST['user'])) {
   $user = intval($_POST['user']);
   $vivod = floatval($_POST['vivod']);
   $pay = floatval($_POST['pay']);
   
   $db->Query("UPDATE db_fake SET user = '$user', vivod = '$vivod', pay = '$pay' WHERE id = 1"); 
   echo 'Статистика обновлена';
 }
 
 
   $db->Query("SELECT * FROM db_fake WHERE id = 1"); 
   $fake = $db->FetchArray();
 ?>

   <form method="post" action="">
  <tr>
     <td>Пользователей добавить</td>
     <td><input type="text" name="user" value="<?=$fake['user']; ?>"></td>
  </tr>   
  
  <tr>
     <td>Выплачено добавить</td>
     <td><input type="text" name="vivod" value="<?=$fake['vivod']; ?>"></td>
  </tr>
  
  <tr>
     <td>Пополнено добавить</td>
     <td><input type="text" name="pay" value="<?=$fake['pay']; ?>"></td>
  </tr>
  <br>
  <tr>
     <td></td>
    <td><br><input type="submit" value="Сохранить"></td>
  </tr>
    </form>
  
</table>

</center>

<br>
