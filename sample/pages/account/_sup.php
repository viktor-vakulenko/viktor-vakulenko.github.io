<?PHP
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users WHERE id = '$user_id'");
$balance = $db->FetchArray();
$logn = $balance['login'];
?>

<div class="my_acc">Тех. поддержка</div>

<center><a class="pokup" href="/account/sup"><font color="white">Мои тикеты</a></font> || <a class="pokup" href="/account/sup/new"><font color="white">Создать тикет</a></font></center>
<br>

<?
if(isset($_GET['new'])) {
if (isset($_POST['title'])) {
 $title = $db->RealEscape($_POST['title']);
 $text = $db->RealEscape($_POST['text']);
 $date = time();
 if(!empty($title)) {
	if(!empty($text)) {
		$db->Query("INSERT INTO db_sup (user_id, login, title, text, status) VALUES ('$user_id', '$logn', '$title', '$text', '0')");
		$lid = $db->LastInsert();
		$db->Query("INSERT INTO db_sup_text (id_tik, user_id, login, text, date) VALUES ('$lid', '$user_id', '$logn', '$text', '$date')");
		echo '<center><font color="green">Отправлено! Ожидайте ответа!</font></center>';
		header("Refresh: 2, /account/sup");
	}else echo '<center><font color="red">Введите текст обращения!</font></center>';
 }else echo '<center><font color="red">Введите тему обращения!</font></center>';

}
?>
<center>
<br>
<form method="post" action="">
<table align="center">
<tr>
<td>Тема: </td><td><input type="text" name="title" value=""></td>

</tr>
<tr>
<td>Текст: </td><td><textarea name="text" rows="5" cols="50"></textarea></td>

</tr>
<tr><td colspan="2"> <center><input type="submit" value="Отправить"></td></tr></center>
</table>
</form></center>
<?
return;
}
?>

<?
if(isset($_GET['id'])) {

$id = intval($_GET['id']);
$db->Query("SELECT * FROM db_sup WHERE id = '$id'");
$q = $db->FetchArray();
if(isset($_POST['otvet'])) {
$otvet = $db->RealEscape($_POST['otvet']);
$date = time();
if(!empty($otvet)) {
$db->Query("INSERT INTO db_sup_text (id_tik, user_id, login, text, date) VALUES ('$id', '$user_id', '$logn', '$otvet', '$date')");
echo '<center><font color="green">Ваше сообщение отправлено</font></center>';
Header("Refresh: 1, /account/sup/id/".$id."");
}else echo '<center><font color="red">Введите текст ответа</font></center>';
}




$db->Query("SELECT * FROM db_sup_text WHERE id_tik = '$id' AND user_id = '$user_id' ORDER BY id DESC");
if($db->NumRows() == 0) {
echo '<center><font color="red">Тикета не существует</font></center>';
}else{

?>






<?
while($sup = $db->FetchArray()) {
?>

<section class="otzivs">


         <aside style="float: left;padding: 5px 0 30px;">

	<div class="item">
                <div class="dates">
                   <div class="date">
				   <p><?=date("d",$news["date"]); ?></p>
                    <p class="min"><?=date("m",$news["date"]); ?></p>
                   </div>
                   <i class="time"><?=date("H:i",$news["date"]); ?></i>
                </div>
				
				
                <div class="text" style="width: 920px; word-wrap: break-word;">
                    <h3><?=$sup['login']; ?></h3>
                    <p><p><strong><?=$sup['text']; ?></strong></p>

                    </p>
					
 
			</div>
            </div> 	
<? } ?>
 


<?
if($q['status'] == 0) {
?>
</aside> </section></main><center>

<h3>Написать ответ</h3>
<form method="post" action="">
<textarea name="otvet" rows="5" cols="50"></textarea><br><br>
<input type="submit" value="Отправить" >

</form>
</center>

<?
}
}

return;
}

?>
<div id="res1dfr78"></div>
     <div class="ptable four"> <!--four задает ширину для суммы -->
        <div class="row main">


			<div class="tarif">Id заявки</div>
            <div class="stat" style="width:200px;">Название</div>
            <div class="nachi">Статус</div>
        </div><div class="row">
		


<?
$db->Query("SELECT * FROM db_sup WHERE user_id = '$user_id' ORDER BY status ASC");
while($sup = $db->FetchArray()) {
if($sup['status'] == 0) {$status = 'Открытый';}elseif($sup['status'] == 1) {$status = 'Закрытый';}
?>

<div class="tarif"><?=$sup['id']; ?></div>
<div class="stat" style="width:200px;"><a href="/account/sup/id/<?=$sup['id'];?>"><?=$sup['title']; ?></a></div>
<div class="nachi"><?=$status; ?></div>

<? } ?>
</div>


</div>