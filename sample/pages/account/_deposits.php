<?PHP
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users WHERE id = '$user_id'");
$balance = $db->FetchArray();
$logn = $balance['login'];
?>

<div class="my_acc">������</div>




<center>










<div id="res1dfr78"></div>
     <div class="ptable four"> <!--four ������ ������ ��� ����� -->
        <div class="row main">
            <div class="date" style="width:150px;">���� ������</div>
	    <div class="tarif" style="width:250px;">����� / % � �����</div>
            <div class="stat" style="width:130px;">����������</div>
            <div class="nachi" style="width:430px;">������</div>
        </div><div class="row">
		

<?php

$db->Query("SELECT * FROM db_deposit WHERE id_user = '$user_id'");

while($depo = $db->FetchArray() ){
$dep_id = $depo['id'];
$date_end = $depo['date_end'];
$date_start = $depo['date_start'];
$count_dep = $depo['count'];
$count_full = $depo['count_full'];
$summa = $depo['summa'];
$perc = $depo['percent'];
$status = $depo['status'];

echo '
<tr>
<div class="date"  style="width:150px;">'.date("d-m-Y", $date_start).'</div>
<div class="tarif" style="width:250px;">'.$summa.' � / '.$perc.'%</div>
<div class="stat" style="width:130px;">'.$count_dep.'/'.$count_full.' </div>';

if ($status == 0) {
echo '  <div class="nachi" id="deptimer'.$dep_id.'" style="width:430px;"></div><br>
';
} elseif($status == 1) {
echo '<div class="nachi" style="width:430px;">���������</div>';
}elseif($status == 3) {
echo '<div class="nachi" style="width:430px;">�������</div>';
} elseif($status == 4) {
echo '<div class="nachi" style="width:430px;">��������</div>';
}
echo '


	
		<div class="nachi'.$dep_id.'" ></div>
		
		<script language="JavaScript">
		<!--
			CalcTimePercent('.$dep_id.', '.$date_start.', '.$date_end.', '.time().');
		//-->
		</script></tr>
	


';


}







?>

</center>
</div>
</div>


