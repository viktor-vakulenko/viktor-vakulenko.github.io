
<div class="main_news_title">Новости</div>


<?php
if (isset($_POST['text'])) {
$text = $_POST['text'];
$title = $_POST['title'];
$date = time();

$qwe = $db->Query("INSERT INTO db_news (date,title,text) VALUES ('$date','$title','$text')");
echo "Новость добавлена";

}

if(isset($_POST['id'])) {
$id = $_POST['id'];
$asd = $db->Query("DELETE FROM db_news WHERE id = $id");
echo "Удалена новость №".$id;
}
?>
<center>
<form method="post" action="">
<input type="text" name="title" placeholder="Заголовок">
<br>
<textarea name="text" rows="7" cols="40">Текст новости</textarea><br>
<input type="submit" value="Добавить новость">
</form>
</center>

<?
$con = $db->Query("SELECT * FROM db_news");
while($c = $db->FetchArray()) {
$date = date("d-M-y", $c['date']);
?>


<section class="otzivs">


         <aside style="float: left;padding: 5px 0 30px;">

	<div class="item">
                <div class="dates">
                   <div class="date">
                    <p><?=date("d",$c["date"]); ?></p>
                    <p class="min"><?=date("m",$c["date"]); ?></p>
                   </div>
                   <i class="time"><?=date("Y",$c["date"]); ?></i>
                </div>

                <div class="text" style="width: 920px; word-wrap: break-word;">
                    <h3><?=$c['title']; ?></h3>
                    <p><p><strong><?=$c['text']; ?></strong></p>

                    </p>
		               
				<form method="post" action="">
<tr>
<input type="hidden" name="id" value="<?=$c['id']; ?>">
<td><input type="submit" value="Удалить"></td>
</tr>
</form>
			</div>
            </div> 	



<? } ?>
</table>
         </aside> </section></main>