<?PHP
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users WHERE id = '$user_id'");
$balance = $db->FetchArray();
$logn = $balance['login'];
?>

<div class="my_acc">Рефералы</div>

<center>


<div class="main_news_title">Ваша реферальная ссылка: <font color="#ff0000">http://<?php echo $_SERVER['HTTP_HOST']; ?>/?ref=<?php echo $user_id; ?></font></div>





<?php
$db->Query("SELECT * FROM db_users WHERE refer = '$user_id'");
$col = $db->NumRows();
?>


Всего рефералов: <font color="#ff0000"><?php echo $col; ?></font>
<br>
Получено с рефералов: <font color="#ff0000"><?php echo $balance['ref_sum']; ?> Pуб</font>




</center>