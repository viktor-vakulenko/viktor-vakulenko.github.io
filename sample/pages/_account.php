<?PHP
######################################
# ������ Fruit Farm
# ����� Rufus
# ICQ: 819-374
# Skype: Rufus272
######################################
$_OPTIMIZATION["title"] = "�������";
$_OPTIMIZATION["description"] = "������� ������������";
$_OPTIMIZATION["keywords"] = "�������, ������ �������, ������������";

# ���������� ������
if(!isset($_SESSION["user_id"])){ Header("Location: /"); return; }

if(isset($_GET["sel"])){
		
	$smenu = strval($_GET["sel"]);
			
	switch($smenu){
		
		case "404": include("pages/_404.php"); break; // �������� ������
		case "deposit": include("pages/account/_deposit.php"); break; // �������� ��������
		case "ref": include("pages/account/_ref.php"); break; // �����
		case "deposits": include("pages/account/_deposits.php"); break; // ��� ��������
		case "support": include("pages/account/support.php"); break; // Cszpm
		case "insert": include("pages/account/_insert.php"); break; // ���������� �������
		case "insert_qiwi": include("pages/account/_insert_qiwi.php"); break; // ���������� ������� qiwi
		case "insert_payeer": include("pages/account/_insert_payeer.php"); break; // ���������� ������� payeer
		case "pay_qiwi": include("pages/account/_pay_qiwi.php"); break; // ������� �� qiwi
		case "pay_payeer": include("pages/account/_pay_payeer.php"); break; // ������� �� payeer
		case "config": include("pages/account/_config.php"); break; // ���������
		case "pay": include("pages/account/_pay.php"); break; // �������
		case "sup": include("pages/account/_sup.php"); break; // �������
		
				
		case "exit": @session_destroy(); Header("Location: /"); return; break; // �����
				
	# �������� ������
	default: @include("pages/_404.php"); break;
			
	}
			
}else @include("pages/account/_user_account.php");

?>