<?PHP
######################################
# Модуль
# Автор WmRush
# ICQ: 578598778
# Skype: molart111
######################################

# Автоподгрузка классов
function __autoload($name){ include("classes/_class.".$name.".php");}

# Класс конфига 
$config = new config;

# Функции
$func = new func;

# База данных
$db = new db($config->HostDB, $config->UserDB, $config->PassDB, $config->BaseDB);





if (isset($_POST["m_operation_id"]) && isset($_POST["m_sign"]))
{
	$m_key = 'fdfsfdsfdsfdsfsdfsdfds';
	$arHash = array($_POST['m_operation_id'],
			$_POST['m_operation_ps'],
			$_POST['m_operation_date'],
			$_POST['m_operation_pay_date'],
			$_POST['m_shop'],
			$_POST['m_orderid'],
			$_POST['m_amount'],
			$_POST['m_curr'],
			$_POST['m_desc'],
			$_POST['m_status'],
			$m_key);
	
	$sign_hash = strtoupper(hash('sha256', implode(":", $arHash)));
	if ($_POST["m_sign"] == $sign_hash && $_POST['m_status'] == "success")
	{
	
	$db->Query("SELECT * FROM db_insert WHERE id = '".intval($_POST['m_orderid'])."'");
	if($db->NumRows() == 0){ echo $_POST['m_orderid']."|error"; exit;}
		
	$s = $db->FetchArray();
	if($s["status"] > 0){ echo $_POST['m_orderid']."|success"; exit;}
	
	$db->Query("SELECT * FROM db_deposit WHERE id_trans = '".intval($_POST['m_orderid'])."'");
	$a = $db->FetchArray();
	if($a["summa"] != $_POST['m_amount']){ echo $_POST['m_orderid']."|success"; exit;}
	
	$db->Query("UPDATE db_deposit SET status = 0 WHERE id_trans = '".intval($_POST['m_orderid'])."'");
	$db->Query("UPDATE db_insert SET status = 1 WHERE id = '".intval($_POST['m_orderid'])."'");
	$db->Query("UPDATE db_stats SET popol = popol + '".$_POST['m_amount']."' WHERE id = 1");
	
	echo $_POST['m_orderid']."|success";
	exit;
	
	
	}
	echo $_POST['m_orderid']."|error";
}