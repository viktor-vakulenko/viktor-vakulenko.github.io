
<div class="main_news_title">����������</div>


<?
$db->Query("SELECT * FROM db_users");
$us = $db->NumRows();
?>

<table width="450" border="0" align="center">
  <tr class="htt">
    <td><b>���������������� �������������:</b></td>
	<td width="100" align="center"><?=$us; ?> ���.</td>
  </tr>
  

  
</table>


