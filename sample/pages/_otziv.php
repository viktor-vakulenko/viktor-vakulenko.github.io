<?PHP
######################################
# ������ Hyip-Rush Qiwi
# ����� WmRush
# ICQ: 578-598-778
# Skype: molart111
######################################
$_OPTIMIZATION["title"] = "�������";
$_OPTIMIZATION["description"] = "������� �������";
$_OPTIMIZATION["keywords"] = "������� ������ �������";
?>

<h1 class="otz"><span class="poloska">������</span></h1><br/><br /><br />

<?PHP

if(isset($_POST['text'])) {
$text = $db->RealEscape($_POST['text']);

if(isset($_SESSION['login'])) {
if(!empty($text)) {
$login = $_SESSION['login'];
$date = time();
$db->Query("INSERT INTO db_otziv (name, date, text, status) VALUES ('$login', '$date', '$text', 0)");
echo '<center><font color="green">��� ����� ������� �������� � �������� ����� �������� ����������� �� ������� ���������� ������!</font></center>';
header("Refresh: 2, /otziv");
}else echo '<center><font color="red">������� ����� ������!</font></center>';
}else echo '<center><font color="red">��� ���������� ������ ���������� ��������������!</font></center>';
}


$db->Query("SELECT * FROM db_otziv WHERE status = 1 ORDER BY id DESC");

if($db->NumRows() > 0){

	while($news = $db->FetchArray()){
	
	?>
<section class="otzivs">


         <aside style="float: left;padding: 5px 0 30px;">

	<div class="item">
                <div class="dates">
                   <div class="date">
				   <p><?=date("d",$news["date"]); ?></p>
                    <p class="min"><?=date("m",$news["date"]); ?></p>
                   </div>
                   <i class="time"><?=date("Y",$news["date"]); ?></i>
                </div>
				
				
                <div class="text" style="width: 920px; word-wrap: break-word;">
                    <h3><?=$news["name"]; ?></h3>
                    <p><p><strong><?=$news["text"]; ?></strong></p>

                    </p>
					
 
			</div>
            </div> 	



	<?PHP
	
	}

}else echo "<center>������� ��� :(</center>";

if(!isset($_SESSION['login'])) {
echo '<br /><br /><br /><center><font color="red">��� ���������� ������ ���������� ��������������!</font></center>';
return;
}
?>
 </aside> </section></main>

<center>
<center><h2>�������� �����</h2></center>
<form method="post" action="">
<table align="center">
<textarea rows="5" cols="50" name="text"></textarea></td></tr>
<tr><br><br><td colspan="2"><input type="submit" value="���������"></td></tr>
</table>
</form>
</center>