
<div class="main_news_title">Пополнения баланса</div>
<?
if (isset($_POST['oid'])) {
$sum = $_POST['sum'];
$old = $_POST['oid'];
$us_id = $_POST['id_user'];
$db->Query("SELECT * FROM db_users WHERE id = '$us_id'");
$balance = $db->FetchArray();
//$logn = $balance['login'];
$ref = $balance['refer'];
$db->Query("UPDATE db_deposit SET summa = '$sum', status = 0 WHERE id_trans = '$old'");
$db->Query("UPDATE db_insert SET status = 1, summa = '$sum' WHERE id = '$old'");
$db->Query("UPDATE db_stats SET popol = popol + '$sum' WHERE id = 1");
//Зачисляем рефские
if($ref > 0){
$ref_sum = $summa * $ref_percent;
$db->Query("UPDATE db_users SET money_out = money_out + '$ref_sum' WHERE id = '$ref' LIMIT 1");
			
$db->Query("UPDATE db_users SET ref_sum = ref_sum + '$ref_sum' WHERE id = '$us_id' LIMIT 1");
}
echo "<center><font color = 'green'><b>Зачислено! </b></font></center>";
}

if (isset($_POST['idd'])) {
$idd = $_POST['idd'];
$db->Query("UPDATE db_insert SET status = 2 WHERE id = '$idd'");
$db->Query("UPDATE db_deposit SET status = 4 WHERE id_trans = '$idd'");
echo "<center><font color = 'green'><b>Отказано! </b></font></center>";
}

?>
<div id="res1dfr78"></div>
     <div class="ptable four"> <!--four задает ширину для суммы -->
        <div class="row main">
           <div class="date">Логин</div>
			<div class="tarif">Ваучер</div>
            <div class="stat" style="width:200px;">Сумма</div>
            <div class="nachi">Статус</div>
        </div><div class="row">

<?
$db->Query("SELECT * FROM db_insert WHERE status = 0");
while($ins = $db->FetchArray() ) {
$id = $ins['id'];
$login = $ins['login'];
$user_id = $ins['user_id'];
$batch = $ins['batch'];
$date = $ins['date'];

?>


<tr>

<div class="date"><?php echo $login; ?></div>
<div class="tarif"><?php echo $batch; ?></div>
<div class="stat" style="width:200px;">

<form action="" method="post" style="margin:0;padding:0">
<input type="hidden" name="oid" value="<?=$id; ?>">
<input type="hidden" name="id_user" value="<?=$user_id; ?>">

<input type="hidden" name="batch" value="<?php echo $batch; ?>">

<input type="text" name="sum" maxlength="9">


</div>



<div class="nachi">
<input type="submit" value="Зачислить">


</tr>
</form>
<form method="post" action="">
<td><input type="submit" name="dell" value="Удалить"></td>
<input type="hidden" name="idd" value="<?=$id; ?>">
</form>
</div>



<? } ?>
</table>
</div>


<br>