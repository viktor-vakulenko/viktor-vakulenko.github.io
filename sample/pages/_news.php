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

<h1 class="otz"><span class="poloska">Новости</span></h1><br/><br /><br />



<?PHP

$db->Query("SELECT * FROM db_news ORDER BY id DESC");

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
                    <h3><?=$news["title"]; ?></h3>
                    <p><p><strong><?=$news["text"]; ?></strong></p>

                    </p>
					
       
			
			
			
			


                   

                
					
               
				
			</div>
            </div> 	

	<?PHP
	
	}

}else echo "<center>Новостей нет :(</center>";

?>

         </aside> </section></main><div class="page-buffer"></div>

