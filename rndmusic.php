<?php
$str = explode("\n", file_get_contents('LnkInfo_1.txt'));
$rand_index = rand(3469,count($str)-1);
if(isset($_GET['id']))
{
$url = $str[(int)$_GET['id']+3468];
}
else{
$url = $str[$rand_index];
}
$arr=array();
/*$size=file_get_contents($url,false,null,1,8);*/
/*$myf = fopen("urllog.html", "a+b") or die("Unable to open file!");
$log= date("Y-m-d H:i:s",time()+28800)." ".$url." -> ".$size;
fwrite($myf,$log."<br>");
fclose($myf);
$i=0;*/$url=str_replace(".mp3","",$url);
/*$header_array = get_headers($url, true);

$size1 = $header_array['Content-Type'];
/*print_r($size1);
while($size=="!DOCTYPE" and $i<5){
$i=$i+1;
$rand_index = rand(3469,count($str)-1);
$url = $str[$rand_index];
$url=str_replace(".mp3","",$url);
$header_array = get_headers($url, true);
print(file_get_contents("http://192.168.5.7/cfittop/art/gfs.php?url=".$url));
print_r($header_array);
echo "<hr>";
$size=file_get_contents($url,false,null,1,8);
/*$myf = fopen("urllog.html", "a+b") or die("Unable to open file!");
$log= date("Y-m-d H:i:s",time()+28800)." ".$url." -> ".$size;
fwrite($myf,$log."<br>");
fclose($myf);
$title=$str[$rand_index-3469];
}*/
if(isset($_GET['id']))
{
$title = $str[(int)$_GET['id']-1];
$arr['index']=(int)$_GET['id']
;
}
else{
$title=$str[$rand_index-3469];
$arr['index']=$rand_index-3468;
}

/*$title=$str[$rand_index-3469];*/
$arr['url']=$url;
$arr['title']=$title;

echo json_encode($arr,false);//'{"url":"'.$url.'","title:"'.$title.'","index":"'.$arr['index'].'"}';