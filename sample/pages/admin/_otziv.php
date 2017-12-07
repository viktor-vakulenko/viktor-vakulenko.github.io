<?PHP
######################################
# Скрипт Hyip-Rush Qiwi
# Автор WmRush
# ICQ: 578-598-778
# Skype: molart111
######################################
$_OPTIMIZATION["title"] = "Новости";
$_OPTIMIZATION["description"] = "Новости проекта";
$_OPTIMIZATION["keywords"] = "Новости нашего проекта";
?>

<div class="main_news_title">Отзывы</div>	
<?PHP

if(isset($_POST['add'])) {
$add = intval($_POST['add']);
$db->Query("UPDATE db_otziv SET status = 1 WHERE id = '$add'");

}

if(isset($_POST['dell'])) {
$dell = intval($_POST['dell']);
$db->Query("DELETE FROM db_otziv WHERE id = '$dell'");

}

$db->Query("SELECT * FROM db_otziv WHERE status = 0 ORDER BY id DESC");

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
                    <p><p><strong><?=$news["text"]; ?></strong></p><br>
<table><tr>
					<form method="post" action="">
	<td><input type="hidden" name="add" value="<?=$news['id']; ?>">
	<input type="submit" value="Одобрить"></td>
	</form>
	<form method="post" action="">
	<td><input type="hidden" name="dell" value="<?=$news['id']; ?>">
	<input type="submit" value="Удалить"></td>
	</form>
                    </p>
					
 </table></tr>
			</div>
            </div> 	

	
   
	<?PHP
	
	}

}else echo "<center>Отзывов нет :(</center>";


?>

 </aside> </section></main>