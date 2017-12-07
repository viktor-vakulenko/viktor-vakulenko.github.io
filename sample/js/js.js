function login2() {
var login = $('#login').val();
var password = $('#password').val();
var params = "login=" + login + "&password=" + password;
$.ajax({
type: "POST",
url: "ajax/login.php",
data: params,
beforeSend: function(){
document.getElementById('btn_26').innerHTML = "<img src='tpl/img/load.gif'/>";
},
success: function(data){
if (data=='1'){
window.location.href = "account.php";
}else {
$('#result4526').html(data).fadeIn("slow");
document.getElementById('btn_26').innerHTML = '<input type="button" onclick="login2()" value="Войти" class="baton" />';
}
}});}
/////////////////////////////////////////////////////////////
function registration() {
var login = $('#login_r').val();
var password1 = $('#password1').val();
var password2 = $('#password2').val();
var email = $('#email_r').val();
var perfect = $('#perfect_r').val();
var referal = $('#referal_r').val();
if (checkbox1.checked)
{
var che = 1;
} else {
var che = 0;
};
var params = {login:login,pas:password1,pass:password2,email:email,perfect:perfect,referal:referal,che:che};
$.ajax({
type: "POST",
url: "ajax/registration.php",
data: params,
beforeSend: function(){
document.getElementById('btn_').innerHTML = "<img src='tpl/img/load.gif'/>";
},
success: function(data){
if (data=='1') {
window.location.href = "account.php";
document.getElementById('ddfssaewew').style.display = "none";
document.getElementById('rega_okkk').style.display = "block";
}
$('#result45').html(data).fadeIn("slow");
document.getElementById('btn_').innerHTML = '<input type="button" onclick="registration()" value="РЕГИСТРАЦИЯ" class="baton mr" />';
}});}

///////////////////////
function foggot() {
var login = $('#login_f').val();
var em = $('#email_f').val();
var params = {login:login,em:em};
$.ajax({
type: "POST",
url: "ajax/foggot.php",
data: params,
beforeSend: function(){
document.getElementById('btn_25').innerHTML = "<div style=\"padding-top:10px;\"><img src='tpl/img/load.gif'/></div>";
},
success: function(data){
if (data=='1') {
document.getElementById('dfd4354').style.display = "none";
document.getElementById('rega_okkk22').style.display = "block";
} else {
$('#result4525').html(data).fadeIn("slow");
document.getElementById('btn_25').innerHTML = '<input onclick="foggot()" type="button" value="Восстановить" class="baton" />';
}
}});}
////////////////////////////
function smena_opis(){
var pd = $('#tip').val();
document.getElementById('bla').value = pd;
document.getElementById('banner45').value = '';
document.getElementById('img_c').innerHTML = '';
document.getElementById('ortersd').value = '';
document.getElementById('FileInput').value = '';
if (pd=='3') {
document.getElementById('fgrt568').style.display = 'block';
document.getElementById('fgrt56').style.display = 'none';
}
if (pd=='1' || pd=='2') {
document.getElementById('fgrt568').style.display = 'none';
document.getElementById('fgrt56').style.display = 'block';
}
}
/////////////////////////
function otpravka(){
var summ = $('#summ').val();
var tar = $('input[name=cher]:checked').val();
var sys = $('#sestr').val();

var params = {summ:summ,tar:tar,sys:sys};
$.ajax({
type: "POST",
url: "ajax/vvod.php",
data: params,
beforeSend: function(){
document.getElementById('dfdsftrrf').innerHTML = "<div style=\"padding-top:30px;padding-left:50px;float:left;\"><center><img src='tpl/img/load.gif'/></center></div>";
},
success: function(data){
$('#sfdrgy656hf').html(data).fadeIn("slow");
document.getElementById('dfdsftrrf').innerHTML = '<input class="but" value="Сделать вклад" onclick="otpravka()" type="button" />';
document.forms["dfert78"].submit();
}});}
///////////////////////
function fgrd(sys){
if(sys=='1'){
document.getElementById('fgrt56').innerHTML = "<img src='images/perfect.png' width=\"40px\"/>";
document.getElementById('fgrt561').innerHTML = "<img src='images/payeer_n.png' width=\"40px\"/>";
document.getElementById('sestr').value = '1';
}else{
document.getElementById('fgrt56').innerHTML = "<img src='images/perfect_n.png' width=\"40px\"/>";
document.getElementById('fgrt561').innerHTML = "<img src='images/payeer.png' width=\"40px\"/>";
document.getElementById('sestr').value = '2';
}}
///////////////////////////////////////
function editinfo(){
var payeer = $('#payeer_i').val();
var perfect = $('#perfect_i').val();
var pas = $('#pas').val();
var pass = $('#pass').val();
var old = $('#pas_old').val();
var params = {payeer:payeer,perfect:perfect,pas:pas,pass:pass,old:old};
$.ajax({
type: "POST",
url: "ajax/edit.php",
data: params,
beforeSend: function(){
document.getElementById('btn_123').innerHTML = "<img src='tpl/img/load.gif'/>";
document.getElementById('btn_1234').innerHTML = "<img src='tpl/img/load.gif'/>";
},
success: function(data){
$('#reserult4545677').html(data).fadeIn("slow");
document.getElementById('btn_123').innerHTML = '<input type="button" onclick="editinfo()" class="baton" value="Сохранить">';
document.getElementById('btn_1234').innerHTML = '<input type="button" onclick="editinfo()" class="baton" value="Сохранить">';
}});}

///////////////////////
function rew125() {
var name = $('#dfg566').val();
var mes = $('#fgtyhtyh').val();
var params = {name:name,mes:mes};
$.ajax({
type: "POST",
url: "ajax/otz.php",
data: params,
beforeSend: function(){
document.getElementById('dsfdsf4556').innerHTML = "<div class=\"buttonSendComments\"><img src='tpl/img/load.gif'/></div>";
},
success: function(data){
document.getElementById('dsfdsf4556').innerHTML = '<a href = "javascript:void(0)" onclick="rew125()" class = "buttonSendComments">Отправить</a>';
if (data == '1'){
$().toastmessage('showSuccessToast', "Отзыв успешно помещен на модерацию");
document.getElementById("fgtyhtyh").value = '';
} else {
$('#res1dfr78').html(data).fadeIn("slow");
}}});};

/////////////////////////

function vavod() {
var kol = $('#vvod_kol1').val();
var mes = $('#sestr').val();
var params = {kol:kol,mes:mes};
$.ajax({
type: "POST",
url: "ajax/vavod.php",
data: params,
beforeSend: function(){
document.getElementById('dsfdsf451').innerHTML = "<div style=\"padding-top:30px;padding-left:50px;float:left;\"><center><img src='tpl/img/load.gif'/></center></div>";
},
success: function(data){
document.getElementById('dsfdsf451').innerHTML = '<input class="but" onclick="vavod()" value="Вывести" type="button" />';
$('#res1dfr78').html(data).fadeIn("slow");
}});};