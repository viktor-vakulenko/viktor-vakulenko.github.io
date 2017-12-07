<?PHP
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users WHERE id = '$user_id'");
$balance = $db->FetchArray();
$logn = $balance['login'];

?>


<div class="my_acc">Вывод</div>


<center>

<div class="vyvesti_info">

Вывод от <?=$min_sum; ?> до <?=$max_sum; ?> РУБ
<br>
<br>Выплаты производятся на киви кошелек, который вы указывали при регистрации!


</div>



<?
if(isset($_POST['sum'])) {
$sum = sprintf ("%01.2f", str_replace(',', '.', $_POST['sum']));
$time = time();
$status = 0;
	if($balance['money_out'] < $sum) {
		echo "<center><font color = 'red'><b>Недостаточно средств на балансе</b></font></center><BR />";
	} elseif ($sum < $min_sum) {
		echo "<center><font color = 'red'><b>Минимум для вывода ".$min_sum."</b></font></center><BR />";
	} elseif ($sum > $max_sum) {
		echo "<center><font color = 'red'><b>Максимум для вывода ".$max_sum."</b></font></center><BR />";
	} else {
		$db->Query("INSERT INTO db_vivod (login, user_id, summa, batch, date, status) 
			VALUES ('$logn', '$user_id', '$sum', '".$balance['qiwi']."', '$time', '$status') ");
			
			//Снимаем с баланса
			$db->Query("UPDATE db_users SET money_out = money_out - '$sum' WHERE id = '$user_id' LIMIT 1");
			$db->Query("UPDATE db_stats SET popol = popol + '$sum' WHERE id = 1");
			
			echo "<center><font color = 'green'><b>Заявка отправлена! </b></font></center>";
	
	}



}

?>







<br>

<form id="withdrawal" method="POST" action="" style="margin:0;padding:0">
<table align="center" cellpadding="0px" cellspacing="0px">
<tr>
<?
$db->Query("SELECT * FROM db_users WHERE id = '$user_id'");
$balance = $db->FetchArray();
?>
<td><font color="#000">БАЛАНС: </font><font color="#FF0000"><?php echo number_format($balance['money_out'],2,'.',','); ?></font> РУБ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>СУММА:&nbsp;&nbsp;<input id="withdrawal_input" class="vyvesti_input" type="text" name="sum" onkeyup="withdrawal();" maxlength="9"></td>
</tr>
</table><br>
<span id="btn_"><input type="button" onclick="javascript:with(document.getElementById('withdrawal')){ submit(); }" value="ВЫВЕСТИ" class="baton mr" /></span>

</form>




<br>
<br>

<div id="res1dfr78"></div>
     <div class="ptable four"> <!--four задает ширину для суммы -->
        <div class="row main">
           <div class="date">Cумма</div>
			<div class="tarif">Дата</div>
            <div class="stat" style="width:200px;">Кошелек</div>
            <div class="nachi">Статус</div>
        </div><div class="row">

<table align="center" style="margin-top:2px;" cellpadding="2px" cellspacing="2px">
<?
$db->Query("SELECT * FROM db_vivod WHERE user_id = '$user_id' ORDER BY id DESC");
while($vivod = $db->FetchArray() ) {
$summa = $vivod['summa'];
$batch = $vivod['batch'];
$login = $vivod['login'];
$date = $vivod['date'];
$status = $vivod['status'];
?>
<tr>
<div class="date"><?php echo str_replace('.00','',number_format($summa,2,'.',',')); ?> РУБ  </div>
<div class="tarif"><?php echo date('d-m-Y', $date); ?>  </div>
<div class="stat" style="width:200px;"><?php echo $batch; ?>  </div>
<?php
if($status == 0){ echo '<div class="nachi">В обработке</div>'; }
elseif ($status == 3) { echo '<div class="nachi">Отказано</div>'; }
else{ echo '<div class="nachi">Выполнено</div>'; }
?>
</td>
</tr>
<?php } ?>
</table>
</div>

</center>