<?php
$botPintar=array(
array(
array(
            "sange",
          "bokep",
        "ngentot",
      "porno",
    "mesum",
),
array(
"",
)),

array(
array(
            "http",
              "situs",
                "link",
                  "blog",
                    "server",
),
array(
"",
)),

array(
array(
"",
),
array(
"",
)),

array(
array(
            "",
),
array(
"",
)),

array(
array(
            "salkomsel",
        "jempol",
    "like",
),
array(
"",
)),

array(
array(
            "gembira",
            "bahagia",
            "senang",
),
array(
"",
)),

array(
array(
              "",
),
array(
"",
)),

array(
array(
"setan",
"iblis",
"dajjal",
),
array(
"",
)),
);

$botNormal=array(
"",
);

$botNomer=array(
array(
"",
),
array(
"",
),
array(
"G ?",
),
array(
"",
));

$botPhoto=array(
"",
);

function getJam($name){
$rpc=array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');

$sapa=array(
'',

);

$hari=array(1=>
"",
);

$bulan=array(1=>
                                "",
);

$hr = $hari[gmdate('N',time()+60*60*7)];
$tgl = gmdate('j',time()+60*60*7);
$bln = 
$bulan[gmdate('n',time()+60*60
*7)];
$thn = gmdate('Y',time()+60*60*7);
$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));

return ' '.$jam.' 😜 вσт αιѕα нσ Jo ¢нαℓу Fast мєяє ∂σѕт ☺☺☺☺ 
► Aɗɗ Cɭosɘ ĸRo Fʀɩɘŋɗs ☺☺☺☺ 
► Sʋpɘʀ 
► Sɘxƴ 
► BɘʌʋtʆʋL 
► Awosʋɱ 

  Lɩĸɘ Bʌcĸ 
                ►ρσωєяє∂ ву ►  ► Dʌŋʛɘʀoʋs‏ Hʌcĸɘʀ ►‏ ☺☺☺☺ 🎭 ║ facebook.com/profile.php?id=100011354136437 ║ free-bot007,honor,es'.$nae.'
 '.$hr;
}

function getPower($nm,$tm,$tk){
$gwe=getUrl('/',$tk,array(
'fields' => 'id,name',
));
$by=array(
      '',
);
$punyu=array(
                   '',
               );
$back=array(
'',
);
$text=$punyu[rand(0,count($punyu)-1)];
$n=substr($tm,11,8);
$l=explode(':',$n);
$t=((gmdate('i')*60)+gmdate('s'))-(($l[1]*60)+$l[2]);
$m=floor($t/60);
  $d=$t-($m*60);
     if($d<0){
        return false;
           }else{
              if($m==0){
$ups=$text.' '.$d.' Seconds 💙';
}else{
$ups=$text.' '.$m.'  '.$d.'  ';}
}
$me=$by[rand(0,count($by)-1)];
$ips=$me.' '.$gwe[name];
$like=$back[rand(0,count($back)-1)];
$eps=$like.' '.$nm;
$ops=getJam($nm);
$site='';
$true=$ops.'
 '.$ips.'
 '.$site;

return $true;
}

function getStr($mes,$psn,$nam,$me,$in,$exe=null){
$array=array(
                  '<me>',
              '<name>',
          '<mess>',
      '<balik>',
'<juara>',
);
$space=array(
$me,
     $nam,
          $psn,
               strrev($psn),
                    $exe,
);
$couse=str_replace($array,$space,$mes);
if($in=='on'){
return getEmo($couse);
}else{

return $couse;}
}

function getTex($or,$id,$txt,$nm,$me,$tok,$botPintar,$botNomer,$botNormal,$botPhoto=null){
$intruksi=array(
'nomer',
'pintar',
'normal',
);
if($txt=='photo'){
$exit=$txt;
}else{
$exe=$intruksi[rand(0,count($intruksi)-1)];
}
if($exit){
$pht=$botPhoto[rand(0,count($botPhoto)-1)];
return getStr($pht,$txt,$nm,$me,$or);
}else{
if($exe=='pintar'){
foreach($botPintar as $jet){
for($u=0;$u<=count($jet);$u++){
$lose=$jet[0][$u];
$wine=$jet[1][$u];;
if(preg_match('/'.$lose.'/',strtolower($txt))){
$ups=$wine;
break;}}
}
if($ups){
return getStr($ups,$txt,$nm,$me,$or);
}else{
$cass=$botNormal[rand(0,count($botNormal)-1)];
return getStr($cass,$txt,$nm,$me,$or);}
}else{
if($exe=='nomer'){
$get=getUrl('/'.$id.'/comments',$tok,array(
'fields' => 'id,from,message',
));
if($get[2]){
$no=$botNomer[3][rand(0,count($botNomer[3])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[2][from][name]);
}else{
if($get[1]){
$no=$botNomer[2][rand(0,count($botNomer[2])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[1][from][name]);
}else{
if($get[0]){
$no=$botNomer[1][rand(0,count($botNomer[1])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[0][from][name]);
}else{
$no=$botNomer[0][rand(0,count($botNomer[0])-1)];
return getStr($no,$txt,$nm,$me,$or);}}}
}else{
$cass=$botNormal[rand(0,count($botNormal)-1)];
return getStr($cass,$txt,$nm,$me,$or);}}}
}

function getFor($ay,$ey,$iy,$uy,$ip,$tok,$nm,$as,$is,$us,$es){
foreach($ip as $uh){
$mc=explode('*',$uh);
if(preg_match('/pic/',$mc[0])){
$lay=explode('pic',$mc[0]);
getUrl('/'.$lay[1].'/likes',$tok,array(
'method' => 'post',
));
}else{
getUrl('/'.$mc[0].'/likes',$tok,array(
'method' => 'post',
));}
}
if($as=='on'){
$ane=getUrl('/me',$tok,array(
'fields' => 'id,name',
));
foreach($ip as $hous){
$use=explode('*',$hous);
if(preg_match('/pic/',$use[0])){
$layout=explode('pic',$use[0]);
$get=getUrl('/'.$layout[1].'/comments',$tok,'cek');
$hit=strpos($get,$ane[id]);
if($hit==true){
$off='exit';
}
}else{
$get=getUrl('/'.$use[0].'/comments',$tok,'cek');
$hit=strpos($get,$ane[id]);
if($hit==true){
$off='exit';}
}
if($off){
}else{
if($es=='on'){
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
$text=getTex($is,$lay[1],'photo',$use[2],$nm,$tok,$ay,$ey,$iy,$uy).'

'.$crack;
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));
}else{
$text=getTex($is,$use[0],$use[1],$use[2],$nm,$tok,$ay,$ey,$iy).'

'.$crack;
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));}
}else{
if($is=='on'){
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
$text=getEmo($es).'

'.$crack;
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));
}else{
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));}
}else{
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
$umi=$es.'

'.$crack;
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($umi),
));
}else{
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($umi),
));}}}}}
}
echo 'sukses';
}

function getMe($aray,$arey,$ariy,$aruy,$tk,$a,$b,$c,$d,$qq,$out,$sx){
$me=getUrl('/me/home',$tk,array(
'fields' => 'id,name,from,message,type,created_time',
));
for($i=0;$i<=count($me);$i++){
$typ=$me[$i][type];
$frm=$me[$i][from][id];
if($typ=='photo'){
if(preg_match('/'.$frm.'/',$out)){}else{
$oh='pic'.$me[$i][id].'*';}
}else{
if(preg_match('/'.$frm.'/',$out)){}else{
$oh=$me[$i][id].'*';}
}
$id[]=$oh.$me[$i][message].'*'.$me[$i][from][name].'*'.$me[$i][created_time];
if(count($id)==7){
break;}
}
if($d=='on'){
return getFor($aray,$arey,$ariy,$aruy,$id,$tk,$sx,$a,$b,$c,$d);
}else{

return getFor($aray,$arey,$ariy,$aruy,$id,$tk,$sx,$a,$b,$c,$qq);}
}

function getGr($as,$bs){
$ar=array(
'graph',
'fb',
'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

function getUrl($mb,$tk,$uh=null){
$ar=array(
'access_token' => $tk,
);
if($uh){
if($uh=='cek'){
$black=$ar;
}else{
$else=array_merge($ar,$uh);}
}else{
$else=$ar;
}
if($else){
foreach($else as $b => $c){
$cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=getGr($mb,$true);
$true=json_decode(one($true),true);
if($true[data]){
return $true[data];
}else{
return $true;}
}else{
foreach($black as $b => $c){
$cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=getGr($mb,$true);
$true=one($true);

return $true;}
}

function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by haxer.heck.in',
));
$ch=curl_exec($cx);
curl_close($cx);
return ($ch);
}

function getEmo($n){
$emo=array(
urldecode('%F3%BE%80%80'),
urldecode('%F3%BE%80%81'),
urldecode('%F3%BE%80%82'),
urldecode('%F3%BE%80%83'),
urldecode('%F3%BE%80%84'),
urldecode('%F3%BE%80%85'),
urldecode('%F3%BE%80%87'),
urldecode('%F3%BE%80%B8'),
urldecode('%F3%BE%80%BC'),
urldecode('%F3%BE%80%BD'),
urldecode('%F3%BE%80%BE'),
urldecode('%F3%BE%80%BF'),
urldecode('%F3%BE%81%80'),
urldecode('%F3%BE%81%81'),
urldecode('%F3%BE%81%82'),
urldecode('%F3%BE%81%83'),
urldecode('%F3%BE%81%85'),
urldecode('%F3%BE%81%86'),
urldecode('%F3%BE%81%87'),
urldecode('%F3%BE%81%88'),
urldecode('%F3%BE%81%89'),
urldecode('%F3%BE%81%91'),
urldecode('%F3%BE%81%92'),
urldecode('%F3%BE%81%93'),
urldecode('%F3%BE%86%90'),
urldecode('%F3%BE%86%91'),
urldecode('%F3%BE%86%92'),
urldecode('%F3%BE%86%93'),
urldecode('%F3%BE%86%94'),
urldecode('%F3%BE%86%96'),
urldecode('%F3%BE%86%9B'),
urldecode('%F3%BE%86%9C'),
urldecode('%F3%BE%86%9D'),
urldecode('%F3%BE%86%9E'),
urldecode('%F3%BE%86%A0'),
urldecode('%F3%BE%86%A1'),
urldecode('%F3%BE%86%A2'),
urldecode('%F3%BE%86%A4'),
urldecode('%F3%BE%86%A5'),
urldecode('%F3%BE%86%A6'),
urldecode('%F3%BE%86%A7'),
urldecode('%F3%BE%86%A8'),
urldecode('%F3%BE%86%A9'),
urldecode('%F3%BE%86%AA'),
urldecode('%F3%BE%86%AB'),
urldecode('%F3%BE%86%AE'),
urldecode('%F3%BE%86%AF'),
urldecode('%F3%BE%86%B0'),
urldecode('%F3%BE%86%B1'),
urldecode('%F3%BE%86%B2'),
urldecode('%F3%BE%86%B3'),
urldecode('%F3%BE%86%B5'),
urldecode('%F3%BE%86%B6'),
urldecode('%F3%BE%86%B7'),
urldecode('%F3%BE%86%B8'),
urldecode('%F3%BE%86%BB'),
urldecode('%F3%BE%86%BC'),
urldecode('%F3%BE%86%BD'),
urldecode('%F3%BE%86%BE'),
urldecode('%F3%BE%86%BF'),
urldecode('%F3%BE%87%80'),
urldecode('%F3%BE%87%81'),
urldecode('%F3%BE%87%82'),
urldecode('%F3%BE%87%83'),
urldecode('%F3%BE%87%84'),
urldecode('%F3%BE%87%85'),
urldecode('%F3%BE%87%86'),
urldecode('%F3%BE%87%87'),
urldecode('%F3%BE%87%88'),
urldecode('%F3%BE%87%89'),
urldecode('%F3%BE%87%8A'),
urldecode('%F3%BE%87%8B'),
urldecode('%F3%BE%87%8C'),
urldecode('%F3%BE%87%8D'),
urldecode('%F3%BE%87%8E'),
urldecode('%F3%BE%87%8F'),
urldecode('%F3%BE%87%90'),
urldecode('%F3%BE%87%91'),
urldecode('%F3%BE%87%92'),
urldecode('%F3%BE%87%93'),
urldecode('%F3%BE%87%94'),
urldecode('%F3%BE%87%95'),
urldecode('%F3%BE%87%96'),
urldecode('%F3%BE%87%97'),
urldecode('%F3%BE%87%98'),
urldecode('%F3%BE%87%99'),
urldecode('%F3%BE%87%9B'),
urldecode('%F3%BE%8C%AC'),
urldecode('%F3%BE%8C%AD'),
urldecode('%F3%BE%8C%AE'),
urldecode('%F3%BE%8C%AF'),
urldecode('%F3%BE%8C%B0'),
urldecode('%F3%BE%8C%B2'),
urldecode('%F3%BE%8C%B3'),
urldecode('%F3%BE%8C%B4'),
urldecode('%F3%BE%8C%B6'),
urldecode('%F3%BE%8C%B8'),
urldecode('%F3%BE%8C%B9'),
urldecode('%F3%BE%8C%BA'),
urldecode('%F3%BE%8C%BB'),
urldecode('%F3%BE%8C%BC'),
urldecode('%F3%BE%8C%BD'),
urldecode('%F3%BE%8C%BE'),
urldecode('%F3%BE%8C%BF'),
urldecode('%F3%BE%8C%A0'),
urldecode('%F3%BE%8C%A1'),
urldecode('%F3%BE%8C%A2'),
urldecode('%F3%BE%8C%A3'),
urldecode('%F3%BE%8C%A4'),
urldecode('%F3%BE%8C%A5'),
urldecode('%F3%BE%8C%A6'),
urldecode('%F3%BE%8C%A7'),
urldecode('%F3%BE%8C%A8'),
urldecode('%F3%BE%8C%A9'),
urldecode('%F3%BE%8C%AA'),
urldecode('%F3%BE%8C%AB'),
urldecode('%F3%BE%8D%80'),
urldecode('%F3%BE%8D%81'),
urldecode('%F3%BE%8D%82'),
urldecode('%F3%BE%8D%83'),
urldecode('%F3%BE%8D%84'),
urldecode('%F3%BE%8D%85'),
urldecode('%F3%BE%8D%86'),
urldecode('%F3%BE%8D%87'),
urldecode('%F3%BE%8D%88'),
urldecode('%F3%BE%8D%89'),
urldecode('%F3%BE%8D%8A'),
urldecode('%F3%BE%8D%8B'),
urldecode('%F3%BE%8D%8C'),
urldecode('%F3%BE%8D%8D'),
urldecode('%F3%BE%8D%8F'),
urldecode('%F3%BE%8D%90'),
urldecode('%F3%BE%8D%97'),
urldecode('%F3%BE%8D%98'),
urldecode('%F3%BE%8D%99'),
urldecode('%F3%BE%8D%9B'),
urldecode('%F3%BE%8D%9C'),
urldecode('%F3%BE%8D%9E'),
urldecode('%F3%BE%93%B2'),
urldecode('%F3%BE%93%B4'),
urldecode('%F3%BE%93%B6'),
urldecode('%F3%BE%94%90'),
urldecode('%F3%BE%94%92'),
urldecode('%F3%BE%94%93'),
urldecode('%F3%BE%94%96'),
urldecode('%F3%BE%94%97'),
urldecode('%F3%BE%94%98'),
urldecode('%F3%BE%94%99'),
urldecode('%F3%BE%94%9A'),
urldecode('%F3%BE%94%9C'),
urldecode('%F3%BE%94%9E'),
urldecode('%F3%BE%94%9F'),
urldecode('%F3%BE%94%A4'),
urldecode('%F3%BE%94%A5'),
urldecode('%F3%BE%94%A6'),
urldecode('%F3%BE%94%A8'),
urldecode('%F3%BE%94%B8'),
urldecode('%F3%BE%94%BC'),
urldecode('%F3%BE%94%BD'),
urldecode('%F3%BE%9F%9C'),
urldecode('%F3%BE%A0%93'),
urldecode('%F3%BE%A0%94'),
urldecode('%F3%BE%A0%9A'),
urldecode('%F3%BE%A0%9C'),
urldecode('%F3%BE%A0%9D'),
urldecode('%F3%BE%A0%9E'),
urldecode('%F3%BE%A0%A3'),
urldecode('%F3%BE%A0%A7'),
urldecode('%F3%BE%A0%A8'),
urldecode('%F3%BE%A0%A9'),
urldecode('%F3%BE%A5%A0'),
urldecode('%F3%BE%A6%81'),
urldecode('%F3%BE%A6%82'),
urldecode('%F3%BE%A6%83'),
urldecode('%F3%BE%AC%8C'),
urldecode('%F3%BE%AC%8D'),
urldecode('%F3%BE%AC%8E'),
urldecode('%F3%BE%AC%8F'),
urldecode('%F3%BE%AC%90'),
urldecode('%F3%BE%AC%91'),
urldecode('%F3%BE%AC%92'),
urldecode('%F3%BE%AC%93'),
urldecode('%F3%BE%AC%94'),
urldecode('%F3%BE%AC%95'),
urldecode('%F3%BE%AC%96'),
urldecode('%F3%BE%AC%97'),
);
$message = explode(' ',$n);
foreach($message as $y){
$mess.=$emo[rand(0,count($emo)-1)].' '.$y;
}
return($mess);
}


$pen=opendir('cokis');
while($on=readdir($pen)){
if($on != '.' && $on != '..'){
$slout[]=$on;}
}
foreach($slout as $me){
$true=file_get_contents('cokis/'.$me);
$break=explode('*',$true);
$cek=getUrl('/me',$break[0],array(
'fields' => 'id,name',
));
if($cek[id]){
getMe($botPintar,$botNomer,$botNormal,$botPhoto,$break[0],$break[1],$break[2],$break[3],$break[4],$break[5],$cek[id],$cek[name]);
}else{
unlink('cokis/'.$me);}
}
?>