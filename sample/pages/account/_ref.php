<?PHP
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users WHERE id = '$user_id'");
$balance = $db->FetchArray();
$logn = $balance['login'];
?>

<div class="my_acc">��������</div>

<center>


<div class="main_news_title">���� ����������� ������: <font color="#ff0000">http://<?php echo $_SERVER['HTTP_HOST']; ?>/?ref=<?php echo $user_id; ?></font></div>





<?php
$db->Query("SELECT * FROM db_users WHERE refer = '$user_id'");
$col = $db->NumRows();
?>


����� ���������: <font color="#ff0000"><?php echo $col; ?></font>
<br>
�������� � ���������: <font color="#ff0000"><?php echo $balance['ref_sum']; ?> P��</font>




</center>