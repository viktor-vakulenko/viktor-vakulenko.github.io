<?PHP
######################################
# ������ ������ � ����� Red4u.ru
# ����� Rufus
# ICQ: 819-374
# Skype: Rufus272
######################################
$_OPTIMIZATION["title"] = "���������������� ������";
$_OPTIMIZATION["description"] = "������� ������������";
$_OPTIMIZATION["keywords"] = "�������, ������ �������, ������������";
$not_counters = true;
# ���������� ������
if(!isset($_SESSION["admin"])){ include("pages/admin/_login.php"); return; }

if(isset($_GET["sel"])){
		
	$smenu = strval($_GET["sel"]);
			
	switch($smenu){
		
		case "404": include("pages/_404.php"); break; // �������� ������
		case "insert": include("pages/admin/_insert.php"); break; // �������� ����������
		case "pay": include("pages/admin/_pay.php"); break; // �������� ����������
		case "news": include("pages/admin/_news.php"); break; // �������� ����������
		case "fake": include("pages/admin/_fake.php"); break; // �������� ����������
		case "otziv": include("pages/admin/_otziv.php"); break; // �������� ����������
		case "sup": include("pages/admin/_sup.php"); break; // �������� ����������
	
			
	# �������� ������
	default: @include("pages/_404.php"); break;
			
	}
			
}else @include("pages/admin/_stats.php");

?>