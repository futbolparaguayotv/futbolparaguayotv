<?php
//************************************************** *******
//Cortesia de:@M3uKodi Telegram Group
//WebSite:https://www.m3ukodi.com
//Mail:m3ukodi@m3ukodi.com
//Desarrollado:29/Julio/2020
//Donaciones:https://paypal.me/m3ukodi?locale.x=es_XC
//************************************************** *******
ob_start();


if(isset($_GET["id"])){
header('Content-type: text/plain');
$ID = $_GET['id'];
$URL = "https://wgstream.sx/embed/$ID";


//Valor para Forwarded
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else { $ip = $_SERVER['REMOTE_ADDR']; }
define('ip',$ip);
//Hasta definicion de IP


$UA="Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36 Edg/83.0.478.45";
$Headers=array("User-Agent: $UA","Http_X_Forwarded_For: $ip","Remote_Addr: $ip");
$Token=NULL;
$Intentos=0;


while ($Token==NULL) {
$html=curl_site($URL,$Headers,$UA,$URL);
preg_match("/\|([\w]{22})\|/is", $html, $param);
$Token = isset($param[1]) ? $param[1] : NULL;

if($Intentos>=5){echo "Demasiados intentos, no se puede obtener el token"; exit;
}
$Intentos++;
}
preg_match("/\|([\d]{10})\|/is", $html, $P);
$Time = $P[1];
preg_match("/\|(cdn[0-9]{3})\|/is", $html, $P);
$Server = $P[1];
$URLTS="https://ul.$Server.net:8443/hls/";
$URL2="$URLTS$ID.m3u8?s=$Token&e=$Time";
$UA="Chrome/83";


$Headers=array(
"cache-control: max-age=0",
"upgrade-insecure-requests: 1",
"User-Agent: $UA",
"Referer: $URL",
"Origin: $URL",
"Remote_Addr: $ip",
"Http_X_Forwarded_For: $ip",
"Transfer-encoding: chunked",
"Connection: keep-alive",
"Cache-Control: max-age=2592000, public",
"Expires: ".gmdate('D, d M Y H:i:s', time()+2592000) . ' GMT',
"Last-Modified: ".gmdate('D, d M Y H:i:s', @filemtime("path")) . ' GMT'
);
$html=curl_site($URL2,$Headers,$UA,$URL);
$P = explode("\n", $html);


for ($i = 0; $i < count($P) - 1; $i++) {
if (strpos($P[$i], '#') !== false) {
echo $P[$i] . chr(10);
} else {
echo $URLTS.($P[$i]).PHP_EOL;
}
}
}
else
$texto_int= nl2br(" ************************************************** *******"."\n".
" Cortesia de:@M3uKodi Telegram Group "."\n\r".
" WebSite:https://www.m3ukodi.com "."\n\r".
" Mail:m3ukodi@m3ukodi.com "."\n\r".
" Desarrollado:02/Agostos/2020 "."\n\r".
" Donaciones:https://paypal.me/m3ukodi?locale.x=es_XC "."\n\r".
" ************************************************** *******"."\n\n\r".
"Uso:"."\n"."https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id={id}"."\n\n".
"Ejemplo.:"."\n"."https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id=bci0763oo7uv");

echo $texto_int;


function curl_site($URL,$Headers,$UA,$Referer){
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_COOKIESESSION, true);
curl_setopt($ch2, CURLOPT_URL, $URL);
curl_setopt($ch2, CURLOPT_USERAGENT,$UA);
curl_setopt($ch2, CURLOPT_HTTPHEADER, $Headers);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_REFERER, $Referer);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch2, CURLOPT_HEADER, 0);
return curl_exec($ch2);
}
?>
