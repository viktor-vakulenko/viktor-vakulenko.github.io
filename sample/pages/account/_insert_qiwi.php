<?PHP
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users WHERE id = '$user_id'");
$balance = $db->FetchArray();
$logn = $balance['login'];
?>

<div class="my_acc">���������� �������</div>
<center>

<div class="popolnit_info">
������� � ���� ������ �� ����� <a target="_blank" style="color:#ff0000;text-decoration:underline;font-weight:bold;" href="https://w.qiwi.com">w.qiwi.com</a>
<br>�������� ������ "�������". �������� ����� ��� �������� "QIWI ����"
<br>�������� ��� ����� ������ "������".
<br>�������� ����� "������". ������ ����� ������ � ��� "��������"
<br>������������ �������. �������� � ��������� "��� �������"
<br>
<br>



</div>

<?php
function ViewPurse($batch){
		
		
		if( !preg_match("/^[a-zA-Z0-9]{15,55}$/", $batch) ) return false;	
		return $batch;
	}
	
if (isset($_POST['batch'])) {
$batch = ViewPurse($_POST['batch']);
$time = time();
$status = 0;
$ps = 1;
	if($batch !== false) {
	if ($ps == 1) {
			$sum_tarif = 50;
			$time_tarif = 24;
			$perc_tarif = $perc_tarif1;
			$count = $srok1 / 24;
			$sutki = $srok1 / 24;
			$percent = $perc_tarif1 / $sutki;
		} 
	
			$db->Query("INSERT INTO db_insert (login, user_id, batch, date, status) 
			VALUES ('$logn', '$user_id', '$batch', '$time', '$status') ");
			$lid = $db->LastInsert();
		//	$db->Query("UPDATE db_stats SET popol = popol + '$sum' WHERE id = 1");
		//������� ����� � ����
			$db->Query("INSERT INTO db_deposit (id_user, login, date_start, date_end, summa, percent, count_full, status, id_trans) 
			VALUES ('$user_id', '$logn', '$time', '$last_time', '0', '$percent', '$count', '3', '$lid') ");
			
			echo "<center><font color = 'green'><b>������ ����������! </b></font></center>";
			
	}else echo "<center><font color = 'red'><b>������ ����� �������� ��������! </b></font></center>";

}


if(isset($_POST['sum'])) {
$time = time();
$status = 0;
$ps = 2;
$sum = $db->RealEscape($_POST['sum']);

if($sum >= 50) {
		if ($ps == 2) {
			$sum_tarif = 50;
			$time_tarif = 24;
			$perc_tarif = $perc_tarif1;
			$count = $srok1 / 24;
			$sutki = $srok1 / 24;
			$percent = $perc_tarif1 / $sutki;
		} 
	
			$db->Query("INSERT INTO db_insert (login, user_id, batch, date, status) 
			VALUES ('$logn', '$user_id', '$batch', '$time', '$status') ");
			$lid = $db->LastInsert();
			$db->Query("UPDATE db_stats SET popol = popol + '$sum' WHERE id = 1");
		//������� ����� � ����
			$db->Query("INSERT INTO db_deposit (id_user, login, date_start, date_end, summa, percent, count_full, status, id_trans) 
			VALUES ('$user_id', '$logn', '$time', '$last_time', '$sum', '$percent', '$count', '3', '$lid') ");
			
								$desc = base64_encode('Sozdanie vkalda - '.$lid);
								$cu = 'RUB';
								$cid	= 4454548;
								$m_key	= 'fdsfdsfsd';
								$m_orderid = $lid;
								$arHash = array(
									$cid,
									$m_orderid,
									$price,
									$cu,
									$desc,
									$m_key
								);

								$sign = strtoupper(hash('sha256', implode(":", $arHash)));

								print '<FIELDSET style="border: solid #666666 1px; padding-top: 15px; margin-bottom: 10px;">
								<LEGEND><b>������������� �������</b></LEGEND>
								<form method="GET" action="//payeer.com/api/merchant/m.php" accept-charset="utf-8">
								<input type="hidden" name="m_shop" value="'.$cid.'">
								<input type="hidden" name="m_orderid" value="'.$m_orderid.'">
								<input type="hidden" name="m_amount" value="'.$price.'">
								<input type="hidden" name="m_curr" value="RUB">
								<input type="hidden" name="m_desc" value="'.$desc.'">
								<input type="hidden" name="m_sign" value="'.$sign.'">

								<center>
								�� ���������� <strong>'.$sum.'</strong> RUB<br />�������� ������ -  '.$lid.'<br /><br />
								<p align="center"><input class="subm" type="submit" name="m_process" value="��������" /></p>
								</center>
								</form>
								</FIELDSET>';
			
			
			//echo "<center><font color = 'green'><b>������ ����������! </b></font></center>";

}else echo "<center><font color = 'red'><b>����� �� ����� ���� ������ 50 ���! </b></font></center>";
}


?>
<h1>���������� ����� ����</h1>
<table align="center" cellpadding="0px" cellspacing="0px">
<tr>
<td>
<form id="popolnit" action="" method="POST" style="margin:0;padding:0">
<input id="batch" class="popolnit_input" type="text" name="batch" placeholder="��� �������" maxlength="50">

</form>
</td>
</tr>
</table>
<br>
<span id="btn_"><input type="button" onclick="javascript:with(document.getElementById('popolnit')){ submit(); }" value="������� �����" class="baton mr" /></span>



<br>
<h1>���������� ����� Payeer</h1>
<table align="center" cellpadding="0px" cellspacing="0px">
<tr>
<td>

<form id="popolnitt" action="" method="POST" style="margin:0;padding:0">
<input id="batch" class="popolnit_input" type="text" name="sum" placeholder="�����" maxlength="50">

</form>


</td>
</tr>
</table>
<span id="btn_"><input type="button" onclick="javascript:with(document.getElementById('popolnitt')){ submit(); }" value="������� �����" class="baton mr" /></span>




<div id="res1dfr78"></div>
     <div class="ptable four"> <!--four ������ ������ ��� ����� -->
        <div class="row main">
           <div class="date">C����</div>
			<div class="tarif">����</div>
            <div class="stat" style="width:200px;">������</div>
            <div class="nachi">������</div>
        </div><div class="row">

<table align="center" style="margin-top:2px;" cellpadding="2px" cellspacing="2px">
<?php
$db->Query("SELECT * FROM db_insert WHERE user_id = '$user_id'");
while($batch = $db->FetchArray() ) {
$bat = $batch['batch'];
$date = $batch['date'];
$status = $batch['status'];
$summa = $batch['summa'];

?>
<tr>
<div class="date">
<?
if($summa == 0) { echo "-//-"; } else { echo $summa; } 
?>
</div>
<div class="tarif"><?php echo date('d-m-Y', $date); ?></div>
<div class="stat" style="width:200px;">
<?
echo $bat; 
?>
</div>
<?php
if($status == 0){ echo '<div class="nachi">� ���������</div>'; }
if($status == 1){ echo '<div class="nachi">�������</div>'; }
if($status == 2){ echo '<div class="nachi">��������</div>'; }

?>
</td>
</tr>
<?php } ?>
</table>
</div>
</center>
